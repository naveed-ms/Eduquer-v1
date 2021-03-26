<style>
    /* @media only screen and (max-width:390px) {
        .dashboardtext-div {
            right: 121px !important;
        }

    } */
/* =================================================header-Mobile-start ========================================================== */


    .navbar-links ul {
        display: flex;
        font-size: 2rem;
        margin-right: 4rem;
    }

    .navbar-links ul li {
        list-style: none;
    }

    .navbar-links ul li a {
        text-decoration: none;
        color: #35ccee;
        padding: 5px 25px 5px 25px;
        display: block;
        font-size: 2rem;
    }

    .navbar-links ul li a:hover {
        background: transparent;
        color: #000000;
    }

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

    .navbar-links ul {
        display: flex;
        font-size: 2rem;
        margin-right: 4rem;
    }

    .navbar-links ul li {
        list-style: none;
    }

    .navbar-links ul li a {
        text-decoration: none;
        color: #35ccee;
        padding: 5px 25px 5px 25px;
        display: block;
        font-size: 2rem;
    }

    .navbar-links ul li a:hover {
        background: transparent;
        color: #000000;
    }

    .togglebtn {
        margin-top: 2vh;
        padding-left: -20px;
        position: absolute;
        /* top: 76px; */
        right: 69vw;
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

    @media screen and (max-width:600px) {
/* =============================================================== */

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


/* =========================================================== */


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




        /* ===================================toggle-button-end================================================== */
    }


    /* =================================================header-Mobile-end ========================================================== */

</style>



{{-- <div class="container-fluid">
    <div class="p-0 h-20 flex items-center relative">
        <a href="{{ url('/') }}" class="navbar-brand m-0">@svg('images\eduquer_logo.svg', 'h-10')</a>
        <div class="pl-3 w-auto text-2xl font-bold" style="color: rgb(29, 50, 112);">Dashboard</div>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="mt-3 ml-2">
            @csrf
            <a class="dropdown-item text-primary font-weight-bold text-white" href="{{ route('logout') }}"
        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
            <span class="text-white">{{ __('Logout') }}</span>
        </a>
        </form>
        <div class="w-64 flex absolute items-center h-full gap-2" style="right:10px;">
            <a href="#!">
                <i class="fa fa-bell pt-1" style="font-size: 1.75em;" aria-hidden="true"></i>
                <span class="rounded-full absolute w-5 h-5 pr-1 text-xs font-bold" style="background-color: #35ccee; top: 24%; left: 5%; padding-top: 2px; padding-left: 2px;">12</span>
            </a>
            <div class="w-36 h-full leading-3 pt-4 pl-3">
                <span class="text-base font-bold">Sundas Rafique</span>
                <span class="text-xs pl-2" style="color: #8f8f8f;">Student Candidate</span>
            </div>
            <img src="{!! URL::asset('images/dashboard/Default Profile Pic.jpg') !!}" class="rounded-full w-12 h-12 mr-3">
        </div>
    </div>
</div> --}}

<div class="">
    <div class="row">

        <div class="col mobile-bell">
            <a href="#!">
                @svg('images/bell-icon.svg')
            </a>
        </div>
        <div class="col   mobile-girl"><a href=""> @svg('images/female-profile.svg ,w-12 h-12')</a>
            {{-- <img src="{!! URL::asset('images/dashboard/Default Profile Pic.jpg') !!}" class="rounded-full w-12 h-12 "> --}}
        </div>
    </div>
    <div class="row">
        <div class="eduquerlogo-div  ">
            <a href="{{ url('/') }}">@svg('images/eduquer_logo.svg ,h-14 w-44 mb-2')</a>
        </div>
    </div>


    <div class="row  justify-center">
        <a class="togglebtn" href="#"><span class="line"></span>
            <span class="line"></span>
            <span class="line"></span></a>
        <div class="navbar-links  font-bold ">
            <ul>
                <li><a href="#">Students</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <div class=" login-btn1 rounded-pill text-color-white mb-5" style="background-color:#1d3270;">
                    <a class="nav-link  text-white " href="{{ route('login') }}">Login</a>
                </div>
                <li>
            </ul>
        </div>


    </div>
    <div class="row justify-center font-bold  dashboard-name"style=" color:#1d3270 background:yellow; font-size:26px; margin-top:10vh">
        Dashboard
    </div>
    <script>
        const toggleBtn = document.getElementsByClassName('togglebtn')[0]
        const navbarLinks = document.getElementsByClassName('navbar-links')[0]
        toggleBtn.addEventListener('click', () => {
            navbarLinks.classList.toggle('active')
        })

    </script>
</div>







