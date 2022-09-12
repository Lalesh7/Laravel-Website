@extends('frontend.layouts.main')

@section('main-container')

    <div id="header-hero-container">
        <header>
            <nav id="login-page">
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
            </nav>

        </header>

        <section id="hero">
            <section class="container forms">
                <div class="form login">
                    <div class="form-content">
                        <header>Login</header>
                        <form action="#">
                            <div class="field input-field">
                                <input type="email" placeholder="Email" class="input">
                            </div>

                            <div class="field input-field">
                                <input type="password" placeholder="Password" class="password">
                                <i class='bx bx-hide eye-icon'></i>
                            </div>

                            <div class="form-link">
                                <a href="#" class="forgot-pass">Forgot password?</a>
                            </div>

                            <div class="field button-field">
                                <button>Login</button>
                            </div>
                        </form>

                        <div class="form-link">
                            <span>Don't have an account? <a href="#" class="link signup-link">Signup</a></span>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="media-options">
                        <a href="#" class="field facebook">
                            <i class='bx bxl-facebook facebook-icon'></i>
                            <span>Login with Facebook</span>
                        </a>
                    </div>

                    <div class="media-options">
                        <a href="#" class="field google">
                            <img src="{{url('frontend/images/google.png')}}" alt="" class="google-img">
                            <span>Login with Google</span>
                        </a>
                    </div>

                </div>

                <!-- Signup Form -->

                <div class="form signup">
                    <div class="form-content">
                        <header>Signup</header>
                        <form action="#">
                            <div class="field input-field">
                                <input type="email" placeholder="Email" class="input">
                            </div>

                            <div class="field input-field">
                                <input type="password" placeholder="Create password" class="password">
                            </div>

                            <div class="field input-field">
                                <input type="password" placeholder="Confirm password" class="password">
                                <i class='bx bx-hide eye-icon'></i>
                            </div>

                            <div class="field button-field">
                                <button>Signup</button>
                            </div>
                        </form>

                        <div class="form-link">
                            <span>Already have an account? <a href="#" class="link login-link">Login</a></span>
                        </div>
                    </div>

                    <div class="line"></div>

                    <div class="media-options">
                        <a href="#" class="field facebook">
                            <i class='bx bxl-facebook facebook-icon'></i>
                            <span>Login with Facebook</span>
                        </a>
                    </div>

                    <div class="media-options">
                        <a href="#" class="field google">
                            <img src="{{url('frontend/images/google.png')}}" alt="" class="google-img">
                            <span>Login with Google</span>
                        </a>
                    </div>

                </div>
            </section>
        </section>


    </div>

@endsection
