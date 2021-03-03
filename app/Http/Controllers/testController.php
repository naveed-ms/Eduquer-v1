<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\test;

class testController extends Controller
{

    public function index() {
        return view('test');
    }

    public function save_basic_info(Request $request)
    {
        var_dump($_POST);
        var_dump($_FILES);
        $transcriptName = time().'-'.$_FILES['transcript']['name'];
        $request->file('transcript')->move(public_path('uploads/Educational-Qualification'), $transcriptName);
        // $user_id = auth()->user()->id;
        // $data_array = [
        //     'grade' => $request->input('grade')
        // ];
        // test::updateOrCreate(['user_id' => $user_id], $data_array);

        // return view('english_exam');
    }

    public function temp() {
        return view('temp');
    }
}
