<footer>
    <div class="flex container">
        <div class="footer-about">
            <a id="logo" href="{{url('/')}}">Bibhuti Solutions</a>
            <p>Lorem ipsum dolor sit amet</p>
        </div>
        <div class="footer-useful-links">
            <h5>Useful Links</h5>
            <ul>
                <li><a href="{{url('/')}}" class="active">Home</a></li>
                <li><a href="{{url('/services')}}"> Services</a></li>
                <li><a href="{{url('/team')}}">Team</a></li>
                <li><a href="{{url('/blog')}}">Blog</a></li>
            </ul>
        </div>
        <div class="footer-what-we-do">
            <h5>What we do</h5>
            <ul>
                <li>Development</li>
                <li>Testing</li>
                <li>Planning</li>
                <li>Wealth</li>
            </ul>
        </div>
        <div class="footer-newsletter">
            <h5>Newsletter</h5>
            <div id="newsletter-container">
                <input type="text" placeholder="Name"/>
                <input type="text" placeholder="Email">
                <input type="text" placeholder="Subscribe">
            </div>

        </div>
    </div>
    <small>
        Copyright &copy; 2022 Bibhuti Solutions. All rights reserved.</small>
</footer>

<script src="{{url('frontend/js/main.js')}}"> </script>
