@extends('layouts.app')
@section('scripts')
    <script>
        $(document).ready(function() {
            var program_user_data = {!! json_encode($program_user_data) !!};
            $('.country_of_choice').val(program_user_data.country_of_choice);
            $('.university').val(program_user_data.university);
            $('.program_name').val(program_user_data.program_name);
            $('.intake_program').val(program_user_data.intake_program);
        });

    </script>
@endsection
<style>


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
                        <!-- program -->
                        <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto lg:pr-5">

                            <div class="max-w-max rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Program</div>
                            <div class="main_edu_step pt-2">
                                <div class="card rounded-xl overflow-auto h-auto mb-3">
                                    <div class="card-body">
                                        {{ Form::open(array('url' => 'home/end', 'method' => 'post', 'enctype' => 'multipart/form-data')) }}
                                            <div class="form-group">
                                                <select name="country_of_choice" class="form-control form-control-md country_of_choice">
                                                    <option value="">Country of Choice</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States of America">United States of America</option>
                                                </select>
                                                @error('country_of_choice')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="university" class="form-control form-control-md university">
                                                    <option value="">University</option>
                                                    <option value="University A">University A</option>
                                                    <option value="University B">University B</option>
                                                    <option value="University C">University C</option>
                                                    <option value="University D">University D</option>
                                                </select>
                                                @error('university')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="program_name" class="form-control form-control-md program_name">
                                                    <option value="">Program</option>
                                                    @if (count($program_names) > 1)
                                                        @foreach($program_names as $id => $p_name)
                                                            <option value="{{ $p_name }}">{{ $p_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('program_name')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="intake_program" class="form-control form-control-md intake_program">
                                                    <option value="">Intake Program</option>
                                                    <option value="Dec - Mar – 2021">Dec - Mar – 2021</option>
                                                    <option value="Apr – Jul -2021">Apr – Jul -2021</option>
                                                    <option value="Aug – Nov – 2021">Aug – Nov – 2021</option>
                                                    <option value="Dec – Mar – 2022">Dec – Mar – 2022</option>
                                                    <option value="Apr – Jul -2022">Apr – Jul -2022</option>
                                                    <option value="Aug – Nov – 2022">Aug – Nov – 2022</option>
                                                </select>
                                                @error('intake_program')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="flex justify-end mt-0">
                                                <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base text-center hover:no-underline" style="background-color:#1d3270;">Finish</button>
                                            </div>
                                        {{ Form::close() }}
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Stored Basic Info (second) card -->
                        <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1">
                            <div class="h-auto rounded border-b-4 text-normal py-2 ml-1" style="width: max-content; border-color: #35ccee;">Summary</div>
                            <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">

                                <div class="card-body rounded-lg pt-3">
                                    @if (!empty($program_user_data))
                                        <div class="card rounded-lg">
                                            <div class="card-body pt-3">
                                                <div class="form-group row">
                                                    <label for="country_of_choice" class="col col-form-label py-0">Country of Choice: </label>
                                                    <label for="country_of_choice" class="col col-form-label py-0"> {{ $program_user_data['country_of_choice'] }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="university" class="col col-form-label py-0">University:</label>
                                                    <label for="university" class="col col-form-label py-0">{{ $program_user_data['university'] }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="program_name" class="col col-form-label py-0">Program:</label>
                                                    <label for="program_name" class="col col-form-label py-0">{{ $program_user_data['program_name'] }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="intake_program" class="col col-form-label py-0">Intake Program:</label>
                                                    <label for="intake_program" class="col col-form-label py-0">{{ $program_user_data['intake_program'] }}</label>
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

        </div>
    </div>
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two " />
        <label class="accordion__label" for="tab-two"><a href="/home/english-exam">Step2 </a>
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
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-three" />
        <label class="accordion__label" for="tab-three"><a href="/home/educational-qualification">step3</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
        </div>
    </div>

    <div class="accordion">
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four" />
        <label class="accordion__label" for="tab-four">
            <a href="/home/work-experience"> step 4</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">

        </div>

    </div>
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four " checked />
        <label class="accordion__label" for="tab-four"><a href="home/program">Step5</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            <div id="wrapper">
                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">
                        <div class="row">
                            <!-- program -->
                            <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto lg:pr-5">

                                <div class="max-w-max rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">
                                    Program</div>
                                <div class="main_edu_step pt-2">
                                    <div class="card rounded-xl overflow-auto h-auto mb-3">
                                        <div class="card-body">
                                            {{ Form::open(['url' => 'home/end', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                                            <div class="form-group">
                                                <select name="country_of_choice"
                                                    class="form-control form-control-md country_of_choice">
                                                    <option value="">Country of Choice</option>
                                                    <option value="Australia">Australia</option>
                                                    <option value="Canada">Canada</option>
                                                    <option value="United Kingdom">United Kingdom</option>
                                                    <option value="United States of America">United States of America</option>
                                                </select>
                                                @error('country_of_choice')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="university" class="form-control form-control-md university">
                                                    <option value="">University</option>
                                                    <option value="University A">University A</option>
                                                    <option value="University B">University B</option>
                                                    <option value="University C">University C</option>
                                                    <option value="University D">University D</option>
                                                </select>
                                                @error('university')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="program_name" class="form-control form-control-md program_name">
                                                    <option value="">Program</option>
                                                    @if (count($program_names) > 1)
                                                        @foreach ($program_names as $id => $p_name)
                                                            <option value="{{ $p_name }}">{{ $p_name }}</option>
                                                        @endforeach
                                                    @endif
                                                </select>
                                                @error('program_name')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>
                                            <div class="form-group">
                                                <select name="intake_program"
                                                    class="form-control form-control-md intake_program">
                                                    <option value="">Intake Program</option>
                                                    <option value="Dec - Mar – 2021">Dec - Mar – 2021</option>
                                                    <option value="Apr – Jul -2021">Apr – Jul -2021</option>
                                                    <option value="Aug – Nov – 2021">Aug – Nov – 2021</option>
                                                    <option value="Dec – Mar – 2022">Dec – Mar – 2022</option>
                                                    <option value="Apr – Jul -2022">Apr – Jul -2022</option>
                                                    <option value="Aug – Nov – 2022">Aug – Nov – 2022</option>
                                                </select>
                                                @error('intake_program')
                                                    <div class="alert-danger mt-2">{{ $message }}</div>
                                                @enderror
                                            </div>

                                            <div class="flex justify-end mt-0">
                                                <button type="submit"
                                                    class="w-36 h-10 mt-2 text-white rounded-lg text-base text-center hover:no-underline"
                                                    style="background-color:#1d3270;">Finish</button>
                                            </div>
                                            {{ Form::close() }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">



                            <!-- Stored Basic Info (second) card -->
                            <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1">
                                <div class="h-auto rounded border-b-4 text-normal py-2 ml-1"
                                    style="width: max-content; border-color: #35ccee;">Summary</div>
                                <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">

                                    <div class="card-body rounded-lg pt-3">
                                        @if (!empty($program_user_data))
                                            <div class="card rounded-lg">
                                                <div class="card-body pt-3">
                                                    <div class="form-group row">
                                                        <label for="country_of_choice" class="col col-form-label py-0">Country
                                                            of Choice: </label>
                                                        <label for="country_of_choice" class="col col-form-label py-0">
                                                            {{ $program_user_data['country_of_choice'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="university"
                                                            class="col col-form-label py-0">University:</label>
                                                        <label for="university"
                                                            class="col col-form-label py-0">{{ $program_user_data['university'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="program_name"
                                                            class="col col-form-label py-0">Program:</label>
                                                        <label for="program_name"
                                                            class="col col-form-label py-0">{{ $program_user_data['program_name'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="intake_program" class="col col-form-label py-0">Intake
                                                            Program:</label>
                                                        <label for="intake_program"
                                                            class="col col-form-label py-0">{{ $program_user_data['intake_program'] }}</label>
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
                            {{-- <div class="col-12 col-md-3 col-lg-2 pt-3 ml-sm-2 ml-md-0 ml-lg-0 lg:pl-5">
                            @include('layouts.partials.profile_comp')
                        </div> --}}
                            <!-- Profile card ends -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        @svg('images/dashboard/dashboard-mobile-view-pic.svg,w-full h-50')
    </div>
    @yield('dashboard_scripts')
    <div class="justify-center text-center "  >
        <span class="font-text:3xl" style="color: #1d3270; font-size:20px; font-style:bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" >eduquer <br></span>© 2020. All Right Reserved.
    </div>


</div>

@endsection
