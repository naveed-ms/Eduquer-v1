{{-- @extends('layouts.app') --}}

{{-- @section('landingpage_styles') --}}

<link rel="stylesheet" href="css/footer2.css">
<div class="container1">
    <div class="row footer-mobile justify-center">
        <div class="row justify-center ">
            <div class=" font-bold text-white section1">
                <div class="segment1">Have any question in your mind?
                    Let's know ! We are here help you.
                </div>
            </div>
            <div class="colw  ">
                <div class="segment3  ">
                    <button class=" started-button1 bg-white justify-center" onclick="window.location='{{ url("login") }}'" style="color:#1d3270;">Get
                        Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;">
        </div>
        <div class=" Mississauga">
            <i class="fa fa-map-marker pb-4  " aria-hidden="true"></i> <br>&nbsp;17-3615 Laird Road,<br>Mississauga, ON
            L5L 5Z8
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
                <div class="rounded-full mr-3 w-14 h-14 pt-3  text-center bg-white"><i class="  fa fa-facebook fa-lg"
                        style="color: #3b5998" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-14 h-14 pt-3 text-center bg-white"><i class="  fa fa-twitter fa-lg"
                        style="color:#55acee" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full mr-3 w-14 h-14 pt-3 text-center bg-white"><i class="  fa fa-instagram fa-lg"
                        style="color: #e84393;" aria-hidden="true"></i></div>
            </a>
            <a href="#!">
                <div class="rounded-full w-14 h-14 pt-3 text-center bg-white"><i class="fa fa-youtube-play fa-lg"
                        style="color: #e84118;" aria-hidden="true"></i></div>
            </a>
        </div>
    </div>
    <div class=" row footer-desktop" style="background: rgb(32,64,123);">
        <div class="row">
            <div class=" font-bold text-white desktop-section1">
                <div class="segment1">Have any question in your mind? <br>
                    Let's know ! We are here help you.
                    <button class=" desktop-started-button1  bg-white   "   onclick="window.location='{{route("login")}}'" style="color:#1d3270 ;;">Get
                        Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                </div>
            </div>
        </div>
        <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

        <div class="row" style="width:100%; ">
            <div class="col">
                <div class="text-white segment5 ">
                    <div style="font-weight: 400;">
                        CONTACT US
                        <BR>
                        <BR>
                    </div>
                    <div style="font-weight: 600;">
                        EDUQUER.CA
                    </div>

                    <div>
                        <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;17-3615 Laird Road,
                        <br>Mississauga, ON L5L 5Z8
                    </div>
                    <div class="w-auto h-auto"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;416-868-1000</div>
                    <div class="w-auto h-auto"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;416-869-1000</div>
                    <div class="w-auto h-auto"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a
                            href="mailto:info@eduquer.com">info@eduquer.com</a></div>
                </div>
            </div>
            <div class="col">
                <div class="text-white desktop-segment6">
                    <div class="">
                        <h1>OUR COMPANY </h1>
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
                            <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Contact
                                Form</a>
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
                            <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Privacy
                                Policy</a>
                            <ul class="pl-3" x-show="isOpen">
                                <li><a href="#!" style="text-decoration: none;">> Our Team</a></li>
                            </ul>
                        </div>
                        <div x-data="{ isOpen: false }">
                            <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">>
                                Accessibility</a>
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
                            <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">> Payment
                                Policies</a>
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
                            <a href="#!" x-on:click=" isOpen = !isOpen" style="text-decoration: none;">>
                                Universities</a>
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
        <div class="mobile-copyright1 text-white" style="background-color: #1d3270;">Copyright © 2020. All right
            reserved.
        </div>
    </div>
    <div class="desktop-copyright" style="">
        <div class="row" style="background-color: #1d3270;">
            <div class="copy-right-one text-white col  ">Copyright © 2020. All right reserved. </div>
            <div class="copy-right-two col flex justify-end gap-8 "
                style="margin-right:2vw;margin-top:2rem;margin-bottom:3rem">
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-facebook"
                            style="color:#55acee ;border-radius: 100%; width: 4vw;height:4vw;padding-top: 1vw;font-size: 2vw; "
                            aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-twitter " style="color:#55acee ;border-radius: 100%;
                            width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw; " aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-instagram "
                            style="color: #e84393;border-radius: 100%;width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw;"
                            aria-hidden="true"></i></div>
                </a>
                <a href="#!">
                    <div class="rounded-full  text-center bg-white"><i class="fa fa-youtube-play "
                            style="color: #e84118 ;border-radius: 100%;width: 4vw;height: 4vw;padding-top: 1vw;font-size: 2vw;"
                            aria-hidden="true"></i></div>
                </a>
            </div>
        </div>
    </div>
</div>

{{-- @endsection --}}
