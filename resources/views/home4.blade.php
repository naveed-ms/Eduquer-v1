@extends('layouts.app')

@section('scripts')

@endSection

<style>
    .first_step {
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
            justify-content: space-between;
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

        .accordion input[type="radio"]+label span:after {
            content: '+';
        }

        .accordion input[type="radio"]:checked+label span:after {
            content: '—';
        }

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
@media screen and (max-width:600px){
    .mobile-view{
        display:block !important
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

<div class="mobile-view">
    @include('layouts.partials.dashboard_header')

    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two" checked />
        <label class="accordion__label" for="tab-two"><a href="home">Step1</a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">

            <div id="wrapper">
                {{-- <div class="scrollbar" id="style-default">
              <div class="force-overflow"></div>
            </div> --}}

                <div class="scrollbar" id="style-1">
                    <div class="force-overflow">

                        <div class="row">

                            <!-- Start Your Application col -->
                            <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto">
                                <div class="w-36 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">
                                    Start your Application</div>
                                {{ Form::open(['url' => 'home/english-exam', 'method' => 'post', 'class' => 'overflow-auto']) }}
                                @csrf
                                <div class="bg-white rounded-xl flex flex-col px-4 pt-3 mt-2 space-y-3">
                                    <input type="text" name="date_of_birth" value="" placeholder="Date of Birth"
                                        onfocus="(this.type='date')" class="form-control date_of_birth">
                                    @error('date_of_birth')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="country_of_birth" class="form-control form-control-md country_of_birth">
                                        <option value="" style="opacity: 0.6">Country of Birth</option>
                                        @if (isset($countries))
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('country_of_birth')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="nationality" class="form-control form-control-md nationality">
                                        <option value="">Nationality</option>
                                        @if (isset($countries))
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('nationality')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="country_of_education"
                                        class="form-control form-control-md country_of_education">
                                        <option value="">Country of Education</option>
                                        @if (isset($countries))
                                            @foreach ($countries as $country)
                                                <option value="{{ $country->name }}">{{ $country->name }}</option>
                                            @endforeach
                                        @endif
                                    </select>
                                    @error('country_of_education')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <select name="highest_education" class="form-control form-control-md highest_education">
                                        <option value="">Highest Education</option>
                                        <option value="Bachelors">Bachelors</option>
                                        <option value="Masters">Masters</option>
                                        <option value="PhD">PhD</option>
                                        <option value="Doc">Post Doc</option>
                                    </select>
                                    @error('highest_education')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <input type="text" name="grade" value="" placeholder="Grade / GPA"
                                        class="form-control grade">
                                    @error('grade')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                    <div class="flex flex-col">
                                        <label for="study_visa" class="col-form-label">Do you have Study Visa</label>
                                        <div class="flex flex-row gap-1">
                                            <input type="radio" class="mt-1" name="study_visa" value="Yes"
                                                {{ !empty($student) && $student['study_visa'] === 'Yes' ? 'checked' : '' }}
                                                @if (old('study_visa') === 'Yes') checked @endif>
                                            <label class="">Yes</label>
                                            <input type="radio" class="mt-1 ml-1" name="study_visa" value="No"
                                                {{ !empty($student) && $student['study_visa'] === 'No' ? 'checked' : '' }}
                                                @if (old('study_visa') === 'No') checked @endif>
                                            <label class="">No</label>
                                        </div>
                                        @error('study_visa')
                                            <div class="alert-danger">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    {{-- <div class="flex justify-end mt-0 lg:pb-4 md:pb-3 sm:pb-4 pb-3">
                                        <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base"
                                            href="#" style="background-color:#1d3270;">Next</button>
                                    </div> --}}
                                </div>
                                {{ Form::close() }}
                            </div>
                            <!-- Start Your Application col ends -->
                        </div>

                        <div class="row">
                            <!-- Stored Basic Info (second) card -->
                            <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 lg:pl-5">
                                <div class="h-auto rounded border-b-4 text-normal py-2 ml-1"
                                    style="width: max-content; border-color: #35ccee;">Summary</div>
                                <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">

                                    <div class="card-body rounded-lg pt-3">
                                        @if (!empty($student))
                                            <div class="card">
                                                <div class="card-body pt-3">
                                                    <div class="form-group row">
                                                        <label for="date_of_birth"
                                                            class="col col-md-12 col-lg col-form-label py-0">Date of Birth:
                                                        </label>
                                                        <label for="date_of_birth"
                                                            class="col col-md-12 col-lg col-form-label py-0">
                                                            {{ $student['date_of_birth'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="country_of_birth"
                                                            class="col col-md-12 col-lg col-form-label py-0">Country of
                                                            Birth:
                                                        </label>
                                                        <label for="country_of_birth"
                                                            class="col col-md-12 col-lg col-form-label py-0">
                                                            {{ $student['country_of_birth'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="nationality"
                                                            class="col col-md-12 col-lg col-form-label py-0">Nationality:</label>
                                                        <label for="nationality"
                                                            class="col col-md-12 col-lg col-form-label py-0">{{ $student['nationality'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="country_of_education"
                                                            class="col col-md-12 col-lg col-form-label py-0">Country of
                                                            Education:</label>
                                                        <label for="country_of_education"
                                                            class="col col-md-12 col-lg col-form-label py-0">{{ $student['country_of_education'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="highest_education"
                                                            class="col col-md-12 col-lg col-form-label py-0">Highest
                                                            Education:</label>
                                                        <label for="highest_education"
                                                            class="col col-md-12 col-lg col-form-label py-0">{{ $student['highest_education'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="grade"
                                                            class="col col-md-12 col-lg col-form-label py-0">Grade:</label>
                                                        <label for="grade"
                                                            class="col col-md-12 col-lg col-form-label py-0">{{ $student['grade'] }}</label>
                                                    </div>
                                                    <div class="form-group row">
                                                        <label for="study_visa"
                                                            class="col col-md-12 col-lg col-form-label py-0">Study
                                                            Visa:</label>
                                                        <label for="study_visa"
                                                            class="col col-md-12 col-lg col-form-label py-0">{{ $student['study_visa'] }}</label>
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
                        <div class="flex justify-end mt-0 lg:pb-4 md:pb-3 sm:pb-4 pb-3">
                            <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base" href="#"
                                style="background-color:#1d3270;">Next</button>
                        </div>
                </div>
            </div>




            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>


    {{-- ====================================================================== --}}




    {{-- ============================================================================== --}}
    <div class="accordion">

        <input class="accordion__radio" type="radio" name="accordion-tabs" id="tab-two" />
        <label class="accordion__label" for="tab-two"><a href="/home/english-exam">Step 2 </a>
            <span class="accordion-tab--status"></span>
        </label>
        <div class="accordion__content">

            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>
    {{-- =========================== --}}
    {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">link</a> --}}
    {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">link2</a> --}}
    {{-- =================================== --}}
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
            <a href="home/work-experience"> step 4</a>
            <span class="accordion-tab--status"></span>
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

            {{-- <a class="nav-link" href="{{ url('/home/english-exam') }}">Step 2</a> --}}
        </div>
    </div>

    @yield('dashboard_scripts')

    </div>


</div>
{{-- =============================================== --}}


@endsection
