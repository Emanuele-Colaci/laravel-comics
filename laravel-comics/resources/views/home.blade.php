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
        <main class="background-black">
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
        </main>

        <!-- FOOTER -->
        @include('partials/footer')
    </body>

</html>