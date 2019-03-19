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

            <div class="container-fluid">
                <div class="row">
                    <div>
                        <div class="full-width header ">
                            <img src="images/headerStarwars.png" alt="Header" />
                        </div>
                        <nav>
                            <ul class="col col-lg-5">
                                <li><a href="#">Word clean up</a></li>
                                <li><a href="#">Fizz Buzz</a></li>
                                <li><a href="#">Trick or treat</a></li>
                                <li><a href="#">Roman numerals</a></li>
                            </ul>
                        </nav>
                        <div class="container">
                            <h1>Word clean up</h1>
                            <div class="row">
                                <div class="col col-lg-6 text">
                                    <p id="paragraph1"></p>
                                    <p id="paragraph2"></p>
                                    <p id="paragraph3"></p>
                                    <p id="paragraph4"></p>
                                    <p id="paragraph5"></p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <script src="js/clean.js" ></script>   
                
            </div>
        </div>
    </body>
</html>
