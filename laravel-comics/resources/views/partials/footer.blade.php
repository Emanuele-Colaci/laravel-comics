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
                                <p><a href="#">Characteres</a></p>
                                <p><a href="#">Comics</a></p>
                                <p><a href="#">Movies</a></p>
                                <p><a href="#">Tv</a></p>
                                <p><a href="#">Games</a></p>
                                <p><a href="#">Videos</a></p>
                                <p><a href="#">News</a></p>
                                <h2>SHOP</h2>
                                <p><a href="#">Shop DC</a></p>
                                <p><a href="#">Shop DC Collectibles</a></p>
                            </div>
                            <div class="margin-left">
                                <h2>DC</h2>
                                <p><a href="#">Terms Of Use</a></p>
                                <p><a href="#">Privacy policy (New)</a></p>
                                <p><a href="#">Ad Choices</a></p>
                                <p><a href="#">Advertising</a></p>
                                <p><a href="#">Jobs</a></p>
                                <p><a href="#">Subscriptions</a></p>
                                <p><a href="#">Talent Workshops</a></p>
                                <p><a href="#">CPSC Certificates</a></p>
                                <p><a href="#">Ratings</a></p>
                                <p><a href="#">Shop Help</a></p>
                                <p><a href="#">Contact Us</a></p>
                            </div>
                            <div class="margin-left">
                                <h2>SITES</h2>
                                <p><a href="#">DC</a></p>
                                <p><a href="#">MAD Magazine</a></p>
                                <p><a href="#">DC Kids</a></p>
                                <p><a href="#">DC Universe</a></p>
                                <p><a href="#">DC Power Visa</a></p>
                            </div>
                        </div>
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