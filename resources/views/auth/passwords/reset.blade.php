@extends('layouts.app')

<style>
    .girlClass {
        /* margin-top: 20vh; */
        width: 180vw;
        height: 180vh;
        /* margin-left: 10vw; */
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


    button {
        float: right;
        padding: 4px, 18px;
        font-size: 20px;
        border: none;
        /* background: dodgerblue !important; */
        /* text-color: white; */
        /* color: #FFFFFF !important; */

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

    image {
        width: 300px;
        height: 300px;
        transition: 1.5s;
    }

    .container2 {
        width: 80vw;

        padding-top: 70px;
        margin-top: 2vw;
        padding-left: 5vw;
        padding-right: 20px;
        border: solid white 1px;
        border-radius: 5px;
        background-color: f9fdff;
        /* margin-left: 10px; */
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        border-bottom: none;
        /* height: 60vh; */

    }

    /* input {
        display: inline-block;
        border: thin solid #57d4f1;
        border-bottom: solid medium #999;
        color: #444;
        background-color: #white;
        padding: 10px 10px 10px 10px;
    } */

    /* input:focus {
        border: thin solid #white; */
    /* border-bottom: solid medium #32cd32; */
    /* background-color: #white;
    } */

    /* label {
        color: #999;
        position: absolute;
        pointer-events: none; */
    /* left: 10px; */
    /* top: 10px;
        padding-left: 10px;
        transition: 0.4s;
    } */

    /* input:focus~label,
    input:valid~label {
        top: -20px;
        left: 15px;
        font-size: smaller;
        color: #57d4f1;
        background-color: f9fdff;
        padding: 2px 5px 2px 5px;
    } */
    .button1 {
        background-color: 1d3270;
        /* color: white; */
        padding: 8px 8px;
        /* background:#223445; */
        color: #FFFFFF !important;
        /* border: 1px solid #223445; */
        -webkit-border-radius: 5px;
        -moz-border-radius: 5px;
        border-radius: 5px;
        display: inline-block;
        /* width: 20em;
      height: 5em; */
        /* -webkit-font-smoothing: antialiased; */

    }

    .emailAdd {
        font-family: Segoe UI;
        padding-bottom: 140x;
        font-weight: bolder;
        font-size: 40px;
        color: 1d3270;
        /* padding-left: 10px; */
        font-style: bold;
    }

    .myclass {
        /* background-image: url('images/girl.svg'); */
    }

</style>

@section('content')
    {{-- @include('layouts.partials.header') --}}
    <div class="container-fluid">
        {{-- <div class="container2 justify-center"> --}}
        <div class="row ">
            <div class="col-lg-4 col-md-6 col-sm-12 pl-3 pr-3">
                {{-- <div class="emailAdd  animate__animated animate__fadeInRight ">
                    Reset Pasword
                </div> --}}
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <form method="POST" action="{{ route('password.update') }}">
                    @csrf
                    {{-- <input type="hidden" name="token" value="{{ $token }}"> --}}
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-md-6 col-lg-6 col-sm-12 "> --}}
                    <div class="pb-3">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <input id="email" placeholder=" " type="email"
                            class="form-control @error('email') is-invalid @enderror" name="email"
                            value="{{ old('email') }}" required autocomplete="email" required>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- </div> --}}
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-md-8 mb-4"> --}}
                    <div class="pb-3">
                        <label class="rounded" for="password">{{ __('Password') }}</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                            name="password" required autocomplete="new-password" required>
                        @error('password')
                            <span class="invalid-feedb  ack" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class="row"> --}}
                    {{-- <div class="col-md-8 mb-4 "> --}}
                    <div class="pb-3">
                        <label for="password-confirm">{{ __('Confirm Password') }}</label>
                        <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                            required autocomplete="new-password" required>
                    </div>
                    {{-- </div> --}}
                    {{-- </div> --}}
                    {{-- <div class=" row mb-0"> --}}
                    {{-- <div class="col-md-8 "> --}}
                    <button type="submit" class="rounded pl-5 pr-5 pt-2 pb-2 button1" style="font-size: 17px ;">
                        <span>Resetggg </span>
                    </button>
                    {{-- </div> --}}
                    {{-- </div> --}}
                </form>
            </div>
            <div class="col-lg-8 col-md-6 col-sm-10  girlClass ">
                @svg('images/girl.svg')
            </div>
        </div>
        {{-- </div> --}}
        {{-- </div> --}}
        @include('layouts.partials.footer1')
    @endsection
    {{-- @include('layouts.partials.footer1') --}}
