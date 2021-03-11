{{-- @extends('layouts.app') --}}

{{-- @section('landingpage_styles') --}}
<style>
    /* ===================================================footer-desktop================================================================================================ */

    .footer-desktop {
        display: block !important;
    }

    .footer-mobile {
        display: none !important;

    }

    .desktop-section1 {
        padding-top: 10vh;
        padding-down: 20vh;
        font-size: 3vw;
        padding-left: 8vw;
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
        display: block;
        padding-bottom: 17vh !important;
        font-size: 1.5vw !important;
        padding-top: 11vh !important;
        padding-left: 8vw !important;

    }

    .desktop-segment6 {
        padding-bottom: 17vh;
        font-size: 1.5vw !important;
        padding-top: 11vh;
        padding-left: 3vw;
    }

    .mobile-copyright {
        display: none !important;

    }

    .copy-right-one {
        display: block;
        padding-left: 9vw;
        font-size: 1.4vw;
        padding-top: 1rem;
        padding-bottom: 1rem;
    }

    .copy-right-two {
        padding-left: 46vw !important;
        padding-top: 1.5rem;
        padding-bottom: 1.5rem;
    }

    .container1 {
        width: 100%;
        background: rgb(31, 61, 121) !important;
        background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
    }

    .desktop-copyright {
        display: block !important;
    }




    /*=========================================================== footer-desktop-end========================================================


            /* ===================================================footer-Mobile start ================================================== */

    @media only screen and (max-width:600px) {

.copy-right-two {
    display: none !important;
}

.segment3 {
    justify-content: center !important;
}

.mobile-copyright1 {
    font-size: 0.8rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;

    padding-top: 2.4rem;
    text-align: center;
    padding-bottom: 10vh;
    justify-content: center;
}

.section1 {
    margin-bottom: 2rem !important;
    justify-content: center !important;
    text-align: center;
    padding-top: 4rem;
    font-size: 2rem !important;
    font-family: Segoe UI;
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
    display: block !important;

}

.footer-desktop {
    display: none !important;
}

.Mississauga {
    font-size: 1.7rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.phone {
    font-size: 1.7rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.print {
    font-size: 1.7rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.email3 {
    font-size: 1.7rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;
    padding-left: 7vw;
    padding-right: 6vw;
    padding-top: 2.4rem;
    text-align: center
}

.social-media {
    font-size: 1.7rem;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    color: white;

    padding-top: 2.4rem;
    text-align: center;
    padding-bottom: 10vh;
}
.mobile-copyright {
display: block !important;
}
.mobile-copyright1 {
display: block !important;
}

.desktop-copyright {
display: none !important;
}
}


    /* =================================================footer-Mobile end ================================================== */

</style>
{{-- @endsection --}}
{{-- @section('content') --}}
<div class="container1">


    {{-- <div class="row pb-5 lg:pl-44 content-center w-full lg:gap-24"> --}}
    <div class="row footer-mobile">

        <div class="row ">
            <div class=" colw ">
                <div class=" font-bold text-white section1">
                    <div class="segment1">Have any question in your mind?
                        Let's know ! We are here help you.
                    </div>
                </div>

                <div class="segment3 justify-center" style="">
                    <button class=" started-button1 bg-white   " href="#" style="color:#1d3270 ;">Get
                        Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>

            </div>
        </div>

        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

        {{-- mobile --}}
        <div class=" Mississauga">
            <i class="fa fa-map-marker pb-4  " aria-hidden="true"></i> <br>&nbsp;17-3615 Laird Road,
            Mississauga,<br> Ontario
            L5L 5Z8, Canada
        </div>
        <div class="phone">
            <i class="fa fa-phone pb-4 " aria-hidden="true"></i> <br>&nbsp;905-845-5515
        </div>
        <div class="print">
            <div class=""><i class="fa fa-print pb-4" aria-hidden="true"></i> <br>&nbsp;905-845-5516</div>
        </div>
        <div class="email3 ">
            <div class=""><i class="fa fa-envelope pb-4 " aria-hidden="true"></i> <br>&nbsp;<a
                    href="mailto:info@eduquer.com">info@eduquer.com</a></div>

        </div>

        <div class=" social-media justify-center  flex ">
            <a href="#!">
                <div class="rounded-full mr-3 w-10 h-10 pt-2 text-center bg-white"><i class="  fa fa-facebook fa-lg"
                        style="color: #3b5998" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-10 h-10 pt-2 text-center bg-white"><i class="  fa fa-twitter fa-lg"
                        style="color:#55acee" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-10 h-10 pt-2 text-center bg-white"><i class="  fa fa-instagram fa-lg"
                        style="color: #e84393;" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg"
                        style="color: #e84118;" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
    <div class="footer-desktop">
        <div class="row ">

            <div class=" font-bold text-white desktop-section1">
                <div class="segment1">Have any question in your mind? <br>
                    Let's know ! We are here help you.
                    <button class=" desktop-started-button1 bg-white   " href="#" style="color:#1d3270 ;;">Get
                        Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>





        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>


    </div>
    <div class=" row " style="width:100%; ">
        <div class="col  ">
            <div class="text-white segment5 ">
                <div>
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;17-3615 Laird Road, Mississauga ,
                    <br>Ontario L5L 5Z8, Canada
                    <!--fa fa-map-marker-alt -->
                    {{-- <div class="pl-3">Ontario L5L 5Z8, Canada</div> --}}
                </div>
                <div class="w-auto h-auto"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;905-845-5515</div>
                <div class="w-auto h-auto"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;905-845-5516</div>
                <div class="w-auto h-auto"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a
                        href="mailto:info@eduquer.com">info@eduquer.com</a></div>
            </div>
        </div>
        <div class="col">
            <div class="text-white desktop-segment6">
                <div class="">
                    <h1>Company</h1>
                </div>
                <div class="pt-2 ">
                    <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Products</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Contact</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
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
                <div class="">Company</div>
                <div class="pt-2 ">
                    <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Products</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Contact</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="col ">

            <div class="text-white desktop-segment6">
                <div class="">Company</div>
                <div class="pt-2">
                    <div class="" x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Products</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Product 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 2</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Product 3</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Contact</a>
                        <ul class="pl-3" x-show="isOpen">
                            <li><a href="#!" style="text-decoration: none;">> Link 1</a></li>
                            <li><a href="#!" style="text-decoration: none;">> Link 2</a></li>
                        </ul>
                    </div>
                    <div x-data="{ isOpen: false }">
                        <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> About Us</a>
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
    {{-- mobile --}}

    <div class="mobile-copyright1 justify-center text-white" style="background-color: #1d3270;">Copyright © 2020. All
        right
        reserved.K;LK;LK;LK;LK
    </div>


</div>
<div class="desktop-copyright">

    <div class="row" style="background-color: #1d3270;">
        <div class=" text-white copy-right-one">Copyright © 2020. All right reserved. </div>
        <div class="copy-right-two flex gap-2 ">
            <a href="#!">
                <div class="rounded-full pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg h-10 w-12 text-3xl"
                        style="color: #3b5998" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full  pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg h-10 w-12 text-3xl"
                        style="color:#55acee" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full  pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg h-10 w-12 text-3xl"
                        style="color: #e84393;" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full  pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg h-10 w-12 text-3xl"
                        style="color: #e84118;" aria-hidden="true"></i></div>
            </a>
        </div>
        {{-- <div class="copyright-div-hidden  col-sm-6 col-md-6 col-lg-6 lg:text-right lg:pt-1 md:pt-1 sm:pt-1 lg:mt-0 md:mt-0 sm:mt-0 pt-2 sm:mt-0 ml-0 sm:ml-5 text-white hidden">Copyright © 2020. All right reserved. </div> --}}
    </div>
</div>
{{-- <div class="copyright-main-div row lg:justify-around sm:justify-center md:justify-center content-center w-full h-16 m-0" style="background-color: #1d3270;">
    <div class="copyright-div col-7 col-sm-6 col-md-5 col-lg-3 lg:text-right lg:pt-1 md:pt-1 sm:pt-1 lg:mt-0 md:mt-0 sm:mt-0 pt-2 sm:mt-0 ml-0 sm:ml-5 text-white">Copyright © 2020. All right reserved. </div>
    <div class="socialmedia-div col-2 col-sm-4 col-md-3 col-lg-2 flex gap-2 sm:mr-12 mr-24">
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg" style="color: #3b5998" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg" style="color:#55acee" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg" style="color: #e84393;" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg" style="color: #e84118;" aria-hidden="true"></i></div></a>
    </div>
    <div class="copyright-div-hidden col-7 col-sm-6 col-md-5 col-lg-3 lg:text-right lg:pt-1 md:pt-1 sm:pt-1 lg:mt-0 md:mt-0 sm:mt-0 pt-2 sm:mt-0 ml-0 sm:ml-5 text-white hidden">Copyright © 2020. All right reserved. </div>
   </div> --}}
</div>
{{-- @endsection --}}
