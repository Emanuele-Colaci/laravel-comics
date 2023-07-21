<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        <footer>
            <div class="bg-image">
                <div class="container2 row">
                    <div class="col">
                        <div class="d-flex">
                            <div>
                                <h2>DC COMICS</h2>
                                <div><a href="#">Characteres</a></div>
                                <div><a href="#">Comics</a></div>
                                <div><a href="#">Movies</a></div>
                                <div><a href="#">Tv</a></div>
                                <div><a href="#">Games</a></div>
                                <div><a href="#">Videos</a></div>
                                <div><a href="#">News</a></div>
                                <h2>SHOP</h2>
                                <div><a href="#">Shop DC</a></div>
                                <div><a href="#">Shop DC Collectibles</a></div>
                            </div>
                            <div class="margin-left">
                                <h2>DC</h2>
                                <div><a href="#">Terms Of Use</a></div>
                                <div><a href="#">Privacy policy (New)</a></div>
                                <div><a href="#">Ad Choices</a></div>
                                <div><a href="#">Advertising</a></div>
                                <div><a href="#">Jobs</a></div>
                                <div><a href="#">Subscriptions</a></div>
                                <div><a href="#">Talent Workshops</a></div>
                                <div><a href="#">CPSC Certificates</a></div>
                                <div><a href="#">Ratings</a></div>
                                <div><a href="#">Shop Help</a></div>
                                <div><a href="#">Contact Us</a></div>
                            </div>
                            <div class="margin-left">
                                <h2>SITES</h2>
                                <div><a href="#">DC</a></div>
                                <div><a href="#">MAD Magazine</a></div>
                                <div><a href="#">DC Kids</a></div>
                                <div><a href="#">DC Universe</a></div>
                                <div><a href="#">DC Power Visa</a></div>
                            </div>
                        </div>
                        <p class="text-secondary mt-5">All Site Content TM and 2020 DC Entertainment, unless otherwise <a class="text-primary" href="#">noted here</a>. All rights reserved. <a class="text-primary" href="#">Cookies Settings</a></p>
                    </div>
                    <div class="col">
                        <div class="image-container">
                            <img src="{{ Vite::asset('/resources/images/dc-logo-bg.png') }}" alt="logo-bg">
                        </div>
                    </div>
                </div>
            </div>
            <div class="bg-grey">
                <div class="container3 content3">
                    <div>
                        <button>SING-UP NOW!</button>
                    </div>
                    <div>
                        <h3>FOLLOW US</h3>
                        <div class="vertical">
                            <a href="#"><img src="{{ Vite::asset('/resources/images/footer-facebook.png') }}" alt="facebook"></a>
                            <a href="#"><img src="{{ Vite::asset('/resources/images/footer-twitter.png') }}" alt="twitter"></a>
                            <a href="#"><img src="{{ Vite::asset('/resources/images/footer-youtube.png') }}" alt="youtube"></a>
                            <a href="#"><img src="{{ Vite::asset('/resources/images/footer-pinterest.png') }}" alt="pinterest"></a>
                            <a href="#"><img src="{{ Vite::asset('/resources/images/footer-periscope.png') }}" alt="periscope"></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </body>

</html>