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
        <div class="row nopadding">
            <div class="full-height col col-lg-8 col-xs-12">
                <div class="full-width">
                    <div class="row">
                        <div class="header">
                            <img src="images/headerStarwars.png" alt="Header" />
                        </div>
                        <nav>
                            <ul class="col col-lg-5">
                                <li><a href="{{ url('/clean') }}">Word clean up</a></li>
                                <li><a href="{{ url('/fizzbuzz') }}">Fizz Buzz</a></li>
                                <li><a href="{{ url('/halloween') }}">Trick or treat</a></li>
                                <li><a href="{{ url('/roman') }}">Roman numerals</a></li>
                            </ul>
                        </nav>
                        <div class="container">
                            <h1>Fizz Buzz</h1>
                            
                        </div>
                    </div>

                    <script src="js/fizzbuzz.js" ></script>   
                    
                </div>
            </div>
            <div class="col col-lg-4 col-xs-12 code">
                <h2>Behind the scenes</h2>

<!-- BEGIN PRE -->             
<pre>
document.write("&lt;div <span class="var">class</span>='<span class="string">fizzbuzz</span>'");
<span class="var">for</span> (<span class="var">var</span> <span class="varName">i</span>=0; <span class="varName">i</span> <= 100; i++){
    <span class="var">if</span> (<span class="varName">i</span> % 3 == 0) document.write("<span class="string">Fizz&lt;br/></span>");
    <span class="var">else if</span> (<span class="varName">i</span> % 5 == 0) document.write("<span class="string">Buzz&lt;br/></span>");
    <span class="var">else if</span> (<span class="varName">i</span> % 15 == 0) document.write("<span class="string">Fizz Buzz&lt;br/></span>");
    <span class="var">else</span> document.write (<span class="string">i + "&lt;br/></span>");
}
document.write("<span class="string">&lt;/div></span>");
</pre>

<!-- EIND PRE -->

            </div>
        </div>
    </body>
</html>
