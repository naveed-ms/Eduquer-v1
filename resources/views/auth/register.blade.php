@extends('layouts.app')

<style>
    .girlClass {
        width: 70vw;
        height: 40vh;
    }

    button {
        float: right;
        padding: 4px, 18px;
        font-size: 20px;
        border: none;
        background-color: 1d3270;
        color: white;
        /* color: white; */
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

    input {
        display: inline-block;
        border: thin solid #57d4f1;
        border-bottom: solid medium #999;
        color: #444;
        background-color: #white;
        padding: 10px 10px 10px 10px;
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
        font-size: smaller;
        color: #57d4f1;
        background-color: f9fdff;
        padding: 2px 5px 2px 5px;
    }

    .inner-container {

        padding-left: 10px;
        border: solid white 1px;
        border-radius: 5px;
        background-color: #f9fdff;
        margin-left: 10px;
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        /* padding-left: 50px; */
        padding-top: 30px;
        /* padding-right: 50px; */
        border-bottom: none;
        align-items: center;
        padding-right: 20px;
        /* height: 600px; */
        padding-bottom: :20px;

    }

    .register {
        /* padding-bottom: 140x; */
        font-weight: bolder;
        font-style: bolder;
        font-size: 50px;
        color: 1d3270;
        font-family: Segoe UI;
        padding-left: 0vw;
        /* overflow: hidden;
        animation: animate 1s; */
    }

    .fa-facebook {
        padding-top: 6px;
    }

    .fa-twitter {
        padding-top: 6px;
    }

    .fa-instagram {
        padding-top: 6px;
    }

    .fa-youtube-play {
        padding-top: 6px;
    }

    .section1 {
        padding-top: 60px;
        padding-bottom: 30px;
        padding-left: 40px;
    }

    .segment1 {
        float: right;
    }

    .segment2 {
        float: right;
        padding-bottom: 10px;
    }

    .segment3 {
        float: left;
        padding-top: 20px;
        padding-left: 40px;
    }

    .segment5 {
        /* float: right; */
        /* padding-right: 50px; */
        padding-top: 40px;
        /* padding-left:130px; */
    }

    .segment6 {
        /* float: right; */
        /* padding-right: 80px; */
        padding-top: 20px;
    }

    .container1 {
        width: 100%;
        /* background: #1d3270 !important; */
        background: rgb(31, 61, 121) !important;
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;

    }

</style>
{{-- @include('layouts.partials.old-header') --}}
@include('layouts.partials.header')
@section('content')

    <div class="container-fluid theme-bg-2 pt-20 pt-sm-0 pt-md-0 pt-lg-0">
        <div class="row justify-center">
            <div class="inner-container lg:ml-0 lg:mr-16 lg:mt-2 lg:mb-5 md:w-5/6 sm:w-5/6 sm:ml-8 md:mb-5 mb-4 w-5/6 md:ml-0">
                {{-- <div class="col-md-6" class="contents_data"> --}}
                <div class="register animate__animated animate__fadeInRightBig mb-2 reveal-text" class="form-control">
                    Register</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="row">
                        <div class="col-lg-3 col-sm-12 col-md-12 mb-4 pr-2">
                            <input id="first_name" placeholder=" " type="text"
                                class="form-control @error('first_name') is-invalid @enderror" name="first_name" required
                                value="{{ old('first_name') }}" autocomplete="name" autofocus required>
                            <label for="first name">{{ __('First Name') }}</label>
                            @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-3 mb-4 col-sm-12 col-md-12 pr-2">
                            <input id="middle_name" placeholder=" " type="text"
                                class="form-control @error('middle_name') is-invalid @enderror" name="middle_name" required
                                value="{{ old('middle_name') }}" autocomplete="name" autofocus required>
                            <label for="middle name">{{ __('Middle Name') }}</label>
                            @error('middle_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="col-lg-3 mb-4 col-sm-12 col-md-12 pr-2 ">
                            <input id="last_name" placeholder="" type="text"
                                class="form-control @error('last_name') is-invalid @enderror" name="last_name" required
                                value="{{ old('last_name') }}" autocomplete="name" autofocus required>
                            <label for="last name">{{ __('Last Name') }}</label>

                            @error('last_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    @livewire('country-state-city')
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="row">
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="area" placeholder=" " type="text"
                                        class="form-control @error('area') is-invalid @enderror" name="area"
                                        value="{{ old('area') }}" autocomplete="name" required autofocus required>
                                    <label for="area">{{ __('Area') }}</label>
                                    @error('area')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="street" placeholder=" " type="text"
                                        class="form-control @error('street') is-invalid @enderror" name="street"
                                        value="{{ old('street') }}" required autocomplete="name" autofocus required>
                                    <label for="street">{{ __('Street') }}</label>
                                    @error('street')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="zip_code" placeholder=" " type="text"
                                        class="form-control @error('zip_code') is-invalid @enderror" name="zip_code"
                                        value="{{ old('zip_code') }}" required autocomplete="name" autofocus required>
                                    <label for="zip code">{{ __('Zip Code') }}</label>
                                    @error('zip code')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="email" placeholder=" " type="email"
                                        class="form-control @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" required>
                                    <label for="email">{{ __('E-Mail Address') }}</label>
                                    @error('email')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="cell_phone_number" placeholder=" " type="text"
                                        class="form-control @error('cell_phone_number') is-invalid @enderror"
                                        name="cell_phone_number" required value="{{ old('cell_phone_number') }}"
                                        autofocus required>
                                    <label for="cell phone number">{{ __('Cell Phone Number') }}</label>
                                    @error('cell_phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="home_phone_number" placeholder=" " type="text"
                                        class="form-control @error('home_phone_number') is-invalid @enderror"
                                        name="home_phone_number" required value="{{ old('home_phone_number') }}"
                                        autofocus required>
                                    <label for="home phone number">{{ __('Home Phone Number') }}</label>
                                    @error('home_phone_number')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6 mb-4 pr-2">
                                    <input id="password" type="password"
                                        class="form-control @error('password') is-invalid @enderror" name="password"
                                        required autocomplete="new-password" required>
                                    <label class="rounded" for="password">{{ __('Password') }}</label>
                                    @error('password')
                                        <span class="invalid-feedb  ack" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                                <div class="col-lg-6 mb-4 pr-2 ">
                                    <input id="password-confirm" type="password" class="form-control"
                                        name="password_confirmation" required autocomplete="new-password" required>
                                    <label for="password-confirm">{{ __('Confirm Password') }}</label>
                                </div>
                            </div>
                            <div class="row pt-lg-3 pt-md-3">

                                <div class="col-lg-10 col-md-6 col-sm-6 mb-2 pr-2">
                                    <div class="g-recaptcha" data-sitekey="6LfTpEgaAAAAANcb93Rd22Vu2abcTI8B2SGCMgri"
                                        style="-moz-transform:scale(0.77); -ms-transform:scale(0.77); -o-transform:scale(0.77); -moz-transform-origin:0; -ms-transform-origin:0; -o-transform-origin:0; -webkit-transform:scale(0.77); transform:scale(0.77); -webkit-transform-origin:0 0; transform-origin:0; filter: progid:DXImageTransform.Microsoft.Matrix(M11=0.77,M12=0,M21=0,M22=0.77,SizingMethod='auto expand');">
                                    </div>
                                    @if ($errors->has('g-recaptcha-response'))
                                        <span class="invalid-feedback" style="display:block">
                                            <strong>{{ $errors->first('g-recaptcha-response') }}</strong>
                                        </span>
                                    @endif
                                </div>


                                <div class="col-lg-2 col-md-6 lg:pr-2 col-sm-6 py-4 py-lg-0 pr-2">

                                    <button type="submit" class="rounded pl-5 pr-5 text-white h-10"
                                        style="background-color: #1d327d;">
                                        <span>Submit</span>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-6  girlClass animate__animated animate__fadeInRightBig">
                            @svg('images/girl.svg')
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    {{-- <script type="text/javascript">
        var onloadCallback = function() {
          grecaptcha.render('html_element', {
            'sitekey' : '6LfTpEgaAAAAANcb93Rd22Vu2abcTI8B2SGCMgri'
          });
        };
      </script>
      <script src="https://www.google.com/recaptcha/api.js?onload=onloadCallback&render=explicit"
      async defer>
  </script> --}}
    {{-- @include('layouts.partials.footer1') --}}

    </div>
    {{-- @include('layouts.partials.footer1') --}}

    {{-- @endsection --}}
    {{-- @section('content') --}}
    @include('layouts.partials.footer1')
    <script>
        $(document).ready(function() {
            if ($(window).width() == 412) {
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3').toggleClass('h-20 h-auto');
                $(".right-nav").toggleClass('gap-x-8 gap-x-4');
                $(".login-btn").toggleClass('ml-16 ml-7');
                $(".section1").addClass('pl-5');
                $(".segment3").addClass('pl-0 pt-4 mt-3');
                $(".segment5").addClass('ml-4 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pl-4 pt-5');
                $(".inner-container").parent().addClass('pb-4');
            } else if ($(window).width() == 384) {
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3').toggleClass('h-20 h-auto');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-2');
                $(".segment3").addClass('pl-0 pt-4 mt-3');
                $(".segment5").addClass('ml-3 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pl-4 ml-3 pt-5');
                $(".inner-container").parent().addClass('pb-4');
            } else if ($(window).width() == 390) { // iPhone 12
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-4');
                $(".segment1").addClass('pl-10');
                $(".segment2").addClass('pl-10');
                $(".segment3").addClass('pl-10 pt-4 mt-3');
                $(".segment5").addClass('ml-3 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pt-5');
            } else if ($(window).width() == 428) { // iPhone 12 Pro Max
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-4');
                $(".segment1").addClass('pl-10');
                $(".segment2").addClass('pl-10');
                $(".segment3").addClass('pl-10 pt-4 mt-3');
                $(".segment5").addClass('ml-3 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pt-5');
            } else if ($(window).width() == 414) { // iPhone XR
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3').toggleClass('h-20 h-auto');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-4');
                $(".segment1").addClass('pl-10');
                $(".segment2").addClass('pl-10');
                $(".segment3").addClass('pl-10 pt-4 mt-3');
                $(".segment5").addClass('ml-3 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pt-5');
                $(".inner-container").parent().addClass('pb-4');
            } else if ($(window).width() == 375) { // iPhone X
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3').toggleClass('h-20 h-auto');;
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-0');
                $(".segment3").addClass('pl-0 pt-4 mt-3');
                $(".segment5").addClass('ml-3 pl-4');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-5');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-5');
                $(".footer-center-2").addClass('pt-1');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-11 py-3');
                $(".socialmedia-div").addClass('pl-10 pt-3');
                $(".section1").addClass('pl-4 ml-3 pt-5');
                $(".inner-container").parent().addClass('pb-4');
            } else if ($(window).width() == 1920) { // Desktop viewport 1
                $(".main-right-div").toggleClass('offset-lg-3 offset-lg-5');
                $(".section1").addClass('pl-5');
                $(".comp1-div").parent().addClass('pl-4');
                $(".section1-child").toggleClass('col-lg-6 col-lg-5');
                $(".copyright-main-div").toggleClass("lg:justify-around lg:justify-start");
                $(".copyright-div").addClass("lg:pl-20").toggleClass('lg:text-right lg:text-left');
                $(".socialmedia-div").addClass("offset-lg-6 lg:pl-56");
                $(".section1-child").toggleClass('col-lg-6 col-lg-5');
                $(".footer-center-2").toggleClass('justify-center justify-start');
                $(".footer-center-2").toggleClass('pl-4 lg:pl-20');
                $(".comp1-div").addClass('lg:pl-32');
                $(".comp2-div").addClass('lg:pl-32');
                $(".comp3-div").addClass('lg:pl-32');
                $(".comp4-div").addClass('lg:pl-32');
                $(".segment1").addClass('lg:absolute lg:pl-9');
                $(".segment2").addClass('lg:absolute lg:pl-9');
                $(".segment5").addClass('lg:pl-20');
            } else if ($(window).width() == 1024) { // iPad Pro
                $(".main-right-div").toggleClass('offset-lg-3 offset-lg-2');
                $(".login-btn").toggleClass('lg:ml-0 lg:ml-2');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-div").addClass("pl-4 ml-2");
                $(".section1-child").toggleClass('col-lg-6 col-lg-5');
                $(".footer-center-2").toggleClass('justify-center justify-start').removeClass('pl-4').addClass(
                    'lg:pl-12');
                $(".comp1-div").addClass('pl-3');
                $(".comp2-div").addClass('pl-3');
                $(".comp3-div").addClass('pl-3');
                $(".comp4-div").addClass('pl-3');
                $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
                $(".copyright-div").removeClass('pl-4').toggleClass('ml-2 ml-4');
                $(".socialmedia-div").addClass('offset-lg-6 lg:pl-4');
                $(".section1").addClass('ml-2');
                $(".segment5").addClass('lg:pl-12');
                $(".segment1").addClass('lg:pl-10');
                $(".segment2").addClass('lg:pl-10');
            } else if ($(window).width() == 768) {
                $(".main-right-div").toggleClass('offset-md-2 offset-md-0');
                $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
                $(".copyright-div").addClass('md:pl-10');
                $(".socialmedia-div").addClass('offset-md-3 md:pl-11');
                $(".login-btn").toggleClass('md:ml-0 md:ml-2');
                $(".section1").addClass('pl-4 ml-3');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
                $(".copyright-div").toggleClass('md:pl-10 md:pl-8');
                $(".footer-center-2").removeClass('pl-4').addClass('md:pl-10');
                $(".comp-address").toggleClass("col-md-6 col-md-12 md:pl-10");
                $(".comp2-div").addClass("md:pl-44");
                $(".comp4-div").addClass("md:pl-44");
                $(".comp1-div").addClass("md:pl-10");
                $(".comp3-div").addClass("md:pl-10");
            } else if ($(window).width() == 800) { // Samsung Galaxy Tab 10 (samsung pad)
                $(".main-right-div").toggleClass('offset-md-2 offset-md-0');
                $(".section1").addClass('pl-4 ml-3');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
                $(".copyright-div").addClass("md:pl-9");
                $(".socialmedia-div").addClass("offset-md-3 md:pl-14");
                $(".comp-address").toggleClass("col-md-6 col-md-12 md:pl-10");
                $(".comp2-div").addClass("md:pl-48");
                $(".comp4-div").addClass("md:pl-48");
                $(".comp1-div").addClass("md:pl-10");
                $(".comp3-div").addClass("md:pl-10");
                $(".footer-center-2").removeClass('pl-4').addClass('md:pl-10');
            } else if ($(window).width() == 1280) { // MS Surface
                $(".footer-center-2").addClass('lg:pl-10').toggleClass('justify-center justify-start');
                $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
                $(".segment1").addClass('absolute lg:pl-4');
                $(".segment2").addClass('absolute lg:pl-4');
                $(".segment5").addClass('lg:pl-14');
                $(".copyright-div").addClass('text-left lg:pl-14');
                $(".socialmedia-div").addClass('offset-lg-6 lg:pl-24');
                $(".comp1-div").addClass('lg:pl-16');
                $(".comp2-div").addClass('lg:pl-16');
                $(".comp3-div").addClass('lg:pl-16');
                $(".comp4-div").addClass('lg:pl-16');
                $(".segment1").addClass('lg:pl-14');
                $(".segment2").addClass('lg:pl-14');
            }
        });

    </script>
@endsection
