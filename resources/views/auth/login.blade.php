@extends('layouts.app')

@section('scripts')
    <script>
        $('#form-id').find('input').val('');
    </script>
@endsection

{{-- <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet"> --}}

<style>
    .container {
        /* background-color:burlywood; */
    }

    .sec1 {
        /* background: #1d3270; */
        background-color: eef9fe;
        /* margin: 0px; */
        width: 80vw !important;
        height: 50vh !important;
        padding-left: 3vw;
        /* padding-top: 3vh; */
        /* margin-top: 10vh; */
        /* float: right !important; */
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

        width:100px;
        /* align-items: center; */
        background-color: f9fdff;
        border-bottom: none;
        border-radius: 5px;
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);

    }

    .register {
        /* padding-bottom: 140x; */
        font-weight: bolder;
        font-family: Segoe UI;
        color: #1d3270;
        font-size: 35px;
        /* overflow: hidden;
    animation: animate 1s  ; */
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
        /* border-bottom: solid medium #32cd32; */
        background-color: white;
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

    .theme-bg-2 {
        background-color: #effaff;
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
        background-image: url("images/footer1-bg.png") !important;
        background: rgb(31, 61, 121);
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%);
        background-repeat: round;

    }

</style>


@section('content')

    @include('layouts.partials.header')
    <div class="container-fluid theme-bg-2 pt-12  pt-sm-0">
        <div class="row theme-bg-2 ">
            <div
                class="col-lg-6 col-md-12 col-sm-12 sec1 lg:pt- lg:mt-32 lg:pl-13 ml-3 md:pl-13 pl-13 animate__animated animate__fadeInRightBig ">
                @svg('images/Body-2.svg')
            </div>
            <div class="col-lg-3  sec2   ml-3 sm:ml-4">
                <div class="offset-lg-2 mb-3">
                    <div class="register animate__animated animate__fadeInRightBig">Login</div>
                    Does not have an account yet?
                    <a style="color: 57d4f1;font-family:Segoe UI" href="{{ url('register') }}">Sign Up</a>
                </div>
                <form method="POST" action="{{ route('login') }} " class="offset-lg-2">
                    @csrf
                    <div class="col-md-8 mt-4 mb-4">
                        <input id="email" type="email" placeholder=""
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ isset($data) ? $data['email'] : old('email') }}" required autofocus>
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-8 mt-4">
                        <input id="password" placeholder="" type="password"
                            class="form-control @error('password') is-invalid @enderror" name="password" value="" required>
                        <label for="password">{{ __('Password') }}</label>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-md-6 mb-3">
                        <div class="form-check">
                            <label class="form-check-label" for="remember">
                                <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                    {{ old('remember') ? 'checked' : '' }}>
                                {{ __('Remember Me') }}
                            </label>
                        </div>
                    </div>
                    {{-- <button type="submit" class="col-md-8 mt-4"> --}}
                    <button type="submit" class="col-lg-7 col-11 col-md-7 rounded mt-4 ml-3 mb-1 pl-5 pr-5 text-white h-10"
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
    </div>
    @include('layouts.partials.footer1')
    <script>
        $(document).ready(function(){
            if($(window).width() == 992){
                $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
                $(".copyright-div").toggleClass('col-lg-3 col-lg-6');
                $(".copyright-div").addClass('md:pl-11');
                $(".socialmedia-div").addClass('offset-md-2 md:pl-20');
                $(".segment1").addClass('absolute');
                $(".segment2").addClass('absolute');
                $(".copyright-div").toggleClass('md:pl-11 md:pl-5');
                $(".section1").addClass('pl-3');
                $(".segment5").addClass('pl-3');
            } else if($(window).width() == 412){
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
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
            } else if ($(window).width() == 384) {
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
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
            } else if ($(window).width() == 390) { // iPhone 12
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-4');
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
            } else if ($(window).width() == 428) { // iPhone 12 Pro Max
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
                $(".right-nav").toggleClass('gap-x-8 gap-x-3');
                $(".login-btn").toggleClass('ml-16 ml-14');
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
            } else if ($(window).width() == 414) { // iPhone XR
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
                $(".right-nav").toggleClass('gap-x-8 gap-x-5');
                $(".login-btn").toggleClass('ml-16 ml-3');
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
            } else if ($(window).width() == 375) { // iPhone X
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".main-right-div").addClass('ml-3');
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
            } else if ($(window).width() == 1920) { // Desktop viewport 1
                $(".main-right-div").toggleClass('offset-lg-3 offset-lg-5');
                $(".section1").addClass('pl-5');
                $(".comp1-div").parent().addClass('pl-4');
                $( ".section1-child").toggleClass('col-lg-6 col-lg-5');
                $(".copyright-main-div").toggleClass("lg:justify-around lg:justify-start");
                $(".copyright-div").addClass("lg:pl-20").toggleClass('lg:text-right lg:text-left');
                $(".socialmedia-div").addClass("offset-lg-6 lg:pl-56");
                $( ".section1-child").toggleClass('col-lg-6 col-lg-5');
                $( ".footer-center-2").toggleClass('justify-center justify-start');
                $( ".footer-center-2").toggleClass('pl-4 lg:pl-20');
                $(".comp1-div").addClass('lg:pl-32');
                $(".comp2-div").addClass('lg:pl-32');
                $(".comp3-div").addClass('lg:pl-32');
                $(".comp4-div").addClass('lg:pl-32');
                $(".segment1").addClass('lg:absolute lg:pl-9');
                $(".segment2").addClass('lg:absolute lg:pl-9');
                $(".segment5").addClass('lg:pl-2');
            } else if ($(window).width() == 1024) { // iPad Pro
                $(".main-right-div").toggleClass('offset-lg-3 offset-lg-2');
                $(".login-btn").toggleClass('lg:ml-0 lg:ml-2');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-div").addClass("pl-4 ml-2");
                $( ".section1-child").toggleClass('col-lg-6 col-lg-5');
                $( ".footer-center-2").toggleClass('justify-center justify-start').removeClass('pl-4').addClass('lg:pl-12');
                $(".comp1-div").addClass('pl-3');
                $(".comp2-div").addClass('pl-3');
                $(".comp3-div").addClass('pl-3');
                $(".comp4-div").addClass('pl-3');
                $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
                $(".copyright-div").removeClass('pl-4').toggleClass('ml-2 ml-4');
                $(".socialmedia-div").addClass('offset-lg-6 lg:pl-4');
                $( ".section1").addClass('ml-2');
            } else if($(window).width() == 768) {
                $(".main-right-div").toggleClass('offset-md-2 offset-md-0');
                $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
                $(".copyright-div").addClass('md:pl-10');
                $(".socialmedia-div").addClass('offset-md-3 md:pl-11');
                $(".login-btn").toggleClass('md:ml-0 md:ml-2');
                $(".section1").addClass('pl-4 ml-3');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
                $(".copyright-div").toggleClass('md:pl-10 md:pl-8');
                $( ".footer-center-2").removeClass('pl-4').addClass('md:pl-10');
                $(".comp-address").toggleClass("col-md-6 col-md-12");
                $(".comp2-div").addClass("md:pl-40");
                $(".comp4-div").addClass("md:pl-40");
            } else if ($(window).width() == 360) {
                $(".copyright-main-div").toggleClass('h-16 h-24');
                $(".copyright-div").toggleClass('col-7 col-12');
                $(".copyright-div").toggleClass('pt-2 pt-0');
                $(".copyright-div").addClass('text-center');
                $(".socialmedia-div").toggleClass('col-2 col-12');
                $(".socialmedia-div").addClass('justify-center pt-2');
                $(".inner-left-div").removeClass('pl-4 ml-1');
                $(".footer-center-2").addClass('pl-0');
                $(".comp-address").addClass('col-12 pl-10');
                $(".comp1-div").addClass('col-6 pl-10');
                $(".comp2-div").addClass('col-6 pl-10');
                $(".comp3-div").addClass('col-6 pl-10');
                $(".comp4-div").addClass('col-6 pl-10');
                $(".segment3 ").addClass('pl-0');
                $(".copyright-div").addClass('hidden');
                $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
                $(".copyright-main-div").toggleClass('h-16 h-28');
                $(".copyright-div-hidden").addClass('pl-16 py-3');
                $(".socialmedia-div").addClass('pt-3');
            } else if ($(window).width() == 1600) {
                $(".main-right-div").removeClass('offset-lg-3').addClass('offset-lg-4');
                $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
                $(".copyright-div").toggleClass('col-lg-3 col-lg-6').toggleClass('lg:text-right lg:text-left').addClass('lg:pl-16');
                $(".socialmedia-div").addClass('offset-3 lg:pl-20 ');
                $(".comp1-div").addClass('lg:pl-3');
                $(".comp2-div").addClass('lg:pl-3');
                $(".comp3-div").addClass('lg:pl-3');
                $(".comp4-div").addClass('lg:pl-3');
                $(".flags").toggleClass('justify-center justify-start').addClass('lg:pl-14 lg:gap-10');
                $(".segment5").addClass('lg:pl-16');
                $(".segment1").addClass('absolute lg:pl-6');
                $(".segment2").addClass('absolute lg:pl-6');
            } else if ($(window).width() == 800) { // Samsung Galaxy Tab 10 (samsung pad)
                $(".main-right-div").toggleClass('offset-md-2 offset-md-0');
                $(".section1").addClass('pl-4 ml-3');
                $(".comp1-div").parent().addClass('pl-4');
                $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
                $(".copyright-div").addClass("md:pl-9");
                $(".socialmedia-div").addClass("offset-md-3 md:pl-14");
                $(".comp-address").toggleClass('col-md-6 col-md-12');
                $(".comp1-div").toggleClass('col-md-6 col-md-8');
                $(".comp3-div").toggleClass('col-md-6 col-md-8');
                $(".comp2-div").toggleClass('col-md-6 col-md-4').addClass('md:pl-12');
                $(".comp4-div").toggleClass('col-md-6 col-md-4').addClass('md:pl-12');
                $( ".footer-center-2").removeClass('pl-4').addClass('md:pl-10');
            } else if ($(window).width() == 1280) { // MS Surface
                $(".footer-center-2").addClass('lg:pl-10').toggleClass('justify-center justify-start');
                $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
                $(".segment1").addClass('absolute lg:pl-4');
                $(".segment2").addClass('absolute lg:pl-4');
                $(".segment5").addClass('lg:pl-4');
                $(".copyright-div").addClass('text-left lg:pl-14');
                $(".socialmedia-div").addClass('offset-lg-6 lg:pl-24');
                $(".comp1-div").addClass('lg:pl-16');
                $(".comp2-div").addClass('lg:pl-16');
                $(".comp3-div").addClass('lg:pl-16');
                $(".comp4-div").addClass('lg:pl-16');
            }
        });
    </script>
@endsection
