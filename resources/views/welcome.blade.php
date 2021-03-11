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
        /* ===================================================Landing-page-desktop start ================================================== */
        html {}
        .it-work {
        font-size: 2rem !important;
        margin-top: 1.5rem;
        padding: 1rem 2.7rem 1rem 2.5rem;
       background-color:#1d3270;
       color:white;
    }
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

        .container1 {
            width: 100%;
            background: rgb(31, 61, 121) !important;
            background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
        }

        .easy_6 {
            font-size: 6rem;
            padding-top: 11rem;
            padding-bottom: 6rem;
        }

        .img2 {
            display: none !important;
        }

        .img1 {
            display: block !important;
            padding-left: 6.8vw;
            padding-right: 6.8vw;
            background: white;
        }

        .started-button {
            font-size: 2rem !important;
            margin-top: 3.5rem;
            padding: 1rem 2.7rem 1rem 2.5rem;

        }



        .what-we1 {
            padding-top: 5.8rem;
            padding-left: 7.3rem;
        }

        .what-we {
            padding-top: 16vh;
            text-align: right;
            font-size: 1.7rem;
            padding-right: 9.4rem;


        }

        .learn-more {
            margin-left: -5vw;
            margin-bottom: 0.2rem;
            margin-top: 2.2rem;
            padding-top: 10px;
            padding-bottom: 10px;
            border-radius: 14px;
        }

        .recommended {
            font-size: 1.8rem;
            padding-top: 14.4rem;
            padding-left: 7.3rem;
            color: #9e9e9e;




        }

        .Oppurtunities {
            padding-left: 7.3rem;
            font-size: 6rem;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

        }

        .partnerships {
            padding-left: 7.3rem;
            color: #9e9e9e;
            font-size: 2rem;
            padding-right: 15rem;
            padding-top: 2rem;
        }

        .reputation {
            padding-left: 7.3rem;
            color: #dedede;
            font-size: 1.4rem;
            padding-right: 15rem;
            padding-top: 2rem;


        }

        .mobile-vesrion-uni {
            display: none;
        }

        .desktop-flags {
            display: block !important;

        }

        .mobile-flags {
            display: none;
        }

        .desktop-vesrion-uni {
            display: block !important;
            padding-top: 15.2rem;
            padding-right: 2vw;

        }

        .view-all1 {
            padding-left: 35vw;
        }

        .view-all2 {
            font-size: 2rem;
            padding-left: 3vw;
            padding-right: 3vw;
            padding-top: 2.5vh;
            padding-bottom: 2.5vh;
            border: solid 8px;
            border-radius: 14px;
        }

        .our-countries {
            padding-top: 5rem;
            padding-bottom: 4.8rem;
        }

        .pdng {
            padding-right: 4vw;

        }

        .theme-bg-2 {
            background-color: #effaff;
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

        /* ===================================================footer-desktop================================================================================================ */
        .mobile-copyright {
            display: none;

        }



        .desktop-copyright {
            display: block;
        }

        .desktop-section1 {
            padding-top: 10vh;
            padding-down: 20vh;
            font-size: 3vw;
            padding-left: 8vw;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        }

        .desktop-started-button1 {
            margin-left: 10vw;
            margin-bottom: 1vh;
            font-size: 2vw;
            padding-top: 1vh;
            padding-bottom: 1vh;
            padding-left: 2vw;
            padding-right: 2vw;
            border-radius: 18px;
        }

        .segment5 {
            padding-bottom: 17vh;
            font-size: 1.5vw;
            padding-top: 11vh;
            padding-left: 8vw;

        }

        .desktop-segment6 {
            padding-bottom: 17vh;
            font-size: 1.5vw !important;
            padding-top: 11vh;
            padding-left: 3vw;
        }

        .copy-right-one {
            padding-left: 9vw;
            font-size: 1.4vw;
        }

        .copy-right-two {
            padding-left: 46vw;
            /* padding-top: 2vh; */
        }

        .footer-desktop {
            display: block !important;
        }

        .footer-mobile {
            display: none !important;

        }

        /*=========================================================== footer-desktop-end======================================================== */

        /*=========================================================== Mobile version======================================================== */

        @media only screen and (max-width:600px) {
            /*=========================================================== Landing-Page-Mobile-start======================================================== */

            .easy_6 {
                font-size: 2.6rem;
                padding-top: 4.2rem;
                padding-bottom: 4.8rem;
            }

            .img2 {
                display: block !important;
                padding-left: 12vw;
                background: white;
            }

            .img1 {
                display: none !important;
            }


            .started-button {

                font-size: 2rem !important;
                margin-top: 10vh;
                padding: 1rem 2.7rem 1rem 2.5rem;
                border-radius: 15px;
                margin-bottom: 10vh;

            }

            .what-we1 {
                padding-left: 5.3rem !important;
                padding-right: 4.3rem !important;
                margin-top: 4.1rem !important;
                padding-top: 1rem !important;
            }

            .what-we {
                padding-top: 0rem !important;
                text-align: center;
                font-size: 1.7rem !important;
                padding-right: 3.4rem !important;
                padding-left: 4.5rem !important;
                margin-bottom: 2.6rem !important;
            }

            .recommended {
                font-size: 0.9rem;
                text-align: center;
                padding-left: 5.1rem;
                padding-right: 5.6rem;
                padding-top: 4rem;

            }

            .Oppurtunities {
                font-size: 2.6rem;
                text-align: center;
                padding-left: 7.6rem;
                padding-right: 7.1rem;
                font-family: Segoe UI;
                padding-bottom: 2.0rem;
            }

            .partnerships {
                text-align: center;
                padding-left: 4.3rem;
                padding-right: 3.6rem;
                font-size: 1.6rem;
            }

            .reputation {
                text-align: center;
                padding-left: 4.5rem;
                padding-right: 3.8rem;
                padding-bottom: .2rem;
                font-size: 1.1rem;

            }

            .desktop-flags {
                display: none !important;
            }

            .mobile-flags {
                display: block !important;
            }


            .mobile-vesrion-uni {
                display: block !important;

            }

            .desktop-vesrion-uni {
                display: none !important;
            }

            .view-all {

                width: 12.1rem;
                height: 2.8rem;
                font-size: 1rem !important;
                margin-bottom: 5.2rem;
                margin-top: 2.5rem;
                border-radius: 9px;
            }

            .view-all3 {
                padding-left: 32vw;

            }

            .learn-more {
                margin-left: -5vw;
                margin-bottom: 5.2rem;
                margin-top: 2.2rem;
                padding-top: 10px;
                padding-bottom: 10px;
                border-radius: 14px;
            }

            .our-countries {
                padding-top: 5rem;
                padding-bottom: 4.8rem;
            }

            .gorilla1 {
                background: #effaff !important;
                padding-bottom: 6rem;
            }

            /* ===================================================Landing-Page-Mobile end ================================================== */


            /* ===================================================footer-Mobile start ================================================== */
            .mobile-copyright1 {
                padding-top: 2.1rem;
                font-size: 1.2rem;
                color: white;
                padding-bottom: 2.3rem;
                padding-left: 25vw;
            }

            .section1 {
                text-align: center;
                padding-top: 4.9rem;
                font-size: 2.6rem !important;
                font-family: Segoe UI;
                width: auto;
                padding-left: 3.0rem;
                padding-right: 3.1rem !important;
            }

            .started-button1 {
                width: 13.1rem;
                font-size: 1.2rem;
                padding-top: 1.1rem;
                padding-bottom: 1.1rem;
                border-radius: 80px;
                margin-left: 30vw;
                margin-top: 3rem;
                margin-bottom: 3rem;
                border-radius: 18px;
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
                line-height: 7vh;
                font-size: 2rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                padding-left: 6vw;
                padding-right: 5.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .phone {
                line-height: 7vh;
                font-size: 2rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                padding-left: 6vw;
                padding-right: 5.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .print {
                line-height: 7vh;
                font-size: 2rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                padding-left: 6vw;
                padding-right: 5.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .email3 {
                line-height: 7vh;
                font-size: 2rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                padding-left: 6vw;
                padding-right: 5.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .social-media {
                padding-bottom: 2rem;
                padding-top: 8vh;
                /* padding-left: 27vw; */
            }

            .mobile-copyright {
                display: block;
            }

            .desktop-copyright {
                display: none;
            }
        }

        /* =================================================footer-Mobile end ================================================== */




        /* =====================================================media queries ends=========================================================== */

    </style>
</head>

<body>

    <!-- 1. Main header section -->
    <!-- Main header section over -->
    @include('layouts.partials.header')
    <div class="container-fluid theme-bg-2 px-0 overflow-hidden" style="background-color: #effaff;">
        <!-- 1. We all understand section -->
        @include('layouts.partials.we_all_understand')
        {{-- ======================================[we understand code here]======================================================================================= --}}
        <!-- 2. Easy 6 Steps section -->
        <div class="row bg-white justify-center content-end  font-bold easy_6" data-aos="fade-up"
            data-aos-duration="2000" data-aos-easing="ease-in-quad" style="color:#1d3270;">Easy 6
            Step Process</div>
        <div class="img1  animate__animated   animate__bounceIn justify-center content-center " data-aos="zoom-in">
            @svg('images/landing page/s6-5.svg', )</div>
        <div class="img2 animate__animated  animate__bounceIn" data-aos="zoom-in">@svg('images/landing page/mobile-step-6.svg', )</div>
        {{-- <div class="row bg-white  justify-center">
            <button class=" text-white text-base started-button " data-aos="fade-left" data-aos-duration="200"
                data-aos-easing="ease-in-quad " href=" #" style="background-color:#1d3270;">Get
                Started&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
        </div> --}}
        <div class=" row justify-center bg-white ">
            <button class=" it-work mb-5 " href="#" >Get Started</button>
        </div>
        <!-- Easy 6 steps section over -->
        <!-- 3. What we do section -->
        <div class="row  theme-bg-2pt-4  ">
            <div class="col-lg  what-we1" data-aos="fade-down" data-aos-duration="2500" data-aos-easing="ease-in-quad">
                <div>@svg('images/landing page/what_we_do_img.svg' ,style="width: 100% ;height:100%")</div>
            </div>
            <div class=" col-lg    what-we  " data-aos="fade-up" data-aos-duration="200" data-aos-easing="ease-in-quad">
                <div class="tracking-widest text-md pt-5" style="color:#899ea7">ABOUT US</div>
                <div class="font-bold text-6xl pt-1" style="color:#1d3270 " data-aos="fade-up">What We Do</div>
                <p class="pt-4">We provide a wide range of services to support you with your
                    international education needs. If you are dreaming of studying abroad, we will get you there. From
                    course information to career advice, we are dedicated to you and your future.</p>
                {{-- <div class="text-2lg " data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <button class=" text-white learn-more " href="#"
                        style="background-color:#1d3270; width:13.2rem; font size:1.2rem;">Learn
                        More</button>

                </div> --}}
                <div class="">
                    <button class=" it-work " href="#" >learn More</button>
                </div>
            </div>
        </div>
        <!-- What we do section over -->
        <!-- 4. Access to more opportunities section -->
        {{-- ==================================================================================================================================================== --}}
        <div class="gorilla">
            <div class="row   bg-white our-countries   animate__animated animate__bounceIn" style="width:100%;">

                <div class="col-lg-6 col-md-12 col-sm-12 our-countries-1  " data-aos="fade-right"
                    data-aos-duration="1500" data-aos-easing="ease-in-quad">
                    <div class="recommended" style="font-size: 0.9rem;text">OUR *RECOMMENDED UNIVERSITIES</div>
                    <div class="font-bold Oppurtunities" style="color:#1d3270">Access to More <br> Opportunities
                    </div>
                    <p class=" partnerships">Éduquer has built partnerships with 1,200+
                        colleges, universities, primary, and secondary
                        schools around the world.</p>
                    <div class=" reputation my-2" style="color:#c9c9c9; font-size: 10px;">
                        <p>*Éduquer recommends these universities & colleges based on their performance and reputation.
                            Éduquer may not be associated with all of these universities and colleges.</p>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="desktop-vesrion-uni">
                        <div class="row">
                            <div class="col ">
                                <div>
                                    <div class="w-30 h-40 pb-5 pt-5 pl-3 pr-4">@svg('images/landing page/partner universities/The University of Sydney Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Toronto Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/City University of New York Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Kent Logo.svg', )</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="w-30 h-40 pl-3 pr-4  ">@svg('images/landing page/partner universities/The University of Queensland Logo.svg')</div>
                                <div class="w-30 h-40 pl-3 pr-4 pt-5 ">@svg('images/landing page/partner universities/The University of Western Australia Logo.svg')</div>
                                <div class="w-30 h-40 lg:mr-8  ">@svg('images/landing page/partner universities/Mcgill University Logo1.svg','h-full w-full' )</div>
                                <div class="w-30 h-40 pl-3 pr-4 pt-5 ">@svg('images/landing page/partner universities/University of Washington Logo.svg', )</div>
                            </div>
                            <div class="col">
                                <div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/The University of Adelaide Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/York University Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Baltimore Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of East London Logo.svg' )</div>
                                </div>
                            </div>
                            <div class="col">
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Liverpool Logo.svg', )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Waterloo Logo.svg', )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Texas Logo.svg' )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Nottingham Logo.svg' )</div>

                            </div>
                        </div>
                        {{-- <div class="view-all1 ">
                            <button class=" bg-white view-all2    " href="#" style="border: 2px solid #1d3270;">View
                                All</button>
                        </div> --}}
                        <div class=" row justify-end">
                            <button class=" it-work " href="#" style="border: 2px solid #1d3270 color:blue">View All</button>
                        </div>
                    </div>
                    <div class=" mobile-vesrion-uni">
                        @svg('images/landing page/university-group.svg' ,'w-full h-full');
                        {{-- <div class="view-all3">
                            <button class=" bg-white view-all   " href="#" style="border: 2px solid #1d3270;">View
                                All</button>
                        </div> --}}
                        <div class=" row justify-center">
                            <button class=" it-work " href="#" >View All</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- University images over -->
        {{-- ===================================================================================================================================================== --}}
        <!-- Access to more opportunities section over -->
        <!-- 5. We are helping section -->
        <div class="gorilla1">
            <div class="row text-center our-countries ">
                <div class="col" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div style="color:#899ea7; letter-spacing: 2px; font-size: 15px;">OUR COUNTRIES</div>
                    <p class="font-bold text-6xl pt-2 mb-0" style="color:#1d3270">We are helping students in the
                        following
                        countries</p>
                    <div class="text-center pt-3 " style="color:#2f2f2f;font-size:1.2rem">We are helping students
                        from the
                        following countries</div>
                </div>
            </div>
            <div class="row  flags justify-center pl-3 pr-3 pb-4 pt-4">
                <div class="mobile-flags">@svg('images/complete-flags.svg','w-full h-full')
                </div>
                <div class="desktop-flags ">
                    <div class="row  flags ">

                        <div class="col pb-3 pdng " data-aos="fade-left" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/veitnam1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-5">
                                <div>@svg('images/landing page/country flags/China1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                        <div class="col  pb-3 pdng " data-aos="fade-right" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/Hong kong1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/Malaysia1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                        <div class="col pb-3 pdng" data-aos="fade-left" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/Bangladesh1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/Indonesia1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                        <div class="col pb-3 pdng  m-0" data-aos="fade-right" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class=" pt-3">
                                <div>@svg('images/landing page/country flags/Pakistan1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/Turkey1.svg', 'w-full h-full' )</div>
                            </div>
                        </div>
                        <div class="col  pdng pb-3  " data-aos="fade-left" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/KSA1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/Kuwait1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                        <div class="col  pb-3  pdng  " data-aos="fade-right" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/Qatar1.svg', 'w-full h-full')</div>
                            </div>
                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/Srilanka1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                        <div class="col pb-3 pdng " data-aos="fade-left" data-aos-duration="500"
                            data-aos-easing="ease-in-quad">
                            <div class="pt-3">
                                <div>@svg('images/landing page/country flags/UAE1.svg', 'w-full h-full')</div>
                            </div>

                            <div class="pt-3 ">
                                <div>@svg('images/landing page/country flags/India1.svg', 'w-full h-full')</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- We are helping section over -->
    <div class="footer">
        @include('layouts.partials.footer1')
    </div>

</body>

</html>
