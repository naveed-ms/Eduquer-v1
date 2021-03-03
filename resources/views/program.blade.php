@extends('layouts.app')
@section('scripts')
<script>
    $(document).ready(function(){
        var program_user_data = {!! json_encode($program_user_data) !!};
        $('.country_of_choice').val(program_user_data.country_of_choice);
        $('.university').val(program_user_data.university);
        $('.program_name').val(program_user_data.program_name);
        $('.intake_program').val(program_user_data.intake_program);
    });
</script>  
@endsection
<style>
    .fifth_step {
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
</div> <!-- main container ends -->


@endsection