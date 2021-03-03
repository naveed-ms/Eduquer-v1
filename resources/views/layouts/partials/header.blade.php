{{-- <nav class="navbar navbar-expand-lg theme-bg-2 h-20" style="background-color: #effaff;">
  <div class="w-1/3 flex justify-center pl-24 pt-2">
      <a class="navbar-brand m-0" href="{{ url('/') }}">@svg('images\landing page\eduquer_logo.svg', 'h-10')</a>
  </div>
  <div class="collapse navbar-collapse w-1/3 justify-center mr-4" id="navbarNav">
    <ul class="navbar-nav font-medium space-x-4">
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#35ccee;">Students</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#35ccee;">Events</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#" style="color:#35ccee;">About</a>
      </li>
      <li class="nav-item">
          <a class="nav-link" href="#" style="color:#35ccee;">Blog</a>
        </li>
      <div class="nav-item rounded-full w-24 text-color-white h-10 ml-4" style="background-color:#1d3270;">
        <a class="nav-link text-center text-white" href="{{ route('login') }}">Login</a>
      </div>
    </ul>
  </div>
</nav> --}}

@section('scripts')
<script>
  $(document).ready(function(){
    if($(window).width() == 992)
    {
      $(".main-right-div").toggleClass('offset-lg-3 offset-lg-1');
    }
    else if($(window).width() == 768)
    {
      $(".main-left-div").toggleClass('col-md-4 col-md-2');
    }
    else if ($(window).width() == 360) {
      $(".right-nav").toggleClass('gap-x-8 gap-x-3');
    }
    else if ($(window).width() == 576) {
      $(".main-right-div").addClass('offset-sm-1');
    } else if ($(window).width() == 1600) {
      $(".main-right-div").toggleClass('offset-lg-3 offset-lg-4');
    }
  });
</script>
@endsection

@section('styles')
<style>
  .theme-bg-2 {
    background-color: #effaff;
  }
  @media only screen and (min-width:1201px) and (max-width:1280px) {
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
      margin-left: 0px !important;
    }
    .main-right-div {
      padding-left: 88px !important;
    }
  }

  @media only screen and (min-width:1281px) and (max-width:1440px) {
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
    }
    .main-right-div {
      padding-left: 134px !important;
    }
  }
  @media only screen and (min-width:993px) and (max-width:1200px) {
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
      margin-left: 0px !important;
    }
    .main-right-div {
      padding-left: 73px !important;
    }
  }
  @media only screen and (min-width:769px) and  (max-width:992px) {
    .container-fluid {
      padding-left: 0px !important;
    }
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
      margin-left: 0px !important;
    }
    .main-right-div {
      padding-left: 105px !important;
    }
  }
  @media only screen and (min-width: 577px) and (max-width:768px) {
    .container-fluid {
      padding-left: 0px !important;
    }
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
      margin-left: 0px !important;
    }
    .main-right-div {
      padding-left: 84px !important;
    }
  }
  @media only screen and (min-width:361px) and (max-width: 576px) {
    .container-fluid {
      padding-left: 0px !important;
    }
    .main-left-div {
      padding-left: 0px !important;
    }
    .main-right-div {
      padding-bottom: 65px !important;
      padding-left: 24px !important;
    }
  }
  @media only screen and (min-width:280px) and (max-width: 360px) {
    .container-fluid {
      padding-left: 0px !important;
    }
    .main-left-div {
      padding-left: 0px !important;
    }
    .inner-left-div {
      padding-left: 0px !important;
      margin-left: 0px !important;
    }
    .main-right-div {
      padding-left: 30px !important;
      padding-right: 0px !important;
      padding-bottom: 69px !important;
    }
    .login-btn {
      margin-left: 0px !important;
    }
  }
</style>
@endsection


<div class="container-fluid h-20 theme-bg-2">
  <div class="row">

    <!-- left side (logo) -->
    <div class="main-left-div offset-lg-0 col-lg-4 offset-md-0 col-md-4 col-sm-5">
      <div class="inner-left-div h-20 pt-3 pl-lg-4 ml-lg-1 ml-md-1 pl-4 ml-1"><a class="navbar-brand m-0" href="{{ url('/') }}">@svg('images/landing page/eduquer_logo.svg', 'h-10')</a></div>
    </div>

    <!-- right side -->
    <div class="main-right-div offset-lg-3 col-lg offset-md-2 col-md-4 col-sm-7 h-20 flex">
      <div class="right-nav lg:w-72 flex gap-x-8 items-center font-medium" style="color:#35ccee;">
        <div class=""><a href="#!" class="hover:no-underline">Students</a></div>
        <div class=""><a href="#!" class="hover:no-underline">Events</a></div>
        <div class=""><a href="#!" class="hover:no-underline">About</a></div>
        <div class=""><a href="#!" class="hover:no-underline">Blog</a></div>
        <div class="login-btn rounded-full text-color-white ml-16 lg:ml-0 md:ml-0 sm:ml-0" style="background-color:#1d3270;">
          <a class="nav-link text-center text-white w-24" href="{{ route('login') }}">Login</a>
        </div>
      </div>
    </div>

  </div>
</div>