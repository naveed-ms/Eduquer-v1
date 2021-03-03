@section('styles')
<style>
    .sidebar-menu {
        height: 52px; font-size: 23px;
    }
    .step-main-div {
        height: 52px;
    }
</style>
@endsection
<div class="pt-3 w-56 flex text-normal flex-col gap-3 pl-md-0 pl-lg-5 pl-sm-0">
    <div class="sidebar-menu h-12 w-10 items-center pl-2 space-x-3 flex flex-row">
        {{-- <a href="#!"><i class="fa fa-bars" aria-hidden="true"></i></a> --}}
    </div>
    <div style="height: 52px;" class="step-main-div first_step h-12 w-52 sm:w-60 rounded-tl-xl rounded-bl-xl items-center pl-2 space-x-3 flex flex-row">
        <span class="bg-white w-10 h-10 text-center rounded-xl" style="padding-top: 5px; padding-left: 3px; box-shadow: 0 0 3px #35ccee;">
            @svg('images/dashboard/Step1_icon.svg','', 'height: 27px;')
        </span>
        <a href="{{ url('home') }}" class="hover:no-underline"><span class="">First Step</span></a>
    </div>
    <div class="step-main-div second_step h-12 w-52 sm:w-60 rounded-tl-xl rounded-bl-xl items-center pl-2 space-x-3 flex flex-row">
        <span class="bg-white w-10 h-10 pl-1 text-center rounded-xl" style="padding-top: 2px; box-shadow: 0 0 3px #35ccee;">
            @svg('images/dashboard/Step2_icon.svg','', 'height: 34px;')
        </span>
        <a href="{{ url('home/english-exam') }}" class="hover:no-underline"><span>Second Step</span></a>
    </div>
    <div class="step-main-div third_step h-12 w-52 sm:w-60 rounded-tl-xl rounded-bl-xl items-center pl-2 space-x-3 flex flex-row">
        <span class="bg-white w-10 h-10 text-center rounded-xl" style="padding-top: 7px; padding-left: 1px; box-shadow: 0 0 3px #35ccee;">
            @svg('images/dashboard/Step4_icon.svg','', 'height: 29px;')
        </span>
        <a href="{{ url('home/educational-qualification') }}" class="hover:no-underline"><span class="">Third Step</span></a>
    </div>
    <div class="step-main-div fourth_step h-12 w-52 sm:w-60 rounded-tl-xl rounded-bl-xl items-center pl-2 space-x-3 flex flex-row">
        <span class="bg-white w-10 h-10 pt-2 text-center rounded-xl" style="box-shadow: 0 0 3px #35ccee;">
            <i class="fa fa-briefcase fa-2x" style="color: white; opacity: 0.6; -webkit-text-stroke: 1px #000; -webkit-text-fill-color: transparent;" aria-hidden="true"></i>
        </span>
        <a href="{{ url('home/work-experience') }}" class="hover:no-underline"><span class="">Fourth Step</span></a>
    </div>
    <div class="step-main-div fifth_step h-12 w-52 sm:w-60 rounded-tl-xl rounded-bl-xl items-center pl-2 space-x-3 flex flex-row">
        <span class="bg-white w-10 h-10 pt-2 text-center rounded-xl" style="box-shadow: 0 0 3px #35ccee;">
            <i class="fa fa-graduation-cap fa-2x" style="color: #bfbfbf;" aria-hidden="true"></i>
        </span>
        <a href="{{ url('home/program') }}" class="hover:no-underline"><span class="">Fifth Step</span></a>
    </div>
</div>