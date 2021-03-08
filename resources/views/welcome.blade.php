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
        html {}

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


        .footer-desktop {
            display: block !important;
        }

        .footer-mobile {
            display: none !important;

        }

        .segment1 {
            float: right;
        }

        .segment2 {
            float: right;
            padding-bottom: 10px;
        }

        /* .segment3 {
            float: left;
            padding-top: 20px;
            padding-left: 40px;
        } */

        .segment5 {
            /* float: right; */
            /* padding-right: 50px; */
            /* padding-top: 40px; */
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

        .easy_6 {
            font-size: 6rem;
            padding-top: 11rem;
            padding-bottom: 6rem;
        }

        /* .img2 {
            display: block !important;
    padding-left: 13vw;

        } */
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
            /* margin-left: 4rem; */

        }

        .mobile-copyright {
            display: none;

        }

        .mobile-copyright1 {
            padding-top: 2.1rem;
            font-size: 1.2rem;
            color: white;
            padding-bottom: 2.3rem;
            padding-left: 25vw;
        }

        .desktop-copyright {
            display: block;
        }
        .what-we1 {
                padding-top: 5.8rem;
    padding-left: 7.3rem;
            }
            .what-we{
                padding-top: 16vh;
    text-align: right;
    font-size: 1.7rem;
    padding-right: 9.4rem;
    /* padding-left: -4.5rem; */
    /* line-height: 4.58rem !important; */

            }
            .learn-more {
                margin-left: -5vw;
                margin-bottom: 5.2rem;
                margin-top: 2.2rem;
                padding-top: 10px;
                padding-bottom: 10px;
            }
            .recommended{
                font-size: 1.8rem;
                padding-top: 14.4rem;
                padding-left: 7.3rem;
                color:#9e9e9e;

                /* padding-bottom: .3rem */



            }
            .Oppurtunities{
                padding-left: 7.3rem;
                font-size: 6rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;

            }
            .partnerships{
                padding-left: 7.3rem;
                color: #9e9e9e;
                font-size: 2rem;
                padding-right: 15rem;
                padding-top: 2rem;
            }
            .reputation{
                padding-left: 7.3rem;
                color: #dedede;
                font-size:1.4rem;
                padding-right: 15rem;
                padding-top: 2rem;


            }
            .mobile-vesrion-uni{
                display: none;
            }
            .desktop-flags{
                display: block !important;
                /* padding-right:10vw; */
                /* padding-left: 10vw; */
                /* justify-content:center; */
                /* width: 80rem !important; */
                /* padding-left: 13vw; */

            }
            .mobile-flags{
                display: none;
            }
.desktop-vesrion-uni{
    display:block !important;
    padding-top: 15.2rem;
    padding-right: 2vw;

}
.view-all1{
padding-left:30vw;
}
.view-all2{
font-size: 2rem;
padding-left: 5vw;
padding-right: 5vw;
padding-top: 2.5vh;
padding-bottom: 2.5vh;
border: solid 8px
}
.our-countries {
                padding-top: 5rem;
                padding-bottom: 4.8rem;
            }

.pdng{
    padding-right:4vw;

}


/* ===================================================footer-desktop================================================================================================ */

.desktop-section1{
    padding-top: 10vh;
    padding-down: 20vh;
    font-size: 3vw;
    padding-left: 8vw;
    /* margin-left: 2.8rem; */
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
}

.desktop-started-button1{
    margin-left: 10vw;
    margin-bottom: 1vh;
    font-size: 2vw;
    padding-top: 1vh;
    padding-bottom: 1vh;
    padding-left: 2vw;
    padding-right: 2vw;
    }
    .segment5{
        padding-bottom: 17vh;
    font-size: 1.5vw;
    padding-top: 11vh;
    padding-left: 8vw;

    }

.desktop-segment6{
    padding-bottom: 17vh;
    font-size: 1.5vw !important;
    padding-top: 11vh;
    padding-left: 3vw;
}
.copy-right-one{
    padding-left: 9vw;
    font-size: 1.4vw;

}
.copy-right-two{
    padding-left: 46vw;
    /* font-size: 1.4vw; */
    padding-top: 2vh;

}

