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
                                <li><a href="{{ url('/') }}">Word clean up</a></li>
                                <li><a href="{{ url('/fizzbuzz') }}">Fizz Buzz</a></li>
                                <li><a href="{{ url('/halloween') }}">Trick or treat</a></li>
                                <li><a href="{{ url('/roman') }}">Roman numerals</a></li>
                            </ul>
                        </nav>
                        <div class="container">
                            <h1>Roman Numeral</h1>
                            <div class="row fields">
                                <div class="col col-lg-5">
                                    Random nummer
                                </div>
                                <div class="col col-lg-6">
                                    Output in Romeinse cijfers
                                </div>
                            </div>
                            <div class="row fields">
                                <div class="col col-lg-5">
                                    <input id="number" type="text" oninput="RomanValue()" />
                                </div>
                                <div class="col col-lg-6">
                                    <div id="paragraph"></div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="js/roman.js" ></script>   
                    
                </div>
            </div>
            <div class="col col-lg-4 col-xs-12 code">
                <h2>Behind the scenes</h2>

<!-- BEGIN PRE -->             
<pre>
&lt;div <span class="var">class</span>="row fields">
    &lt;input <span class="var">id</span>="number" <span class="var">type</span>="text" <span class="var">oninput</span>="<span class="string">RomanValue()</span>" />
    &lt;div <span class="var">id</span>="paragraph">&lt;/div>
&lt;/div>

function toRoman(num) {  
    <span class="var">var</span> <span class="varName">result</span> = '';
    <span class="var">var</span> <span class="varName">decimal</span> = [1000, 900, 500, 400, 100, 90, 50, 40, 10, 9, 5, 4, 1];
    <span class="var">var</span> <span class="varName">roman</span> = ["M", "CM","D","CD","C", "XC", "L", "XL", "X","IX","V","IV","I"];
    <span class="var">for</span> (<span class="var">var</span> i = 0;i<=decimal.length;i++) {
        <span class="var">while</span> (num%decimal[i] < num) {     
        <span class="varName">result</span> += roman[i];
        num -= decimal[i];
        }
    }
    <span class="var">return</span> <span class="varName">result</span>;
}

function RomanValue() {
    <span class="var">var</span> <span class="varName">x</span> = document.getElementById("<span class="string">number</span>").value;
    document.getElementById("<span class="string">paragraph</span>").innerHTML = toRoman(<span class="varName">x</span>);
}

</pre>

<!-- EIND PRE -->

            </div>
        </div>
    </body>
</html>
