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
                            <h1>Word clean up</h1>
                            <div class="row">
                                <div class="col col-lg-6 text">
                                    <p id="paragraph1"></p>
                                    <p id="paragraph2"></p>
                                    <p id="paragraph3"></p>
                                    <p id="paragraph4"></p>
                                    <p id="paragraph5"></p>
                                </div>
                                <div class="col col-lg-6 yoda">
                                    <a href="{{ url('/easteregg') }}"><img src="images/yoda.jpg" alt="yoda" /></a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <script src="js/clean.js" ></script>   
                    
                </div>
            </div>
            <div class="col col-lg-4 col-xs-12 code">
                <h2>Behind the scenes</h2>

<!-- BEGIN PRE -->             
<pre>

&lt;div <span class="var">class</span>="<span class="string">row</span>">
    &lt;div <span class="var">class</span>="<span class="string">col col-lg-6 text</span>">
        &lt;p <span class="var">id</span>="<span class="string">paragraph1</span>">&lt;/p>
        &lt;p <span class="var">id</span>="<span class="string">paragraph2</span>">&lt;/p>
        &lt;p <span class="var">id</span>="<span class="string">paragraph3</span>">&lt;/p>
        &lt;p <span class="var">id</span>="<span class="string">paragraph4</span>">&lt;/p>
        &lt;p <span class="var">id</span>="<span class="string">paragraph5</span>">&lt;/p>
    &lt;/div>
&lt;/div>

<span class="var">var</span> <span class="varName">paragraph1</span> = `>&lt;Hello#521paddawan2==) Today---you0[]learn.,.-important.stuff`
<span class="var">var</span> <span class="varName">paragraph2</span> = `*&Episode238I(& #$--THE33PHANTOM]}]MENACE[[`
<span class="var">var</span> <span class="varName">paragraph3</span> = `&^%$Turmoil32<&lt;has!-engulfed#2the:
    ))-Galactic-3-0Republic.2€The8&&taxation
    @)of#)#trade^@#*routes""{}to}}[outlying239{star
    13-systems%%$is@%^in!235%dispute.23`
<span class="var">var</span> <span class="varName">paragraph4</span> = `<,&lt;Hoping><>#to81*resolve*--_the(-)matter*!*#
    with??a??.blockade;\;of*&^*deadly??
    battleships,@#%99the158*greedy%@*)Trade]}0-
    Federation@#%3has@#@%3"stopped>?>all<#4
    shipping9(8to(*&the&&$small$!@planet$#*
    #@#T&of!?Naboo.$`
<span class="var">var</span> <span class="varName">paragraph5</span> = `While38*the-Congress==+of#&&@the!#@
    Republic$@:;endlessly?%#debates|}[
    this235#%$^alarming_()8chain&)(@$of*&events,3
    {[{--the0Supreme--=+Chancellor+09*has]
    secretly@#]dispatched!!two%%$Jedi%:;
    Knights,%the::guardians*&of+-
    peace()and][3justice)&^}in@{the^}$
    galaxy,8to##settle%@the@#%conflict....`    

<span class="varName">document</span>.getElementById("<span class="varName">paragraph1</span>").innerHTML = <span class="varName">paragraph1</span>.replace(<span class="string">/[^a-zA-Z\r ]/g, " "</span>);
<span class="varName">document</span>.getElementById("<span class="varName">paragraph2</span>").innerHTML = <span class="varName">paragraph2</span>.replace(<span class="string">/[^a-zA-Z\r ]/g, " "</span>);
<span class="varName">document</span>.getElementById("<span class="varName">paragraph3</span>").innerHTML = <span class="varName">paragraph3</span>.replace(<span class="string">/[^a-zA-Z\r ]/g, " "</span>);
<span class="varName">document</span>.getElementById("<span class="varName">paragraph4</span>").innerHTML = <span class="varName">paragraph4</span>.replace(<span class="string">/[^a-zA-Z\r ]/g, " "</span>);
<span class="varName">document</span>.getElementById("<span class="varName">paragraph5</span>").innerHTML = <span class="varName">paragraph5</span>.replace(<span class="string">/[^a-zA-Z\r ]/g, " "</span>);
</pre>

<!-- EIND PRE -->

            </div>
        </div>
    </body>
</html>
