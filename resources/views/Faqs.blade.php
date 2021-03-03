@extends('layouts.app')


    <style>
body{
    background-color: #fff;
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


        *{
            margin: :0;
            padding:0;
            box-sizing:border-box;
        }
        img{
            width: 20px;
            height: 20px;
            float: right;
            padding-right:
        }
        .question{
            display: flex;
            justify-content: :center;
            align-items:center;

        }
        .question h2{
            margin: 80px auto 10px;
            font-family: Segoe UI;
            font-size: 30px;
           color: 182f72;
           }


        .accordion{
            width: 100%;
            background-color: #fff;
            height: 100%;
            display: flex;
        }
        .accordion1{
            margin: 0 auto;
            padding:64px;
            padding-top: 0px;
            width: 768px;
            /* width: 100%; */
            background: white;
            align-items: center;


        }
        .accordion-content{
            background-color: eef9ff;

        }
        .accordion-item{
            border-bottom: 1px solid black;
        }
        .accordion-item button{

            position: relative;
            text-align: left;
            display: block;
            width: 100%;
            padding: 4px;
            font-size:1.15rem;
            border:none;
            outline:none;
            color:black;
            background-color:#fff;
            font-style: bold;
            font-family: Segoe UI;
        }

        .accordion-item button:hover{
            cursor:pointer;
        }
        .accordion-contenet p{
            font-size: 1rem;
            /* padding-bottom: :20px; */


        }
        .accordion-button{
            display: flex;
            justify-content: space-between !important;
        }
        @media(max-width:768px){
            html,body{
                overflow-x: :hidden
            }
            body{
                margin: :0px;
                align-items:center;
            }
            .accordion{
                width: 100%;
            }
            .question h3{
                width :90%;
            }

            .rotate{
                transition:0.6s;
                -webkit-transform: rotate(180deg);
                -moz-transform:rotate(180deg);
                -ms-transform:rotate(180deg);
                -o-transform:rotate(180deg);
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


    <div class="accordion">
        <div class="accordion1">
            <div class="question">

                <h2>Frequently asked question</h2></div>

            <div class="accordion-item  p-4">

                    <button class="accordion-button" id="accordion-button-1">
                            <span>What is the your name </span>
                            <span class="icon">
                            <img src="images/down-4.png" class="up1" id="up1" alt="">
                            </span>
                    </button>
                    <div class="accordion-content p-4" id="accordion-content-1">
                        <p>
                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                            nobis odio praesentium deleniti nulla facere esse tempora ratione consectetur unde omnis odit hic,
                            nemo accusantium, ipsa illo natus quia? Culpa?
                        </p>
                    </div>
            </div>

        <div class="accordion-item g-white p-4">

            <button class="accordion-button" id="accordion-button-2">
                <span>What is the your name </span>
                <span class="icon">
                <img src="images/down-4.png" class="up2" id="up2" alt="">
                </span>
            </button>
        <div class="accordion-content p-4" id="accordion-content-2">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                 nobis odio praesentium deleniti nulla facere esse tempora ratione consectetur unde omnis odit hic,
                  nemo accusantium, ipsa illo natus quia? Culpa?
            </p>
        </div>
        </div>

        <div class="accordion-item  p-4">

            <button class="accordion-button" id="accordion-button-3">
                <span>What is the your name </span>
                <span class="icon">
                <img src="images/down-4.png" class="up3" id="up3" alt="">
                </span>
            </button>
        <div class="accordion-content p-4" id="accordion-content-3">
            <p>
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,
                 nobis odio praesentium deleniti nulla facere esse tempora ratione consectetur unde omnis odit hic,
                  nemo accusantium, ipsa illo natus quia? Culpa?
            </p>
        </div>
        </div>
        </div>


<script>
$(document).ready(function(){
              $('.accordion-content').hide();
                   $('#accordion-button-1').on('click',() => {
                        $('#accordion-content-1').toggle();
                        $('#accordion-content-2').hide();
                        $('#accordion-content-3').hide();
                        $('#accordion-content-4').hide();
                        $('#up1').toggleClass('rotate');
                        $('#up2').removeClass('rotate');
                        $('#up3').removeClass('rotate');
                        $('#up4').removeClass('rotate');

        })
        $('#accordion-button-2').on('click',() => {
                         $('#accordion-content-2').toggle();
                        $('#accordion-content-1').hide();
                        $('#accordion-content-3').hide();
                        $('#accordion-content-4').hide();
                        $('#up2').toggleClass('rotate');
                        $('#up1').removeClass('rotate');
                        $('#up3').removeClass('rotate');
                        $('#up4').removeClass('rotate');
        })
        $('#accordion-button-3').on('click',() => {
                        $('#accordion-content-3').toggle();
                        $('#accordion-content-1').hide();
                        $('#accordion-content-2').hide();
                        $('#accordion-content-4').hide();
                        $('#up3').toggleClass('rotate');
                        $('#up1').removeClass('rotate');
                        $('#up2').removeClass('rotate');
                        $('#up4').removeClass('rotate');
        })
    })


</script>

</div>
@include('layouts.partials.footer1')

@endsection
