@extends('frontend.layouts.main')

@section('main-container')

    <div id="blog_1">
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
                    <h1>Apple's AR/VR Headset may include video content created by Hollywood directors</h1>
                    <h2> <a href="{{url('/')}}" class="tab"> Home </a> / Blog</h2>
                </div>
            </section>
        </div>

    </div>
    <section id="blog_container">
        <div class="blog_details">
            <div class="card0">
                <div class="card-header">
                    <img src="{{url('frontend/images/medium-shot-man-wearing-vr-glasses.jpg')}}" alt="VR">
                </div>
                <div class="card-body">
                    <h4>Apple's AR/VR Headset may include video content created by Hollywood directors</h4>
                    <small>07 May, 2022</small>
                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Laudantium,
                     accusantium numquam! Totam ipsum, autem facilis vel pariatur distinctio explicabo modi
                     quaerat quos natus ducimus harum repudiandae, magni minus tempora nisi. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Repellendus facere, aliquid aliquam natus, molestias delectus in voluptatum veritatis maiores exercitationem assumenda cupiditate officiis tempora qui, et commodi velit voluptatem impedit?</p>
                </div>
            </div>
            <div class="card1">
                <div class="box">
                    <div class="search">
                        <form class="example" style="margin:auto;max-width:300px">
                            <input type="text" placeholder="Search.." name="search2">
                            <button type="submit"><i class="fa fa-search"></i></button>
                          </form>
                    </div>
                    <div class="categories">
                        <h2>Categories</h2>
                        <ul class="a">
                            <li><a href="">Technology</a></li>
                            <li><a href="">Travel</a></li>
                            <li><a href="">Food</a></li>
                        </ul>
                    </div>
                    <div class="recent_posts">
                        <h2>Recent Posts</h2>
                        <ul class="a">
                            <li><a href="">Apple's AR/VR Headset may include video content</a></li>
                            <li><a href="">Lake Powell's water crisis</a></li>
                            <li><a href="">Sand surfing the tallest sand dune</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

@endsection
