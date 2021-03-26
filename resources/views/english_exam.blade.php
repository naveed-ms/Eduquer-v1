@section('scripts')
    <script>
        $(document).ready(function() {

            $(".ielts_div").hide();
            $(".gmat_div").hide();
            $(".toefl_div").hide();

            $('.ielts_cbox').click(function() {
                $(".ielts_div").toggle('slow');
                if ($('.ielts_cbox').is(":checked")) {
                    $('.toefl_cbox').attr("disabled", true);
                    $('.ielts_cbox').val('IELTS');
                    $('.ielts_reading').prop('required', true);
                    $('.ielts_listening').prop('required', true);
                    $('.ielts_writing').prop('required', true);
                    $('.ielts_speaking').prop('required', true);
                } else {
                    $('.toefl_cbox').removeAttr("disabled");
                    $('.ielts_cbox').val('');
                    $('.ielts_reading').prop('required', false);
                    $('.ielts_listening').prop('required', false);
                    $('.ielts_writing').prop('required', false);
                    $('.ielts_speaking').prop('required', false);
                }
            });
            $('.gmat_cbox').click(function() {
                $(".gmat_div").toggle('slow');
                if ($('.gmat_cbox').is(":checked")) {
                    $('.gmat_cbox').val('GMAT');
                    $('.gmat_verbal_score').prop('required', true);
                    $('.gmat_verbal_rank').prop('required', true);
                    $('.gmat_quo_score').prop('required', true);
                    $('.gmat_quo_rank').prop('required', true);
                    $('.gmat_writing_score').prop('required', true);
                    $('.gmat_writing_rank').prop('required', true);
                    $('.gmat_total_score').prop('required', true);
                    $('.gmat_total_rank').prop('required', true);
                } else {
                    $('.gmat_cbox').val('');
                    $('.gmat_verbal_score').prop('required', false);
                    $('.gmat_verbal_rank').prop('required', false);
                    $('.gmat_quo_score').prop('required', false);
                    $('.gmat_quo_rank').prop('required', false);
                    $('.gmat_writing_score').prop('required', false);
                    $('.gmat_writing_rank').prop('required', false);
                    $('.gmat_total_score').prop('required', false);
                    $('.gmat_total_rank').prop('required', false);
                }
            });
            $('.toefl_cbox').click(function() {
                $(".toefl_div").toggle('slow');
                if ($('.toefl_cbox').is(":checked")) {
                    $('.ielts_cbox').attr("disabled", true);
                    $('.toefl_cbox').val('TOEFL');
                    $('.toefl_reading').prop('required', true);
                    $('.toefl_listening').prop('required', true);
                    $('.toefl_writing').prop('required', true);
                    $('.toefl_speaking').prop('required', true);
                } else {
                    $('.ielts_cbox').removeAttr("disabled");
                    $('.toefl_cbox').val('');
                    $('.toefl_reading').prop('required', false);
                    $('.toefl_listening').prop('required', false);
                    $('.toefl_writing').prop('required', false);
                    $('.toefl_speaking').prop('required', false);
                }
            });

        });

    </script>


@endsection

@extends('layouts.app')

