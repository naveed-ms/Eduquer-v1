<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Éduquer</title>

    <!-- Fonts -->
    {{-- <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet"> --}}

    <!-- scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    {{-- <script src="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.js"></script> --}}
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"
        integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>
    <!-- Stylesheets -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" defer>
    {{-- <link href="{{ asset('sass/app.scss') }}" rel="stylesheet"> --}}
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.2/tailwind.min.css" rel="stylesheet">
    {{-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/> --}}
    {{-- <link href="https://cdn.rawgit.com/michalsnik/aos/2.1.1/dist/aos.css" rel="stylesheet"> --}}
    @yield('landingpage_styles')
    <style>
        button {
            /* float: right; */
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

        button span:after {
            content: '/00bb';
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

        /* ================================media queries set========================================================================== */
        @media only screen and (min-width:3024px){
            .what-we {
                /* margin-left: 180px; */
            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 50px;
                padding-right: 40px;
                padding-bottom: 20px
            }

            .started-button {
                padding-left: 526px;
            }

            .weunderstand {
                padding-left: 4% !important;
                margin-left: 10px !important;
                padding-top: 100px;

            }

            .weunderstand1 {
                padding-left: 5% !important;
                margin-let: 10% !important;
                padding-top: 15px;
                /* max-height: 100%; */
                /* max-width: 100%; */
                /* width: 100vw !important; */
            }

        }

        }
        @media only screen and (min-width:1201px) and (max-width:1280px) {

            .what-we {
                margin-left: 180px;

            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 50px;
                padding-right: 40px;
                padding-bottom: 20px
            }

            .started-button {
                padding-left: 526px;
            }

            .weunderstand {
                padding-left: 4% !important;
                margin-left: 10px !important;
                padding-top: 100px;

            }

            .weunderstand1 {
                padding-left: 5% !important;
                margin-left: 10% !important;
                padding-top: 15px;
                /* max-height: 100%; */
                /* max-width: 100%; */
                /* width: 100vw !important; */
            }

        }

        @media only screen and (min-width:1401px) and (max-width:1600px) {
            .footer-center-2 {
                padding-left: 80px !important;
            }

            .what-we {
                margin-left: 200px !important;

            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                /* padding-left: 50px; */
                padding-right: 5%;
                /* padding-right:40px; */
                padding-bottom: 20px;
                padding-left: 5%;
            }

            .started-button {
                /* padding-left:620px; */
                padding-left: 43%;
                padding-right: 30%;
            }

            .weunderstand {
                padding-left: 05% !important;
                margin-left: 10px !important;
                padding-top: 100px !important;

            }

            .weunderstand1 {
                padding-left: 20% !important;
                /* margin-left: 180px !important; */
                margin-left: 10%;
                padding-top: 50px;
                max-height: 100%;
                max-width: 100%;
                /* width: 100vw !important; */
            }

            .what-we {
                margin-left: 150px;
            }
        }

        @media only screen and (min-width:1281px) and (max-width:1440px) {
            .footer-center-2 {
                padding-left: 100px !important;
            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 50px;
                padding-right: 40px;
                padding-bottom: 20px
            }

            .started-button {
                padding-left: 620px;
            }

            .weunderstand {
                padding-left: 40px !important;
                margin-left: 10px !important;
                padding-top: 120px;

            }

            .weunderstand1 {
                padding-left: 80px !important;
                margin-left: 180px !important;
                padding-top: 15px;
                max-height: 100%;
                max-width: 100%;
                /* width: 100vw !important; */
            }

        }



        @media only screen and (min-width:993px) and (max-width:1920px) {
            .footer-center-2 {
                /* padding-left: 80px !important; */
            }
            .what-we1{
                margin-left: 3vw;
            }
            .what-we {
                /* margin-left: 180px !important; */
                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;
                /* margin-left: 10px !important; */
                padding-top: 60px;

            }
/*  */
            .weunderstand1 {
                padding-left: 11vw !important;
                /* margin-left: 13vw !important; */
                /* padding-top: 15px; */
                /* max-height: 100%; */
                /* max-width: 100%; */
                /* width: 100vw !important; */
            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 4vw;
                padding-right: 5vw;
                /* padding-bottom: 5vh; */
            }

            .started-button {
                padding-left: 40vw;
            }


        }

        /* @media only screen and (min-width:769px) and (max-width:992px) { */
            @media only screen and  (max-width:992px) {
            .footer-center-2 {
                padding-left: 20px !important;
            }

            .what-we {
                margin-left: 120px;

            }

            .weunderstand {
                padding-left: 20px !important;
                margin-left: 10px !important;
                padding-top: 80px !important;
            }

            .weunderstand1 {
                padding-left: 120px !important;
                margin-left: 90px !important;
                padding-top: 30px !important;

            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 40px;
                padding-right: 60px;
                padding-bottom: 20px
            }

            .started-button {
                padding-left: 380px;
            }

            .img2 {
                display: none;
            }

        }

        @media only screen  and (max-width:414px) {
            .footer-center-2 {
                /* padding-left: 80px !important; */
            }

            .what-we {
                /* margin-left: 180px !important; */
                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;
                /* margin-left: 10px !important; */
                padding-top: 60px;

            }

            .weunderstand1 {
                /* padding-left: 13vw !important; */
                /* margin-left: 13vw !important; */
                /* padding-top: 15px; */
                /* max-height: 100%; */
                /* max-width: 100%; */
                /* width: 100vw !important; */
            }

            .img2 {
                display: block !important;
            }

            .img1 {
                display: none;
                background: white;
                /* justify-content:center; */
                padding-left: 4vw;
                padding-right: 5vw;
                /* padding-bottom: 5vh; */
            }

            .started-button {
                padding-left: 40vw;
            }


        }


        @media only screen  and (max-width:828px) {
            .footer-center-2 {
                /* padding-left: 80px !important; */
            }

            .what-we {
                /* margin-left: 180px !important; */
                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;
                /* margin-left: 10px !important; */
                padding-top: 60px;

            }

            .weunderstand1 {
                /* padding-left: 13vw !important; */
                /* margin-left: 13vw !important; */
                /* padding-top: 15px; */
                /* max-height: 100%; */
                /* max-width: 100%; */
                /* width: 100vw !important; */
            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 4vw;
                padding-right: 5vw;
                /* padding-bottom: 5vh; */
            }

            .started-button {
                padding-left: 40vw;
            }


        }
        @media only screen and (max-width: 800px) {
            .footer-center-2 {
                padding-left: 80px !important;
            }

            .flags {
                padding-left: 120px;
            }

            .university-style {
                padding-left: 30vw !important;


            }
            .what-we1{
                padding-top: 4vw;
                padding-left: 5vw !important;
            }
            .what-we{
                margin-left: 8vw !important;
                padding-top: 4vw;
            }

            .what-we-img {
                margin-right: 0px !important;
                margin-left: 0px !important;
                padding-top: 20px !important
            }

            .img2 {
                display: :none !important;
                padding-left: 50px;
                background: white;
            }

            .img1 {
                background: white !important;
                padding-left: 20px;
                padding-right: 20px;
                display: block !important;
            }

            .started-button {
                /* padding-top: 5px; */
                padding-left: 38vw;
            }

            .weunderstand {
                padding-left: 20px !important;
                margin-left: 10px !important;
                padding-top: 30px !important;
                /* height: 10px !important; */
            }

            .weunderstand1 {
                /* padding-left:30px !important; */
                /* margin-left: 20px!important; */
                /* size: 30px !important; */
                width: 90vw;
                padding: 0 !important;

                /* max-width:300px !important;
        max-height: 300px !important; */
                /* width: 450px !important;
        height: 400px !important; */
                /* padding-top:50px!important; */
            }
        }



        @media only screen and (min-width: 577px) and (max-width:768px) {
            .footer-center-2 {
                padding-left: 40px !important;
            }

            .what-we {
                margin-left: 81px;
                padding-top: 280px;

            }

            .weunderstand {
                padding-left: 20px !important;
                margin-left: 10px !important;
                padding-top: 30px !important;
                /* background: #effaff; */
            }

            .weunderstand1 {
                padding-left: 40px !important;
                margin-left: 100px !important;
                padding-top: 30px !important;
                margin-right: 0px !important;

            }

            .img1 {
                display: block;
                background: white;
                /* justify-content:center; */
                padding-left: 40px;
                padding-right: 10px;
                padding-bottom: 20px
            }

            .started-button {
                padding-left: 285px;
            }

            .img2 {
                display: none;
            }

        }

        @media only screen and (max-width: 384px) {
            .footer-center-2 {
                /* padding-left: 150px !important; */
            }

            .university-style {
                margin-left: 65px !important;
            }


            .weunderstand {
                /* padding-left:20px !important; */
                padding-left: 13px !important;

                /* margin-left: 28px !important; */
                padding-top: 27px !important;
                /* height: 10px !important; */
            }

            .weunderstand1 {
                /* padding-left:30px !important; */
                margin-left: 40px !important;
                margin-right: 10px !important;
                /* size: 30px !important; */
                /* width:auto !important; */
                /* height: auto !important; */
                /* width: 450px !important;
        height: 400px !important; */
                /* padding-top:50px!important; */

            }

            .img1 {
                display: none;
            }

            .img2 {
                display: block;
                background: white;
                /* padding-left: 150px;
    padding-top: 10px; */
                padding-right: 10%;
                padding-left: 10%;
            }

            .started-button {
                padding-top: 5px;
                /* padding-left:210px ; */
                padding-left: 30%;
                padding-right: 30%;
            }

        }


        @media only screen and (max-width: 390px) {
            .started-button {
                padding-left: 120px;
                /* padding-top: 0px; */
            }

            .weunderstand {
                padding-top: 32px !important;
                padding-left: 40px !important;
            }

            .weunderstand1 {
                padding-top: 15px;
            }

            .img2 {
                display: :block !important;
                padding-left: 50px;
                background: white;
            }

            .img1 {
                background: white !important;
                padding-left: 20px;
                padding-right: 20px;
                display: none !important;
            }

            .what-we {
                margin: 3px !important;
                text-align: left !important;
                padding-left: 35px !important;
            }

        }




        @media only screen and (max-width: 360px) {
            .footer-center-2 {
                padding-left: 80px !important;
            }

            .flags {
                padding-left: 120px;
            }

            .university-style {
                padding-left: 30vw !important;

            }

            .what-we-img {
                margin-right: 0px !important;
                margin-left: 0px !important;
                padding-top: 20px !important
            }

            .img1 {
                display: none;
            }

            .img2 {
                display: block;
                background: white;
                padding-left: 50px;
                padding-top: 10px;
            }

            .started-button {
                padding-top: 5px;
                padding-left: 120px;
            }

            .weunderstand {
                padding-left: 20px !important;
                margin-left: 10px !important;
                padding-top: 30px !important;
                /* height: 10px !important; */
            }

            .weunderstand1 {
                /* padding-left:30px !important; */
                /* margin-left: 20px!important; */
                /* size: 30px !important; */
                width: 75vw;
                /* max-width:300px !important;
        max-height: 300px !important; */
                /* width: 450px !important;
        height: 400px !important; */
                /* padding-top:50px!important; */
            }
        }

        @media only screen and (max-width: 428px) {
            .started-button {
                padding-left: 120px;
                /* padding-top: 0px; */
            }

            .weunderstand {
                padding-top: 32px !important;
                padding-left: 40px !important;
            }

            .weunderstand1 {
                padding-top: 15px;
            }

            .img2 {
                display: :block !important;
                padding-left: 50px;
                background: white;
            }

            .img1 {
                background: white !important;
                padding-left: 20px;
                padding-right: 20px;
                display: none !important;
            }

            .what-we {
                margin: 3px !important;
                text-align: left !important;
                padding-left: 35px !important;
            }

        }

        @media only screen and (max-width: 375px) {
            .started-button {
                padding-left: 120px;
                /* padding-top: 0px; */
            }

            .weunderstand {
                padding-top: 32px !important;
                padding-left: 40px !important;
                margin-left: 0 !important;
            }

            .weunderstand1 {
                padding-top: 15px;
            }

            .img2 {
                display: :block !important;
                padding-left: 50px;
                background: white;
            }

            .img1 {
                background: white !important;
                padding-left: 20px;
                padding-right: 20px;
                display: none !important;
            }

            .what-we {
                margin: 3px !important;
                text-align: left !important;
                padding-left: 35px !important;
            }

        }

        @media only screen and (min-width:1080px) and (max-width:1920px) {
            .segment1 {
                position: absolute !important;
                left: 30px !important;
            }
            .segment2 {
                position: absolute !important;
                left: 30px !important;
            }
        }


        /* =====================================================media queries ends=========================================================== */



        .theme-bg-2 {
            background-color: #effaff;
        }

        .recommended {
            color: #899ea7;
            letter-spacing: 2px;
            font-size: 10px;
        }



        .links>a {
            color: #636b6f;
            padding: 0 25px;
            font-size: 13px;
            font-weight: 600;
            letter-spacing: .1rem;
            text-decoration: none;
            text-transform: uppercase;
        }

        .gorilla {
            background-color: white !important;
            padding: 0px;
            margin: 0px;

        }

        .animate__animated.animate__fadeInDown {
            animation-duration: 2s;
            animation-delay: 1s;
        }

        .animate__animated.animate__fadeInUp {
            animation-duration: 2s;
            animation-delay: 1s;
        }

        /*
.img2{
    display: none !important;
} */
        .img3 {
            display: none;
        }

    </style>
</head>

<body>

    <!-- 1. Main header section -->
    <!-- Main header section over -->
    @include('layouts.partials.header')
    <div class="container-fluid theme-bg-2 px-0 overflow-hidden" style="background-color: #effaff;">


        <!-- 1. We all understand section -->
        {{-- @include('layouts.partials.we_all_understand') --}}
        <!-- We all understand section over -->
        <div class=" row">

            <div class="col-lg-6 col-md-5 h-50 pr-0  font-bold capitalize text-4xl leading-none weunderstand  "
                data-aos="fade-right" data-aos-duration="1500" data-aos-easing="ease-in-quad"
                style="color:#1d3270;  ; ">
                <div>we understand 444199</div>
                <div>all your nnn <span style="color:#35ccee;">international </span></div>
                <span style="color:#35ccee;">education</span> needs
                <div class="text-lg pt-4 pb-4">
                    <button class="w-36 h-10 text-white rounded mt-3" href="#" style="background-color:#1d3270;">How It
                        Works</button>
                </div>
            </div>
            <div class=" col-lg-6 col-md-5 animate__animated animate__zoomInRight   weunderstand1">@svg('images/landing page/how_it_works_img.svg')</div>
        </div>




        <!-- 2. Easy 6 Steps section -->
        <div class="row bg-white justify-center content-end h-14 pb-4 pt-20 pb-20 pl-3 font-bold text-4xl"
            data-aos="fade-up" data-aos-duration="2000" data-aos-easing="ease-in-quad" style="color:#1d3270;">Easy 6
            Step Process</div>
        <div class="img1  animate__animated  animate__bounceIn justify-center content-center " data-aos="zoom-in">
            @svg('images/landing page/s6-5.svg', )</div>
        <div class="img2 animate__animated  animate__bounceIn" data-aos="zoom-in">@svg('images/landing page/mobile-step-6.svg', )</div>
        {{-- <div  class="img3 animate__animated  animate__bounceIn" data-aos="zoom-in"  >@svg('images/landing page/tablet-S6.svg', )</div> --}}


        {{-- <picture>
            <source
              media="(max-width: 600px)"
              class="row bg-white justify-center pr-3" >@svg('images/landing page/mobile-step-6.svg', )>
              <source
              media="(max-width: 900px)"
              class="row bg-white justify-center pr-3" >@svg('images/landing page/s6-5.svg', )>

        </picture> --}}


        <!-- width: 812px; height: 550px; -->
        {{-- <div class="w-full h-auto bg-white relative space-y-28 font-semibold text-2xl leading-7">

                <div class="flex w-full h-48 justify-center space-x-36 relative">
                    <div class="h-40 w-40 relative">
                        @svg('images/landing page/easy 6 step/img1.svg','relative', 'height: 200px; width: 200px;')
                        <div class="pl-9 absolute cursor-text" style="bottom: -45px;">Start your</div><div class="pl-7 pt-1 cursor-text">Application</div>
                        @svg('images/landing page/easy 6 step/dotted1.svg','absolute', 'top: 99px; left: 171px; height: 19px; width: 132px;')
                    </div>
                    <div class="h-40 w-40 relative" style="right: 22px; top: 3px;">
                        @svg('images/landing page/easy 6 step/img2.svg','absolute', 'height: 200px; width: 200px;')
                        @svg('images/landing page/easy 6 step/dotted2.svg','absolute', 'top: 77px; left: 177px; width: 183px;')
                    </div>
                    <div class="absolute pt-44 pr-28 cursor-text">Let us find the right</div><div class="absolute pt-48 pr-28 cursor-text" style="top: 8px;">program & school for you</div>
                    <div class="h-40 w-40 relative">
                        @svg('images/landing page/easy 6 step/img3.svg','absolute', 'height: 200px; width: 200px;')
                        <div class="pt-44 pl-2 w-64 cursor-text">We will Submit</div>
                        <div class="absolute w-60 cursor-text" style="top: 200px;">your Application</div>
                        @svg('images/landing page/easy 6 step/dotted3.svg','absolute', 'top: 78px; right: -38px; width: 749px;')
                    </div>
                </div>
                <div class="flex w-full h-48 justify-center space-x-36 relative">
                    <div class="h-40 w-40 relative">
                        @svg('images/landing page/easy 6 step/img4.svg','absolute', 'height: 200px; width: 200px;')
                        <div class="w-48 pt-44">Get your letter of</div><div class="w-48 absolute text-center" style="top: 202px;">Acceptance</div>
                        @svg('images/landing page/easy 6 step/dotted4.svg','absolute', 'top: 116px; left: 173px; height: 19px; width: 132px;')
                    </div>
                    <div class="h-40 w-40 relative">
                        @svg('images/landing page/easy 6 step/img5.svg','absolute', 'height: 200px; width: 200px;')
                        <div class="w-64 pt-44 absolute" style="left:-15px;">We will help facilitate</div><div class="w-64 pl-1 absolute" style="top: 200px;">your VISA process</div>
                        @svg('images/landing page/easy 6 step/dotted5.svg','absolute', 'top: 114px; left: 180px; width: 129px;')
                    </div>
                    <div class="h-40 w-40 relative">
                        @svg('images/landing page/easy 6 step/img6.svg','absolute', 'height: 200px; width: 200px;')
                        <div class="w-48 pt-44 pl-1">You take a flight</div>
                    </div>
                </div>

            </div> --}}

        <div class="row h-20 bg-white  content-center pt-5 pb-5 started-button ">
            <button class="w-36 h-10 text-white rounded text-base " data-aos="fade-left" data-aos-duration="200" data-aos-easing="ease-in-quad href="#" style="background-color:#1d3270;">Get
                Started&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
        </div>


        <!-- Easy 6 steps section over -->

        <!-- 3. What we do section -->



        <div class="row  theme-bg-2pt-4 pb-4 ">
            {{-- animate__animated animate__fadeInDown --}}
            <div class="col-lg-5 col-md-6 col-sm-12 pt6 what-we1" data-aos="fade-down" data-aos-duration="2500"
                data-aos-easing="ease-in-quad">
                <div>@svg('images/landing page/what_we_do_img.svg' ,style="width: 100% ;height:100%")</div>
            </div>
            <div class=" col-lg-4 col-md-5 col-sm-12  pt-4 sm:pt-7 sm:pt-7 lg:pt-7 md:pt-7 pr-4   what-we  "
                data-aos="fade-up" data-aos-duration="200" data-aos-easing="ease-in-quad">
                {{-- animate__animated animate__fadeInUp --}}

                <div class="tracking-widest text-xs" style="color:#899ea7">ABOUT US</div>
                <div class="font-bold text-4xl pt-1" style="color:#1d3270" data-aos="fade-up">What We Do</div>
                <p class="text-base pt-3 leading-tight">We provide a wide range of services to support you with your
                    international education needs. If you are dreaming of studying abroad, we will get you there. From
                    course information to career advice, we are dedicated to you and your future.</p>
                <div class="text-lg pt-4 pb-4" data-aos="fade-left" data-aos-duration="500"
                    data-aos-easing="ease-in-quad">
                    <button class="w-36 h-10 text-white rounded " href="#" style="background-color:#1d3270;">Learn
                        More</button>

                </div>
            </div>
        </div>
        <!-- What we do section over -->

        <!-- 4. Access to more opportunities section -->
        {{-- ==================================================================================================================================================== --}}
        <div class="gorilla">
            <div class="row   bg-white pt-4   animate__animated animate__bounceIn" style="width:100%;">

                <div class="col-lg-4 col-md-10 col-sm-12 pl-4" data-aos="fade-right" data-aos-duration="1500"
                    data-aos-easing="ease-in-quad">
                    <div class="recommended pt-1">OUR *RECOMMENDED UNIVERSITIES</div>
                    <div class="font-bold text-4xl pt-3 pb-2" style="color:#1d3270">Access to More <br> Opportunities
                    </div>
                    <p class="text-base pt-3 leading-tight">Éduquer has built partnerships with 1,200+
                        colleges, universities, primary, and secondary
                        schools around the world.</p>
                    <div class="  my-2" style="color:#c9c9c9; font-size: 10px;">
                        <p>*Éduquer recommends these universities & colleges based on their performance and reputation.
                            Éduquer may not be associated with all of these universities and colleges.</p>
                    </div>
                    <div class="pt-4 pb-4">
                        <button class="w-36 h-10 text-white  rounded" href="#" style="background-color:#1d3270;">Get
                            Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>

                </div>
                {{-- animate__animated  animate__lightSpeedInRight --}}

                <!-- University images -->
                <div class="uni-first-col col-6 px-0 col-lg-2 col-md-3 col-sm-2 " data-aos="zoom-in">
                    <div class="university-style">
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Sydney Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Toronto Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/City University of New York Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Kent Logo.svg',
                            'w-full h-full')</div>
                    </div>
                </div>
                <div class="uni-second-col col-6 px-0 col-lg-2 col-md-3 col-sm-2  " data-aos="zoom-in">
                    <div class="university-style university-style-2">
                        <div class="w-20 h-28">@svg('images/landing page/partner universities/Mcgill University Logo.svg',
                            'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Western Australia Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Queensland Logo.svg', 'w-full h-full')</div>

                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Washington Logo.svg', 'w-full h-full')</div>
                    </div>
                </div>
                <div class="uni-third-col col-6 px-0 col-lg-2 col-md-3 col-sm-2  " data-aos="zoom-in">
                    <div class="university-style">
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Adelaide Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/York University Logo.svg',
                            'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Baltimore Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of East London Logo.svg', 'w-full h-full')</div>
                    </div>
                </div>
                <div class="uni-fourth-col col-6 px-0 col-lg-2 col-md-3 col-sm-2 " data-aos="zoom-in">
                    <div class="university-style university-style-2">
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Liverpool Logo.svg', 'w-full h-full')</div>

                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Waterloo Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Texas Logo.svg',
                            'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Nottingham Logo.svg', 'w-full h-full')</div>

                    </div>
                </div>

            </div>
            <div class="view-all-div col-6 px-0 col-lg-2 col-md-3 col-sm-2 px-0 pt-1 pb-5 ">
                <button class="w-32 h-10 bg-white rounded btn btn-outline" href="#"
                    style="border: 2px solid #1d3270;">View All</button>
            </div>

        </div>
        <!-- University images over -->

        {{-- ===================================================================================================================================================== --}}



        <!-- Access to more opportunities section over -->

        <!-- 5. We are helping section -->
        <div class="row text-center content-center pt-5">
            <div class="col" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div style="color:#899ea7; letter-spacing: 2px; font-size: 10px;">OUR COUNTRIES</div>
                <p class="font-bold text-4xl pt-1 mb-0" style="color:#1d3270">We are helping students in the following
                    countries</p>
                {{-- <p class="font-bold text-4xl mb-0" style="color:#1d3270">in the following countries</p> --}}
                <div class="text-xs tracking-widest pt-2" style="color:#2f2f2f">We are helping students from the
                    following countries</div>
            </div>
        </div>


        <div class="row justify-center flags pb-4 pt-4" style="width:100%">

            <div class="col-4 col-lg-1 col-md-1 col-sm-6 col-xs-12 pb-3 pl-1  pr-1 m-2 justify-center"
                data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3">
                    <div>@svg('images/landing page/country flags/veitnam1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">U.A.E</div> --}}
                </div>


                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/China1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Saudi Arabia</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-1 col-sm-6  col-xs-12 pl-1  pr-1  pb-3 m-2  justify-center"
                data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/Hong kong1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Kuwait</div> --}}
                </div>


                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/Malaysia1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Qatar</div> --}}
                </div>
            </div>
            <div class="bangladesh-superdiv col-4 col-lg-1 col-md-2 col-sm-6 col-xs-12  pb-3 pl-1  pr-1 m-2 justify-center"
                data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 bangladesh-div">
                    <div>@svg('images/landing page/country flags/Bangladesh1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Turkey</div> --}}
                </div>


                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/Indonesia1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Pakistan</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-2 col-sm-6   col-xs-12 pb-3 pl-1  pr-1  m-2 justify-center"
                data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 pakistan-div">
                    <div>@svg('images/landing page/country flags/Pakistan1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">India</div> --}}
                </div>

                <div class="pt-3">
                    <div>@svg('images/landing page/country flags/Turkey1.svg', 'w-24 h-24' )</div>
                    {{-- <div class="text-center">U.A.E</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12  pl-1  pr-1 pb-3  m-2 justify-center "
                data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 ksa-div">
                    <div>@svg('images/landing page/country flags/KSA1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Saudi Arabia</div> --}}
                </div>

                <div class="pt-3">
                    <div>@svg('images/landing page/country flags/Kuwait1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Kuwait</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12  pb-3 pl-1  pr-1 pb-3 m-2 justify-center"
                data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 qatar-div">
                    <div>@svg('images/landing page/country flags/Qatar1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Qatar</div> --}}
                </div>

                <div class=" pt-3">
                    <div>@svg('images/landing page/country flags/Srilanka1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Turkey</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12 pb-3  pl-1  pr-1 pb-3 m-2 justify-center"
                data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 uae-div">
                    <div>@svg('images/landing page/country flags/UAE1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Pakistan</div> --}}
                </div>

                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/India1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">India</div> --}}
                </div>
            </div>
            <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12 pb-3  pl-1  pr-1 pb-3 m-2 justify-center"
                data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                <div class="pt-3 uae-div">
                    <div>@svg('images/landing page/country flags/UAE1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">Pakistan</div> --}}
                </div>

                <div class="pt-3 ">
                    <div>@svg('images/landing page/country flags/India1.svg', 'w-24 h-24')</div>
                    {{-- <div class="text-center">India</div> --}}
                </div>
            </div>

        </div>
    </div>




    {{-- <div class="row justify-center pb-5">
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24 mr-3">
                            <div>@svg('images/landing page/country flags/Vietnam.svg', 'w-full h-full')</div>
                            <div class="text-center">Vietnam</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24 mr-3 ">
                            <div>@svg('images/landing page/country flags/China.svg', 'w-full h-full')</div>
                            <div class="text-center pt-2">China</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-3">
                        <div class="w-24 h-24 mr-3 ">
                            <div>@svg('images/landing page/country flags/Hong Kong.svg', 'w-full h-full')</div>
                            <div class="text-center pt-2">Hong Kong</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24 mr-3 ">
                            <div>@svg('images/landing page/country flags/UAE.svg', 'w-full h-full')</div>
                            <div class="text-center">Malaysia</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24 mr-3">
                            <div>@svg('images/landing page/country flags/Bangladesh.svg', 'w-full h-full')</div>
                            <div class="text-center">Bangladesh</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24 mr-3">
                            <div>@svg('images/landing page/country flags/Indonesia.svg', 'w-full h-full')</div>
                            <div class="text-center">Indonesia</div>
                        </div>
                        </div>
                        <div class="col-lg-1 col-md-2 col-sm-4">
                        <div class="w-24 h-24">
                            <div>@svg('images/landing page/country flags/Srilanka.svg', 'w-full h-full')</div>
                            <div class="text-center" style="padding-top: 17px;">Srilanka</div>
                        </div>
                        </div>
                    </div> --}}

    <!-- We are helping section over -->
<div class="footer">
    @include('layouts.partials.footer1')
</div>

<script>
    // AOS.init();
    $(document).ready(function(){
        if($(window).width() == 992){
            $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
            $(".copyright-div").toggleClass('col-lg-3 col-lg-6');
            $(".copyright-div").addClass('md:pl-11');
            $(".socialmedia-div").addClass('offset-md-2 md:pl-20');
            $(".view-all-div").toggleClass('px-0 pl-3').addClass('ml-2');
            $(".flags").toggleClass('justify-center justify-start').addClass('pl-1 gap-x-5');
            $(".segment1").addClass('absolute');
            $(".segment2").addClass('absolute');
            $(".copyright-div").toggleClass('md:pl-11 md:pl-5');
            $(".section1").addClass('pl-3');
        } else if($(window).width() == 768) {
            $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
            $(".copyright-div").addClass('md:pl-10');
            $(".socialmedia-div").addClass('offset-md-3 md:pl-9');
            $(".login-btn").toggleClass('md:ml-0 md:ml-2');
            $(".uni-first-col").toggleClass('col-md-3 col-md-2');
            $(".uni-second-col").toggleClass('col-md-3 col-md-2');
            $(".uni-third-col").toggleClass('col-md-3 col-md-2');
            $(".uni-fourth-col").toggleClass('col-md-3 col-md-2');
            $(".uni-first-col").addClass('md:ml-8');
            $(".uni-second-col").addClass('md:ml-12');
            $(".uni-third-col").addClass('md:ml-20');
            $(".uni-fourth-col").addClass('md:ml-20');
            $(".view-all-div").addClass('pl-4 ml-2');
            $(".bangladesh-superdiv").toggleClass('col-md-2 col-md-1');
            $(".flags").addClass('gap-3 pl-2');
            $(".pakistan-div").parent().toggleClass('col-md-2 col-md-1')
            $(".flags").toggleClass('justify-center justify-start');
            $(".section1").addClass('pl-4');
            $(".comp1-div").parent().addClass('pl-4');
            $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
            $(".copyright-div").addClass("pl-3");
            $(".socialmedia-div").addClass("offset-md-3 pl-5");
            $(".comp-address").toggleClass("col-md-6 col-md-12");
            $(".comp2-div").addClass("md:pl-44");
            $(".comp4-div").addClass("md:pl-44");
            $(".university-style").addClass("pl-md-0");
        } else if ($(window).width() == 360) {
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".copyright-main-div").toggleClass('h-16 h-24');
            $(".copyright-div").toggleClass('col-7 col-12');
            $(".copyright-div").toggleClass('pt-2 pt-0');
            $(".copyright-div").addClass('text-center');
            $(".socialmedia-div").toggleClass('col-2 col-12');
            $(".socialmedia-div").addClass('justify-center pt-2');
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".university-style-2").addClass('ml-4');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-4 pl-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-4 pl-3');
            $(".university-style-2").addClass('ml-4 pl-5');
            $(".view-all-div").addClass('pl-5');
            $(".flags").addClass('pl-0');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
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
            $(".copyright-div").toggleClass('col-lg-3 col-lg-6').toggleClass('lg:text-right lg:text-left').addClass('lg:pl-16 ml-lg-1');
            $(".socialmedia-div").addClass('offset-3 lg:pl-20 ');
            $(".comp1-div").addClass('lg:pl-3');
            $(".comp2-div").addClass('lg:pl-3');
            $(".comp3-div").addClass('lg:pl-3');
            $(".comp4-div").addClass('lg:pl-3');
            $(".flags").toggleClass('justify-center justify-start').addClass('lg:pl-14 lg:gap-10');
            $(".footer-center-2").addClass('pl-lg-5 ml-lg-4');
        } else if ($(window).width() == 384) {
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".main-right-div").addClass('ml-3');
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".login-btn").toggleClass('ml-16 ml-2');
            $(".university-style").addClass('ml-4');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-4 pl-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-4 pl-3');
            $(".university-style-2").addClass('pl-5');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
            $(".copyright-div").addClass('hidden');
            $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
            $(".copyright-main-div").toggleClass('h-16 h-28');
            $(".copyright-div-hidden").addClass('pl-11 py-3');
            $(".socialmedia-div").addClass('pl-10 pt-3');
            $(".flags").addClass('pl-0');
        } else if ($(window).width() == 412) {
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".main-right-div").addClass('ml-3');
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".login-btn").toggleClass('ml-16 ml-7');
            $(".university-style-2").addClass('ml-4');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-4 pl-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-4 pl-3');
            $(".university-style-2").addClass('ml-4 pl-5');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
            $(".copyright-div").addClass('hidden');
            $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
            $(".copyright-main-div").toggleClass('h-16 h-28');
            $(".copyright-div-hidden").addClass('pl-11 py-3');
            $(".socialmedia-div").addClass('pl-10 pt-3');
            $(".flags").addClass('pl-4');
        } else if ($(window).width() == 390) { // iPhone 12
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".main-right-div").addClass('ml-3');
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".login-btn").toggleClass('ml-16 ml-4');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-3 pl-4');
            $(".uni-second-col").addClass('pl-5 ml-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-3 pl-4');
            $(".uni-fourth-col").addClass('pl-5 ml-3');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
            $(".copyright-div").addClass('hidden');
            $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
            $(".copyright-main-div").toggleClass('h-16 h-28');
            $(".copyright-div-hidden").addClass('pl-11 py-3');
            $(".socialmedia-div").addClass('pl-10 pt-3');
            $(".flags").addClass('pl-0');
            $(".university-style").addClass('pl-0');
        } else if ($(window).width() == 428) { // iPhone 12 Pro Max
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".main-right-div").addClass('ml-3');
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".login-btn").toggleClass('ml-16 ml-14');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-3 pl-4');
            $(".uni-second-col").addClass('pl-5 ml-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-3 pl-4');
            $(".uni-fourth-col").addClass('pl-5 ml-3');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
            $(".copyright-div").addClass('hidden');
            $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
            $(".copyright-main-div").toggleClass('h-16 h-28');
            $(".copyright-div-hidden").addClass('pl-11 py-3');
            $(".socialmedia-div").addClass('pl-10 pt-3');
            $(".flags").addClass('pl-0');
            $(".university-style").addClass('pl-0');
        } else if ($(window).width() == 828) { // Other type
            $(".main-right-div").toggleClass('offset-md-3 offset-md-0');
            $(".main-right-div").addClass('ml-md-1');
            $(".flags").toggleClass('justify-center justify-start');
            $(".flags").addClass('pl-4');
            $(".bangladesh-superdiv").toggleClass('col-md-2 col-md-1');
            $(".comp1-div").addClass('col-md-6 md:pl-5');
            $(".comp2-div").addClass('col-md-6 md:pl-44');
            $(".comp3-div").addClass('col-md-6 md:pl-5');
            $(".comp4-div").addClass('col-md-6 md:pl-44');
            $(".comp-address").toggleClass('col-md-6 col-md-12').addClass('md:pl-5');
            $(".copyright-main-div").toggleClass('md:justify-center md:justify-start');
            $(".copyright-div").addClass('md:pl-10');
            $(".socialmedia-div").addClass('offset-md-3 md:pl-12');
        } else if ($(window).width() == 375) { // iPhone X
            $(".inner-left-div").removeClass('pl-4 ml-1');
            $(".main-right-div").addClass('ml-3');
            $(".right-nav").toggleClass('gap-x-8 gap-x-3');
            $(".login-btn").toggleClass('ml-16 ml-0');
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-4 pl-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-4 pl-3');
            $(".university-style-2").addClass('ml-4 pl-5');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
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
            $(".bangladesh-div").toggleClass('pt-3 pt-0');
            $(".pakistan-div").toggleClass('pt-3 pt-0');
            $(".ksa-div").toggleClass('pt-3 pt-0');
            $(".qatar-div").toggleClass('pt-3 pt-0');
            $(".uae-div").toggleClass('pt-3 pt-0');
            $(".uni-first-col").toggleClass('col-6 col-4');
            $(".uni-first-col>.university-style").addClass('ml-4 pl-3');
            $(".uni-third-col").toggleClass('col-6 col-4');
            $(".uni-third-col>.university-style").addClass('ml-4 pl-3');
            $(".university-style-2").addClass('ml-4 pl-5');
            $(".view-all-div").addClass('pl-5');
            $(".segment3").addClass('pl-0 pt-4 mt-3');
            $(".segment5").addClass('ml-3 pl-4');
            $(".comp1-div").addClass('col-6 pl-10');
            $(".comp2-div").addClass('col-6 pl-5');
            $(".comp3-div").addClass('col-6 pl-10');
            $(".comp4-div").addClass('col-6 pl-5');
            $(".footer-center-2").addClass('pt-1 pl-0');
            $(".copyright-div").addClass('hidden');
            $(".copyright-div-hidden").toggleClass('hidden visible col-7 col-12');
            $(".copyright-main-div").toggleClass('h-16 h-28');
            $(".copyright-div-hidden").addClass('pl-11 py-3');
            $(".socialmedia-div").addClass('pl-10 pt-3');
        } else if ($(window).width() == 800) { // Samsung Galaxy Tab 10 (samsung pad)
            $(".main-right-div").toggleClass('offset-md-2 offset-md-0');
            $(".uni-first-col").toggleClass('col-md-3 col-md-2');
            $(".uni-second-col").toggleClass('col-md-3 col-md-2');
            $(".uni-third-col").toggleClass('col-md-3 col-md-2');
            $(".uni-fourth-col").toggleClass('col-md-3 col-md-2');
            $(".uni-first-col").addClass('md:ml-8');
            $(".uni-second-col").addClass('md:ml-12');
            $(".uni-third-col").addClass('md:ml-20');
            $(".uni-fourth-col").addClass('md:ml-20');
            $(".view-all-div").addClass('pl-4 ml-2');
            $(".bangladesh-superdiv").toggleClass('col-md-2 col-md-1');
            $(".flags").addClass('gap-3 pl-3');
            $(".pakistan-div").parent().toggleClass('col-md-2 col-md-1')
            $(".flags").toggleClass('justify-center justify-start');
            $(".section1").addClass('pl-4');
            $(".comp1-div").parent().addClass('pl-4');
            $(".copyright-main-div").toggleClass("md:justify-center md:justify-start");
            $(".copyright-div").addClass("md:pl-9");
            $(".socialmedia-div").addClass("offset-md-3 md:pl-14");
            $(".comp-address").toggleClass('col-md-6 col-md-12');
            $(".comp1-div").toggleClass('col-md-6 col-md-8');
            $(".comp3-div").toggleClass('col-md-6 col-md-8');
            $(".comp2-div").toggleClass('col-md-6 col-md-4').addClass('md:pl-12');
            $(".comp4-div").toggleClass('col-md-6 col-md-4').addClass('md:pl-12');
        } else if ($(window).width() == 1024) { // iPad Pro
            $(".main-right-div").toggleClass('offset-lg-3 offset-lg-2');
            $(".login-btn").toggleClass('lg:ml-0 lg:ml-2');
            $(".view-all-div").addClass('pl-4 ml-2');
            $(".bangladesh-superdiv").toggleClass('col-md-2 col-md-1');
            $(".flags").addClass('gap-5 pl-4 ml-2').toggleClass('justify-center justify-start');;
            $(".pakistan-div").parent().toggleClass('col-md-2 col-md-1')
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
        } else if ($(window).width() == 1920) { // Desktop viewport 1
            $(".main-right-div").toggleClass('offset-lg-3 offset-lg-5');
            $(".view-all-div").addClass('pl-4 ml-2');
            $(".flags").addClass('gap-16 lg:pl-8');
            $(".section1").addClass('pl-5');
            $(".comp1-div").parent().addClass('pl-4');
            $(".copyright-main-div").toggleClass("lg:justify-around lg:justify-start");
            $(".copyright-div").addClass("pl-4 ml-2").toggleClass('ml-2 ml-5').toggleClass('lg:text-right lg:text-left');
            $(".socialmedia-div").addClass("offset-lg-6 lg:pl-44");
            $( ".section1-child").toggleClass('col-lg-6 col-lg-5');
            $( ".footer-center-2").toggleClass('justify-center justify-start');
            $( ".footer-center-2").toggleClass('pl-4 lg:pl-20');
            $(".comp1-div").addClass('lg:pl-32');
            $(".comp2-div").addClass('lg:pl-32');
            $(".comp3-div").addClass('lg:pl-32');
            $(".comp4-div").addClass('lg:pl-32');
        } else if ($(window).width() == 1280) { // MS Surface
            $(".view-all-div").addClass('lg:ml-10');
            $(".flags").toggleClass('justify-center justify-start').addClass('lg:gap-9 lg:pl-6');
            $(".footer-center-2").addClass('lg:pl-10').toggleClass('justify-center justify-start');
            $(".section1").addClass('lg:pl-2');
            $(".copyright-main-div").toggleClass('lg:justify-around lg:justify-start');
            $(".copyright-div").addClass('text-left lg:pl-9');
            $(".socialmedia-div").addClass('offset-lg-6 lg:pl-24');
            $(".comp1-div").addClass('lg:pl-16');
            $(".comp2-div").addClass('lg:pl-16');
            $(".comp3-div").addClass('lg:pl-16');
            $(".comp4-div").addClass('lg:pl-16');
        }
    });
</script>

</body>

</html>
