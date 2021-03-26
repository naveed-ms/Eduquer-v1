@extends('layouts.app')
<style>

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
        background: #effaff;
        color: #1d3270;
        padding-top: 7vh !important;
        padding-left: 0px !important;
        padding-right: 0px !important;

    }

    .logo {
        width: 10vh !important;
        height: 10vw !important;
        font-size: 0px;
        padding-left: 6vw;
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
        margin-top: 2vh;
        padding-left: -20px;
        position: absolute;
        right: 69vw;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 3.2rem;
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
        padding-right: 1vw !important;
        padding-left: 1vw !important;
    }

    .login-btn {
        display: none !important;
    }



    /* =============================================================== header-mobile========================================================================== */


    @media only screen and (max-width: 600px) {
        .navbar-brand {}

        .logo {
            font-size: 0px;
            padding-left: 32vw;
            /* padding-top: 11vh; */
            /* margin: 11px; */
            /* margin-left: 13vw !important; */


        }

        .login-btn {
            font-size: 1.2rem;
            display: block !important;
            width: 7rem;
            top: 14vh;
            display: block !important;
            margin-left: 40vw;
            margin-top: 3vh;
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

    /* =============================================================== header-mobile-end ========================================================================== */


    /* ===================================================footer-desktop-start================================================================================================ */

    .footer-desktop {
        background: rgb(32,64,123);
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
        font-family: 'Segoe UI' !important;
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
        /* background: gold !important; */
        display: block !important;
    }
    .mobile-copyright1 {
    display: none;
    }

    /*=========================================================== footer-desktop-end========================================================
            /* ===================================================footer-Mobile start ================================================== */

    @media only screen and (max-width:600px) {

.copy-right-two {
    display: none !important;
}

.segment3{
margin-bottom: 9vh !important;
/* margin-left: 32vw !important; */
}

.mobile-copyright1 {
    display: block;
    font-size: 0.8rem;
    font-family: 'Segoe UI'!important;
    color: white;

    padding-top: 3vh;
    text-align: center;
    padding-bottom: 3vh;
    justify-content: center;
}

.section1 {
    margin-bottom: 2rem !important;
    justify-content: center !important;
    text-align: center;
    padding-top: 4rem;
    font-size: 2rem !important;
    font-family: Segoe UI !important;
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
    /* background: red; */
    display: block !important;

}

.footer-desktop {
    display: none !important;
}

.Mississauga {
    font-size: 1.7rem;
    font-family: 'Segoe UI' !important;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.phone {
    font-size: 1.7rem;
    font-family: 'Segoe UI'!important;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.print {
    font-size: 1.7rem;
    font-family: 'Segoe UI'!important;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.email3 {
    font-size: 1.7rem;
    font-family: 'Segoe UI'!important;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.social-media {
    font-size: 1.7rem;
    font-family: 'Segoe UI',!important;
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
/* ===========================================================mobile-footer-end================================================= */

    .emailAdd {
        font-size: 3rem !important;
    padding-bottom: 3vh;
    margin-top: 22vh;
    font-weight: 700;
    color: #1d327d;

    }


    .girlClass {
        width: 40vw !important;
        height: 28vh !important;
    }

    button {
        float: right;
        font-size: 10px;
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
    main{
background: #effaff !important;
    }
    .inner-container {
        width: 74vw;
        justify-content: center !important;
        padding-left: 1vw;
        padding-right: 1vw;
        height: 100vh;
        align-content: center;
        align-items: center !important;
        border: solid white 1px;
        border-radius: 5px;
        background-color:#f9fdff;
        box-shadow: 0 0 15px rgba(214, 211, 211, 0.671);
        border-bottom: none;
        margin :0 auto ;
        /* border:1px solid black; */


     }
     /* =============================================input-star=================================================================================== */

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
        font-size: 20px;


    }



/* * ========================================================input-end========================================================================== */ */

    .input1{
margin-top: 20vh;

    }
    .girlClass{
        margin-top: 2vh;
    }
    </style>
@section('content')
@include('layouts.partials.header')
          <div class="inner-container ">
        <div class="row justify-center">
                <div class="col-lg-6 col-md-6 col-sm-12 input1 pl-2 pr-2">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <form method="POST" action="{{ route('password.email') }}">
                        @csrf
                        <div class="emailAdd">
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
                            <button type="submit" class="rounded-pill login-btn2  ml-3 mb-1 pl-5 pr-5 login-btn2  rounded-pill text-white h-20 float-right"
                                style="background-color: #1d327d;">
                                    <span class="text-2xl">Send Reset Link</span>
                                </button>
                        </div>
                    </form>
                </div>
                <div class="col-lg-6 col-md-6 col-sm-12  girlClass">
                    @svg('images/girl.svg')
                </div>

            </div>
        </div>
        <div>
            @include('layouts.partials.footer2')
        </div>
@endsection
