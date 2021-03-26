@extends('layouts.app')

<style>


.desktop-copyright {
        display: block !important;
    }
    .mobile-copyright {
display: none !important;
}
.mobile-copyright1{
    display: none !important;
}
    /* /================================ footer Mobile view start=========================================== */


@media screen and (max-width:600px){
    .started-button1 {
    width: 12.1rem;
    font-size: 1.2rem;
    padding-top: 2rem;
    padding-bottom:1.1rem;
    border-radius: 18px;
    margin: 0 auto !important;
    display: block !important;
    padding-top: 1.1rem !important;

}
}

    /* ================================footer Mobile view End=========================================== */



     /* ================================footer desktop view start=========================================== */

     .footer-desktop {
        display: block !important ;
    }

    .footer-mobile {
        display: none !important;

    }

    .desktop-section1 {
        padding-top: 10vh;
        padding-down: 20vh;
        font-size: 3vw;
        padding-left: 6vw;
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
        display: block !important;
        padding-bottom: 17vh !important;
        font-size: 1.5vw !important;
        padding-top: 11vh !important;
        padding-left: 6vw !important;
        /* padding-right: 4rem !important; */


    }

    .desktop-segment6 {
        padding-bottom: 17vh;
        font-size: 1.5vw !important;
        padding-top: 11vh;
        padding-left: 13vw !important;
    }

    .mobile-copyright {
        display: none !important;

    }

    .copy-right-one {
        margin-top: 2rem;
    padding-left: 6vw;
    font-size: 1.4vw;
    margin-bottom: 2rem;
    }

    .copy-right-two {
        margin-right: 2vw !important;

            margin-top: 2rem !important;

    margin-bottom: 2rem !important;
    }

    .container1 {
        width: 100%;
        background: rgb(31, 61, 121) !important;
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
    }

    .desktop-copyright {
        display: block !important;
    }


          /* ================================footer desktop view end=========================================== */



