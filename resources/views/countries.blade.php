@extends('layouts.app')





<style>
    .ee{
        width: 110px;
    }
    h3{
        text-align: center;
    }
   .container
        {
        background-color: ffffff;
        justify-content: center;
        }

    /* .row{
        width: 100%;
         } */
    .sec1{
        bottom: 0;
        font-size: 50PX;
        text-align: center;
        padding-top:20px;
         }

    .sec2{
        width: 100%;
        /* background-color: darkgreen; */
        /* justify-content: center; */
        }

    .y2{

        font-family: Segoe UI;
        color:ffffff;
        font-size:70px;
        width: 100%;
        text-align: center;
        }
    .y1{
        font-family: Segoe UI;
        color:black;
        font-size:25px;
        width: 100%;
        text-align: center;
        /* padding-top: 10px; */
        }
        .y2{
        font-family: Segoe UI;
        color:1d3270;
        font-size:70px;
        width: 100%;
        text-align: center;
        padding-bottom: 6px;
        }
    .k1{
        /* background-color: fuchsia; */
        border-right: 1px solid black;
        /* justify-content: center; */
         /* justify-content:center;  */
         text-align: center;
         padding: 8px;
        }

    .k2{
        /* background-color: fuchsia; */
        border-right:1px solid black;
        /* align-items: center;        */
        /* align-items: center; */
        text-align: center;
        padding: 8px;
        }

    .k3{

    text-align: center;
    border-right:1px solid black;
    padding: 8px;
        }

    .k4{
        text-align: center;
        padding: 8px;
          }

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
       background-image: url("images/footer1-bg.png");
   }
   @media only screen and (max-width: 600px) {

.footer-center-2
{
    /* float: center; */
    /* justify-content: center; */
    padding-left: 180px;
    /* margin:0 !important; */

}

}
@media only screen and (max-width: 990px) {

.footer-center-2
{
    /* float: center; */
    /* justify-content: center; */
    padding-left: 180px;
    /* margin:0 !important; */

}

}
.fa-facebook {
        padding-top: 6px;
    }
    .fa-twitter {
        padding-top: 6px;
    }
    .fa-instagram {
        padding-top: 6px;
    }
    .fa-youtube-play {
        padding-top: 6px;
    }
</style>


@include('layouts.partials.header')
@include('layouts.partials.we_all_understand')

@section('content')

<div class="container">
    <div class="row ">
        <div class="y1">
    <br><br> we are the main reason
        </div>
    </div>
        <div class="row">
            <div class="y2">
                Access to More Opportunities <br>
            </div>
        </div>

        {{-- {!! file_get_contents('images/girl.svg') !!} --}}
<div class="row">
    <div class="k1 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
      <div>{!!file_get_contents('images/aus2.svg')!!}</div><br>
        <h3 class="h3">Australia</h3><br><br>{!!file_get_contents('images/Group_1.svg')!!}


    </div>
    <div class="k2 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center" >
        <div>{!!file_get_contents('images/canada2.svg')!!}</div><br>
        <h3 class="h3">Canada</h3><br><br>{!!file_get_contents('images/group2.svg')!!}


    </div>
    <div class="k3 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
        <div>{!!file_get_contents('images/uk2.svg')!!}</div><br>
        <h3 class="h3">U.K</h3><br><br>{!!file_get_contents('images/group3.svg')!!}


    </div>
    <div class="k4 col-lg-3 col-md-6 col-sm-12 flex flex-col items-center">
       <div>{!!file_get_contents('images/us2.svg')!!}</div><br>
        <h3 class="h3">U.S.A</h3><br><br>
        {!!file_get_contents('images/group4.svg')!!}


    </div>
</div>
<script>
    AOS.init();
  </script>

</div>
</div>

@include('layouts.partials.footer1')
@endsection



