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
        <div class="row nopadding clean">
            <div class="full-height col col-lg-8 col-xs-12">
                <div class="full-width">
                    <div class="row">
                        <div class="header">
                            <img src="images/headerStarwars.png" alt="Header" />
                        </div>
                        <nav>
                            <ul class="col col-lg-5">
                                <li><a href="{{ url('/') }}">Word clean up</a></li>
                                <li><a href="{{ url('/fizzbuzz') }}">Fizz Buzz</a></li>
                                <li><a href="{{ url('/halloween') }}">Trick or treat</a></li>
                                <li><a href="{{ url('/roman') }}">Roman numerals</a></li>
                            </ul>
                        </nav>
                        <div class="container">
                            <h1>Rock, Paper, Scissors</h1>
                            <div class="row">
                                <div class="col col-lg-6">
                                    <img id="rock" onclick=rock() src="images/rock.png" />
                                    <img id="paper" onclick=paper() src="images/paper.png" />
                                    <img id="scissors" onclick=scissors() src="images/scissors.png" />
                                </div>
                                <div class="col col-lg-6">
                                    <p class="computer" id="computer"></p>
                                    
                                    
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="js/easteregg.js"></script> 
                    
                </div>
            </div>
            <div class="col col-lg-4 col-xs-12 code">
                <h2>Behind the scenes</h2>

<!-- BEGIN PRE -->             
<pre>
&lt;div <span class="var">class</span>="col col-lg-6">
    &lt;img <span class="var">id</span>="rock" <span class="var">onclick</span>=rock() <span class="var">src</span>="images/rock.png" />
    &lt;img <span class="var">id</span>="paper" <span class="var">onclick</span>=paper() <span class="var">src</span>="images/paper.png" />
    &lt;img <span class="var">id</span>="scissors" <span class="var">onclick</span>=scissors() <span class="var">src</span>="images/scissors.png" />
&lt;/div>

function <span class="var">rock()</span>{
    <span class="var">var</span> <span class="varName">computer</span> = Math.random();
    <span class="var">if</span>(<span class="varName">computer</span> < 0.34){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/rock.png' /> It's a tie</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> <= 0.67){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/paper.png' /> you lost</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> < 1){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/scissors.png' /> you won!</span>";
    }
}

function <span class="var">paper()</span>{
    <span class="var">var</span> <span class="varName">computer</span> = Math.random();
    <span class="var">if</span>(<span class="varName">computer</span> < 0.34){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/rock.png' /> you won!</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> <= 0.67){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/paper.png' /> It's a tie</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> < 1){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/scissors.png' /> you lost</span>";
    }
}

function <span class="var">scissors()</span>{
    <span class="var">var</span> <span class="varName">computer</span> = Math.random();
    <span class="var">if</span>(<span class="varName">computer</span> < 0.34){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/rock.png' /> you lost</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> <= 0.67){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/paper.png' /> you won!</span>";
    } <span class="var">else if</span> (<span class="varName">computer</span> < 1){
        document.getElementById("computer").innerHTML = "&lt;img src='<span class="string">images/scissors.png' /> It's a tie</span>";
    }
}

</pre>

<!-- EIND PRE -->

            </div>
        </div>
    </body>
</html>
