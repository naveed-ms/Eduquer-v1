@extends('layouts.app')
<style>
    .girlClass {
        width: 40vw !important;
        height: 28vh !important;

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
        background: rgb(31, 61, 121) !important;
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
    }

    @media only screen and (max-width: 600px) {

        .footer-center-2 {
            /* float: center; */
            /* justify-content: center; */
            padding-left: 180px;
            /* margin:0 !important; */

        }

    }

    @media only screen and (max-width: 990px) {

        .footer-center-2 {
            /* float: center; */
            /* justify-content: center; */
            padding-left: 180px;
            /* margin:0 !important; */

        }

    }

    /* #_Rectangle_ { */
    /* margin-top: 20px; */
    /* animated__animate: animate__fadeInRight;
        width: 400px;
        height: 270px; */
    /* transform: translate(-50%);
    transition: bottom ls; */
    /* } */

    /* .imagegirl image:hover{
        left: 40px;
    } */


    .sec1 {
        /* padding-left: 2; */
    }

    button {
        float: right;
        /* padding: 4px, 18px; */
        font-size: 10px;
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

    /* .container1{ */
    /* border: solid black 1px; */
    /* padding-top: 40px;
    margin-top: 20px;
    padding-left: 40px;
    padding-right: 20px; */
    /* border: solid white 1px; */
    /* border-radius: 5px;
    background-color: f9fdff; */
    /* margin-left: 10px; */
    /* box-shadow:  0 0 15px  rgba(214, 211, 211, 0.671);
    border-bottom: none;
    height: 450px;
    align-content: center; */
    /* align-items: center; */
    /* vertical-align: center; */

    /* } */

    .inner-container {
        width: 40vw;
        padding-left: 1vw;
        padding-right: 1vw;
        /* margin-left: 8vw; */
        /* margin: 0; */
        height: 85vh;
        border: solid white 1px;
        border-radius: 5px;
        background-color: f9fdff;
        /* margin-left: 10px; */
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        /* padding-left: 50px; */
        /* padding-top: 30px; */
        /* / padding-right: 50px; / */
        border-bottom: none;
        /* align-items: center; */
        /* padding-right: 20px; */
        /* / height: 600px; / */
        /* padding-bottom: :20px; */

    }

    /* input {
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
        top: -10px;
        left: 15px;
        font-size: smaller;
        color: #57d4f1;
        background-color: f9fdff;
        padding: 2px 5px 2px 5px;
    } */

    /* div:after {

        height: 20px;
        content: "";
        position: absolute;
        bottom: -20px;
        left: -20px;
        right: -20px;
    } */

    .emailAdd {
        font-family: Segoe UI;
        padding-top: 5vh;
        /* padding-bottom: 140x; */
        font-weight: bolder;

        font-size: 1rem;
        color: 1d3270;
        /* padding-left: 10px; */
        font-style: bold;
        /* overflow: hidden; */
        /* animation: animate 1s; */
    }

    @keyframes animate {
        0% {
            width: 0px;
            height: 0px;
        }

        30% {
            width: 50px;
            height: 0px;
        }

        60% {
            width: 50px;
            height: 80px;
        }
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

</style>
@section('content')
    {{-- @include('layouts.partials.header') --}}
    <div class="container-fluid  theme-bg-2 ">
        <div class="inner-container justify-center lg:ml-72 md:lg-44 ">
        <div class="row justify-center lg:pt-14">

                <div class="col-lg-5 col-md-7 col-sm-12  md:pt-20  pl-1 pr-1  ">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="emailAdd animate__animated animate__fadeInRight">
                            Reset Password
                        </div>
                        <label for="email" class=" pb-1"> Please Enter your email</label>
                        <input id="email" type="email" class=" form-control @error('email') is-invalid @enderror"
                            name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                        <div class="pt-3">
                            <button type="submit" class="rounded  text-white h-10 pl-3 pr-3 "
                                style="background-color: #1d327d;">
                                <span>Send Reset Link</span>
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-4 col-sm-8 md:mt-20  girlClass animate__animated animate__fadeInRight">
                    @svg('images/girl.svg')
                </div>

            </div>
        </div>
    </div>
    </div>
    {{-- @include('layouts.partials.footer1') --}}
@endsection
{{-- @include('layouts.partials.footer1') --}}
