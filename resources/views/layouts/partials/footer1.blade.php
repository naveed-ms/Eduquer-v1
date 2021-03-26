{{-- @extends('layouts.app') --}}

{{-- @section('landingpage_styles') --}}
<style>



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
/* margin: 0px auto 0px; */
}

.mobile-copyright1 {
    display: block;
    font-size: 0.8rem;
    font-family: 'Segoe UI'!important;
    color: white;

    padding-top: 2.4rem;
    text-align: center;
    padding-bottom: 4vh;
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

    padding-top: 3vh;
    text-align: center;
    padding-bottom: 3vh;
}
.mobile-copyright {
display: block !important;
}

.desktop-copyright {
display: none !important;
}
}
/* ================================================footer-mobile-end====================================================================== */
</style>

<div class="container1">
    <div class="row footer-mobile">
        <div class="row justify-center ">
                <div class=" font-bold text-white section1">
                    <div class="segment1">Have any question in your mind?
                        Let's know ! We are here help you.
                    </div>
                </div>
                <div class="colw  ">
                    <div class="segment3  " style="">
                        <button class=" started-button1 bg-white justify-center  " onclick=" window.location='{{ route("login") }}'"  style="color:#1d3270;">Get
                            Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
        </div>
        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;">
        </div>
                <div class=" Mississauga">
                    <i class="fa fa-map-marker pb-4  " aria-hidden="true"></i> <br>&nbsp;17-3615 Laird Road,<br>Mississauga, ON L5L 5Z8
                </div>
                <div class="phone">
                    <i class="fa fa-phone pb-4  " aria-hidden="true"></i> <br>&nbsp;416-868-1000
                </div>
                <div class="print">
                    <div class=""><i class="fa fa-print pb-4  " aria-hidden="true"></i> <br>&nbsp;416-869-1000</div>
                </div>
                <div class="email3 ">
                    <div class=""><i class="fa fa-envelope pb-4  " aria-hidden="true"></i> <br>&nbsp;<a
                            href="mailto:info@eduquer.com">info@eduquer.com</a></div>
                </div>
        <div class=" social-media justify-center flex ">
            <a href="#!">
                <div class="rounded-full mr-3 w-14 h-14 pt-2  text-center bg-white"><i class="  fa fa-facebook fa-lg"
                        style="color: #3b5998" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-14 h-14 pt-2 text-center bg-white"><i class="  fa fa-twitter fa-lg"
                        style="color:#55acee" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-14 h-14 pt-2 text-center bg-white"><i class="  fa fa-instagram fa-lg"
                        style="color: #e84393;" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full w-14 h-14 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg"
                        style="color: #e84118;" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
    <div class=" row footer-desktop" style="background: rgb(32,64,123);">
        <div class="row">
            <div class=" font-bold text-white desktop-section1">
                <div class="segment1">Have any question in your mind? <br>
                    Let's know ! We are here help you.
                    <button class=" desktop-started-button1  bg-white" onclick="window.location='{{route("login")}}'" style="color:#1d3270 ;;">Get
                        Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

        <div class="row" style="width:100%; ">
            <div class="col">
                <div class="text-white segment5 ">
                  <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;17-3615 Laird Road, Mississauga,
                    <br>Ontario L5L 5Z8, Canada
                 </div>
                 <div class="w-auto h-auto"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;905-845-5515</div>
                 <div class="w-auto h-auto"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;905-845-5516</div>
                 <div class="w-auto h-auto"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="mailto:info@eduquer.com">info@eduquer.com</a></div>
                </div>
            </div>
            <div class="col">
                <div class="text-white desktop-segment6">
                  <div class="">
                    <h1>OUR COMPANY</h1>
                 </div>
                <div class="pt-2 ">
                 <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Our Team</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Contact Form</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Join Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="text-white desktop-segment6">
                  <div class="">
                    <h1>OUR POLICIES</h1>
                 </div>
                <div class="pt-2 ">
                 <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Privacy Policy</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Accessibility</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Term Of Use</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Payment Policies</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                </div>
                </div>
            </div>
            <div class="col">
                <div class="text-white desktop-segment6">
                  <div class="">
                    <h1>Our Services</h1>
                 </div>
                <div class="pt-2 ">
                 <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Students</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Universities</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> F.A.Q</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                 <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Our Blog</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                 </div>
                </div>
                </div>
            </div>
        </div>
    </div>

    <!-- copyright section -->
    <div class="mobile-copyright ">
        <div class="mobile-copyright1 text-white" style="background-color: #1d3270;">Copyright © 2020. All right reserved.
        </div>
    </div>
    <div class="desktop-copyright" style="">
        <div class="row" style="background-color: #1d3270;">
            <div class="copy-right-one text-white col  ">Copyright © 2020. All right reserved. </div>
            <div class="copy-right-two col flex justify-end gap-8 " style="margin-right:2vw;margin-top:2rem;margin-bottom:3rem">
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-facebook" style="color:#55acee ;border-radius: 100%; width: 4vw;height:4vw;padding-top: 1vw;font-size: 2vw; " aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-twitter "
                            style="color:#55acee ;border-radius: 100%;
                            width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw; " aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-instagram "
                            style="color: #e84393;border-radius: 100%;width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw;" aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i
                            class="fa fa-youtube-play " style="color: #e84118 ;border-radius: 100%;width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw;" aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
    </div>
</div>

    {{-- @endsection --}}
