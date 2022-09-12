@extends('frontend.layouts.main')

@section('main-container')

    <div id = "about">
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
                    <h1>About us</h1>
                    <h2> <a href="index.html" class="tab"> Home </a> / About us</h2>
                </div>
            </section>
        </div>
    </div>
    <section id="company_about">
        <div class="flex container">
            <img src="images/young-attractive-business-colleagues-joyfully-looking-each-other-working-new-project-together-modern-office.jpg" alt="company about"/>
            <div>
                <h2>Title</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Nisl tincidunt eget nullam non. Quis hendrerit dolor magna eget est lorem ipsum dolor sit. Volutpat odio facilisis mauris sit amet massa. Commodo odio aenean sed adipiscing diam donec adipiscing tristique. Mi eget mauris pharetra et. Non tellus orci ac auctor augue. Elit at imperdiet dui accumsan sit. <br>Ornare arcu dui vivamus arcu felis. Egestas integer eget aliquet nibh praesent. In hac habitasse platea dictumst quisque sagittis purus. Pulvinar elementum integer enim neque volutpat ac.</p>
            </div>
        </div>
    </section>

    <div class="counter-up">
        <div class="content">
            <div class="box">
                <div class="icon"><i class="fas fa-users"></i></div>
                <div class="counter">35,000</div>
                <div class="text">Happy Customers</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-sticky-note"></i></div>
                <div class="counter">15,250</div>
                <div class="text">Running</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-list"></i></div>
                <div class="counter">900</div>
                <div class="text">Listed</div>
            </div>
            <div class="box">
                <div class="icon"><i class="fas fa-check"></i></div>
                <div class="counter">52,000</div>
                <div class="text">Completed Project</div>
            </div>

        </div>
    </div>

    <section id="leader">
        <div class="contents">
            <div id="paragraph">
                <div>
                    <h2>About Us</h2>
                </div>
                <div>
                    <h3>We the Leader</h3>
                </div>
                <div>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Atque nihil, modi expedita aperiam eum animi dolore perferendis, velit, blanditiis suscipit quia ipsum repellendus earum dignissimos consectetur illum quod voluptate! Doloribus.</p>
                </div>
                <div id="check">
                    <i class="fas fa-check"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div id="check">
                    <i class="fas fa-check"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div id="check">
                    <i class="fas fa-check"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div id="check">
                    <i class="fas fa-check"></i>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing.</p>
                </div>
                <div><button class="button">Apply </button></div>

            </div>
            <div id="paragraph">
                <div class="icon00">
                    <i class="fas fa-users"></i>
                    <h6>Users</h6>
                </div>
                <div class="icon11">
                    <i class="fas fa-coins"></i>
                    <h6>Revenue</h6>
                </div>
                <div class="icon22">
                    <i class="fas fa-ad"></i>
                    <h6>Advertisements</h6>
                </div>
                <div class="icon33">
                    <i class="fas fa-tasks"></i>
                    <h6>Tasks</h6>
                </div>
            </div>
        </div>
    </section>

@endsection
