<html>
    <body style="background-color: #202020;">
        <link rel="stylesheet" type="text/css" href="css/styles.css">
        <div class="topnav">
            <ul>
                <li><a href="index.php"> HOME </a></li> 
                <li><a href="about.php"> ABOUT </a></li> 
                <li><a href="index.php#content"> WORK </a></li> 
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
        <div class="container_svg">
            <div class="dropdown">
                <button class="dropbtn">Module 2</button>
                <div class="dropdown-content">
                    <a href="css.php?css=lt22"> Learning Task 2.2 </a>
                    <a href="css.php?css=lt23"> Learning Task 2.3 </a>	
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Module 3</button>
                <div class="dropdown-content">
                    <a href="css.php?css=lt32"> Learning Task 3.2 </a>
                    <a href="css.php?css=lt33"> Learning Task 3.3 </a>	
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Module 4</button>
                <div class="dropdown-content">
                    <a href="css.php?css=lt41"> Learning Task 4.1 </a>
                </div>
            </div>
        </div>

        <div class="content_svg">
            <?php
                $css = (isset($_GET['css']) && $_GET['css'] != '') ? $_GET['css'] : '';
                switch ($css)
                {
                    case 'lt22':
                        ?>
                            <p style="font-size: 25px; margin-top: 25px; text-align: center; font-family: 'Staatliches'; color: white">ROTATE</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="html,result" data-user="yeshuya" data-slug-hash="rNezaar" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Rotate">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/rNezaar">
                            CSS Rotate</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">SCALE</style>
                            <p class="codepen" data-height="384" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="mdPMyee" style="height: 384px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Scale">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/mdPMyee">
                            CSS Scale</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">SKEW</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="xxVLbwM" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Skew">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/xxVLbwM">
                            CSS Skew</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">TRANSLATE</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="ZEWJYQR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Translate">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/ZEWJYQR">
                            CSS Translate</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    case 'lt23':
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">SWINGING PICTURE</style>
                            <p class="codepen" data-height="421" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="ExKQWxN" style="height: 421px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Swinging Picture">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/ExKQWxN">
                            Swinging Picture</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">BUTTON</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="RwaQKOQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Download Button">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/RwaQKOQ">
                            Download Button</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                        <?php
                    break;
                    case 'lt32':
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">TRANSITION</style>
                            <p class="codepen" data-height="358" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="OJNQaOz" style="height: 358px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Transitions">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/OJNQaOz">
                            CSS Transitions</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">ANIMATION</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="OJNQaQQ" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="CSS Animations">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/OJNQaQQ">
                            CSS Animations</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    case 'lt33':
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">NAVIGATION BAR </style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="qBZxQGR" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Navigation Bar">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/qBZxQGR">
                            Navigation Bar</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>

                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">SOCIAL MEDIA ICONS </style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="rNeJoNO" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Social Media">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/rNeJoNO">
                            Social Media</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    case 'lt41':
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">CSS ANIMATIONS</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="VwaGNxL" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Identity V Text w/ Animation">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/VwaGNxL">
                            Identity V Text w/ Animation</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    default:
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">CSS ANIMATIONS</style>
                            <p class="codepen" data-height="265" data-theme-id="light" data-default-tab="css,result" data-user="yeshuya" data-slug-hash="VwaGNxL" style="height: 265px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Identity V Text w/ Animation">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/VwaGNxL">
                            Identity V Text w/ Animation</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                }
            ?>	
        </div>	
    </body>
</html>