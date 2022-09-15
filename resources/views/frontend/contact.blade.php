@extends('frontend.layouts.main')

@section('main-container')

    <div id="contact_us">
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
                    <h1>Contact us</h1>
                    <h2> <a href="{{url('/')}}" class="tab"> Home </a> / Contact us</h2>
                </div>
        </div>

    </div>

    <div class="flex_containers">
        <div class="mail">
            <div class="icon">
                <i class="fas fa-envelope"></i>
            </div>
            <div class="title">
                <span>Our Mail</span>
            </div>
            <div class="paragraph">
                <span>admin@webmail.com</span><br>
                <span>info@webmail.com</span>
            </div>
        </div>
        <div class="site">
            <div class="icon">
                <i class="fas fa-globe"></i>
            </div>
            <div class="title">
                <span>Our Site</span>
            </div>
            <div class="paragraph">
                <span>East Gate, Kathmandu 44600</span>

            </div>
        </div>
        <div class="call">
            <div class="icon">
                <i class="fas fa-phone"></i>
            </div>
            <div class="title">
                <span>Call us</span>
            </div>
            <div class="paragraph">
                <span>9876543210</span><br>
                <span>8976543241</span>
            </div>
        </div>
    </div>
    <form action="{{url('/')}}/question" method="post">
        @csrf
    <div class="any_questions">
                <section class="contact-us">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7">
                                <div class="section-title">
                                    <h2>Any Questions</h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7">
                                <form action="/" class="mb-4 mb-lg-0">
                                    <div class="form-row">
                                        <div class="col-md-12 form-group">
                                            <input type="text" name="name" class="form-control" id="name" placeholder="Name" value="{{old('name')}}" />
                                            <span class="text-danger">
                                                @error('name')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{old('email')}}" />
                                            <span class="text-danger">
                                                @error('email')
                                                {{$message}}
                                                @enderror
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone" value="{{old('phone')}}"/>
                                        <span class="text-danger">
                                            @error('phone')
                                                {{$message}}
                                                @enderror
                                        </span>
                                    </div>
                                    <div class="form-group">
                                        <textarea class="form-control" name="message" placeholder="Message" id="message"></textarea>
                                        <span class="text-danger">
                                            @error('message')
                                                {{$message}}
                                                @enderror
                                        </span>
                                    </div>
                                    <button type="submit" class="btn btn-light">Send</button>
                                </form>
                            </div>

                            <div class="col-lg-5">
                                <div class="map">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3532.6718825581934!2d85.32603331502867!3d27.69653438279642!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x39eb1befc84b0eef%3A0xc5af73f0e5ad90ef!2sBibhuti%20Solution%20Pvt.%20Ltd.!5e0!3m2!1sen!2snp!4v1661320814746!5m2!1sen!2snp" width="100%" height="350" frameborder="0" style="border: 0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
    </div>
    </form>

@endsection
