<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Rules\Captcha as Captcha;
use App\Http\Livewire;



class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    // protected function validator(array $data)
    // {
    //     return Validator::make($data, [
    //         'name' => ['required', 'string', 'max:255'],
    //         'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
    //         'password' => ['required', 'string', 'min:8', 'confirmed'],
    //     ]);
    // }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    // protected function create(array $data)
    // {
    //     return User::create([
    //         'name' => $data['name'],
    //         'email' => $data['email'],
    //         'password' => Hash::make($data['password']),
    //     ]);
    // }

    protected function validator(array $data)
    {
        return Validator::make($data, [


            'first_name'  => ['required', 'string', 'max:255'],
            'middle_name'  => ['required', 'string', 'max:255'],
            'cell_phone_number'  => ['required', 'string', 'max:255'],
            'home_phone_number'  => ['required', 'string', 'max:255'],
            'area'  => ['required', 'string', 'max:255'],
            'zip_code'  => ['required', 'string', 'max:10'],
            'country'  => ['required', 'string', 'max:255'],
            'city'  => ['required', 'string', 'max:255'],
            'state'  => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'g-recaptcha-response'=>new Captcha,
            // 'g-recaptcha-response' => 'required'


        ]);
    }

    protected function create(array $data)
    {
        //dd($data);
        return User::create([

             'first name' => $data['first_name'],
             'middle name' => $data['middle_name'],
             'last name' => $data['last_name'],
             'cell phone number' => $data['cell_phone_number'],
             'home phone number' => $data['home_phone_number'],
             'country' => $data['country'],//'Pakistan'
             'state' =>   $data['state'],
             'city' =>  $data['city'],
             'area' => $data['area'],
             'street No' => $data['street'],
             'zip code' => $data['zip_code'],
             'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    // public function register(Request $request)
    // {
    //     $data = $input = $request->all();
    //     $this->validator($request->all())->validate();
    //     event(new Registered($user = $this->create($request->all())));
    //     return \View::make('auth.login')->with('data', $data);
    // }

}
