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
        <!-- HEADER -->
        @include('partials/header')

        <!-- MAIN -->
        <div class="position-relative">
            <!-- JUMBOTRON -->
            <img class="jumbotron" src="{{Vite::asset('/resources/images/jumbotron.jpg')}}" alt="Jumbotron">
            <button class="position">CURRENT SERIES</button>
        </div>
        <main>
            <div class="background-black"> 
                <div class="container">
                    <div class="row">
                        @foreach($comics as $comic)
                            <div class="col-12 col-md-6 col-lg-2 mt-5">
                                <div class="my-1 height-card">
                                    <img class="img-fluid card-img-top fumetti" src="{{ $comic['thumb'] }}" alt="{{ $comic['series'] }}">
                                    <div class="card-body text-white mt-3">
                                        <span>{{ $comic['series'] }}</span>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <button>LOAD MORE</button>
                </div>
            </div>
            <div class="bg-blue">
                <div class="cantainer d-flex justify-content-center aling-items-center">
                    <a class="dimension" href="#">  
                        <img src="{{Vite::asset('/resources/images/buy-comics-digital-comics.png')}}" alt="">
                        <span>DIGITAL COMICS</span>
                    </a>
                    <a class="dimension" href="#">
                        <img src="{{Vite::asset('/resources/images/buy-comics-merchandise.png')}}" alt="">
                        <span>DC MERCHANDISE</span>
                    </a>
                    <a class="dimension" href="#">
                        <img src="{{Vite::asset('/resources/images/buy-comics-shop-locator.png')}}" alt="">
                        <span>SUBSCRIPTION</span>
                    </a>
                    <a class="dimension" href="#">
                        <img src="{{Vite::asset('/resources/images/buy-comics-subscriptions.png')}}" alt="">
                        <span>COMIC SHOP LOCATOR</span>
                    </a>
                    <a class="svg-img" href="#">
                        <img src="{{Vite::asset('/resources/images/buy-dc-power-visa.svg')}}" alt="">
                        <span>DC POWER VISA</span>
                    </a>
                </div>
            </div>
        </main>

        <!-- FOOTER -->
        @include('partials/footer')
    </body>

</html>