/* ==============================registration page general style======================================== */
    .font1 {
        font-size: 14px;
    }
    .girlClass {
        padding-left: 5vw;
        padding-right: 5vw;
    }

    /* ======================================button======================================== */
    button {
        padding: 4px, 18px;
        font-size: 20px;
        border: none;
        background-color: 1d3270;
        color: white;
        padding: 8px 8px;
    }

    button span {
        cursor: pointer;
        display: inline-block;
        position: relative;
        transition: 0.5s;
    }

    .row {
        margin: 0px !important;
        padding: 0px !important;
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

    /* ======================================button-End=========================================================== */
/* =================================================label+input-start================================================================================== */

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


    /* =================================================label+input-end================================================================================== */

body{
    background: rgb(212,242,255) ;
background: linear-gradient(0deg, rgba(212,242,255,1) 0%, rgba(239,250,255,1) 19%) !important;
}
main{
    background: rgb(212,242,255);
background: linear-gradient(0deg, rgba(212,242,255,1) 0%, rgba(239,250,255,1) 19%);
}
 .container{
    background: rgb(212,242,255);
background: linear-gradient(0deg, rgba(212,242,255,1) 0%, rgba(239,250,255,1) 19%) !important;
}
    .container2 {
        border: solid white 1px;
        border-radius: 5px;
        background-color: #f9fdff;
        margin-left: 10px;
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        padding-left: 6vw;
        /* padding-top: 30px; */
        /* padding-right: 50px; */
        border-bottom: none;
        align-items: center;
        padding-right: 20px;
        /* height: 100vh;; */
        padding-bottom: :20px;
        /* margin-top:11vh; */



    }

    .register {

        /* padding-bottom: 140x; */
        font-weight: bolder;
        font-style: bolder;
        font-size: 35px;
        color: 1d3270;
        font-family: Segoe UI;
        margin-bottom: 12vh;
    }

    .g-recaptcha {
        transform: scale(0.77);
        -webkit-transform: scal(0.77);
        transform-origin: 0 0;
        -webkit-transform-origin: 0 0;
    }
/* ==============================registration page general style======================================== */

</style>
@include('layouts.partials.header')

@section('content')
    <div class="container">
        <div class="container2 ">
            {{-- <div class="col-md-6" class="contents_data"> --}}
            <div class="register mb-3" >
                Register
            </div>
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div class="row">
                    <div class="col-lg-3 mb-4 pr-4 mt-4">
                        <input id="first_name" placeholder=" " type="text"
                            class="form-control @error('first_name') is-invalid @enderror h-14 rounded" name="first_name"
                            required value="{{ old('first_name') }}" autocomplete="name" autofocus>
                        <label class="font1" class="font1" for="first name"
                            class="font1">{{ __('First Name') }} </label>
                        @error('first_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-3 mb-4 pr-4 mt-4">
                        <input id="middle_name" placeholder=" " type="text"
                            class="form-control @error('middle_name') is-invalid @enderror h-14 " name="middle_name"
                            required value="{{ old('middle_name') }}" autocomplete="name" autofocus>
                        <label class="font1" for="middle name">{{ __('Middle Name') }}</label>
                        @error('middle_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-lg-3 mb-4 pr-4 mt-4">
                        <input id="last_name" placeholder="" type="text"
                            class="form-control @error('last_name') is-invalid @enderror h-14 " name="last_name" required
                            value="{{ old('last_name') }}" autocomplete="name" autofocus>
                        <label class="font1"  for="last name">{{ __('Last Name') }}</label>
                        @error('last_name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                </div>
                @livewire('country-state-city')
                <div class="row">
                    <div class="col-lg-6 ">
                        <div class="row">
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="area" placeholder=" " type="text"
                                    class="form-control @error('area') is-invalid @enderror h-14 " name="area"
                                    value="{{ old('area') }}" autocomplete="name" required autofocus>
                                <label class="font1"  for="area">{{ __('Address Line 1') }}</label>
                                @error('area')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="street" placeholder=" " type="text"
                                    class="form-control @error('street') is-invalid @enderror h-14 " name="street"
                                    value="{{ old('street') }}" required autocomplete="name" autofocus>
                                <label class="font1"  for="street">{{ __('Address Line 2') }}</label>
                                @error('street')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="zip_code" placeholder=" " type="text"
                                    class="form-control @error('zip_code') is-invalid @enderror h-14 " name="zip_code"
                                    value="{{ old('zip_code') }}" required autocomplete="name" autofocus>
                                <label  class="font1"
                                    for="zip code">{{ __('Zip Code / Postal Code') }}</label>
                                @error('zip code')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="email" placeholder=" " type="email"
                                    class="form-control @error('email') is-invalid @enderror h-14 " name="email"
                                    value="{{ old('email') }}" required autocomplete="email">
                                <label class="font1"
                                    for="email">{{ __('E-Mail Address') }}</label>
                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="cell_phone_number" placeholder=" " type="text"
                                    class="form-control @error('cell_phone_number') is-invalid @enderror h-14 "
                                    name="cell_phone_number" required value="{{ old('cell_phone_number') }}" autofocus>
                                <label class="font1"
                                    for="cell phone number">{{ __('Cell Phone Number') }}</label>
                                @error('cell_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="home_phone_number" placeholder=" " type="text"
                                    class="form-control @error('home_phone_number') is-invalid @enderror h-14 "
                                    name="home_phone_number" required value="{{ old('home_phone_number') }}" autofocus>
                                <label class="font1"
                                    for="home phone number">{{ __('Home Phone Number') }}</label>
                                @error('home_phone_number')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 mb-4 pr-4 mt-4">
                                <input id="password" type="password"
                                    class="form-control @error('password') is-invalid @enderror h-14 " name="password"
                                    required autocomplete="new-password">
                                <label class="font1"  class="rounded"
                                    for="password">{{ __('Password') }}</label>
                                @error('password')
                                    <span class="invalid-feedb  ack" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            <div class="col-lg-6 mb-4 pr-4 mt-4 ">
                                <input id="password-confirm" type="password" class="form-control h-14"
                                    name="password_confirmation" required autocomplete="new-password">
                                <label class="font1"
                                    for="password-confirm">{{ __('Confirm Password') }}</label>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6 col-md-6 c0l-sm-12 mb-2 mt-4 ">
                                <div class="g-recaptcha" data-sitekey="{{ env('CAPTCHA_KEY') }}"></div>
                                @if ($errors->has('g-recaptcha-response'))
                                    <span class="invalid-feedback" style="display:block">
                                        <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <div class="col-lg-6 col-md-6 col-sm-6  py-2 py-lg-0 pr-4 mt-4">
                                <button type="submit" class="rounded-pill login-btn2  ml-3 mb-1 pl-5 pr-5 login-btn2  rounded-pill text-white h-20 float-right"
                                style="background-color: #1d327d;">
                                    <span class="text-2xl">Submit</span>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 girlClass">
                        @svg('images/girl.svg')
                    </div>
                </div>
            </form>
        </div>

    </div>

    </div>


    </div>
    @include('layouts.partials.footer2')


    </div>

    @endsection


{{-- <img src="/images/girl.svg" alt="Girl in a jacket" class="girlClass"> --}}
{{-- {!! file_get_contents('images/girl.svg') !!} --}}
{{-- {!! file_get_contents('images/backgroung.svg') !!} --}}
{{-- <img src="{{ asset('images/girl.svg') }}" alt="" title=""> --}}
{{-- <div>
                @svg('images/girl.svg');
            </div> --}}
