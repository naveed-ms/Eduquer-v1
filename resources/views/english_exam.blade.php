@section('scripts')
<script>
    $(document).ready(function(){

        $(".ielts_div").hide();
        $(".gmat_div").hide();
        $(".toefl_div").hide();

        $('.ielts_cbox').click(function() {
            $(".ielts_div").toggle('slow');
            if ($('.ielts_cbox').is(":checked"))
            {
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
            if ($('.gmat_cbox').is(":checked"))
            {
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
            if ($('.toefl_cbox').is(":checked"))
            {
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
</div> <!-- main container ends -->

@endsection