<style>

            .second_step {
        background-color: #f7f7f7;
        font-weight: bold;
    }

    /* ===================================================Scroll Bar-start================================================================ */
    header {
        font-family: 'Lobster', cursive;
        text-align: center;
        font-size: 25px;
    }

    #info {
        font-size: 18px;
        color: #555;
        text-align: center;
        margin-bottom: 25px;
    }

    a {
        color: #074E8C;
    }

    .scrollbar {
        margin-left: 30px;
        float: left;
        height: 300px;
        width: 80vw;
        background: #F5F5F5;
        overflow-y: scroll;
        margin-bottom: 25px;
    }

    .force-overflow {
        min-height: 450px;
    }

    #wrapper {
        /* text-align: center; */
        /* width: 500px; */
        /* margin: auto; */
    }

    #style-2::-webkit-scrollbar-track {
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, 0.3);
        border-radius: 10px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar {
        width: 12px;
        background-color: #F5F5F5;
    }

    #style-2::-webkit-scrollbar-thumb {
        border-radius: 10px;
        -webkit-box-shadow: inset 0 0 6px rgba(0, 0, 0, .3);
        background-color: #D62929;
    }




    /* =====================================================Scrol bar end=============================================================================== */


    /* ==============================================Accordian start======================================================= */

    :root {
        --color-one: #34D1D1;
        --color-two: #2F2235;
        --color-three: #3F3244;
        --color-four: #F2F2F2;
        --color-five: #D1D2D3;
        --color-six: #666666;
        --color-seven: #000000;
        --color-eight: #ffffff;
    }

    html {
        font-family: 'Open Sans', sans-serif;
    }

    .accordion {
        display: flex;
        flex-wrap: wrap;
        height: auto;
        width: 100%;
    }

    .accordion__content {
        order: 1;
        flex-grow: 1;
        width: 100%;
        height: 100%;
        display: none;
    }

    .accordion__label {
        display: block;
        cursor: pointer;
        flex-grow: 1;
        text-align: center;
        padding: 1% 5% 1% 5%;
        background-color: var(--color-four);
        margin-right: 1px;
        border-bottom: 1px solid var(--color-five);
    }

    .accordion__radio {
        display: none;
    }

    .accordion input[type="radio"] {
        display: none;
    }

    .accordion input[type="radio"]+label {
        color: var(--color-six);
        z-index: 1;
    }

    .accordion input[type="radio"]:checked+label {
        background-color: white;
        font-weight: 600;
        border-top: 1px solid var(--color-five);
        border-left: 1px solid var(--color-five);
        border-right: 1px solid var(--color-five);
        border-bottom: none;
    }

    .accordion input[type="radio"]:checked+label+.accordion__content {
        display: flex;
        margin-right: 0;
        border-left: 1px solid var(--color-five);
        border-right: 1px solid var(--color-five);
        border-bottom: 1px solid var(--color-five);
    }

    .accordion__content__image__container {
        width: 40%;
        height: 100%;
        margin-right: 10px;
    }

    .accordion__content__image {
        max-width: 100%;
        max-height: 88%;
        margin: 3%;
        background-color: teal;
    }

    .accordion__content__text {
        width: 75%;
        margin-top: 1%;
        margin-left: 40px;
    }

    .accordion__content__text__title {
        margin-top: 3%;
    }

    .accordion__content__text__horizontal-line {
        border: none;
        border-bottom: 1px solid var(--color-five);
        margin-right: 2%;
    }

    .accordion__content__text__body {
        margin-top: 2%;
        padding-right: 5%;
    }

    @media (max-width: 900px) {
        .accordion {
            border: 1px solid var(--color-five);
        }

        .accordion-tab--status {
            display: inline;
        }

        .accordion__content,
        .accordion__label {
            order: initial;
        }

        .accordion__content {
            flex-direction: column;
        }

        .accordion__label {
            width: 100%;
            margin-right: 0;
            margin-bottom: 1px;
            display: flex;
            justify-content: center;
            font-size: 1.2em;
            padding: 5% 6% 5% 6%;
        }

        .accordion__label:last-child {
            background-color: magenta;
        }

        .accordion__content__image__container {
            width: 100%;
        }

        .accordion__content__image {
            padding: 0;
            margin: 0;
            object-fit: cover;
            height: 300px;
            width: 100%;
        }

        .accordion__content__text {
            font-size: 0.9em;
            margin: 4% 5% 4% 5%;
        }

        .accordion__content__text__title {
            margin: 2% 0 2% 0;
        }

        .accordion__content__text__horizontal-line {
            width: 100%;
        }

        /* .accordion input[type="radio"]+label span:after {
            content: '+';
        } */

        /* .accordion input[type="radio"]:checked+label span:after {
            content: '—';
        } */

        .accordion input[type="radio"]:checked+label {
            border: none;
        }

        .accordion input[type="radio"]:checked+label+.accordion {
            border: none;
        }

        .accordion input[type="radio"]:checked+label+.accordion__content {
            border: none;
        }
    }
    .mobile-view{
        display: none !important;
    }
    .desktop-view{
        display: block; !important;
    }
