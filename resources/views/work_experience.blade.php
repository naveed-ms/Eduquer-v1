@extends('layouts.app')

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

</style>

@section('scripts')
    <script>
        $(document).ready(function() {

            $('.add_experience').click(function(event) {
                event.preventDefault();
                $(".main_work_step").addClass('d-block').removeClass('d-none');
                $.ajax({
                    url: "{{ url('/home/countries') }}",
                    method: 'get',
                    success: function(countries) {
                        $.each(countries, function(key, entry) {
                            $('select[name="country"]').append($('<option></option>')
                                .attr('value', entry.name).text(entry.name));
                        });
                    }
                });
            });

            $(".save_work_exp").click(function() {
                $("#work_experience").submit();
            });

        });

    </script>
@endsection

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
                        <!-- Work Experience -->
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 pt-3 ml-sm-1 pl-lg-4 lg:pr-5">

                            {{-- <div class="flex flex-row">
                                <div class="w-auto h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Work Experience</div>
                                <a href="#!" class="add_experience ml-32 w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Experience</a>
                            </div> --}}

                            <div class="row">
                                <div class="col-6 col-lg-6 col-md-5 col-sm-6">
                                    <div class="w-28 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Work Experience</div>
                                </div>
                                <div class="col-6 col-sm-6 pt-3 pl-4 pt-sm-2 sm:pl-24 col-lg-6 col-md-7 pt-lg-2 mt-lg-1 pl-lg-4 pt-md-3 pl-md-10">
                                    <a href="#!" class="add_experience w-36 h-10 text-white rounded-lg text-base px-2 py-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Experience</a>
                                </div>
                            </div>

                            <!-- Add Experience -->
                            <div class="main_work_step pt-2 d-none">
                                <div class="card rounded-xl overflow-auto h-96">
                                    <div class="card-body">
                                        <!-- Work Experience form -->
                                        {{ Form::open(array('id' => 'work_experience_form', 'url' =>'/home/program', 'method' => 'post', 'enctype' => 'multipart/form-data')) }}
                                            @csrf
                                            <div class="form-group">
                                                <input value="" type="text" placeholder="Company Name" name="company_name" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <select name="country" class="form-control form-control-md" required>
                                                    <option value="">Country</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <select name="state" class="form-control form-control-md" required>
                                                    <option value="">State</option>
                                                    <option value="State A">State A</option>
                                                    <option value="State B">State B</option>
                                                    <option value="Another state..">Another state..</option>
                                                </select>
                                            </div>
                                            <div class="form-group">
                                                <input value='' type="text" placeholder="City" name="city" class="form-control" required>
                                            </div>
                                            <div class="form-group">
                                                <input value="" placeholder="Start Date" class="form-control" type="text" onfocus="(this.type='date')" name="start_date" required>
                                            </div>
                                            <div class="form-group">
                                                <input value="" placeholder="End Date" class="form-control" type="text" onfocus="(this.type='date')" name="end_date" required>
                                            </div>
                                            <div class="form-group">
                                                <input value="" type="text" placeholder="Title" name="title" class="form-control " required>
                                            </div>
                                            <div class="form-group">
                                                <textarea class="form-control" placeholder="Job Description" rows="4" cols="25" name="job_description" style="resize: inherit !important;" required></textarea>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <button type="submit" class="save_work_exp w-36 h-10 ml-16 mt-2 mb-3 mr-3 text-white rounded-lg text-base text-center hover:no-underline" style="background-color:#1d3270;">Save</button>
                                                {{-- <a href="#!" class="save_edu_qual w-36 h-10 ml-16 mt-2 mb-3 mr-3 pt-2 text-white rounded-lg text-base text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Save</a> --}}
                                            </div>
                                        {{ Form::close() }}
                                        <!-- Work Experience form ends -->
                                    </div>
                                </div>
                            </div>
                            <!-- Add Experience (card) ends -->

                        </div>

                        <!-- Stored experience (second) card -->
                        <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 px-md-0">
                            <div class="h-auto rounded border-b-4 text-normal py-2 ml-1 mb-2" style="width: max-content; border-color: #35ccee;">Summary</div>
                            <div class="card overflow-auto rounded-xl border-none" style="height: 409px;">

                                <div class="card-body pt-2">
                                    @if (count($work_exp_data)>0)
                                        @foreach ($work_exp_data as $w_exp)
                                        <div class="card mb-2">
                                            <div class="card-body pt-3">
                                                <div class="form-group row">
                                                    <label for="company_name" class="col col-form-label py-0">Company Name: </label>
                                                    <label for="company_name" class="col col-form-label py-0"> {{ $w_exp->company_name }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="country" class="col col-form-label py-0">Country:</label>
                                                    <label for="country" class="col col-form-label py-0">{{ $w_exp->country }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="state" class="col col-form-label py-0">State:</label>
                                                    <label for="state" class="col col-form-label py-0">{{ $w_exp->state }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="city" class="col col-form-label py-0">City:</label>
                                                    <label for="city" class="col col-form-label py-0">{{ $w_exp->city }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="start_date" class="col col-form-label py-0">Start Date:</label>
                                                    <label for="start_date" class="col col-form-label py-0">{{ $w_exp->start_date }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="end_date" class="col col-form-label py-0">End Date:</label>
                                                    <label for="end_date" class="col col-form-label py-0">{{ $w_exp->end_date }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="title" class="col col-form-label py-0">Title:</label>
                                                    <label for="title" class="col col-form-label py-0">{{ $w_exp->title }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="job_description" class="col col-form-label py-0">Job Description:</label>
                                                    <label for="job_description" class="col col-form-label py-0">{{ $w_exp->job_description }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    @else
                                        There are no records.
                                    @endif
                                </div>
                            </div>
                        </div>
                        <!-- second card ends -->

                        <!-- Profile (third) card -->
                        <div class="col-12 col-md-2 col-lg-2 pt-3 ml-sm-2 ml-md-0 ml-lg-0 lg:pl-5">
                            @include('layouts.partials.profile_comp')
                        </div>
                        <!-- third card ends -->

                    </div>

                </div>
            </div>

        </div> <!-- main container's row -->
    </div>

</div>

<div class="mobile-view">
    @include('layouts.partials.dashboard_header1')

    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two"  />
        <label class="accordion__label" for="tab-two"><a href="/home/english-exam">Step1</a>
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
            Step 3
            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>

    <div class="accordion">
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four" checked />
        <label class="accordion__label" for="tab-four">
            <a href="home/work-experience"> step 4</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">

            <div id="wrapper">
                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">
                        <div class="h-full rounded-xl container" style="background-color: rgb(247, 247, 247);">

                            <div class="row">
                                <!-- Work Experience -->
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 pt-3 ml-sm-1 pl-lg-4 lg:pr-5">

                                    {{-- <div class="flex flex-row">
                                                <div class="w-auto h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Work Experience</div>
                                                <a href="#!" class="add_experience ml-32 w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Experience</a>
                                            </div> --}}

                                    <div class="row">
                                        <div class="">
                                            <div class="w-28 rounded border-b-4 text-normal " style="border-color: #35ccee;">
                                                Work Experience</div>
                                        </div>
                                        <div class=" cl1">
                                            <a href="#!"
                                                class="add_experience w-36 h-10 py-2 px-2 text-white rounded-lg text-base text-center hover:no-underline float-right"
                                                style="background-color:#1d3270;" role="button" aria-pressed="true">Add
                                                Experience</a>
                                        </div>
                                    </div>

                                    <!-- Add Experience -->
                                    <div class="main_work_step pt-2 d-none">
                                        <div class="card rounded-xl overflow-auto h-96">
                                            <div class="card-body">
                                                <!-- Work Experience form -->
                                                {{ Form::open(['id' => 'work_experience_form', 'url' => '/home/program', 'method' => 'post', 'enctype' => 'multipart/form-data']) }}
                                                @csrf
                                                <div class="form-group">
                                                    <input value="" type="text" placeholder="Company Name" name="company_name"
                                                        class="form-control" required>
                                                </div>
                                                <div class="form-group">
                                                    <select name="country" class="form-control form-control-md" required>
                                                        <option value="">Country</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <select name="state" class="form-control form-control-md" required>
                                                        <option value="">State</option>
                                                        <option value="State A">State A</option>
                                                        <option value="State B">State B</option>
                                                        <option value="Another state..">Another state..</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <input value='' type="text" placeholder="City" name="city" class="form-control"
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" placeholder="Start Date" class="form-control" type="text"
                                                        onfocus="(this.type='date')" name="start_date" required>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" placeholder="End Date" class="form-control" type="text"
                                                        onfocus="(this.type='date')" name="end_date" required>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" type="text" placeholder="Title" name="title" class="form-control "
                                                        required>
                                                </div>
                                                <div class="form-group">
                                                    <textarea class="form-control" placeholder="Job Description" rows="4" cols="25"
                                                        name="job_description" style="resize: inherit !important;" required></textarea>
                                                </div>
                                                <div class="form-group row justify-content-end">
                                                    <button type="submit"
                                                        class="save_work_exp w-36 h-10 ml-16 mt-2 mb-3 mr-3 text-white rounded-lg text-base text-center hover:no-underline"
                                                        style="background-color:#1d3270;">Save</button>
                                                    {{-- <a href="#!" class="save_edu_qual w-36 h-10 ml-16 mt-2 mb-3 mr-3 pt-2 text-white rounded-lg text-base text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Save</a> --}}
                                                </div>
                                                {{ Form::close() }}
                                                <!-- Work Experience form ends -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Experience (card) ends -->

                                </div>
                            </div>
                            <div class="row">



                                <!-- Stored experience (second) card -->
                                <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 px-md-0">
                                    <div class="h-auto rounded border-b-4 text-normal py-2 ml-1 mb-2"
                                        style="width: max-content; border-color: #35ccee;">Summary</div>
                                    <div class="card overflow-auto rounded-xl border-none" style="height: 409px;">

                                        <div class="card-body pt-2">
                                            @if (count($work_exp_data) > 0)
                                                @foreach ($work_exp_data as $w_exp)
                                                    <div class="card mb-2">
                                                        <div class="card-body pt-3">
                                                            <div class="form-group row">
                                                                <label for="company_name" class="col col-form-label py-0">Company
                                                                    Name: </label>
                                                                <label for="company_name" class="col col-form-label py-0">
                                                                    {{ $w_exp->company_name }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="country" class="col col-form-label py-0">Country:</label>
                                                                <label for="country"
                                                                    class="col col-form-label py-0">{{ $w_exp->country }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="state" class="col col-form-label py-0">State:</label>
                                                                <label for="state"
                                                                    class="col col-form-label py-0">{{ $w_exp->state }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="city" class="col col-form-label py-0">City:</label>
                                                                <label for="city"
                                                                    class="col col-form-label py-0">{{ $w_exp->city }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="start_date" class="col col-form-label py-0">Start
                                                                    Date:</label>
                                                                <label for="start_date"
                                                                    class="col col-form-label py-0">{{ $w_exp->start_date }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="end_date" class="col col-form-label py-0">End
                                                                    Date:</label>
                                                                <label for="end_date"
                                                                    class="col col-form-label py-0">{{ $w_exp->end_date }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="title" class="col col-form-label py-0">Title:</label>
                                                                <label for="title"
                                                                    class="col col-form-label py-0">{{ $w_exp->title }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="job_description" class="col col-form-label py-0">Job
                                                                    Description:</label>
                                                                <label for="job_description"
                                                                    class="col col-form-label py-0">{{ $w_exp->job_description }}</label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                @endforeach
                                            @else
                                                There are no records.
                                            @endif
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four " />
        <label class="accordion__label" for="tab-four"><a href="/home/program">Step5</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">

            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>
    <div>
        @svg('/images/dashboard/dashboard-mobile-view-pic.svg,w-full h-50')
    </div>
    @yield('dashboard_scripts')
    <div class="justify-center text-center "  >
        <span class="font-text:3xl" style="color: #1d3270; font-size:20px; font-style:bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" >eduquer <br></span>© 2020. All Right Reserved.
    </div>

</div>
    @endsection
