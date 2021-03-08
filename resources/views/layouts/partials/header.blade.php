<style>
    html{
        font-size:62.2%;
    }
    * {
        box-sizing: border-box;
    }

    body {
        margin: 0;
        padding: 0;
        font-family: "Franklin Gothic Medium", "Arial Narrow", Arial, sans-serif;
        font-size: 17px;
    }

    .navbar {
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: #effaff;
        color: #1d3270;
        /* padding-left:15.1rem !important; */
        /* padding-right: 15.1rem !important; */
    }

    .logo {
        font-size: 0px;
        padding-top: 5rem;
        margin: 11px;
        margin-left: 2vw !important;
    }

    .logo a {
        text-decoration: none;
        color: #35ccee;
        margin-left: 20px;

    }

    .navbar-links ul {
        /* margin: 0px 10px; */
        /* padding: 0px; */
        display: flex;
        /* padding-top: 6rem; */
        font-size: 2rem;
        margin-right: 4rem;

    }

    .navbar-links ul li {
        list-style: none;
    }

    .navbar-links ul li a {
        text-decoration: none;
        color: #35ccee;
        padding:5px 25px 5px 25px;
        display: block;
        font-size: 2rem;
    }

    .navbar-links ul li a:hover {
        background:transparent;
        color: #000000;
    }

    .togglebtn {
        position: absolute;
        /* background: aquamarine !important; */
        top: 78px;
        right: 78vw;
        display: none;
        flex-direction: column;
        justify-content: space-between;
        width: 2.2rem;
        height: 23px;
    }

    .line {
        height: 3px;
        width: 100%;
        background: #1d3270;
        border-radius: 13px;
    }
.login-btn1{
    font-size: 2rem;
            display: block !important;
            width: 7rem;
            /* padding-right: 2vw; */
            /* padding-left: 2vw; */
            /* justify-content: center; */
            /* top: 14vh; */
}
.login-btn{
    display: none !important;
}
    @media only screen and (max-width: 600px) {
        .login-btn {
            font-size: 1.2rem;
            display: block !important;
            width: 7rem;
            top: 14vh;
            display: block !important;
            }
            .login-btn1{
                display: none !important;
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
            /* background-color: white !important; */
            font-style: bold;
        }

        .navbar-links.active {
            display: flex;
        }

    }

    .login-btn {
        display: block;
        margin-right: 11vh;


    }

</style>
<header>
    <nav class="navbar">
        <div class="logo"><a class="navbar-brand m-0" href="{{ url('/') }}">@svg('images/landing page/eduquer_logo.svg', 'h-14')</a></div>
        <a class="togglebtn" href="#"><span class="line"></span>
            <span class="line"></span>
            <span class="line"></span></a>
        <div class="navbar-links pr-3 font-bold ">
            <ul>
                <li><a href="#">Students</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
                <div class=" login-btn1 rounded-pill text-color-white mb-2  " style="background-color:#1d3270;">
                    <a class="nav-link text-center text-white " href="{{ route('login') }}">Login</a>
                </div>
                {{-- <li><a href="{{ route('login') }}">Login</a> --}}
                <li>
            </ul>

        </div>

        <div class=" login-btn rounded-full text-color-white mb-2  " style="background-color:#1d3270;">
            <a class="nav-link text-center text-white " href="{{ route('login') }}">Login</a>
        </div>



        <script>
            const toggleBtn = document.getElementsByClassName('togglebtn')[0]
            const navbarLinks = document.getElementsByClassName('navbar-links')[0]

            toggleBtn.addEventListener('click', () => {
                navbarLinks.classList.toggle('active')
            })

        </script>

    </nav>
</header>
