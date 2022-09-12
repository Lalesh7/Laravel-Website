@extends('frontend.layouts.main')

@section('main-container')

    <div id = services>
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
                    <h1>Services</h1>
                    <h2> <a href="{{url('/')}}" class="tab"> Home </a> / Services</h2>
                </div>
            </section>
        </div>
    </div>
    <section id="services">
        <h2>Services</h2>
        <h3>What We Offer</h3>
        <section class="container">
            <div class="card">
                <div class="card-image service-1"></div>
                <h3>Service 1</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots">...</span><span id="more">erisque enim
                        ligula venenatis dolor.Maecenas nisl est, ultrices nec congue eget, auctor
                        vitae massa. Fusce luctus vestibulum augue ut aliquet.</span></p>
                    <button onclick="myFunction()" id="btn">Read more</button>
            </div>
            <div class="card">
                <div class="card-image service-2"></div>
                <h3>Service 2</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots2">...</span><span id="more2">erisque enim
                        ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                         vitae massa. Fusce luctus vestibulum augue ut aliquet.</span></p>
                    <button onclick="myFunction2()" id="btn2">Read more</button>
            </div>
            <div class="card">
                <div class="card-image service-3"></div>
                <h3>Service 3</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots3">...</span><span id="more3">erisque enim
                        ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                         vitae massa. Fusce luctus vestibulum augue ut aliquet.</span></p>
                    <button onclick="myFunction3()" id="btn3">Read more</button>
            </div>
            <div class="card">
                <div class="card-image service-4"></div>
                <h3>Service 4</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots4">...</span><span id="more4">erisque enim
                        ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                         vitae massa. Fusce luctus vestibulum augue ut aliquet.</span></p>
                    <button onclick="myFunction4()" id="btn4">Read more</button>
            </div>
            <div class="card">
                <div class="card-image service-5"></div>
                <h3>Service 5</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots5">...</span><span id="more5">erisque enim
                        ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                         vitae massa. Fusce luctus vestibulum augue ut aliquet.</span></p>
                    <button onclick="myFunction5()" id="btn5">Read more</button>
            </div>
            <div class="card">
                <div class="card-image service-6"></div>
                <h3>Service 6</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                    Phasellus imperdiet, nulla et dictum interdum, nisi lorem
                    egestas vitae scel<span id="dots6">...</span><span id="more6">erisque enim
                        ligula venenatis dolor. Maecenas nisl est, ultrices nec congue eget, auctor
                         vitae massa. Fusce luctus vestibulum augue ut aliquet. </span></p>
                    <button onclick="myFunction6()" id="btn6">Read more</button>
            </div>

        </section>
    </section>

@endsection
