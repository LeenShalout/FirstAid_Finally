
    <footer id="footer">
        <div style="height: 150px; overflow: hidden;">
            <svg viewBox="0 0 500 150" preserveAspectRatio="none" style="height: 100%; width: 100%;">
                <path d="M0.00,92.27 C216.83,192.92 304.30,8.39 500.00,109.03 L500.00,0.00 L0.00,0.00 Z"></path>
            </svg>
        </div>

        <div class="footer-container d-md-flex p-3">
            <div class="row">
            <div class="col aidhub">
                <div><img src="{{asset('Images/aidhub.png')}}" class="aidhub-img" alt="..."></div>
                <h6>#Let's join together in creating a safer community by educating ourselves with essential first aid knowledge from our website.</h6>
            </div>
            <div class="col useful-links">
                <h5>Useful Links:</h5>
                <ul class="p-0">
                    <li><a href="/#home"><i class="fa-solid fa-angle-right"></i> Home</a></li>
                    <li><a href="/#about"><i class="fa-solid fa-angle-right"></i> About</a></li>
                    <li><a href="/#cases"><i class="fa-solid fa-angle-right"></i> Cases</a></li>
                    <li><a href="/#blogs"><i class="fa-solid fa-angle-right"></i> Blog</a></li>
                    <li><a href="/#workshop"><i class="fa-solid fa-angle-right"></i> Workshop</a></li>
                    <li><a href="/#contact"><i class="fa-solid fa-angle-right"></i> Contact</a></li>
                </ul>
            </div>
            <div class="col social-media">
                <div><h5>Contact:</h5></div>
                <div>
                <a href=""><img src="{{asset('Images/linkedin.png')}}" class="social-media-img" alt="..."></a>
                <a href=""><img src="{{asset('Images/facebook.png')}}" class="social-media-img" alt="..."></a>
                <a href=""><img src="{{asset('Images/twitter.png')}}" class="social-media-img" alt="..."></a>
                <a href=""><img src="{{asset('Images/instagram.png')}}" class="social-media-img" alt="..."></a>
                </div>
            </div>
            <div class="col experience">
                <div><h6>Let's encourage each other to share our experiences with first aid to benefit and empower others in our community.</h6></div>

                <button class="btn btn-primary"><a href="/forum">Share Your Experience</a></button>
            </div>
            <hr>
        <div class="row">
            <div class="last-footer text-center">
                <p>AidHub © {{ date('Y') }}, All Rights Reserved</p>
            </div>
        </div>
        </div>


        </div>
        </div>

    </footer>
