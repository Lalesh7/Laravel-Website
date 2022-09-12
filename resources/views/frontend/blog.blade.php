@extends('frontend.layouts.main')

@section('main-container')

    <div id="blog">
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
                    <h1>Blog</h1>
                    <h2> <a href="{{url('/')}}" class="tab"> Home </a> / Blog</h2>
                </div>
            </section>
        </div>

    </div>
    <div class="blogs">
        <div class="card">
            <div class="card-header">
                <img src="{{url('frontend/images/medium-shot-man-wearing-vr-glasses.jpg')}}" alt="VR">
            </div>
            <div class="card-body">
                <span class="tag tag-teal">Technology</span>
                <h4> <a href="{{url('/blog_1')}}">Apple's AR/VR Headset may include video content created by Hollywood directors</a></h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatem asperiores quidem atque autem? Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias asperiores molestia</p>
                <div class="card-user">
                    <img src="{{url('frontend/images/content writer.jpg')}}" alt="user1">
                    <div class="user-info">
                        <h5>Sabbu</h5>
                        <small>4 minutes ago</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="{{url('frontend/images/tourist-sitting-phu-sub-lek-viewpoint-sunset-lopburi-thailand.jpg')}}" alt="Hiking">
            </div>
            <div class="card-body">
                <span class="tag tag-travel">Travel</span>
                <h4>Lake Powell's water crisis reveals more of one of Arizona's most spectacular canyons</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellat vero, unde explicabo nesciunt cum maxime Lorem ipsum dolor sit</p>
                <div class="card-user">
                    <img src="{{url('frontend/images/hr.jpg')}}" alt="user2">
                    <div class="user-info">
                        <h5>Harshha</h5>
                        <small>17 August, 2022</small>
                    </div>
                </div>
            </div>
        </div>
        <div class="card">
            <div class="card-header">
                <img src="{{url('frontend/images/aerial-shot-boat-spiti-river-india.jpg')}}" alt="Lake">
            </div>
            <div class="card-body">
                <span class="tag tag-travel">Travel</span>
                <h4>Sand surfing the tallest sand dune in North America, diving into Caribbean blue water</h4>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi voluptatem asperiores quidem atque autem?Lorem ipsum dolor sit amet consectetur adipisicing elit. Alias asperiores molestia</p>
                <div class="card-user">
                    <img src="{{url('frontend/images/graphic designer.jpg')}}" alt="user3">
                    <div class="user-info">
                        <h5>Bhim Vai</h5>
                        <small>21 September, 2021</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <div class="belief">
        <div class="content">
            <div class="box">
                <h2>Belief for Customers</h2>
                <p>Lorem ipsum dolor sit</p>
                <p>Lorem ipsum dolor sit</p>
                <p>Lorem ipsum dolor sit</p>
                <button>Get Quote</button>
            </div>
        </div>
    </div>

@endsection
