<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite('resources/js/app.js')

    </head>

    <body>
        <header>
            <div class="backround-blue">
                <div class="container">
                    <div class="d-flex align-items-center justify-content-end ">
                        <a href="#" class="text-white">
                            <p><strong>dc power visa</strong></p>
                        </a>
                        <a href="#" class="text-white">
                            <p class="mx-3"><strong>ADDITIONAL DC SITES <i class="fa-solid fa-caret-down"></i></strong></p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="bg-white mt-3 mb-3">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-2">
                            <a href="/">
                                <img src="{{Vite::asset('/resources/images/dc-logo.png')}}" alt="logo">
                            </a>
                        </div>
                        <div class="col-10">
                            <ul>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>CHARACTERS</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>COMICS</strong>    
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>MOVIES</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>TV</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>GAMES</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>COLLECTIBLES</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>VIDEOS</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>FANS</strong>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>NEWS</strong>  
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="link.active">
                                        <strong>SHOP</strong>
                                        <i class="fa-solid fa-caret-down"></i>
                                    </a>
                                </li>
                                <li>
                                    <input type="text" class="float-end" placeholder="Search">
                                    <i class="fa-solid fa-magnifying-glass"></i>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </header>
    </body>

</html>