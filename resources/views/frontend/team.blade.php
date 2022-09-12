@extends('frontend.layouts.main')

@section('main-container')

    <div id = team>
        <div id="header-hero-container">
            <header>
                <div class="flex container">
                    <a id="logo" href="index.html">Bibhuti Solutions</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <i class="fas fa-bars"></i>
                        </button>

                        <ul id="nav-menu">
                            <li><a href="index.html" class="active"><b>Home</b></a></li>
                            <li><a href="about.html"><b>About us</b></a></li>
                            <li><a href="services.html"><b>Services</b></a></li>
                            <li><a href="team.html"><b>Team</b></a></li>
                            <li><a href="blog.html"><b>Blog</b></a></li>
                            <li><a href="contact.html"><b>Contact us</b></a></li>
                            <li><a href="login.html"><b>Login</b></a></li>
                            <li id="close-flyout"><span class="fas fa-window-close"></span></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section id="hero">
                <div class="fade"></div>
                <div class="hero-text">
                    <h1>Teams</h1>
                    <h2> <a href="index.html" class="tab"> Home </a> / Teams</h2>
                </div>
            </section>
        </div>
    </div>

    <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="./images/download.jpg">
            </div>
            <div class="caption">
                <h3>Prajwal Adhikari</h3>
                <p>Manager</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/graphic designer.jpg">
            </div>
            <div class="caption">
                <h3>Raju Shrestha</h3>
                <p>Sr. Front-End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/supervisor.jpg">
            </div>
            <div class="caption">
                <h3>Arun Pandey</h3>
                <p>Sr. Back-End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>

        <div class="profile-card">
            <div class="img">
                <img src="./images/hr.jpg">
            </div>
            <div class="caption">
                <h3>Sabbu</h3>
                <p>Front-End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/content writer.jpg">
            </div>
            <div class="caption">
                <h3>Harshha Sharma</h3>
                <p>Graphic Designer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/supervisor.jpg">
            </div>
            <div class="caption">
                <h3>Bhim Vai</h3>
                <p>Front-End Developer</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/graphic designer.jpg">
            </div>
            <div class="caption">
                <h3>Rashish Thapa</h3>
                <p>Marketting</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
        <div class="profile-card">
            <div class="img">
                <img src="./images/hr.jpg">
            </div>
            <div class="caption">
                <h3>Anu Khadka</h3>
                <p>Receptionist</p>
                <div class="social-links">
                    <a href="#"><i class="fab fa-facebook"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

@endsection
