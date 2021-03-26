<link rel="stylesheet" href="css/header.css">
<header>
    <nav class="navbar">
        <div class="logo"><a class="navbar-brand m-0" href="{{ url('/') }}">@svg('images/landing page/eduquer_logo.svg', 'h-14')</a></div>
        <a class="togglebtn" href="#"><span class="line"></span>
            <span class="line"></span>
            <span class="line"></span></a>
        <div class="navbar-links  font-bold ">
            <ul>
                <li><a href="#">Students</a></li>
                <li><a href="{{ url('/faqs') }}">FAQS</a></li>
                <li><a href="{{ url('/about-us') }}">About</a></li>
                <li><a href="#">Blog</a></li>
                <div class=" login-btn1 rounded-pill text-color-white mb-5" style="background-color:#1d3270;">
                    <a class="nav-link  text-white " href="{{ route('login') }}">Login</a>
                </div>
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
