@extends('layouts.app')

@section('landingpage_styles')
    <style>
        body {
            font-size: 62.2%;
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

        /* .segment5 {
            padding-top: 40px;
        } */

        .segment6 {
            padding-top: 20px;
        }

        .container1 {
            width: 100%;
            background: rgb(31, 61, 121) !important;
            background: linear-gradient(0deg, rgba(31, 61, 121, 1) 0%, rgba(46, 160, 202, 1) 92%, rgba(46, 160, 202, 1) 100%, rgba(46, 160, 202, 1) 100%) !important;
        }

        .footer-mobile {
            display: none !important;

        }

        .footer-desktop {
            display: block !important;
        }

        @media only screen and (max-width:600px) {
            .section1 {
                text-align: center;
                padding-top: 15vw;
                font-size: 40vw !important;
                font-family: Segoe UI;
                width: auto;
            }

            .footer-mobile {
                display: block !important;
            }

            .footer-desktop {
                display: none !important;
            }
        }

    </style>
@endsection
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
                <div class="colw  ">
                    <div class="segment3  " style="">
                        <button class=" started-button1 rounded-pill bg-white   " href="#" style="color:#1d3270 ;;">Get
                            Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>
                </div>
            </div>
        </div>

        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

        {{-- mobile --}}
        <div class=" Mississauga">
            <i class="fa fa-map-marker pb-4  " aria-hidden="true"></i> <br>&nbsp;17-3615 Laird Road,<br> Mississauga,Ontario
            L5L 5Z8, Canada
        </div>
        <div class="phone">
            <i class="fa fa-phone pb-4 " aria-hidden="true"></i> <br>&nbsp;905-845-5515
        </div>
        <div class="print">
            <div class=""><i class="fa fa-print pb-4" aria-hidden="true"></i> <br>&nbsp;905-845-5516</div>
        </div>
        <div class="email3 pb-4">
            <div class=""><i class="fa fa-envelope pb-4 " aria-hidden="true"></i> <br>&nbsp;<a
                    href="mailto:info@eduquer.com">info@eduquer.com</a></div>

        </div>

        <div class=" social-media flex gap-8 ">
            <a href="#!">
                <div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg"
                        style="color: #3b5998" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg"
                        style="color:#55acee" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg"
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
                        <button class=" desktop-started-button1 rounded bg-white   " href="#" style="color:#1d3270 ;;">Get
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
                    <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;17-3615 Laird Road, Mississauga , <br>Ontario L5L 5Z8, Canada
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
                <div class=""> <h1>Company</h1></div>
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

        {{-- <div class="comp4-div col-lg-2 col-md-6 col-sm-3 ">
            <div class="text-white segment6">
                <div class="text-2xl ">Company</div>
                <div class="pt-2 text-sm">
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
        </div> --}}
    </div>
</div>
<!-- copyright section -->
<div class="mobile-copyright ">
    {{-- mobile --}}
    <div class="mobile-copyright1 text-white" style="background-color: #1d3270;">Copyright © 2020. All right reserved.
    </div>
</div>
<div class="desktop-copyright">

    <div class="row" style="background-color: #1d3270;">
    <div class=" text-white copy-right-one">Copyright © 2020. All right reserved. </div>
    <div class="copy-right-two flex gap-2 ">
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg" style="color: #3b5998" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg" style="color:#55acee" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg" style="color: #e84393;" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg" style="color: #e84118;" aria-hidden="true"></i></div></a>
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
