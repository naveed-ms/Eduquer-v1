
<style>
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
  background: white;
  color: #35ccee;
}

.logo {
  font-size: 20px;
  margin: 10px;
  margin-right: 9vw;
}
.logo a {
  text-decoration: none;
  color: #35ccee;
  margin-left: 20px;
}
.navbar-links ul {
  margin: 0px 10px;
  padding: 0px;
  display: flex;
}
.navbar-links ul li {
  list-style: none;
}
.navbar-links ul li a {
  text-decoration: none;
  color: 35ccee;
  padding: 20px;
  display: block;
}
.navbar-links ul li a:hover {
  background: gray;
  color: #000000;
}
.togglebtn {
  position: absolute;
  top: 29vh;
  right: 75vw;
  display: none;
  flex-direction: column;
  justify-content: space-between;
  width: 13vw;
  height: 20px;
}
.line {
  height: 3px;
  width: 100%;
  background: black;
  border-radius: 10px;
}

@media only screen and (max-width: 600px) {
    .login-btn{
    display: block !important;
    width: 25vw;
    height: 10vh;
    top:14vh;
    margin-left: 71vw;
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
  }
  .navbar-links.active {
    display: flex;
  }

}

.login-btn{
    display :none;

}
</style>
<header>
    <nav class="navbar">
        <div class="logo"><a class="navbar-brand m-0" href="{{ url('/') }}">@svg('images/landing page/eduquer_logo.svg', 'h-10')</a></div>
        <a class="togglebtn" href="#"><span class="line"></span>
            <span class="line"></span>
            <span class="line"></span></a>
        <div class="navbar-links pr-3">
            <ul>
                <li><a href="#">Students</a></li>
                <li><a href="#">Events</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Blog</a></li>
               <li><a href="{{ route('login') }}">Login</a><li>

            </ul>

        </div>

            <div class=" login-btn rounded-full text-color-white  " style="background-color:#1d3270;">
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
