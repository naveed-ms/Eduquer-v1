@extends('layouts.app')
<link rel="stylesheet" href="css/faqs.css">
    <link rel="stylesheet" href="css/we-understand.css">

@include('layouts.partials.header')
@include('layouts.partials.we_all_understand')
{{-- @section('content') --}}
<div class="accordion">
    <div class="accordion1">
        <div class="get-to-know">
            <h1>Get to know eduquer inside and out<h1>
        </div>
        <div class="question">
            <h2>Frequently Asked Question</h2>
        </div>
        <div class="accordion-item  p-4">
            <button class="accordion-button" id="accordion-button-1">
                <span>What is the your name.What is the your name? </span>
                <span class="icon">
                    <img src="images/down-4.png" class="up1" id="up1" alt="">
                </span>
            </button>
            <div class="accordion-content p-4" id="accordion-content-1">
                <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quisquam,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. </p>
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quisquam,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.
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
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam,Lorem ipsum dolor sit amet
                    consectetur adipisicing elit. Quisquam,
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Quisquam Lorem ipsum dolor sit amet
                    consectetur adipisicing elit.
                </p>
            </div>
        </div>
    </div>
    <script>
        $(document).ready(function() {
            $('.accordion-content').hide();
            $('#accordion-button-1').on('click', () => {
                $('#accordion-content-1').toggle();
                $('#accordion-content-2').hide();
                $('#accordion-content-3').hide();
                $('#accordion-content-4').hide();
                $('#up1').toggleClass('rotate');
                $('#up2').removeClass('rotate');
                $('#up3').removeClass('rotate');
                $('#up4').removeClass('rotate');

            })
            $('#accordion-button-2').on('click', () => {
                $('#accordion-content-2').toggle();
                $('#accordion-content-1').hide();
                $('#accordion-content-3').hide();
                $('#accordion-content-4').hide();
                $('#up2').toggleClass('rotate');
                $('#up1').removeClass('rotate');
                $('#up3').removeClass('rotate');
                $('#up4').removeClass('rotate');
            })
            $('#accordion-button-3').on('click', () => {
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
{{-- @endsection --}}
@include('layouts.partials.footer2')
