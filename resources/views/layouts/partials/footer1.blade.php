@extends('layouts.app')

@section('landingpage_styles')
<style>

    /* .container {
        background-color: #3b5998;
    } */
    .section1{
       padding-top: 60px;
       padding-bottom: 30px;
       padding-left: 40px;
   }
   .segment1{
       float:right;
       }
   .segment2{
       float:right;
       padding-bottom: 10px;
   }

   .segment3{
       float:left;
       padding-top:20px;
       padding-left: 40px;
   }

   .segment5{
       /* float: right; */
       /* padding-right: 50px; */
       padding-top:40px;
       /* padding-left:130px; */
   }
   .segment6{
       /* float: right; */
       /* padding-right: 80px; */
       padding-top:20px;
   }
   .container1{
       width: 100%;
       /* background: #1d3270 !important; */
       background: rgb(31,61,121) !important;
background: linear-gradient(0deg, rgba(31,61,121,1) 0%, rgba(46,160,202,1) 92%, rgba(46,160,202,1) 100%, rgba(46,160,202,1) 100%) !important;


   }
   @media only screen and (max-width:360px){

    .footer-center-2{
        padding-left: 180px !important;
    }

   }
   @media only screen and (max-width:768px){
    .footer-center-2{
        padding-left: 180px;
    }
   }
   @media only screen and (max-width:992px){
    .footer-center-2{
        padding-left: 180px;
    }

   }
   @media only screen and (max-width:1200px){
    .footer-center-2{
        padding-left: 80px;
    }


   }
   @media only screen and (max-width:1280px){
    .footer-center-2{
        padding-left: 80px;
    }
   }
   @media only screen and (max-width:1440px){

    .footer-center-2{
        padding-left: 80px;
    }
   }

   @media only screen and (max-width:1600px){
    .footer-center-2{
        padding-left: 80px;
    }
   }

   @media only screen and (max-width: 576px) {

.footer-center-2
{
    /* float: center; */
    /* justify-content: center; */
    padding-left: 180px;
    /* margin:0 !important; */

}

}

@media only screen and (min-width:993px) and (max-width:1200px) {
    .copyright-div {
        margin-left: 74px !important;
        padding-top: 10px !important;
    }
}


   </style>
@endsection
{{-- @section('content') --}}

<div class="container1">

    <div class="row section1 w-full">
        <div class="section1-child col-lg-6 col-md-6 col-sm-3">
        <div class="text-3xl font-bold text-white">
            <div class="segment1">Have any question in your mind?</div><br>
            <div class="segment2">Let's know ! We are here help you.</div>
        </div>
       </div>
       <div class="col-lg-6 col-md-6 col-sm-3">
        <div class="segment3" style="">
            <button class="w-36 h-10 rounded bg-white theme-text-1 font-medium" href="#" style="color:#1d3270">Get Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
                    </div>
      </div>
    </div>

    <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

    {{-- <div class="row pb-5 lg:pl-44 content-center w-full lg:gap-24"> --}}
        <div class="row pb-5 justify-center mx-auto  footer-center-2"style="width:100%; ">
       <div class="comp-address col-lg-4 col-md-6 col-sm-6  ">
        <div class="text-white segment5 ">
            <div>
                <i class="fa fa-map-marker" aria-hidden="true"></i>&nbsp;17-3615 Laird Road, Mississauga,<!--fa fa-map-marker-alt -->
                <div class="pl-3">Ontario L5L 5Z8, Canada</div>
            </div>
            <div class="w-auto h-auto"><i class="fa fa-phone" aria-hidden="true"></i>&nbsp;905-845-5515</div>
            <div class="w-auto h-auto"><i class="fa fa-print" aria-hidden="true"></i>&nbsp;905-845-5516</div>
            <div class="w-auto h-auto"><i class="fa fa-envelope" aria-hidden="true"></i>&nbsp;<a href="mailto:info@eduquer.com">info@eduquer.com</a></div>
           </div>
       </div>

       <div class="comp1-div col-lg-2 col-md-6 col-sm-3 ">

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
       </div>

       <div class="comp2-div col-lg-2 col-md-6 col-sm-3 ">
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
        </div>
          <div class="comp3-div col-lg-2 col-md-6 col-sm-3 ">

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
          </div>

          <div class="comp4-div col-lg-2 col-md-6 col-sm-3 ">
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
         </div>


   </div>
   </div>

   <!-- copyright section -->
   <div class="copyright-main-div row lg:justify-around sm:justify-center md:justify-center content-center w-full h-16 m-0" style="background-color: #1d3270;">
    <div class="copyright-div col-7 col-sm-6 col-md-5 col-lg-3 lg:text-right lg:pt-1 md:pt-1 sm:pt-1 lg:mt-0 md:mt-0 sm:mt-0 pt-2 sm:mt-0 ml-0 sm:ml-5 text-white">Copyright © 2020. All right reserved. </div>
    <div class="socialmedia-div col-2 col-sm-4 col-md-3 col-lg-2 flex gap-2 sm:mr-12 mr-24">
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg" style="color: #3b5998" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg" style="color:#55acee" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg" style="color: #e84393;" aria-hidden="true"></i></div></a>
        <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg" style="color: #e84118;" aria-hidden="true"></i></div></a>
    </div>
    <div class="copyright-div-hidden col-7 col-sm-6 col-md-5 col-lg-3 lg:text-right lg:pt-1 md:pt-1 sm:pt-1 lg:mt-0 md:mt-0 sm:mt-0 pt-2 sm:mt-0 ml-0 sm:ml-5 text-white hidden">Copyright © 2020. All right reserved. </div>
   </div>
   </div>
   {{-- @endsection --}}
