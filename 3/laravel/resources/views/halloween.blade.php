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
                            <h1>Trick or Treat!</h1>
                            <div class="row fields">
                                <div class="col col-lg-2">
                                    <label>Vampires</label>
                                </div>
                                <div class="col col-lg-2">
                                    <label>Zombies</label>
                                </div>
                                <div class="col col-lg-2">
                                    <label>Witches</label>
                                </div>
                                <div class="col col-lg-2">
                                    <label>Houses</label>
                                </div>
                                <div class="spacer"></div>
                            </div>
                            <div class="row fields"> 
                                <div class="col col-lg-2">
                                    <input id="vampire" type="text" /><br />
                                </div>
                                <div class="col col-lg-2">
                                    <input id="zombie" type="text" /><br />
                                </div>
                                <div class="col col-lg-2">
                                    <input id="witch" type="text" /><br />
                                </div>
                                <div class="col col-lg-2">
                                    <input id="house" type="text" /><br />
                                </div>
                                <button onclick=totalCandy() class="button">Share candy!</button>
                            </div>
                            <div class="row fields"> 
                                <div class="col col-lg-12">
                                    
                                </div>
                                <div class="col col-lg-12">
                                    <div id="total"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="js/halloween.js" ></script>   
                    
                </div>
            </div>
            <div class="col col-lg-4 col-xs-12 code">
                <h2>Behind the scenes</h2>

<!-- BEGIN PRE -->             
<pre>
&lt;div <span class="var">class</span>="<span class="string">row fields</span>"> 
    &lt;div <span class="var">class</span>="<span class="string">col lg-4</span>">
        &lt;input <span class="var">id</span>="<span class="string">vampire</span>" <span class="var">type</span>="<span class="string">text</span>" />&lt;br />
    &lt;/div>
    &lt;div <span class="var">class</span>="<span class="string">col lg-4</span>">
        &lt;input <span class="var">id</span>="<span class="string">zombie</span>" <span class="var">type</span>="<span class="string">text</span>" />&lt;br />
    &lt;/div>
    &lt;div <span class="var">class</span>="<span class="string">col lg-4</span>">
        &lt;input <span class="var">id</span>="<span class="string">witch</span>" <span class="var">type</span>="<span class="string">text</span>" />&lt;br />
    &lt;/div>
    &lt;div <span class="var">class</span>="<span class="string">col lg-4</span>">
        &lt;input <span class="var">id</span>="<span class="string">house</span>" <span class="var">type</span>="<span class="string">text</span>" />&lt;br />
    &lt;/div>
    &lt;button onclick=<span class="varName">totalCandy()</span> <span class="var">class</span>="<span class="string">button</span>">Share candy!&lt;/button>
&lt;/div>
&lt;div <span class="var">class</span>="<span class="string">row fields</span>"> 
    &lt;div <span class="var">class</span>="<span class="string">col col-lg-12</span>">
        
    &lt;/div>
    &lt;div <span class="var">class</span>="<span class="string">col col-lg-12</span>">
        &lt;div <span class="var">id</span>="<span class="string">total</span>">&lt;/div>
    &lt;/div>
&lt;/div>

function totalCandy() {
    <span class="var">var</span> <span class="varName">vampireKids</span> = parseInt(document.getElementById("<span class="string">vampire</span>").value);
    <span class="var">var</span> <span class="varName">vampireCandy</span> = <span class="varName">vampireKids</span> * 3;

    <span class="var">var</span> <span class="varName">zombieKids</span> = parseInt(document.getElementById("<span class="string">zombie</span>").value);
    <span class="var">var</span> <span class="varName">zombieCandy</span> = <span class="varName">zombieKids</span> * 4;

    <span class="var">var</span> <span class="varName">witchKids</span> = parseInt(document.getElementById("<span class="string">witch</span>").value);
    <span class="var">var</span> <span class="varName">witchCandy</span> = <span class="varName">witchKids</span> * 5;

    <span class="var">var</span> <span class="varName">totalHouses</span> = document.getElementById("<span class="string">house</span>").value;
   
    <span class="var">var</span> <span class="varName">totalKids</span> = <span class="varName">vampireKids</span> + <span class="varName">zombieKids</span> + <span class="varName">witchKids</span>;
    <span class="var">var</span> <span class="varName">total</span> = <span class="varName">vampireCandy</span> + <span class="varName">zombieCandy</span> + <span class="varName">witchCandy</span>;
    <span class="var">var</span> <span class="varName">totalCandy</span> = <span class="varName">total</span> * <span class="varName">totalHouses</span>;

    <span class="var">var</span> <span class="varName">share</span> = <span class="varName">totalCandy</span> / <span class="varName">totalKids</span>;

    document.getElementById("<span class="string">total</span>").innerHTML = Math.floor(<span class="varName">share</span>);
}
</pre>

<!-- EIND PRE -->

            </div>
        </div>
    </body>
</html>
