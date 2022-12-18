<footer id="site_footer">
    <div class="footer_top">
        <div class="container">
            <div class="row">
                <div class="col">
                    <h4>Dc comics</h4>
                    <ul>
                        <li>
                            <a href="#">Characters</a>
                        </li>
                        <li>
                            <a href="#">Comics</a>
                        </li>
                        <li>
                            <a href="#">Movies</a>
                        </li>
                        <li>
                            <a href="#">TV</a>
                        </li>
                        <li>
                            <a href="#">Games</a>
                        </li>
                        <li>
                            <a href="#">Videos</a>
                        </li>
                        <li>
                            <a href="#">News</a>
                        </li>
                    </ul>
                    <div class="shop">
                        <h4>Shop</h4>
                        <ul>
                            <li>
                                <a href="#">Shop DC</a>
                            </li>
                            <li>
                                <a href="#">Shop DC Collectibles</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col">
                    <h4>dc</h4>
                    <ul>
                        <li>
                            <a href="#">Terms of use</a>
                        </li>
                        <li>
                            <a href="#">Privacy Policy(New)</a>
                        </li>
                        <li>
                            <a href="#">Ad Choices</a>
                        </li>
                        <li>
                            <a href="#">Advertising</a>
                        </li>
                        <li>
                            <a href="#">Jobs</a>
                        </li>
                        <li>
                            <a href="#">Subscriptions</a>
                        </li>
                        <li>
                            <a href="#">Talent Workshops</a>
                        </li>
                        <li>
                            <a href="#">CPSC Certificates</a>
                        </li>
                        <li>
                            <a href="#">Ratings</a>
                        </li>
                        <li>
                            <a href="#">Shop Help</a>
                        </li>
                        <li>
                            <a href="#">Contact Us</a>
                        </li>
                    </ul>
                </div>
                <div class="col">
                    <h4>Sites</h4>
                    <ul>
                        <li>
                            <a href="#">DC</a>
                        </li>
                        <li>
                            <a href="#">MAD Magazine</a>
                        </li>
                        <li>
                            <a href="#">DC Kids</a>
                        </li>
                        <li>
                            <a href="#">DC Universe</a>
                        </li>
                        <li>
                            <a href="#">DC Power Visa</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="rights pb-4">
                    All Site Content TM and &COPY; 2020 DC Entertainment, unless otherwise <a href="#">noted here</a>. All rights reserved. <br>
                    <a href="#">Cookies Settings</a>
                </div>
            </div>
        </div>
    </div>
    <!-- /. footer_top -->
    <div class="footer_bottom">
        <div class="container">
            <div class="col">
                <div class="btn">
                    <a>SIGN-UP now!</a>
                </div>
            </div>
            <div class="social">
                <div class="follow">Follow us</div>
                @foreach ($social_icons as $icon)
                <img src="{{ Vite::asset($icon['img'])}}" alt="">
                @endforeach
            </div>
        </div>
    </div>
    <!-- /. footer_top -->
</footer>