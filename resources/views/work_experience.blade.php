@extends('layouts.app')

<style>
    .fourth_step {
        background-color: #f7f7f7;
        font-weight: bold;
    }
</style>

@section('scripts')
<script>
$(document).ready(function(){

    $('.add_experience').click(function(event) {
        event.preventDefault();
        $(".main_work_step").addClass('d-block').removeClass('d-none');
        $.ajax({
            url: "{{ url('/home/countries') }}",
            method: 'get',
            success: function(countries){
                $.each(countries, function (key, entry) {
                    $('select[name="country"]').append($('<option></option>').attr('value', entry.name).text(entry.name));
                });
            }
        });
    });

    $(".save_work_exp").click(function(){        
        $("#work_experience").submit();
    });

});
</script>  
@endsection

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
</div> <!-- main container -->


@endsection