@extends('layouts.app')

<style>
    .third_step {
        background-color: #f7f7f7;
        font-weight: bold;
    }



    /* ===================================================Scroll Bar-start================================================================ */

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

@section('scripts')
    <script>
        $(document).ready(function() {

            $('.add_education').click(function(event) {
                event.preventDefault();
                $(".main_edu_step").addClass('d-block').removeClass('d-none');
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

            $("form[name='e_qual_form']").submit(function(event) {
                var valid_flag = false;
                var valid_fields_arr = {
                    "degree_name": false,
                    no_of_years: false,
                    "school_name": false,
                    "country": false,
                    "state": false,
                    "city": false,
                    "grade": false,
                    "transcript": false
                };

                var degree_name = $.trim($("input[name='degree_name']").val());
                if (degree_name.length === 0) {
                    $(".degree_name_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['degree_name'] = false;
                } else {
                    $(".degree_name_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['degree_name'] = true;
                }
                var no_of_years = $.trim($("input[name='no_of_years']").val());
                if (no_of_years.length === 0) {
                    $(".no_of_years_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['no_of_years'] = false;
                } else {
                    $(".no_of_years_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['no_of_years'] = true;
                }
                var school_name = $.trim($("input[name='school_name']").val());
                if (school_name.length === 0) {
                    $(".school_name_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['school_name'] = false;
                } else {
                    $(".school_name_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['school_name'] = true;
                }
                if ($(".country option:selected").val() === '0') {
                    $(".country_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['country'] = false;
                } else {
                    $(".country_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['country'] = true;
                }
                if ($(".state option:selected").val() === '0') {
                    $(".state_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['state'] = false;
                } else {
                    $(".state_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['state'] = true;
                }
                var city = $.trim($("input[name='city']").val());
                if (city.length === 0) {
                    $(".city_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['city'] = false;
                } else {
                    $(".city_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['city'] = true;
                }
                var grade = $.trim($("input[name='grade']").val());
                if (grade.length === 0) {
                    $(".grade_required").addClass('d-block').removeClass('d-none');
                    valid_fields_arr['grade'] = false;
                } else {
                    $(".grade_required").addClass('d-none').removeClass('d-block');
                    valid_fields_arr['grade'] = true;
                }

                var allowed_ext = ['jpeg', 'jpg', 'png', 'pdf', 'doc', 'docx'];
                var transcript_ext = $("input[name='transcript']").val().split('.').pop().toLowerCase();
                var allowed_val = $.inArray(transcript_ext, allowed_ext);
                if (allowed_val === -1 && allowed_val !== 2) {
                    $('.transcript_invalid').addClass('d-block').removeClass('d-none');
                    valid_fields_arr['transcript'] = false;
                } else {
                    $('.transcript_invalid').addClass('d-none').removeClass('d-block');
                    valid_fields_arr['transcript'] = true;
                }

                let valid_count = 0;
                for (var key in valid_fields_arr) {
                    if (valid_fields_arr[key] === true) {
                        valid_count++;
                    } else {
                        valid_count--;
                    }
                }

                if (valid_count === 8) {
                    valid_flag = true;
                } else {
                    valid_flag = false;
                }
                console.log(valid_flag, "validflag");

                if (valid_flag === true) {
                    // $.ajaxSetup({
                    //     headers: {'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')}
                    // });
                    // event.preventDefault();

                    var inputData = new FormData($(this)[0]);
                    // $("#theForm").ajaxSubmit
                    $.ajax({
                        url: '{{ url('home/work-experience') }}',
                        method: 'POST',
                        // processData: false,
                        // cache: false,
                        // contentType: "application/json",
                        // dataType: "json",
                        // data: JSON.stringify(formData),
                        data: inputData,
                        async: false,
                        // enctype: 'multipart/form-data',
                        success: function(response) {
                            console.log(response);
                            // location.reload(true);
                        },
                        error: function(error) {
                            console.log("Error: ", error);
                        }
                    });
                } // if valid_flag over
                return false;
            }); // form submit over

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

                        <!-- Educational Qualification -->
                        <div class="col-12 col-sm-12 col-md-5 col-lg-5 pt-3 ml-sm-1 pl-lg-4 lg:pr-5">

                            {{-- <div class="flex flex-row">
                                <div class="w-44 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Educational Qualification</div>
                                <a href="#!" class="add_education ml-16 w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Education</a>
                            </div> --}}

                            <div class="row">
                                <div class="col-6 col-lg-6 col-md-5 col-sm-6">
                                    <div class="w-28 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Educational Qualification</div>
                                </div>
                                <div class="col-6 col-sm-6 pt-3 pl-4 pt-sm-2 sm:pl-24 col-lg-6 col-md-7 pt-lg-2 mt-lg-1 pl-lg-4 pt-md-3 pl-md-10">
                                    <a href="#!" class="add_education w-36 h-10 text-white rounded-lg text-base px-2 py-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Education</a>
                                </div>
                            </div>

                            <!-- Add Education -->
                            <div class="main_edu_step pt-2 d-none">
                                <div class="card rounded-xl overflow-auto h-96">
                                    <div class="card-body">
                                        <!-- Educational Qualification form -->
                                        {!! Form::open(['url' => 'home/work-experience', 'autocomplete' => 'off', 'name' => 'e_qual_form', 'files' => true]) !!}
                                            <div class="form-group">
                                                <input value="" placeholder="Degree Name" type="text" name="degree_name" class="form-control" >
                                            </div>
                                            <div class="form-group degree_name_required d-none">
                                                <div class="col-md alert-danger">The degree name field is required.</div>
                                            </div>
                                            <div class="form-group">
                                                <input value="" placeholder="No. of years" type="text" name="no_of_years" class="form-control" >
                                            </div>
                                            <div class="form-group no_of_years_required d-none">
                                                <div class="col-md alert-danger">The No. of years field is required.</div>
                                            </div>
                                            <div class="form-group">
                                                <input value="" placeholder="School Name" type="text" name="school_name" class="form-control" >
                                            </div>
                                            <div class="form-group school_name_required d-none">
                                                <div class="col-md alert-danger">The school name field is required.</div>
                                            </div>
                                            <div class="form-group">
                                                <select name="country" class="form-control form-control-md country" >
                                                    <option value="0">Country</option>
                                                </select>
                                            </div>
                                            <div class="form-group country_required d-none">
                                                <div class="col-md alert-danger">The country field is required.</div>
                                            </div>
                                            <div class="form-group justify-content-end">
                                                <select name="state" class="form-control form-control-md state" >
                                                    <option value="0">State</option>
                                                    <option value="State A">State A</option>
                                                    <option value="State B">State B</option>
                                                    <option value="Another state..">Another state..</option>
                                                </select>
                                            </div>
                                            <div class="form-group state_required d-none">
                                                <div class="col-md alert-danger">The state field is required.</div>
                                            </div>
                                            <div class="form-group">
                                                <input value="" placeholder="City" type="text" name="city" class="form-control" >
                                            </div>
                                            <div class="form-group city_required d-none">
                                                <div class="col-md alert-danger">The city field is required.</div>
                                            </div>
                                            <div class="form-group">
                                                <input value="" type="text" placeholder="Grade" name="grade" class="form-control" >
                                            </div>
                                            <div class="form-group grade_required d-none">
                                                <div class="col-md alert-danger">The grade field is required.</div>
                                            </div>
                                            <div class="form-group row pt-1">
                                                <div class="col-lg-6">
                                                    <label for="degree_name" class="col col-form-label py-0 px-0">Transcript:</label>
                                                </div>
                                                <div class="col-lg-6 pt-md-1 pt-sm-1 pt-1">
                                                    <input type="file" class="form-control-file" name="transcript">
                                                </div>
                                            </div>
                                            <div class="form-group transcript_invalid d-none">
                                                <div class="col-md alert-danger">Please select a valid file. Allowed file extensions are: jpeg, jpg, png, pdf, doc, docx.</div>
                                            </div>
                                            <div class="form-group row justify-content-end">
                                                <button type="submit" class="save_edu_qual w-36 h-10 ml-16 mt-2 mb-3 mr-3 text-white rounded-lg text-base text-center hover:no-underline" style="background-color:#1d3270;">Save</button>
                                            </div>
                                        {!! Form::close() !!}
                                        <!-- Educational Qualification ends -->
                                    </div>
                                </div>
                            </div>
                            <!-- Add Education (card) ends -->

                        </div>
                        <!-- Educational Qualification ends -->

                        <!-- Stored education (second) card -->
                        <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 px-md-0">
                            <div class="h-auto rounded border-b-4 text-normal py-2 ml-1 mb-2" style="width: max-content; border-color: #35ccee;">Summary</div>

                            <div class="card overflow-auto rounded-xl border-none" style="height: 409px;">

                                <div class="card-body pt-2">
                                    @if (count($edu_qual_data)>0)
                                    @foreach ($edu_qual_data as $e_qual)
                                        <div class="card mb-2">
                                            <div class="card-body pt-3">
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">Degree Name: </label>
                                                    <label for="degree_name" class="col col-form-label py-0"> {{ $e_qual->degree_name  }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">No of years:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->no_of_years }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">School Name:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->school_name }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">Country:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->country }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">State:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->state }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">City:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->city }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="degree_name" class="col col-form-label py-0">Grade Average / GPA:</label>
                                                    <label for="degree_name" class="col col-form-label py-0">{{ $e_qual->grade }}</label>
                                                </div>
                                                <div class="form-group row">
                                                    <label for="transcript" class="col col-form-label py-0">Transcript:</label>
                                                    @php
                                                        $transcript_name = substr("$e_qual->transcript", 11);
                                                        $ext = substr("$e_qual->transcript", -3);
                                                    @endphp
                                                    @if ($ext === 'pdf')
                                                        <label for="degree_name" class="col col-form-label py-0">
                                                            <a href="{{ public_path('uploads\Educational-Qualification') }}\{{ $e_qual->transcript }}">{{ $transcript_name }}</a>
                                                        </label>
                                                    @else
                                                    <a href="{{ asset('/uploads/Educational-Qualification') }}/{{ $e_qual->transcript }}" target="_blank"><img src="{{ asset('/uploads/Educational-Qualification') }}/{{ $e_qual->transcript }}" class="w-36 h-36"/></a>
                                                        {{-- <img src="{{ base_path()."/public/uploads/Educational-Qualification/" }}{{ $e_qual->transcript }}" />
                                                        <img src="{{ URL::to('/public/uploads/Educational-Qualification/') }}{{ $e_qual->transcript }}" /> --}}
                                                        {{-- <img src="{{ asset('/storage/uploads/Educational-Qualification/'.$e_qual->transcript) }}" /> --}}
                                                    @endif
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

        </div>
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
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-three"checked />
        <label class="accordion__label" for="tab-three"><a href="/home/educational-qualification">step3</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            <div id="wrapper">
                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">
                        <div class="h-full rounded-xl container" style="background-color: rgb(247, 247, 247);">
                            <div class="row">

                                <!-- Educational Qualification -->
                                <div class="col-12 col-sm-12 col-md-5 col-lg-5 pt-3 ml-sm-1 pl-lg-4 lg:pr-5">

                                    {{-- <div class="flex flex-row">
                                    <div class="w-44 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Educational Qualification</div>
                                    <a href="#!" class="add_education ml-16 w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Add Education</a>
                                </div> --}}

                                    <div class="">
                                        <div class="">
                                            <div class=" h-auto rounded border-b-4 mb-5  py-2 font-bold font-text:sm"
                                                style="border-color: #35ccee;">
                                                Educational Qualification</div>
                                        </div>
                                        <div
                                            class="">
                                            <a href="#!"
                                                class="add_education w-36 h-10 text-white rounded-lg justify-center text-base px-2 py-2 text-center hover:no-underline"
                                                style="background-color:#1d3270;" role="button" aria-pressed="true">Add Education</a>
                                        </div>
                                    </div>

                                    <!-- Add Education -->
                                    <div class="main_edu_step pt-2 d-none">
                                        <div class="card rounded-xl overflow-auto h-96">
                                            <div class="card-body">
                                                <!-- Educational Qualification form -->
                                                {!! Form::open(['url' => 'home/work-experience', 'autocomplete' => 'off', 'name' => 'e_qual_form', 'files' => true]) !!}
                                                <div class="form-group">
                                                    <input value="" placeholder="Degree Name" type="text" name="degree_name"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group degree_name_required d-none">
                                                    <div class="col-md alert-danger">The degree name field is required.</div>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" placeholder="No. of years" type="text" name="no_of_years"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group no_of_years_required d-none">
                                                    <div class="col-md alert-danger">The No. of years field is required.</div>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" placeholder="School Name" type="text" name="school_name"
                                                        class="form-control">
                                                </div>
                                                <div class="form-group school_name_required d-none">
                                                    <div class="col-md alert-danger">The school name field is required.</div>
                                                </div>
                                                <div class="form-group">
                                                    <select name="country" class="form-control form-control-md country">
                                                        <option value="0">Country</option>
                                                    </select>
                                                </div>
                                                <div class="form-group country_required d-none">
                                                    <div class="col-md alert-danger">The country field is required.</div>
                                                </div>
                                                <div class="form-group justify-content-end">
                                                    <select name="state" class="form-control form-control-md state">
                                                        <option value="0">State</option>
                                                        <option value="State A">State A</option>
                                                        <option value="State B">State B</option>
                                                        <option value="Another state..">Another state..</option>
                                                    </select>
                                                </div>
                                                <div class="form-group state_required d-none">
                                                    <div class="col-md alert-danger">The state field is required.</div>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" placeholder="City" type="text" name="city" class="form-control">
                                                </div>
                                                <div class="form-group city_required d-none">
                                                    <div class="col-md alert-danger">The city field is required.</div>
                                                </div>
                                                <div class="form-group">
                                                    <input value="" type="text" placeholder="Grade" name="grade" class="form-control">
                                                </div>
                                                <div class="form-group grade_required d-none">
                                                    <div class="col-md alert-danger">The grade field is required.</div>
                                                </div>
                                                <div class="form-group row pt-1">
                                                    <div class="col-lg-6">
                                                        <label for="degree_name"
                                                            class="col col-form-label py-0 px-0">Transcript:</label>
                                                    </div>
                                                    <div class="col-lg-6 pt-md-1 pt-sm-1 pt-1">
                                                        <input type="file" class="form-control-file" name="transcript">
                                                    </div>
                                                </div>
                                                <div class="form-group transcript_invalid d-none">
                                                    <div class="col-md alert-danger">Please select a valid file. Allowed file extensions
                                                        are: jpeg, jpg, png, pdf, doc, docx.</div>
                                                </div>
                                                <div class="form-group row justify-content-end">
                                                    <button type="submit"
                                                        class="save_edu_qual w-36 h-10 ml-16 mt-2 mb-3 mr-3 text-white rounded-lg text-base text-center hover:no-underline"
                                                        style="background-color:#1d3270;">Save</button>
                                                </div>
                                                {!! Form::close() !!}
                                                <!-- Educational Qualification ends -->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Add Education (card) ends -->

                                </div>
                                <!-- Educational Qualification ends -->
                            </div>
                            <div class="row">



                                <!-- Stored education (second) card -->
                                <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 px-md-0">
                                    <div class="h-auto rounded border-b-4 text-normal py-2 ml-1 mb-2"
                                        style="width: max-content; border-color: #35ccee;">Summary</div>

                                    <div class="card overflow-auto rounded-xl border-none" style="height: 409px;">

                                        <div class="card-body pt-2">
                                            @if (count($edu_qual_data) > 0)
                                                @foreach ($edu_qual_data as $e_qual)
                                                    <div class="card mb-2">
                                                        <div class="card-body pt-3">
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">Degree Name:
                                                                </label>
                                                                <label for="degree_name" class="col col-form-label py-0">
                                                                    {{ $e_qual->degree_name }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">No of
                                                                    years:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->no_of_years }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">School
                                                                    Name:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->school_name }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">Country:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->country }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">State:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->state }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">City:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->city }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="degree_name" class="col col-form-label py-0">Grade Average /
                                                                    GPA:</label>
                                                                <label for="degree_name"
                                                                    class="col col-form-label py-0">{{ $e_qual->grade }}</label>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label for="transcript"
                                                                    class="col col-form-label py-0">Transcript:</label>
                                                                @php
                                                                    $transcript_name = substr("$e_qual->transcript", 11);
                                                                    $ext = substr("$e_qual->transcript", -3);
                                                                @endphp
                                                                @if ($ext === 'pdf')
                                                                    <label for="degree_name" class="col col-form-label py-0">
                                                                        <a
                                                                            href="{{ public_path('uploads\Educational-Qualification') }}\{{ $e_qual->transcript }}">{{ $transcript_name }}</a>
                                                                    </label>
                                                                @else
                                                                    <a href="{{ asset('/uploads/Educational-Qualification') }}/{{ $e_qual->transcript }}"
                                                                        target="_blank"><img
                                                                            src="{{ asset('/uploads/Educational-Qualification') }}/{{ $e_qual->transcript }}"
                                                                            class="w-36 h-36" /></a>
                                                               @endif
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
        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-four" />
        <label class="accordion__label" for="tab-four">
            <a href="/home/work-experience"> step 4</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">
            Step 4
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
    <div>
        @svg('images/dashboard/dashboard-mobile-view-pic.svg,w-full h-50')
    </div>
    @yield('dashboard_scripts')
    <div class="justify-center text-center "  >
        <span class="font-text:3xl" style="color: #1d3270; font-size:20px; font-style:bold; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif" >eduquer <br></span>© 2020. All Right Reserved.
    </div>

</div>
@endsection