@media screen and (max-width:600px){
    .desktop-view{
display: none !important;
    }
    .mobile-view{
        display:block !important;
    }
    .mobile-bell {
            padding-left: 1.2vw !important;
            padding-top: 5.73vh !important;
        }

        .mobile-girl {
            padding-left: 64vw !important;
            /* float: right !important; */
            padding-top: 3vh;
        }

        .eduquerlogo-div {
            /* height:13vh;
        padding-left: 12vw; */
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }

        .mobile-bell {
            padding-left: 1.2vw !important;
            padding-top: 5.73vh !important;
        }

        .mobile-girl {
            padding-left: 64vw !important;
            /* float: right !important; */
            padding-top: 3vh;
        }

        .eduquerlogo-div {
            /* height:13vh;
        padding-left: 12vw; */
            display: block;
            margin-left: auto;
            margin-right: auto;
            width: 50%;
        }
        .dashboard-name{
            color: #1d3270;
        }

        /* ============================================toggle-button====================================== */
        .togglebtn {
        /* margin-top: 2vh; */
        /* padding-left: -20px; */
        position: absolute;

        /* right: 69vw; */
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


    /* ==============================================Accordian start===================================================== */


</style>

@section('content')

<div class="desktop-view">

    @include('layouts.partials.dashboard_header')
<div class="container-fluid overflow-hidden">
    <div class="row">

        <div class="col-4 col-md-2 col-lg-2 col-sm-4 md:pl-2">
            <!-- Steps side bar -->
            @include('templates.sidebar_steps')
            <!-- steps sidebar over -->
        </div>

        <div class="col-8 col-md-10 col-lg-10 col-sm-8 px-0">
            <div class="h-full rounded-xl container" style="background-color: rgb(247, 247, 247);">

                <div class="row">

                    <!-- English Exam Type col -->
                    <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto">
                        <div class="">
                            <div class="w-36 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">English Exam Type</div>
                            {{ Form::open(array('url' => 'home/educational-qualification', 'method' => 'post')) }}
                            @csrf
                                <div class="bg-white rounded-xl flex flex-col px-4 pt-3 mt-2 space-y-3 overflow-auto">
                                    <!-- IELTS -->
                                    <div class="flex flex-row gap-1">
                                        <input type="checkbox" name="ielts_cbox" value="" class="checkbox ielts_cbox mt-1">
                                        <label for="ietls">IELTS</label>
                                    </div>
                                    <div class="ielts_div space-y-4">
                                        <input type="text" placeholder="Reading" name="ielts_reading" value="{{ !empty($exam_data) ? $exam_data['ielts_reading'] : '' }}"  class="form-control ielts_reading">
                                        <input type="text" placeholder="Listening" name="ielts_listening" value="{{ !empty($exam_data) ? $exam_data['ielts_listening'] : '' }}"  class="form-control ielts_listening">
                                        <input type="text" placeholder="Writing" name="ielts_writing" value="{{ !empty($exam_data) ? $exam_data['ielts_writing'] : '' }}"  class="form-control ielts_writing">
                                        <input type="text" placeholder="Speaking" name="ielts_speaking" value="{{ !empty($exam_data) ? $exam_data['ielts_speaking'] : '' }}"  class="form-control ielts_speaking">
                                    </div>
                                    <!-- IELTS ends -->

                                    <!-- GMAT -->
                                    <div class="flex flex-row gap-1 pt-3">
                                        <input class="checkbox gmat_cbox mt-1" name="gmat_cbox" type="checkbox" value="">
                                        <label for="gmat" class="">GMAT</label>
                                    </div>
                                    <div class="gmat_div space-y-4">
                                        <input type="text" placeholder="Verbal Score" name="gmat_verbal_score" value="{{ !empty($exam_data) ? $exam_data['gmat_verbal_score'] : '' }}"  class="form-control gmat_verbal_score">
                                        <input type="text" placeholder="Verbal Rank" name="gmat_verbal_rank" value="{{ !empty($exam_data) ? $exam_data['gmat_verbal_rank'] : '' }}"  class="form-control gmat_verbal_rank">
                                        <input type="text" placeholder="Quotative Score" name="gmat_quo_score" value="{{ !empty($exam_data) ? $exam_data['gmat_quo_score'] : '' }}"  class="form-control gmat_quo_score">
                                        <input type="text" placeholder="Quotative Rank" name="gmat_quo_rank" value="{{ !empty($exam_data) ? $exam_data['gmat_quo_rank'] : '' }}"  class="form-control gmat_quo_rank">
                                        <input type="text" placeholder="Writing Score" name="gmat_writing_score" value="{{ !empty($exam_data) ? $exam_data['gmat_writing_score'] : '' }}"  class="form-control gmat_writing_score">
                                        <input type="text" placeholder="Writing Rank" name="gmat_writing_rank" value="{{ !empty($exam_data) ? $exam_data['gmat_writing_rank'] : '' }}"  class="form-control gmat_writing_rank">
                                        <input type="text" placeholder="Total Score" name="gmat_total_score" value="{{ !empty($exam_data) ? $exam_data['gmat_total_score'] : '' }}"  class="form-control gmat_total_score">
                                        <input type="text" placeholder="Total Rank" name="gmat_total_rank" value="{{ !empty($exam_data) ? $exam_data['gmat_total_rank'] : '' }}"  class="form-control gmat_total_rank">
                                    </div>
                                    <!-- GMAT ends -->

                                    <!-- TOEFL -->
                                    <div class="flex flex-row gap-1 pt-3">
                                        <input class="checkbox toefl_cbox mt-1" name="toefl_cbox" type="checkbox" value="">
                                        <label for="toefl" class="">TOEFL</label>
                                    </div>
                                    <div class="toefl_div space-y-4">
                                        <input type="text" placeholder="Reading" name="toefl_reading" value=""  class="form-control toefl_reading">
                                        <input type="text" placeholder="Listening" name="toefl_listening" value=""  class="form-control toefl_listening">
                                        <input type="text" placeholder="Writing" name="toefl_writing" value=""  class="form-control toefl_writing">
                                        <input type="text" placeholder="Speaking" name="toefl_speaking" value=""  class="form-control toefl_speaking">
                                    </div>
                                    <!-- TOEFL ends -->
                                    <div class="flex justify-end mt-0 pt-2 lg:pb-4 md:pb-3 sm:pb-4 pb-3">
                                        <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base" href="{{ url('home/educational-qualification') }}" style="background-color:#1d3270;">Next</button>
                                        {{-- <a href="{{ url('home/educational-qualification') }}" class="w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Next</a> --}}
                                    </div>
                                </div>
                            {{ Form::close() }}
                        </div>
                    </div>
                    <!-- English Exam Type col ends -->

                     <!-- Stored English Exam (second) card -->
                     <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 lg:pl-5">
                        <div class="h-auto rounded border-b-4 text-normal py-2 ml-1" style="width: max-content; border-color: #35ccee;">Summary</div>
                        <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">

                            <div class="card-body rounded-lg pt-3">
                                @if (!empty($exam_data))
                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <div class="form-group row mb-1">
                                                <label for="ielts" class="col col-form-label py-0">IELTS: </label>
                                            </div>
											<div class="form-group row mb-0">
                                                <label for="ielts_reading" class="col col-md-7 col-form-label py-0">Reading: </label>
                                                <label for="ielts_reading" class="col col-md-5 col-form-label py-0"> {{ $exam_data['ielts_reading'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="ielts_listening" class="col col-md-7 col-form-label py-0">Listening:</label>
                                                <label for="ielts_listening" class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_listening'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="ielts_writing" class="col col-md-7 col-form-label py-0">Writing:</label>
                                                <label for="ielts_writing" class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_writing'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="ielts_speaking" class="col col-md-7 col-form-label py-0">Speaking:</label>
                                                <label for="ielts_speaking" class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_speaking'] }}</label>
                                            </div>
                                            <div class="form-group row mb-1">
                                                <label for="gmat" class="col col-form-label py-0">GMAT: </label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_verbal_score" class="col col-md-7 col-form-label py-0">Verbal Score:</label>
                                                <label for="gmat_verbal_score" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_verbal_score'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_verbal_rank" class="col col-md-7 col-form-label py-0">Verbal Rank:</label>
                                                <label for="gmat_verbal_rank" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_verbal_rank'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_quo_score" class="col col-md-7 col-form-label py-0">Quotative Score:</label>
                                                <label for="gmat_quo_score" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_quo_score'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_quo_rank" class="col col-md-7 col-form-label py-0">Quotative Rank:</label>
                                                <label for="gmat_quo_rank" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_quo_rank'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_writing_score" class="col col-md-7 col-form-label py-0">Writing Score:</label>
                                                <label for="gmat_writing_score" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_writing_score'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_writing_rank" class="col col-md-7 col-form-label py-0">Writing Rank:</label>
                                                <label for="gmat_writing_rank" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_writing_rank'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="gmat_total_score" class="col col-md-7 col-form-label py-0">Total Score:</label>
                                                <label for="gmat_total_score" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_total_score'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="gmat_total_rank" class="col col-md-7 col-form-label py-0">Total Rank:</label>
                                                <label for="gmat_total_rank" class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_total_rank'] }}</label>
                                            </div>
                                            <div class="form-group row mb-1">
                                                <label for="toefl" class="col col-form-label py-0">TOEFL: </label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="toefl_reading" class="col col-md-7 col-form-label py-0">Reading: </label>
                                                <label for="toefl_reading" class="col col-md-5 col-form-label py-0"> {{ $exam_data['toefl_reading'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="toefl_listening" class="col col-md-7 col-form-label py-0">Listening:</label>
                                                <label for="toefl_listening" class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_listening'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="toefl_writing" class="col col-md-7 col-form-label py-0">Writing:</label>
                                                <label for="toefl_writing" class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_writing'] }}</label>
                                            </div>
                                            <div class="form-group row mb-0">
                                                <label for="toefl_speaking" class="col col-md-7 col-form-label py-0">Speaking:</label>
                                                <label for="toefl_speaking" class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_speaking'] }}</label>
                                            </div>
                                        </div>
                                    </div>
                                @else
                                    There are no records.
                                @endif
                            </div>
                        </div>
                    </div>
                    <!-- second card ends -->

                    <!-- Profile card -->
                    <div class="col-12 col-md-3 col-lg-2 pt-3 ml-sm-2 ml-md-0 ml-lg-0 lg:pl-5">
                        @include('layouts.partials.profile_comp')
                   </div>
                   <!-- Profile card ends -->

                </div>

            </div>
        </div>

    </div> <!-- main container's row ends -->
</div>
</div>
<div class="mobile-view">
    @include('layouts.partials.dashboard_header1')

    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two"  />
        <label class="accordion__label" for="tab-two"><a href="/home">Step1</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            <div id="wrapper">
                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two " checked/>
        <label class="accordion__label" for="tab-two"><a href="/home/english-exam">Step2 </a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            <div id="wrapper">
                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">
                        <div class="row">

                            <!-- English Exam Type col -->
                            <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto">
                                <div class="">
                                    <div class="w-36 h-auto rounded border-b-4 text-normal py-2"
                                        style="border-color: #35ccee;">
                                        English Exam
                                        Type</div>
                                    {{ Form::open(['url' => 'home/educational-qualification', 'method' => 'post']) }}
                                    @csrf
                                    <div class="bg-white rounded-xl flex flex-col px-4 pt-3 mt-2 space-y-3 overflow-auto">
                                        <!-- IELTS -->
                                        <div class="flex flex-row gap-1">
                                            <input type="checkbox" name="ielts_cbox" value=""
                                                class="checkbox ielts_cbox mt-1">
                                            <label for="ietls">IELTS</label>
                                        </div>
                                        <div class="ielts_div space-y-4">
                                            <input type="text" placeholder="Reading" name="ielts_reading"
                                                value="{{ !empty($exam_data) ? $exam_data['ielts_reading'] : '' }}"
                                                class="form-control ielts_reading">
                                            <input type="text" placeholder="Listening" name="ielts_listening"
                                                value="{{ !empty($exam_data) ? $exam_data['ielts_listening'] : '' }}"
                                                class="form-control ielts_listening">
                                            <input type="text" placeholder="Writing" name="ielts_writing"
                                                value="{{ !empty($exam_data) ? $exam_data['ielts_writing'] : '' }}"
                                                class="form-control ielts_writing">
                                            <input type="text" placeholder="Speaking" name="ielts_speaking"
                                                value="{{ !empty($exam_data) ? $exam_data['ielts_speaking'] : '' }}"
                                                class="form-control ielts_speaking">
                                        </div>
                                        <!-- IELTS ends -->

                                        <!-- GMAT -->
                                        <div class="flex flex-row gap-1 pt-3">
                                            <input class="checkbox gmat_cbox mt-1" name="gmat_cbox" type="checkbox"
                                                value="">
                                            <label for="gmat" class="">GMAT</label>
                                        </div>
                                        <div class="gmat_div space-y-4">
                                            <input type="text" placeholder="Verbal Score" name="gmat_verbal_score"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_verbal_score'] : '' }}"
                                                class="form-control gmat_verbal_score">
                                            <input type="text" placeholder="Verbal Rank" name="gmat_verbal_rank"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_verbal_rank'] : '' }}"
                                                class="form-control gmat_verbal_rank">
                                            <input type="text" placeholder="Quotative Score" name="gmat_quo_score"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_quo_score'] : '' }}"
                                                class="form-control gmat_quo_score">
                                            <input type="text" placeholder="Quotative Rank" name="gmat_quo_rank"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_quo_rank'] : '' }}"
                                                class="form-control gmat_quo_rank">
                                            <input type="text" placeholder="Writing Score" name="gmat_writing_score"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_writing_score'] : '' }}"
                                                class="form-control gmat_writing_score">
                                            <input type="text" placeholder="Writing Rank" name="gmat_writing_rank"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_writing_rank'] : '' }}"
                                                class="form-control gmat_writing_rank">
                                            <input type="text" placeholder="Total Score" name="gmat_total_score"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_total_score'] : '' }}"
                                                class="form-control gmat_total_score">
                                            <input type="text" placeholder="Total Rank" name="gmat_total_rank"
                                                value="{{ !empty($exam_data) ? $exam_data['gmat_total_rank'] : '' }}"
                                                class="form-control gmat_total_rank">
                                        </div>
                                        <!-- GMAT ends -->

                                        <!-- TOEFL -->
                                        <div class="flex flex-row gap-1 pt-3">
                                            <input class="checkbox toefl_cbox mt-1" name="toefl_cbox" type="checkbox"
                                                value="">
                                            <label for="toefl" class="">TOEFL</label>
                                        </div>
                                        <div class="toefl_div space-y-4">
                                            <input type="text" placeholder="Reading" name="toefl_reading" value=""
                                                class="form-control toefl_reading">
                                            <input type="text" placeholder="Listening" name="toefl_listening" value=""
                                                class="form-control toefl_listening">
                                            <input type="text" placeholder="Writing" name="toefl_writing" value=""
                                                class="form-control toefl_writing">
                                            <input type="text" placeholder="Speaking" name="toefl_speaking" value=""
                                                class="form-control toefl_speaking">
                                        </div>
                                        <!-- TOEFL ends -->
                                        <div class="flex justify-end mt-0 pt-2 lg:pb-4 md:pb-3 sm:pb-4 pb-3">
                                            <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base"
                                                href="{{ url('home/educational-qualification') }}"
                                                style="background-color:#1d3270;">Next</button>
                                            {{-- <a href="{{ url('home/educational-qualification') }}" class="w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Next</a> --}}
                                        </div>
                                    </div>
                                    {{ Form::close() }}
                                </div>
                            </div>
                            <!-- English Exam Type col ends -->
                        </div>
                        <div class="row">



                            <!-- Stored English Exam (second) card -->
                            <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 lg:pl-5">
                                <div class="h-auto rounded border-b-4 text-normal py-2 ml-1"
                                    style="width: max-content; border-color: #35ccee;">
                                    Summary</div>
                                <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">

                                    <div class="card-body rounded-lg pt-3">
                                        @if (!empty($exam_data))
                                            <div class="card">
                                                <div class="card-body pt-3">
                                                    <div class="form-group row mb-1">
                                                        <label for="ielts" class="col col-form-label py-0">IELTS: </label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="ielts_reading"
                                                            class="col col-md-7 col-form-label py-0">Reading:
                                                        </label>
                                                        <label for="ielts_reading" class="col col-md-5 col-form-label py-0">
                                                            {{ $exam_data['ielts_reading'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="ielts_listening"
                                                            class="col col-md-7 col-form-label py-0">Listening:</label>
                                                        <label for="ielts_listening"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_listening'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="ielts_writing"
                                                            class="col col-md-7 col-form-label py-0">Writing:</label>
                                                        <label for="ielts_writing"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_writing'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="ielts_speaking"
                                                            class="col col-md-7 col-form-label py-0">Speaking:</label>
                                                        <label for="ielts_speaking"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['ielts_speaking'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-1">
                                                        <label for="gmat" class="col col-form-label py-0">GMAT: </label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_verbal_score"
                                                            class="col col-md-7 col-form-label py-0">Verbal
                                                            Score:</label>
                                                        <label for="gmat_verbal_score"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_verbal_score'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_verbal_rank"
                                                            class="col col-md-7 col-form-label py-0">Verbal
                                                            Rank:</label>
                                                        <label for="gmat_verbal_rank"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_verbal_rank'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_quo_score"
                                                            class="col col-md-7 col-form-label py-0">Quotative
                                                            Score:</label>
                                                        <label for="gmat_quo_score"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_quo_score'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_quo_rank"
                                                            class="col col-md-7 col-form-label py-0">Quotative
                                                            Rank:</label>
                                                        <label for="gmat_quo_rank"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_quo_rank'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_writing_score"
                                                            class="col col-md-7 col-form-label py-0">Writing
                                                            Score:</label>
                                                        <label for="gmat_writing_score"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_writing_score'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_writing_rank"
                                                            class="col col-md-7 col-form-label py-0">Writing
                                                            Rank:</label>
                                                        <label for="gmat_writing_rank"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_writing_rank'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="gmat_total_score"
                                                            class="col col-md-7 col-form-label py-0">Total
                                                            Score:</label>
                                                        <label for="gmat_total_score"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_total_score'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="gmat_total_rank"
                                                            class="col col-md-7 col-form-label py-0">Total
                                                            Rank:</label>
                                                        <label for="gmat_total_rank"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['gmat_total_rank'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-1">
                                                        <label for="toefl" class="col col-form-label py-0">TOEFL: </label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="toefl_reading"
                                                            class="col col-md-7 col-form-label py-0">Reading:
                                                        </label>
                                                        <label for="toefl_reading" class="col col-md-5 col-form-label py-0">
                                                            {{ $exam_data['toefl_reading'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="toefl_listening"
                                                            class="col col-md-7 col-form-label py-0">Listening:</label>
                                                        <label for="toefl_listening"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_listening'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="toefl_writing"
                                                            class="col col-md-7 col-form-label py-0">Writing:</label>
                                                        <label for="toefl_writing"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_writing'] }}</label>
                                                    </div>
                                                    <div class="form-group row mb-0">
                                                        <label for="toefl_speaking"
                                                            class="col col-md-7 col-form-label py-0">Speaking:</label>
                                                        <label for="toefl_speaking"
                                                            class="col col-md-5 col-form-label py-0">{{ $exam_data['toefl_speaking'] }}</label>
                                                    </div>
                                                </div>
                                            </div>
                                        @else
                                            There are no records.
                                        @endif
                                    </div>
                                </div>
                            </div>
                            <!-- second card ends -->

                            <!-- Profile card -->
                            <div class="col-12 col-md-3 col-lg-2 pt-3 ml-sm-2 ml-md-0 ml-lg-0 lg:pl-5">
                                {{-- @include('layouts.partials.profile_comp') --}}
                            </div>
                            <!-- Profile card ends -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
       <div class="accordion">
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-three" />
        <label class="accordion__label" for="tab-three"><a href="/home/educational-qualification">step3</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            Step 3
            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>

    <div class="accordion">
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four" />
        <label class="accordion__label" for="tab-four">
            <a href="/home/work-experience"> step 4</a>
            <span class="accord/ion-tab--status"></span>
        </label>
        <div class="accordion__content">
            Step 4
            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>

    </div>
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four " />
        <label class="accordion__label" for="tab-four"><a href="/home/program">Step5</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
        </div>
    </div>
    @yield('dashboard_scripts')

    <div>
        @svg('images/dashboard/dashboard-mobile-view-pic.svg,w-full h-50')
    </div>
    <div class="justify-center text-center "  >
        <span class="font-text:3xl" style="color: #1d3270; font-size:20px; font-style:bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" >eduquer <br></span>© 2020. All Right Reserved.
    </div>

    {{-- <div>
                <img src="images/dashboard/Graphics.png" alt="">dhsajhsalkjdhsakdjhskdhdskj
    </div> --}}
</div>

@endsection