/* footer-desktop-end======================================================================================== */



        /* ================================media queries set========================================================================== */

        @media only screen and (max-width:600px) {

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
                /* width: 13.1rem !important;
                font-size: 1.2rem !important;
                padding-top: 1.1rem !important;
                padding-bottom: 1.1rem !important;
                border-radius: 80px !important;
                margin-left: 30vw !important;
                margin-right: 6rem !important;
                margin-top: 2rem !important;
                margin-bottom: 5.2rem !important; */
                font-size: 2rem !important;
            margin-top: 3.5rem;
            padding: 1rem 2.7rem 1rem 2.5rem;
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
                /* line-height: 1.58rem !important; */
                margin-bottom: 2.6rem !important;
            }

            .recommended {
                font-size: 0.9rem;
                /* margin-top: 4.8rem; */
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
                /* line-height: .7rem; */
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
            .desktop-flags{
                display: none !important;
            }
            .mobile-flags{
                display: block !important;
            }


            .mobile-vesrion-uni {
                display: block !important;
                /* margin-top: 4.4rem; */
                /* margin-left: 0.5rem; */
                /* margin-right: 0.2rem; */
                /* width: 80vw; */
                /* padding-bottom: 2.5rem; */
            }
            .desktop-vesrion-uni{
                display: none !important;
            }

            .view-all {
                /* margin-left: 30vw; */
                /* margin-right: 50vw; */
                width: 12.1rem;
                height: 2.8rem;
                font-size: 1rem !important;
                margin-bottom: 5.2rem;
                margin-top: 2.5rem;
            }
            .view-all3{
                padding-left:32vw;

            }

            .learn-more {
                margin-left: -5vw;
                margin-bottom: 5.2rem;
                margin-top: 2.2rem;
                padding-top: 10px;
                padding-bottom: 10px;
            }

            .our-countries {
                padding-top: 5rem;
                padding-bottom: 4.8rem;
            }

            .gorilla1 {
                background: #effaff !important;
                padding-bottom: 6rem;
            }



            /* ===================================================footer================================================== */
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
                margin-left: 34vw;
                /* margin-right: 16rem; */
                margin-top: 3rem;
                margin-bottom: 5.2rem;
            }


            .segment5 {
                display: none;
            }

            .desktop-segment6{
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
                font-size: 1.2rem;
                font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                color: white;
                padding-left: 11vw;
                padding-right: 5.1rem;
                padding-top: 2.4rem;
                text-align: center;


            }

            .phone {
                font-size: 1.2rem;
                /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
                color: white;
                padding-left: 20vw;
                padding-right: 9.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .print {
                font-size: 1.2rem;
                /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
                color: white;
                padding-left: 20vw;
                padding-right: 9.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .email3 {
                font-size: 1.2rem;
                /* font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; */
                color: white;
                padding-left: 20vw;
                padding-right: 9.1rem;
                padding-top: 2.4rem;
                text-align: center;
            }

            .social-media {
                padding-bottom: 2rem;
                padding-top: 8vh;
                padding-left: 27vw;
            }

            .mobile-copyright {
                display: block;


            }

            .desktop-copyright {
                display: none;
            }

        }





        /* @media only screen and (min-width:3024px){
            .what-we {
            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;
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

                padding-right: 5%;
                padding-bottom: 20px;
                padding-left: 5%;
            }

            .started-button {
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
                margin-left: 10%;
                padding-top: 50px;
                max-height: 100%;
                max-width: 100%;
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
            }

        }
        @media only screen and (min-width:993px) and (max-width:1920px) {
            .footer-center-2 {

            }
            .what-we1{
                margin-left: 3vw;
            }
            .what-we {

                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;

                padding-top: 60px;

            }

            .weunderstand1 {
                padding-left: 11vw !important;

            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;

                padding-left: 4vw;
                padding-right: 5vw;

            }

            .started-button {
                padding-left: 40vw;
            }


        }

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

            }

            .what-we {

                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;

                padding-top: 60px;

            }

            .weunderstand1 {

            }

            .img2 {
                display: block !important;
            }

            .img1 {
                display: none;
                background: white;

                padding-left: 4vw;
                padding-right: 5vw;

            }

            .started-button {
                padding-left: 40vw;
            }


        }
        @media only screen  and (max-width:828px) {
            .footer-center-2 {

            }

            .what-we {

                margin-left:10vw;

            }

            .weunderstand {
                padding-left: 4vw !important;

                padding-top: 60px;

            }

            .weunderstand1 {

            }

            .img2 {
                display: none;
            }

            .img1 {
                display: block;
                background: white;

                padding-left: 4vw;
                padding-right: 5vw;

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

                padding-left: 38vw;
            }

            .weunderstand {
                padding-left: 20px !important;
                margin-left: 10px !important;
                padding-top: 30px !important;

            }

            .weunderstand1 {

                width: 90vw;
                padding: 0 !important;
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

            }

            .university-style {
                margin-left: 65px !important;
            }


            .weunderstand {

                padding-left: 13px !important;


                padding-top: 27px !important;

            }

            .weunderstand1 {

                margin-left: 40px !important;
                margin-right: 10px !important;


            }

            .img1 {
                display: none;
            }

            .img2 {
                display: block;
                background: white;

                padding-right: 10%;
                padding-left: 10%;
            }

            .started-button {
                padding-top: 5px;

                padding-left: 30%;
                padding-right: 30%;
            }

        }
        @media only screen and (max-width: 390px) {
            .started-button {
                padding-left: 120px;

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

            }

            .weunderstand1 {

                width: 75vw;

            }
        }
        @media only screen and (max-width: 428px) {
            .started-button {
                padding-left: 120px;

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

        /* .weunderstand {
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
            } */




        /* =====================================================media queries ends=========================================================== */



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

        /*
.img2{
    display: none !important;
} */
        /* .img1 {
            display: none;
        }
.img2 {
            display: none;
        }
       .img3 {
            display: none;
        } */

    </style>
</head>

<body>

    <!-- 1. Main header section -->
    <!-- Main header section over -->
    @include('layouts.partials.header')
    <div class="container-fluid theme-bg-2 px-0 overflow-hidden" style="background-color: #effaff;">


        <!-- 1. We all understand section -->
        @include('layouts.partials.we_all_understand')
        <!-- We all understand section over -->
        {{-- ============================================we understand code =========================================================== --}}
        {{-- <div class=" row">

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
        </div> --}}


        {{-- ======================================[we understand code here]======================================================================================= --}}

        <!-- 2. Easy 6 Steps section -->
        <div class="row bg-white justify-center content-end  font-bold easy_6" data-aos="fade-up"
            data-aos-duration="2000" data-aos-easing="ease-in-quad" style="color:#1d3270;">Easy 6
            Step Process</div>
        <div class="img1  animate__animated   animate__bounceIn justify-center content-center " data-aos="zoom-in">
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

        <div class="row bg-white  justify-center">
            <button class=" text-white rounded text-base started-button " data-aos="fade-left" data-aos-duration="200"
                data-aos-easing="ease-in-quad "href=" #" style="background-color:#1d3270;">Get
                Started&nbsp;&nbsp;<i class="fa fa-arrow-right"></i></button>
        </div>


        <!-- Easy 6 steps section over -->

        <!-- 3. What we do section -->



        <div class="row  theme-bg-2pt-4  ">
            {{-- animate__animated animate__fadeInDown --}}
            <div class="col-lg  what-we1" data-aos="fade-down" data-aos-duration="2500"
                data-aos-easing="ease-in-quad">
                <div>@svg('images/landing page/what_we_do_img.svg' ,style="width: 100% ;height:100%")</div>
            </div>
            <div class=" col-lg    what-we  " data-aos="fade-up" data-aos-duration="200"
                data-aos-easing="ease-in-quad">
                {{-- animate__animated animate__fadeInUp --}}

                <div class="tracking-widest text-md pt-5" style="color:#899ea7">ABOUT US</div>
                <div class="font-bold text-6xl pt-1" style="color:#1d3270 " data-aos="fade-up">What We Do</div>
                <p class="pt-4">We provide a wide range of services to support you with your
                    international education needs. If you are dreaming of studying abroad, we will get you there. From
                    course information to career advice, we are dedicated to you and your future.</p>
                <div class="text-2lg " data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <button class=" text-white rounded learn-more " href="#"
                        style="background-color:#1d3270; width:13.2rem; font size:1.2rem;">Learn
                        More</button>

                </div>
            </div>

        </div>
        <!-- What we do section over -->

        <!-- 4. Access to more opportunities section -->
        {{-- ==================================================================================================================================================== --}}
        <div class="gorilla">
            <div class="row   bg-white our-countries   animate__animated animate__bounceIn" style="width:100%;">

                <div class="col-lg-6 col-md-12 col-sm-12 our-countries-1  " data-aos="fade-right" data-aos-duration="1500"
                    data-aos-easing="ease-in-quad">
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
                    {{-- <div class="">
                        <button class=" text-white started-button rounded" href="#"
                            style="background-color:#1d3270;">Get
                            Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div> --}}

                </div>


                <div class="col-lg-6 col-md-12 col-sm-12 ">
                    <div class="desktop-vesrion-uni">
                    <div class="row">

                        <div class="col ">

                                <div>
                                    <div class="w-30 h-40 pb-5 pt-5 pl-3 pr-4">@svg('images/landing page/partner universities/The University of Sydney Logo.svg', )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Toronto Logo.svg',  )</div>
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
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Baltimore Logo.svg',  )</div>
                                    <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of East London Logo.svg' )</div>
                                </div>
                            </div>

                                <div class="col">
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Liverpool Logo.svg', )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Waterloo Logo.svg',  )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Texas Logo.svg' )</div>
                                <div class="w-30 h-40 pb-5 pl-3 pr-4">@svg('images/landing page/partner universities/University of Nottingham Logo.svg' )</div>

                            </div>
                            </div>
                            <div class="view-all1 ">
                                <button class=" bg-white view-all2   rounded " href="#"
                                    style="border: 2px solid #1d3270;">View All</button>
                            </div>
                    </div>
{{-- @svg('images/unio.svg',) --}}
<div class=" mobile-vesrion-uni">

    {{-- @svg('images/unio.svg',) --}}

                        @svg('images/landing page/university-group.svg' ,'w-full h-full');
                        <div class="view-all3">
                            <button class=" bg-white view-all  rounded " href="#"
                                style="border: 2px solid #1d3270;">View All</button>
                        </div>
                    </div>




                </div>

                {{-- animate__animated  animate__lightSpeedInRight --}}

                <!-- University images -->
                {{-- <div class="uni-first-col col-6 px-0 col-lg-2 col-md-3 col-sm-2 " data-aos="zoom-in">
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
                        <div class="w-20 h-28">@svg('images/landing page/partner universities/Mcgill University Logo.svg','w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Western Australia Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Queensland Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Washington Logo.svg', 'w-full h-full')</div>
                    </div>
                </div>
                <div class="uni-third-col col-6 px-0 col-lg-2 col-md-3 col-sm-2  " data-aos="zoom-in">
                    <div class="university-style">
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/The University of Adelaide Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/York University Logo.svg','w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Baltimore Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of East London Logo.svg', 'w-full h-full')</div>
                    </div>
                </div>
                <div class="uni-fourth-col col-6 px-0 col-lg-2 col-md-3 col-sm-2 " data-aos="zoom-in">
                    <div class="university-style university-style-2">
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Liverpool Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Waterloo Logo.svg', 'w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Texas Logo.svg','w-full h-full')</div>
                        <div class="w-28 h-28">@svg('images/landing page/partner universities/University of Nottingham Logo.svg', 'w-full h-full')</div>

                    </div>
                </div> --}}

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
                        {{-- <p class="font-bold text-4xl mb-0" style="color:#1d3270">in the following countries</p> --}}
                        <div class="text-center pt-3 " style="color:#2f2f2f;font-size:1.2rem">We are helping students
                            from the
                            following countries</div>
                    </div>
                </div>


                <div class="row  flags justify-center pl-3 pr-3 pb-4 pt-4" >
                    <div class="mobile-flags">@svg('images/complete-flags.svg','w-full h-full')
                    </div>
                    <div class="desktop-flags ">
                        {{-- @svg('images/desktop-flags.svg') --}}
                        <div class="row  flags " >

                            <div class="col pb-3 pdng " data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\veitnam1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">U.A.E</div> --}}
                                </div>


                                <div class="pt-5">
                                    <div>@svg('images\landing page\country flags\China1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Saudi Arabia</div> --}}
                                </div>
                            </div>

                            <div class="col  pb-3 pdng " data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\Hong Kong1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Kuwait</div> --}}
                                </div>


                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\Malaysia1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Qatar</div> --}}
                                </div>
                            </div>
                            <div class="col pb-3 pdng" data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\Bangladesh1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Turkey</div> --}}
                                </div>


                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\Indonesia1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Pakistan</div> --}}
                                </div>
                            </div>
                            <div class="col pb-3 pdng  m-0" data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class=" pt-3">
                                    <div>@svg('images\landing page\country flags\Pakistan1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">India</div> --}}
                                </div>

                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\Turkey1.svg', 'w-full h-full' )</div>
                                    {{-- <div class="text-center">U.A.E</div> --}}
                                </div>
                            </div>
                            <div class="col  pdng pb-3  " data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\KSA1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Saudi Arabia</div>m-0 --}}
                                </div>

                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\Kuwait1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Kuwait</div> --}}
                                </div>
                            </div>
                            <div class="col  pb-3  pdng  " data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\Qatar1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Qatar</div> --}}
                                </div>

                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\Srilanka1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Turkey</div> --}}
                                </div>
                            </div>
                            <div class="col pb-3 pdng " data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                                <div class="pt-3">
                                    <div>@svg('images\landing page\country flags\UAE1.svg', 'w-full h-full')</div>
                                    {{-- <div class="text-center">Pakistan</div> --}}
                                </div>

                                <div class="pt-3 ">
                                    <div>@svg('images\landing page\country flags\India1.svg',  'w-full h-full')</div>
                                    {{-- <div class="text-center">India</div> --}}
                                </div>
                            </div>

                        </div>
                    </div>




                    {{-- <div class="row justify-center pb-5">
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24 mr-3">
                                            <div>@svg('images\landing page\country flags\Vietnam.svg', 'w-full h-full')</div>
                                            <div class="text-center">Vietnam</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24 mr-3 ">
                                            <div>@svg('images\landing page\country flags\China.svg', 'w-full h-full')</div>
                                            <div class="text-center pt-2">China</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-3">
                                        <div class="w-24 h-24 mr-3 ">
                                            <div>@svg('images\landing page\country flags\Hong Kong.svg', 'w-full h-full')</div>
                                            <div class="text-center pt-2">Hong Kong</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24 mr-3 ">
                                            <div>@svg('images\landing page\country flags\UAE.svg', 'w-full h-full')</div>
                                            <div class="text-center">Malaysia</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24 mr-3">
                                            <div>@svg('images\landing page\country flags\Bangladesh.svg', 'w-full h-full')</div>
                                            <div class="text-center">Bangladesh</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24 mr-3">
                                            <div>@svg('images\landing page\country flags\Indonesia.svg', 'w-full h-full')</div>
                                            <div class="text-center">Indonesia</div>
                                        </div>
                                        </div>
                                        <div class="col-lg-1 col-md-2 col-sm-4">
                                        <div class="w-24 h-24">
                                            <div>@svg('images\landing page\country flags\Srilanka.svg', 'w-full h-full')</div>
                                            <div class="text-center" style="padding-top: 17px;">Srilanka</div>
                                        </div>
                                        </div>
                                    </div> --}}



                    </div>
                    {{-- <div class="col-4 col-lg-1 col-md-1 col-sm-6 col-xs-12 pb-3 pl-1  pr-1 m-2 justify-center"
                    data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3">
                        <div>@svg('images/landing page/country flags/veitnam1.svg', 'w-24 h-24')</div>

                    </div>


                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/China1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-1 col-sm-6  col-xs-12 pl-1  pr-1  pb-3 m-2  justify-center"
                    data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/Hong kong1.svg', 'w-24 h-24')</div>

                    </div>


                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/Malaysia1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="bangladesh-superdiv col-4 col-lg-1 col-md-2 col-sm-6 col-xs-12  pb-3 pl-1  pr-1 m-2 justify-center"
                    data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 bangladesh-div">
                        <div>@svg('images/landing page/country flags/Bangladesh1.svg', 'w-24 h-24')</div>

                    </div>


                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/Indonesia1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-2 col-sm-6   col-xs-12 pb-3 pl-1  pr-1  m-2 justify-center"
                    data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 pakistan-div">
                        <div>@svg('images/landing page/country flags/Pakistan1.svg', 'w-24 h-24')</div>

                    </div>

                    <div class="pt-3">
                        <div>@svg('images/landing page/country flags/Turkey1.svg', 'w-24 h-24' )</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12  pl-1  pr-1 pb-3  m-2 justify-center "
                    data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 ksa-div">
                        <div>@svg('images/landing page/country flags/KSA1.svg', 'w-24 h-24')</div>

                    </div>

                    <div class="pt-3">
                        <div>@svg('images/landing page/country flags/Kuwait1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12  pb-3 pl-1  pr-1 pb-3 m-2 justify-center"
                    data-aos="fade-right" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 qatar-div">
                        <div>@svg('images/landing page/country flags/Qatar1.svg', 'w-24 h-24')</div>

                    </div>

                    <div class=" pt-3">
                        <div>@svg('images/landing page/country flags/Srilanka1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12 pb-3  pl-1  pr-1 pb-3 m-2 justify-center"
                    data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 uae-div">
                        <div>@svg('images/landing page/country flags/UAE1.svg', 'w-24 h-24')</div>

                    </div>

                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/India1.svg', 'w-24 h-24')</div>

                    </div>
                </div>
                <div class="col-4 col-lg-1 col-md-1  col-sm-6 col-xs-12 pb-3  pl-1  pr-1 pb-3 m-2 justify-center"
                    data-aos="fade-left" data-aos-duration="500" data-aos-easing="ease-in-quad">
                    <div class="pt-3 uae-div">
                        <div>@svg('images/landing page/country flags/UAE1.svg', 'w-24 h-24')</div>

                    </div>

                    <div class="pt-3 ">
                        <div>@svg('images/landing page/country flags/India1.svg', 'w-24 h-24')</div>
                    </div>
                </div> --}}

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

        {{-- <script>
    AOS.init();
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
</script> --}}

</body>

</html>
