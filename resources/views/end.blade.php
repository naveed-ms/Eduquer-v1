@extends('layouts.app')

@include('layouts.partials.dashboard_header')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center py-5 h-96" style="background-color: rgb(247, 247, 247);">
        <div class="col-md-8">
            <div class="card rounded-xl border-none">

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div>
                        <h6>Thank you for the information. One of our qualified education consultants will get back to you with the programs most suitable for you.</h6>
                    </div>
                    <div class="form-group row justify-content-end mr-2 mt-2 mb-0">
                        <a href="{{ url('/') }}" role="button" aria-pressed="true" class="w-36 h-10 mt-2 pt-2 text-white rounded-lg text-base text-center hover:no-underline" style="background-color: rgb(29, 50, 112);">Go Back</a>
                    </div>

                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection