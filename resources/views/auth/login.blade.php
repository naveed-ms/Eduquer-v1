@extends('layouts.app')

@section('scripts')
    <script>
        $('#form-id').find('input').val('');

    </script>
@endsection

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"> --}}

<style>
    /* =============================================================Login-Page-desktop-start=============================================================== */

    .font1{
        font-size:14px;

    }.complete-col {
        background: #effaff;
    }

    .login-btn2 {
        border-radius: 18px;
        font-size: 14px;
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
        display: inline-block;
        border: thin solid #57d4f1;
        border-bottom: solid medium #999;
        color: #444;
        background-color: #white;
        padding: 10px 10px 10px 10px;
    }

    input:focus {
        border: thin solid white;
        background-color: white;
    }

    label {
        color: #999;
        position: absolute;
        pointer-events: none;
        top: 10px;
        padding-left: 10px;
        transition: 0.4s;
    }

    input:focus~label,
    input:valid~label {
        top: -20px;
        left: 15px;
        font-size: smaller;
        color: #57d4f1;
        background-color: f9fdff;
        padding: 2px 5px 2px 5px;
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

    /* =============================================================== header-desktop========================================================================== */
    html {
        font-size: 62.2%;
    }

    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        font-size: 17px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #effaff;
        color: #1d3270;

    }

    .logo {
        font-size: 0px;
        padding-top: 5rem;
        margin: 11px;
        margin-left: 2vw !important;
    }

    .logo a {
        text-decoration: none;
        color: #35ccee;
        margin-left: 20px;

    }

    .navbar-links ul {
        display: flex;
        font-size: 2rem;
        margin-right: 4rem;
    }

    .navbar-links ul li {
        list-style: none;
    }

    .navbar-links ul li a {
        text-decoration: none;
        color: #35ccee;
        padding: 5px 25px 5px 25px;
        display: block;
        font-size: 2rem;
    }

    .navbar-links ul li a:hover {
        background: transparent;
        color: #000000;
    }

    .togglebtn {
        position: absolute;
        top: 78px;
        right: 78vw;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 2.2rem;
        height: 23px;
    }

    .line {
        height: 3px;
        width: 100%;
        background: #1d3270;
        border-radius: 13px;
    }

    .login-btn1 {
        font-size: 2rem;
        display: block !important;
        width: 7rem;
    }

    .login-btn {
        display: none !important;
    }

    .login-btn {
        display: block;
        margin-right: 11vh;
    }


    /* ===================================================footer-desktop================================================================================================ */

    .footer-desktop {
        display: block !important;
    }

    .footer-mobile {
        display: none !important;

    }

    .desktop-section1 {
        padding-top: 10vh;
        padding-down: 20vh;
        font-size: 3vw;
        padding-left: 8vw;
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .desktop-started-button1 {
        width: 17.1vw;
        font-size: 2.2vw;
        padding-top: 1.1rem;
        padding-bottom: 1.1rem;
        margin-left: 10vw;
        margin-bottom: 3.2rem;
        border-radius: 18px;
    }


    .segment5 {
        display: block;
        padding-bottom: 17vh !important;
        font-size: 1.5vw !important;
        padding-top: 11vh !important;
        padding-left: 8vw !important;

    }

    .desktop-segment6 {
        padding-bottom: 17vh;
        font-size: 1.5vw !important;
        padding-top: 11vh;
        padding-left: 3vw;
    }

    .mobile-copyright {
        display: none !important;

    }

    .copy-right-one {
        display: block;
        padding-left: 9vw;
        font-size: 1.4vw;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .copy-right-two {
        padding-left: 46vw !important;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .container1 {
        width: 100%;
        background: rgb(31, 61, 121) !important;
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
    }

    .desktop-copyright {
        display: block !important;
    }


    /*=========================================================== footer-desktop-end========================================================
       /* =============================================================== header-mobile========================================================================== */


    @media only screen and (max-width: 600px) {
        .login-btn {
            font-size: 1.2rem;
            display: block !important;
            width: 7rem;
            top: 14vh;
            display: block !important;
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
        }

        .navbar-links.active {
            display: flex;
        }
    }

    /* =============================================================== header-mobile-end ========================================================================== */


    /* ===================================================footer-Mobile start ================================================== */

    @media only screen and (max-width:600px) {

        .copy-right-two {
            display: none !important;
        }

        .segment3 {
            justify-content: center !important;
        }

        .mobile-copyright1 {
            font-size: 0.8rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;

            padding-top: 2.4rem;
            text-align: center;
            padding-bottom: 10vh;
            justify-content: center;
        }

        .section1 {
            margin-bottom: 2rem !important;
            justify-content: center !important;
            text-align: center;
            padding-top: 4rem;
            font-size: 2rem !important;
            font-family: Segoe UI;
                   }

        .started-button1 {
            width: 12.1rem;
            font-size: 1.2rem;
            padding-top: 1.1rem;
            padding-bottom: 1.1rem;
            border-radius: 18px;
            margin: 0 auto !important;
            display: block;
        }

        .segment5 {
            display: none;
        }

        .desktop-segment6 {
            display: none;
        }

        .footer-mobile {
            display: block !important;

        }

        .footer-desktop {
            display: none !important;
        }

        .Mississauga {
            font-size: 1.7rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding-left: 7vw;
            padding-right: 6vw;
            padding-top: 2.4rem;
            text-align: center
        }

        .phone {
            font-size: 1.7rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding-left: 7vw;
            padding-right: 6vw;
            padding-top: 2.4rem;
            text-align: center
        }

        .print {
            font-size: 1.7rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding-left: 7vw;
            padding-right: 6vw;
            padding-top: 2.4rem;
            text-align: center
        }

        .email3 {
            font-size: 1.7rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;
            padding-left: 7vw;
            padding-right: 6vw;
            padding-top: 2.4rem;
            text-align: center
        }

        .social-media {
            font-size: 1.7rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: white;

            padding-top: 2.4rem;
            text-align: center;
            padding-bottom: 10vh;
        }
        .mobile-copyright {
        display: block !important;
    }

    .desktop-copyright {
        display: none !important;
    }
    }




    /* =================================================footer-Mobile end ================================================== */


</style>

@section('content')
    @include('layouts.partials.header')
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
                    <div class="col-md-8 col-sm-4 mt-4 mb-4">
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
                    <div class="col-md-8 mt-4 col-sm-4">
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
                        class="col-lg-7 col-11 col-md-7  mt-4 ml-3 mb-1 pl-5 pr-5 login-btn2 text-white h-10"
                        style="background-color: #1d327d;">
                        <span>Login</span>
                    </button>
                    <div>
                        @if (Route::has('password.request'))
                            <a class="btn btn-link offset-lg-5 offset-md-5 offset-lg-2" style="color:57d4f1;Segoe UI"
                                href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        @endif
                    </div>
                </form>
            </div>
        </div>
        @include('layouts.partials.footer2')

    @endsection
