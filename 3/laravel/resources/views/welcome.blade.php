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

        <!-- Styles -->
        <style>
            *{
                margin: 0;
                padding: 0;
            }

            @font-face {
                font-family: Din;
                src: url('fonts/DIN-Regular.ttf');
            }

            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-width: {
                width: 100%;
            }

            nav{
                background-color: #222;
                height: 50px; 
                padding-top: 0.9%;
            }

            ul{
                float: right;
            }

            ul li{
                display: inline;
                font-family: 'Din';
                font-size: 10px;
                text-transform: uppercase;
                padding-left: 1%;
            }

            ul li a{
                color: white;
            }

            ul li a:hover{
                color: white;
                text-decoration: none;
            }

            .background{
                background-image: url('images/background.jpg');
                background-repeat: no-repeat;
                background-size: cover;
                background-attachment: fixed;
            }

            .header img{
                width: 100%;
                padding: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 12px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
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
                        <nav>
                            <ul class="col col-lg-5">
                                <li><a href="#">Word clean up</a></li>
                                <li><a href="#">Fizz Buzz</a></li>
                                <li><a href="#">Trick or treat</a></li>
                                <li><a href="#">Roman numerals</a></li>
                            </ul>
                        </nav>
                        <div class="full-width header ">
                            <img src="images/headerStarwars.png" alt="Header" />
                        </div>
                        
                    </div>
                </div>

                    
                
            </div>
        </div>
    </body>
</html>
