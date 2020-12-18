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
                <button class="dropbtn">Module 5</button>
                <div class="dropdown-content">
                    <a href="https://svg-panganiban.herokuapp.com/" target="_blank"> Learning Task 5.1 </a>	
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">Module 6</button>
                <div class="dropdown-content">
                    <a href="svg.php?svg=lt61"> Learning Task 6.1 </a>
                    <a href="svg.php?svg=lt62"> Learning Task 6.2 </a>	
                </div>
            </div>
            <div class="dropdown">
                <button class="dropbtn">CLE</button>
                <div class="dropdown-content">
                    <a href="Web Anim/Panganiban_Joshua.php"> Floom </a>	
                </div>
            </div>
        </div>

        <div class="content_svg">
            <?php
            $svg = (isset($_GET['svg']) && $_GET['svg'] != '') ? $_GET['svg'] : '';
                switch ($svg)
                {
                    case 'lt61':
                        ?>
                            <p style="font-size: 25px; margin-top: 25px; text-align: center; font-family: 'Staatliches'; color: white">TEXT PATH</style>
                            <p class="codepen" data-height="381" data-theme-id="light" data-default-tab="html,result" data-user="yeshuya" data-slug-hash="zYBodOW" style="height: 381px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Text Path">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/zYBodOW">
                            Text Path</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    case 'lt62':
                        ?>
                            <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">SVG ANIMATION</style>
                            <p class="codepen" data-height="418" data-theme-id="light" data-default-tab="html,result" data-user="yeshuya" data-slug-hash="GRqNOKB" style="height: 418px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="SVG Animation">
                            <span>See the Pen <a href="https://codepen.io/yeshuya/pen/GRqNOKB">
                            SVG Animation</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                            on <a href="https://codepen.io">CodePen</a>.</span>
                            </p>
                            <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                        <?php
                    break;
                    default:
                        ?>
                        <p style="font-size: 25px; margin-top: 50px; text-align: center; font-family: 'Staatliches'; color: white">TEXT PATH</style>
                        <p class="codepen" data-height="381" data-theme-id="light" data-default-tab="html,result" data-user="yeshuya" data-slug-hash="zYBodOW" style="height: 381px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid; margin: 1em 0; padding: 1em;" data-pen-title="Text Path">
                        <span>See the Pen <a href="https://codepen.io/yeshuya/pen/zYBodOW">
                        Text Path</a> by Yeshuya (<a href="https://codepen.io/yeshuya">@yeshuya</a>)
                        on <a href="https://codepen.io">CodePen</a>.</span>
                        </p>
                        <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
                    <?php
                }
            ?>
        </div>
    </body>
</html>
