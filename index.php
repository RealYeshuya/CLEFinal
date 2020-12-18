<?php
$css = (isset($_GET['css']) && $_GET['css'] != '') ? $_GET['css'] : '';
$svg = (isset($_GET['svg']) && $_GET['svg'] != '') ? $_GET['svg'] : '';
$canvas = (isset($_GET['canvas']) && $_GET['canvas'] != '') ? $_GET['canvas'] : '';
?>

<!DOCTYPE html>
<html>
    <head>
        <title> My PortFolio </title>
        <link rel="stylesheet" type="text/css" href="css/styles.css">
    </head>
    <body>
        <div id="header"> 
            <div id="logo">
                V
                <div id="circleLogo">
                    <div id="eyeball">
                        <div id="eye">
                        </div>
                    </div>
                </div>
            </div>
            <div class="hi">Hi I am</div>
            <div class="fname">JOSHUA</div>
            <div class="lname">PANGANIBAN</div>
            <div class="greet">WELCOME TO MY PORTFOLIO</div>
        </div>
        <div class="topnav">
            <ul>
                <li><a href="index.php"> HOME </a></li> 
                <li><a href="about.php"> ABOUT </a></li> 
                <li><a href="#content"> WORK </a></li> 	
            </ul>
        </div>
        <div class="socmed">
            <a href="https://www.facebook.com/joshua.panganiban.7/">
                <div class="logo-facebook-small">
                    <div class="longpiece"></div>
                    <div class="longpiece-none"></div>
                    <div class="shortpiece"></div>
                    <div class="shortpiece-none"></div>
                </div>
            </a>
            <div class="logo-twitter-small">
                <div class="body"></div>
                <div class="body-none"></div>
                <div class="beak-bottom"></div>
                <div class="beak-bottom-none"></div>
                <div class="wing-bottom"></div>
                <div class="wing-bottom-none"></div>
                <div class="wing-middle"></div>
                <div class="wing-middle-none"></div>
                <div class="wing-top"></div>
                <div class="wing-top-none"></div>
                <div class="beak-top"></div>
                <div class="beak-top-none"></div>
                <div class="head"></div>
            </div>
            <a href="https://github.com/Yeshuya">
                <div class="logo-github-small">
                    <div class="ear-one-left"></div>
                    <div class="ear-one-none"></div>
                    <div class="ear-one-right"></div>
                    <div class="ear-two-right"></div>
                    <div class="ear-two-none"></div>
                    <div class="ear-two-left"></div>
                    <div class="body-bottom"></div>
                    <div class="body-left-none"></div>
                    <div class="body-right-none"></div>
                    <div class="tail-end"></div>
                    <div class="tail-body"></div>
                    <div class="tail-body-spots"></div>
                    <div class="tail-end-none"></div>
                    <div class="tail-body-none"></div>
                    <div class="tail-tip"></div>
                    <div class="body-left"></div>
                    <div class="body-right"></div>
                    <div class="head"></div>
                    <div class="chin-left"></div>
                    <div class="chin-right"></div>
                </div>
            </a>
        </div>
        <div id="content">
            <a href="css.php">
                <div id="css">
                    <div class="name"> CSS </div>
                    <div class="topic"> Animation and Transitions </div>
                    <div id="sample_containercss">
                        <div id="cipher">
                            <div id="side"></div>
                            <div id="side"></div>
                            <div id="top">
                                <hr>
                            </div>
                            <div id="screen"></div>
                            <div id="bottom"></div>
                            <div id="plug"></div>
                        </div>
                        <div id="base">
                            <div id="pole">
                                <div id="line"></div>
                            </div>
                        </div>
                        <div id="box">
                            <div id="in_sq">
                                <h1>X</h1>
                            </div>
                        </div>
                        <div id="borderright">
                            <div id="bushright"></div>
                            <div id="bushright"></div>
                            <div id="bushright"></div>
                            <div id="bushright"></div>
                            <div id="bushright"></div>
                            <div id="bushright"></div>
                        </div>
                    </div>
                </div>
            </a>
            <a href="svg.php">
                <div id="svg" style="top: 150px;">
                    <div class="name"> SVG </div>
                    <div class="topic"> Animation and Transitions </div>
                    <div id="sample_containersvg">
                        <img style="margin-top: 8px; margin-left: 250px; width: 1200px; height: 800px;" src="Xiao.svg">
                    </div>
                </div>
            </a>
            <a href="canvas.php">
                <div id="canvas" style="top: 205px;">
                    <div class="name"> CANVAS </div>
                    <div class="topic"> Animation and Transitions </div>
                    <canvas id="c" style="width: 1000px; height: 800px;"></canvas>
                    <script src="canvas.js"></script>
                </div>
            </a>    
        </div>
    </body>
</html>