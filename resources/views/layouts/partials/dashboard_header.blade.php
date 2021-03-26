<style>
    @media only screen and (max-width:390px) {
        .dashboardtext-div {
            right: 121px !important;
        }
    }
</style>

@section('dashboard_scripts')
<script>
    $(document).ready(function(){
        if ($(window).width() == 390) { // iPhone 12 and iPhone 12 Pro
            $(".eduquerlogo-div").toggleClass('left-36 left-20');
            // $("#eduquerlogo-div").removeClass();
            // $("#eduquerlogo-div").addClass('col-12 text-center bottom-8');
            $(".dashboardtext-div").toggleClass('top-12 top-2');
        } else if ($(window).width() == 428) { // iPhone 12 Pro Max

        } else if ($(window).width() == 414) { // iPhone XR

        } else if ($(window).width() == 375) { // iPhone X

        } else if ($(window).width() == 412) { // Samsung note 20 and Samsung note 20 ultra

        } else if ($(window).width() == 384) { // Samsung S21 and S21 ultra

        } else if ($(window).width() == 1920) { // Desktop viewport 1

        } else if ($(window).width() == 1024) { // iPad Pro tablet and Desktop viewport 2

        } else if ($(window).width() == 1600) { // Desktop viewport 3

        } else if ($(window).width() == 768) { // iPhone tablets: Mini, Air, 3rd & 4th Generation

        } else if ($(window).width() == 800) { // Samsung Galaxy Tab 10 (samsung pad)

        } else if ($(window).width() == 1280) { // MS Surface

        }
    });
</script>
@endsection



<div class="container-fluid px-0 px-lg-3">
    <div class="lg:h-20 md:h-20 sm:h-20 h-36 flex items-center relative">

        <!-- left side -->
        <div class="eduquerlogo-div col-lg-2 lg:pl-0 lg:top-0 md:top-0 sm:top-0 -top-8 left-36 lg:left-0 md:left-0 sm:left-0 pl-sm-0">
            <a href="{{ url('/') }}" class="navbar-brand m-0">@svg('images/eduquer_logo.svg', 'h-10')</a>
        </div>
        <div class="dashboardtext-div col-lg-2 lg:pl-7 top-12 lg:top-0 md:top-0 sm:top-0 right-24 lg:right-0 md:right-0 md:left-16 sm:right-0 px-sm-0">
            <div class="pl-3 w-auto text-2xl font-bold pl-sm-0" style="color: rgb(29, 50, 112);">Dashboard</div>
        </div>
        <!-- left side over -->

        <!-- right side -->
        <div class="col-lg-5 offset-lg-3 right-96 lg:right-0 md:right-0 md:left-9 bottom-9 lg:bottom-0 md:top-0 sm:top-0 sm:right-16">
            <div class="flex absolute items-center h-full lg:gap-3 gap-20 sm:gap-3 md:gap-5 lg:right-7 pl-3">
                <a href="#!">
                    <i class="fa fa-bell pt-1 pl-4 pl-lg-0 pl-md-0 pl-sm-0" style="font-size: 1.75em;" aria-hidden="true"></i>
                    <span class="rounded-full absolute w-5 h-5 pr-1 text-xs font-bold bottom-1 left-12 lg:left-7 md:left-7 sm:left-7" style="background-color: #35ccee; padding-top: 2px; padding-left: 2px;">12</span>
                </a>
                {{-- <div class="w-52 leading-3 lg:pl-3 lg:pt-5 top-7 left-24 absolute lg:relative lg:top-0 lg:left-0 md:relative md:top-0 md:left-0 sm:relative sm:top-0 sm:left-0">
                    <div class="text-base font-bold text-center">
                        @if(isset($user_data) && !empty($user_data))
                            {!! $user_data->{'first name'} . ' ' . $user_data->{'last name'} !!}
                        @endif
                    </div>
                    <div class="text-xs text-center" style="color: #8f8f8f;">Student Candidate</div>
                </div> --}}
                <div class="w-52 leading-3 lg:pl-3 lg:pt-5 top-7 left-24 absolute lg:relative lg:top-0 lg:left-0 md:relative md:top-0 md:left-0 sm:relative sm:top-0 sm:left-0">
                    <div class="text-base font-bold text-center">
                        @if(isset($user_data) && !empty($user_data))
                            {!! $user_data->{'first name'} . ' ' . $user_data->{'last name'} !!}
                        @endif
                    </div>
                    <div class="text-xs text-center" style="color: #8f8f8f;">
						@if(isset($user_data) && !empty($user_data))
                            {!! $user_data->user_type !!}
                        @endif
					</div>
                </div>
                <img src="{!! URL::asset('images/dashboard/Default Profile Pic.jpg') !!}" class="rounded-full left-80 absolute lg:relative lg:left-0 md:relative md:-left-8 sm:relative sm:left-0 w-12 h-12 mr-3">
            </div>
        </div>
        <!-- right side over -->

    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item">
                        <a class="nav-link btn btn-primary font-weight-bold btn-block p-1 ml-2 mr-1" href="{{ route('login') }}" style="color: white">{{ __('Login') }}</a>
                    </li>
                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link btn btn-primary font-weight-bold btn-block p-1 ml-3" href="{{ route('register') }}" style="color: white">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item text-primary font-weight-bold" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
