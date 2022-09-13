@extends('frontend.layouts.main')

@section('main-container')

    <div id = team>
        <div id="header-hero-container">
            <header>
                <div class="flex container">
                    <a id="logo" href="{{url('/')}}">Bibhuti Solutions</a>
                    <nav>
                        <button id="nav-toggle" class="hamburger-menu">
                            <i class="fas fa-bars"></i>
                        </button>

                        <ul id="nav-menu">
                        <li><a href="{{url('/')}}" class="active"><b>Home</b></a></li>
                        <li><a href="{{url('/about')}}"><b>About us</b></a></li>
                        <li><a href="{{url('/services')}}"><b>Services</b></a></li>
                        <li><a href="{{url('/team')}}"><b>Team</b></a></li>
                        <li><a href="{{url('/blog')}}"><b>Blog</b></a></li>
                        <li><a href="{{url('/contact')}}"><b>Contact us</b></a></li>
                        <li><a href="{{url('/login')}}"><b>Login</b></a></li>
                        <li id="close-flyout"><span class="fas fa-window-close"></span></li>
                        </ul>
                    </nav>
                </div>
            </header>

            <section id="hero">
                <div class="fade"></div>
                <div class="hero-text">
                    <h1>Teams</h1>
                    <h2> <a href="{{url('/')}}" class="tab"> Home </a> / Teams</h2>
                </div>
            </section>
        </div>
    </div>

    <div class="main">
        <div class="profile-card">
            <div class="img">
                <img src="{{url('frontend/images/download.jpg')}}">
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
                <img src="{{url('frontend/images/graphic designer.jpg')}}">
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
                <img src="{{url('frontend/images/supervisor.jpg')}}">
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
                <img src="{{url('frontend/images/hr.jpg')}}">
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
                <img src="{{url('frontend/images/content writer.jpg')}}">
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
                <img src="{{url('frontend/images/supervisor.jpg')}}">
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
                <img src="{{url('frontend/images/graphic designer.jpg')}}">
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
                <img src="{{url('frontend/images/hr.jpg')}}">
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
