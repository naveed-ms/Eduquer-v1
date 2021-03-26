@extends('layouts.app')
<style>
    /* =============================================================Login-Page-desktop-start=============================================================== */
.
   .btn-forget-pswd{
margin-left: 4vw;
    }    .forget-text{
    /* padding-left: 23vw !important; */
}    .font1{
        font-size:14px;

    }.complete-col {
        background: #effaff;
    }

    .login-btn2 {
        /* border-radius: 18px; */
        font-size: 20px;
    }

    .sec1 {
        background-color: #eef9fe;
        width: 80vw !important;
        height: 50vh !important;
        padding-left: 3vw;
        padding-bottom: 4vh;
    }

    button {
        border: none;
        padding-top: 20px;
        width: 280px;
    }

    button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    button span:after {
        content: '\00bb';
        position: absolute;
        opacity: 0;
        top: 0;
        right: -20px;
        transition: 1.0s;
    }

    button:hover span {
        padding-right: 25px;
    }

    button:hover span:after {
        opacity: 1;
        right: 0;
    }

    button:hover {
        padding-right: 25px;
        background-color: #57d4f1 !important;
    }

    .sec2 {
        border: white solid 1px;
        padding-top: 2vw;
        padding-left: 3vw;
        padding-right: 2vw;
        width: 100px;
        background-color: f9fdff;
        border-bottom: none;
        border-radius: 5px;
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        padding-bottom: 4vh;
    }

    .register {

        font-weight: bolder;
        font-family: Segoe UI;
        color: #1d3270;
        font-size: 35px;
    }


    input {
        font-size: 25px !important;
        display: inline-block;
        border: thin solid #57d4f1;
        border-bottom: solid medium #999;
        color: #444;
        background-color: #white;

        /* padding: 10px 10px 10px 10px; */


    }

    input:focus {
        border: thin solid #white;
        /* border-bottom: solid medium #32cd32; */
        background-color: #white;

    }

    label {
        color: #999;
        position: absolute;
        pointer-events: none;
        /* left: 10px; */
        top: 10px;
        padding-left: 10px;
        transition: 0.4s;
    }

    input:focus~label,
    input:valid~label {
        top: -20px;
        left: 15px;
        font-size: large;
        color: #57d4f1;
        background-color: f9fdff;
        /* padding: 2px 5px 2px 5px; */
        /* font-size: 25px !important; */

    }
    button {

        font-size: 20px;
        background-color: 1d3270;
        padding: 7px 12px;
        color: white;
        font-style: bold;
        border-radius: 7px;
    }

    .button-hover {
        color: white;
        background-color: 57d4f1;
        offset-position: initial;
    }
    .login-btn{
        display: none !important;
    }

       @media only screen and (max-width: 600px) {
        .navbar-brand{

        }
        .logo {
            font-size: 0px;
            padding-left: 32vw;
                    }

        .login-btn {
            display: none !important;
        }

        .login-btn1 {
            display: none !important;
        }

        .togglebtn {
            display: flex;
        }

        .navbar-links {
            display: none;
            width: 100%;
        }

        .navbar {
            flex-direction: column;
            align-items: flex-start;
        }

        .navbar-links ul {
            width: 100%;
            flex-direction: column;
        }
        .navbar-links ul li {
            text-align: center;
        }
        .navbar-links ul li a {
            padding: 16px;
            font-size: 2rem;
            font-style: bold;
            padding-left: 70px !important;
        }
        .navbar-links.active {
            display: flex;
        }
    }
</style>
@include('layouts.partials.header')
@section('content')
    <div class="container-fluid complete-col pt-12  pt-sm-0">
        <div class="row theme-bg-2 ">
            <div class="col-lg-6 col-md-12 lg:pt-16 lg:pb-12 md:pb-12 md:pt-12 mb-5">
                @svg('images/Body-2.svg')
            </div>
            <div class="col-lg-5  sec2   mb-5">
                <div class="offset-lg-1 mb-3 offset-md-2">
                    <div class="register animate__animated animate__fadeInRightBig ">Login</div>
                    <div style="font-size: 14px;">
                        Does not have an account yet?
                    <a style="color: 57d4f1;font-family:Segoe UI" href="{{ url('register') }}">Sign Up</a>
                </div>
                    </div>

                <form method="POST" action="{{ route('login') }} " class="offset-lg-1 offset-md-2">
                    @csrf
                    <div class="col-md-8 col-sm-4 mt-5 mb-5 ">
                        <input id="email" type="email" placeholder=""
                            class="form-control h-14 @error('email') is-invalid @enderror" name="email"
                            value="{{ isset($data) ? $data['email'] : old('email') }}" required autofocus>
                        <label for="email" class ="font1">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-8 mt-4 col-sm-4 mt-5 mb-3">
                        <input id="password" placeholder="" type="password"
                            class="form-control @error('password') is-invalid @enderror h-14" name="password" value="" required>
                        <label for="password" class="font1">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <button type="submit"
                        class="col-lg-7 col-11 col-md-7  mt-4 ml-3 mb-1 pl-5 pr-5 login-btn2  rounded-pill text-white h-20"
                        style="background-color: #1d327d;">
                        <span>Login</span>
                    </button>
                    @if (Route::has('password.request'))
                    <div class="col-md-12  col-lg-12 mt-4 col-sm-12 mt-5 mb-3 float-right ">
                        <a class="btn btn-link  " style="color:57d4f1;Segoe UI;font-size:1.5rem"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>

                    <div>
                </form>
            </div>
        </div>
    </div>
        @include('layouts.partials.footer2')

    @endsection
