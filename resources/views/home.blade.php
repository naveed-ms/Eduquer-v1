@extends('layouts.app')

@section('scripts')
<script type="text/javascript">
    $(document).ready(function() {
        var basic_info = {!! json_encode($student) !!};
        $('.date_of_birth').val(basic_info.date_of_birth);
        $('.country_of_birth').val(basic_info.country_of_birth);
        $('.nationality').val(basic_info.nationality);
        $('.country_of_education').val(basic_info.country_of_education);
        $('.highest_education').val(basic_info.highest_education);
        $('.grade').val(basic_info.grade);
});
</script>
@endSection

<style>
    .first_step {
        background-color: #f7f7f7;
        font-weight: bold;
    }
</style>

@include('layouts.partials.dashboard_header')
    
@section('content')
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

                    <!-- Start Your Application col -->
                    <div class="col-12 col-sm-12 col-md-4 col-lg-5 pt-3 ml-sm-1 pl-lg-4 overflow-auto">
                        <div class="w-36 h-auto rounded border-b-4 text-normal py-2" style="border-color: #35ccee;">Start your Application</div>
                        {{ Form::open(array('url' => 'home/english-exam', 'method' => 'post', 'class' => 'overflow-auto')) }} 
                        @csrf
                            <div class="bg-white rounded-xl flex flex-col px-4 pt-3 mt-2 space-y-3">
                                <input type="text" name="date_of_birth" value="" placeholder="Date of Birth" onfocus="(this.type='date')" class="form-control date_of_birth">
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
                                <select name="country_of_education" class="form-control form-control-md country_of_education">
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
                                <input type="text" name="grade" value="" placeholder="Grade / GPA" class="form-control grade" >
                                @error('grade')
                                    <div class="alert-danger">{{ $message }}</div>
                                @enderror
                                <div class="flex flex-col">
                                    <label for="study_visa" class="col-form-label">Do you have Study Visa</label>
                                    <div class="flex flex-row gap-1">
                                        <input type="radio" class="mt-1" name="study_visa" value="Yes" {{ (!empty($student) && $student['study_visa'] === 'Yes') ? 'checked' : '' }} @if(old('study_visa') === 'Yes') checked @endif>
                                        <label class="">Yes</label>
                                        <input type="radio" class="mt-1 ml-1" name="study_visa" value="No" {{ (!empty($student) && $student['study_visa'] === 'No') ? 'checked' : '' }} @if(old('study_visa') === 'No') checked @endif>
                                        <label class="">No</label>
                                    </div>
                                    @error('study_visa')
                                        <div class="alert-danger">{{ $message }}</div>
                                    @enderror
                                </div>
                                <div class="flex justify-end mt-0 lg:pb-4 md:pb-3 sm:pb-4 pb-3">
                                    <button type="submit" class="w-36 h-10 mt-2 text-white rounded-lg text-base" href="#" style="background-color:#1d3270;">Next</button>
                                    {{-- <a href="{{ url('home/english-exam') }}" class="w-36 h-10 mt-2 text-white rounded-lg text-base pt-2 text-center hover:no-underline" style="background-color:#1d3270;" role="button" aria-pressed="true">Next</a> --}}
                                </div>
                            </div>
                        {{ Form::close() }}
                    </div>
                    <!-- Start Your Application col ends -->

                    <!-- Stored Basic Info (second) card -->
                    <div class="col-sm-12 col-md-4 col-lg-4 pt-3 ml-sm-0 ml-md-0 ml-lg-0 ml-sm-1 lg:pl-5">
                        <div class="h-auto rounded border-b-4 text-normal py-2 ml-1" style="width: max-content; border-color: #35ccee;">Summary</div>
                        <div class="card overflow-auto rounded-xl border-none mt-1" style="height: 409px;">
                                
                            <div class="card-body rounded-lg pt-3">
                                @if (!empty($student))
                                    <div class="card">
                                        <div class="card-body pt-3">
                                            <div class="form-group row">
                                                <label for="date_of_birth" class="col col-md-12 col-lg col-form-label py-0">Date of Birth: </label>
                                                <label for="date_of_birth" class="col col-md-12 col-lg col-form-label py-0"> {{ $student['date_of_birth'] }}</label>
                                            </div>
											<div class="form-group row">
                                                <label for="country_of_birth" class="col col-md-12 col-lg col-form-label py-0">Country of Birth: </label>
                                                <label for="country_of_birth" class="col col-md-12 col-lg col-form-label py-0"> {{ $student['country_of_birth'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="nationality" class="col col-md-12 col-lg col-form-label py-0">Nationality:</label>
                                                <label for="nationality" class="col col-md-12 col-lg col-form-label py-0">{{ $student['nationality'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="country_of_education" class="col col-md-12 col-lg col-form-label py-0">Country of Education:</label>
                                                <label for="country_of_education" class="col col-md-12 col-lg col-form-label py-0">{{ $student['country_of_education'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="highest_education" class="col col-md-12 col-lg col-form-label py-0">Highest Education:</label>
                                                <label for="highest_education" class="col col-md-12 col-lg col-form-label py-0">{{ $student['highest_education'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="grade" class="col col-md-12 col-lg col-form-label py-0">Grade:</label>
                                                <label for="grade" class="col col-md-12 col-lg col-form-label py-0">{{ $student['grade'] }}</label>
                                            </div>
                                            <div class="form-group row">
                                                <label for="study_visa" class="col col-md-12 col-lg col-form-label py-0">Study Visa:</label>
                                                <label for="study_visa" class="col col-md-12 col-lg col-form-label py-0">{{ $student['study_visa'] }}</label>
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
</div> <!-- main container ends -->
@yield('dashboard_scripts')
@endsection
