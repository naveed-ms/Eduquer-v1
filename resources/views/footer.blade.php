


@extends('layouts.app')
<style>
 i.w-auto.h-auto {
     color: transparent;-webkit-text-stroke-width: 1px;-webkit-text-stroke-color:white
 }
 .container {
     background-color: #3b5998;
 }
 .section1{
    padding-top: 60px;
    padding-bottom: 30px;
    padding-left: 40px;
}
.segment1{
    float:right;
    ;
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
    float: right;
    padding-right: 40px;
    padding-top:40px;
}
.segment6{
    float: right;
    padding-right: 150px;
    padding-top:20px;
}
.container1{
    width: 100%;
    /* background-image{!!file_get_contents('images/landing page/footer_bg.svg')!!} */
    /* background-image: {!! file_get_contents('images/girl.svg') !!}; */
    background-image: url("images/footer.png");
    /* background-size: 1500px 100px; */
    /* background-repeat: repeat; */



}
</style>

<div class="container1">

 <div class="row section1 justify-around content-center w-full">
     <div class="col-lg-6 col-md-6 col-sm-3  ">
     <div class="text-3xl  font-bold text-white">
         <div class="segment1">Have any question in your mind?</div><br>
         <div class="segment2">Let's know ! We are here help you.</div>
     </div>
    </div>
    <div class="col-lg-6 col-md-6 col-sm-3">
     <div class="segment3" style="">
         <button class="w-36 h-10 rounded bg-white theme-text-1 font-medium" onclick="window.location='{{ route("login") }}'"  style="color:#1d3270">Get Started&nbsp;&nbsp;<i class="fa fa-arrow-right" aria-hidden="true"></i></button>
     </div>
   </div>
 </div>

 <div class="row" style="width:100%;  ;border-bottom: 1px solid #4684af;"></div>

 <div class="row pb-5  justify-around content-center w-full">
    <div class="col-lg-3 col-md-6 col-sm-6  ">
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

    <div class="col-lg-3 col-md-6 col-sm-3">

     <div class="text-whie segment6">
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
    <div class="col-lg-3 col-md-6 col-sm-3 float-left">

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
       <div class="col-lg-3 col-md-6 col-sm-3 ">

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
<div class="row justify-around content-center w-full h-16 m-0" style="background-color: #1d3270;">
 <div class="col-md-3 text-right pt-1 ml-5 text-white">Copyright © 2020. All right reserved. </div>
 <div class="col-md-2 flex gap-2 mr-24">
     <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-facebook fa-lg" style="color: #3b5998" aria-hidden="true"></i></div></a>
     <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-twitter fa-lg" style="color:#55acee" aria-hidden="true"></i></div></a>
     <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-instagram fa-lg" style="color: #e84393;" aria-hidden="true"></i></div></a>
     <a href="#!"><div class="rounded-full w-10 h-10 pt-2 text-center bg-white"><i class="fa fa-youtube-play fa-lg" style="color: #e84118;" aria-hidden="true"></i></div></a>
 </div>
</div>
</div>
<!-- copyright section over -->

<!-- footer over -->



























































{{--


@extends('layouts.app')



<style>
.section1{
background: olivedrab;
border: solid black 1px;
width: 400px;
height :100px;
padding: 0px;
margin: 0px;
}
.subsection1_1{
background-color: blue;
width:400px;
height:400px;
border: solid black 1px;
padding: 0px;
margin: 0px;
}



</style>

@section('content')

<div class="container">

    <div class="row section1">

        <div class="col-lg-3 subsection1_1 ">




        </div>

            <div class="col-lg-3 subsection1_2">



            </div>






        </div>

</div>





@endsection --}}
