<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Challenges</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <link href="css/bootstrap.css" rel="stylesheet" type="text/css">
        <link href="css/style.css" rel="stylesheet" type="text/css">

    </head>
    <body>
        <div class="full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ url('/login') }}">Login</a>
                        <a href="{{ url('/register') }}">Register</a>
                    @endif
                </div>
            @endif

            <div class="container-fluid">
                <div class="row">
                    <div class="background full-height">
                        <div class="full-width header ">
                            <img src="images/headerStarwars.png" alt="Header" />
                        </div>
                        <nav>
                            <ul class="col col-lg-5">
                                <li><a href="{{ url('/clean') }}">Word clean up</a></li>
                                <li><a href="#">Fizz Buzz</a></li>
                                <li><a href="#">Trick or treat</a></li>
                                <li><a href="#">Roman numerals</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>

                    
                
            </div>
        </div>
    </body>
</html>
