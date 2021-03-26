<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\basic_info;
use App\english_exam_type;
use App\educational_qualification;
use App\work_experience;
use App\program;
use App\program_data;
use App\canadian_city;
use App\user;
use Validator;
// use App\Http\Controllers\MailController as MailController;
use App\Mail\SendMail;
use Mail;

class HomeController extends Controller
{
    private $countries;
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->countries = $this->get_countries(); // for non-AJAX calls, passing directly to views
        $this->middleware(['auth','verified']);
    }

    // For AJAX calls
    public function get_countries() {
        return get_countries(); // helper function
    }

    /**
     * Shows the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $tmp_basic_info_data = basic_info::where('user_id', auth()->user()->id)->get();
        $basic_info_data = array();

        if (!$tmp_basic_info_data->isEmpty()) {
            foreach ($tmp_basic_info_data as $b_info) {
                $basic_info_data['date_of_birth'] = $b_info->date_of_birth;
                $basic_info_data['country_of_birth'] = $b_info->country_of_birth;
                $basic_info_data['nationality'] = $b_info->nationality;
                $basic_info_data['country_of_education'] = $b_info->country_of_education;
                $basic_info_data['highest_education'] = $b_info->highest_education;
                $basic_info_data['grade'] = $b_info->grade;
                $basic_info_data['study_visa'] = $b_info->study_visa;
            }
        }
        // return view('home')->with('countries', $this->countries)->with('student', $basic_info_data);
        $user_data = json_decode(user::where('id', auth()->user()->id)->get()[0]);
        return view('home')->with('countries', $this->countries)->with('student', $basic_info_data)->with('user_data', $user_data);
    }

    public function english_exam(Request $request)
    {
        $user_id = auth()->user()->id;
        $tmp_english_exam_data = english_exam_type::where('user_id', $user_id)->get();
        $english_exam_data = array();

        if (!$tmp_english_exam_data->isEmpty()) {
            foreach ($tmp_english_exam_data as $ee_data) {
                $english_exam_data['ielts_reading'] = $ee_data->ielts_reading;
                $english_exam_data['ielts_listening'] = $ee_data->ielts_listening;
                $english_exam_data['ielts_writing'] = $ee_data->ielts_writing;
                $english_exam_data['ielts_speaking'] = $ee_data->ielts_speaking;

                $english_exam_data['gmat_verbal_score'] = $ee_data->gmat_verbal_score;
                $english_exam_data['gmat_verbal_rank'] = $ee_data->gmat_verbal_rank;
                $english_exam_data['gmat_quo_score'] = $ee_data->gmat_quo_score;
                $english_exam_data['gmat_quo_rank'] = $ee_data->gmat_quo_rank;
                $english_exam_data['gmat_writing_score'] = $ee_data->gmat_writing_score;
                $english_exam_data['gmat_writing_rank'] = $ee_data->gmat_writing_rank;
                $english_exam_data['gmat_total_score'] = $ee_data->gmat_total_score;
                $english_exam_data['gmat_total_rank'] = $ee_data->gmat_total_rank;

                $english_exam_data['toefl_reading'] = $ee_data->toefl_reading;
                $english_exam_data['toefl_listening'] = $ee_data->toefl_listening;
                $english_exam_data['toefl_writing'] = $ee_data->toefl_writing;
                $english_exam_data['toefl_speaking'] = $ee_data->toefl_speaking;
            }
        }
        if ($request->isMethod('post')) {
            $request->validate([
                'date_of_birth' => 'required',
                'country_of_birth' => 'required|not_in:0',
                'nationality' => 'required|not_in:0',
                'country_of_education' => 'required|not_in:0',
                'highest_education' => 'required|not_in:0',
                'grade' => ['required', 'max:3'],
                'study_visa' => 'required|in:Yes,No'
            ]);
            $data = [
                'date_of_birth' => $request->input('date_of_birth'),
                'user_id' => $user_id,
                'country_of_birth' => $request->input('country_of_birth'),
                'nationality' => $request->input('nationality'),
                'country_of_education' => $request->input('country_of_education'),
                'highest_education' => $request->input('highest_education'),
                'grade' => $request->input('grade'),
                'study_visa' => $request->input('study_visa')
            ];
            basic_info::updateOrCreate(['user_id' => $user_id], $data);
        }
        $user_data = json_decode(user::where('id', auth()->user()->id)->get()[0]);
        return view('english_exam')->with('exam_data', $english_exam_data)->with('user_data', $user_data);
    }

    public function educational_qualification(Request $request)
    {
        $user_id = auth()->user()->id;
        if ($request->isMethod('post')) {
            $eetype_collection = collect([
                $request->input('ielts_cbox'),
                $request->input('gmat_cbox'),
                $request->input('toefl_cbox')
            ]);
            $data = [
                'user_id' => $user_id,
                'exam_type' => $eetype_collection->implode(','),
                'ielts_reading' => $request->input('ielts_reading'),
                'ielts_listening' => $request->input('ielts_listening'),
                'ielts_writing' => $request->input('ielts_writing'),
                'ielts_speaking' => $request->input('ielts_speaking'),

                'gmat_verbal_score' => $request->input('gmat_verbal_score'),
                'gmat_verbal_rank' => $request->input('gmat_verbal_rank'),
                'gmat_quo_score' => $request->input('gmat_quo_score'),
                'gmat_quo_rank' => $request->input('gmat_quo_rank'),
                'gmat_writing_score' => $request->input('gmat_writing_score'),
                'gmat_writing_rank' => $request->input('gmat_writing_rank'),
                'gmat_total_score' => $request->input('gmat_total_score'),
                'gmat_total_rank' => $request->input('gmat_total_rank'),

                'toefl_reading' => $request->input('toefl_reading'),
                'toefl_listening' => $request->input('toefl_listening'),
                'toefl_writing' => $request->input('toefl_writing'),
                'toefl_speaking' => $request->input('toefl_speaking')
            ];
            english_exam_type::updateOrCreate(['user_id' => $user_id], $data);
        }
        $edu_qual_data_json = educational_qualification::where('user_id', $user_id)->orderByDesc('created_at')->get();
        $edu_qual_data = json_decode($edu_qual_data_json);
        // return view('educational_qualification')->with('edu_qual_data', $edu_qual_data);
        $user_data = json_decode(user::where('id', auth()->user()->id)->get()[0]);
        return view('e_qual')->with('edu_qual_data', $edu_qual_data)->with('user_data', $user_data);
    }

    public function work_experience(Request $request)
    {
        // AJAX POST:
        $user_id = auth()->user()->id;
        if ($request->isMethod('post')) {
            if ($request->input('transcript')!=="") {
                $transcriptName = time().'-'.$_FILES['transcript']['name'];
                $request->file('transcript')->move(public_path('uploads/Educational-Qualification'), $transcriptName);
                // $request->file('transcript')->storeAs('public/uploads/Educational-Qualification', $transcriptName);
            } else {
                $transcriptName = "";
            }

            educational_qualification::create([
                'user_id' => $user_id,
                'degree_name' => $request->input('degree_name'),
                'no_of_years' => $request->input('no_of_years'),
                'school_name' => $request->input('school_name'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'grade' => $request->input('grade'),
                'transcript' => $transcriptName
            ]);
            return back();
            // return $request->post();
            // return Response()->json(["message" => "success"]);

        } else {
            $tmp_work_exp_json = work_experience::where('user_id', $user_id)->orderByDesc('created_at')->get();
            $work_exp_data = json_decode($tmp_work_exp_json);
            $user_data = json_decode(user::where('id', auth()->user()->id)->get()[0]);
            return view('work_experience')->with('work_exp_data', $work_exp_data)->with('user_data', $user_data);
    }
    }
    public function program(Request $request)
    {
        $user_id = auth()->user()->id;

        $tmp_program_user_data = program::where('user_id', $user_id)->get();
        $program_user_data = array();
        if (!$tmp_program_user_data->isEmpty()) {
            foreach ($tmp_program_user_data as $p_user_data) {
                // $program_user_data['canadian_city'] = $p_user_data->city;
                $program_user_data['country_of_choice'] = $p_user_data->country_of_choice;
                $program_user_data['university'] = $p_user_data->university;
                $program_user_data['program_name'] = $p_user_data->program;
                $program_user_data['intake_program'] = $p_user_data->intake_program;
            }
        }

        // Canadian cities fetching disabled due to new requirements
        // $tmp_canadian_cities = canadian_city::select('city_name')->get();
        // $canadian_cities = array();
        // if (!$tmp_canadian_cities->isEmpty()){
        //     foreach ($tmp_canadian_cities as $c_city) {
        //         array_push($canadian_cities, $c_city->city_name);
        //     }
        // }
        $tmp_program_names = program_data::select('program_name')->get();
        $program_names = array();
        if (!$tmp_program_names->isEmpty()){
            foreach ($tmp_program_names as $p_name) {
                array_push($program_names, $p_name->program_name);
            }
        }
        // AJAX POST:
        if ($request->isMethod('post')) {

            work_experience::create([
                'user_id' => $user_id,
                'company_name' => $request->input('company_name'),
                'country' => $request->input('country'),
                'state' => $request->input('state'),
                'city' => $request->input('city'),
                'start_date' => $request->input('start_date'),
                'end_date' => $request->input('end_date'),
                'title' => $request->input('title'),
                'job_description' => $request->input('job_description')
            ]);
            return back();
        } else {
            $user_data = json_decode(user::where('id', auth()->user()->id)->get()[0]);
            return view('program', compact(/*'canadian_cities',*/'program_names', 'program_user_data'))->with('user_data', $user_data);
        }
    }

    public function end(Request $request)
    {
        if ($request->isMethod('post')) {
            $request->validate([
                // 'canadian_city' => 'required|not_in:0',
                'country_of_choice' => 'required|not_in:0',
                'university' => 'required|not_in:0',
                'program_name' => 'required|not_in:0',
                'intake_program' => 'required|not_in:0'
            ]);
            $user_id = auth()->user()->id;
            $data = [
                'user_id' => $user_id,
                // 'city' => 'test canadian city', //$request->input('canadian_city'),
                'country_of_choice' => $request->input('country_of_choice'),
                'university' => $request->input('university'),
                'program' => $request->input('program_name'),
                'intake_program' => $request->input('intake_program'),
            ];
            program::updateOrCreate(['user_id' => $user_id], $data);
            // for the time being (testing):
            // if (auth()->user()->email === 'mansoor.a.jamali@gmail.com' || auth()->user()->email === 'mansoor@zinam.com') {
            //     $mail_data = array('name' => 'user', 'message'=>'mail message');
            //     Mail::to(auth()->user()->email)->send(new SendMail($mail_data));
            // }
        }
        return view('end');
    }

}
