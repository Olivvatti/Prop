<!DOCTYPE html>
<html>
<head>
    <title>Game Convention</title>
    <link href="templates/css/site.css" rel="stylesheet">  
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
</head>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script><!--facebooklikebutton-->

<h1>
        <img src="templates/images/logo.png" alt="logo" style="width:400px;height:70px" />
    </h1>
    <div class="container">
        <div class="navigation">
            <ul class="nav">
                <li>
                    <a href="index.php">Home</a>
                </li>
                <li>
                    <a href="webPages/Media.php">Media</a>
                </li>
                <li>
                    <a href="webPages/Event.php">Event</a>
                </li>
                <li>
                    <a href="webPages/Maps.php">Guide</a>
                    <ul>
                        <li><a href="webPages/Maps.php">Travel</a></li>
                        <li><a href="webPages/festivalmap.php">Festival Map</a></li>
                    </ul>
                </li>
                <li>
                    <a href="controller/login.php">Log in\ Register</a>
                    <ul>
                        <li><a href="controller/login.php">Login</a></li>
                        <li><a href="controller/register.php">Register</a></li>
                    </ul>
                </li>
                <li>
                    <a href="webPages/Contact_US.php">Contacts</a>
                </li>
            </ul>
        </div>
        <div class="content BG">
            <p>
                <img src="templates/images/bd.png" alt="logo1" style="width:500px;height:300px; padding-top: 40px;">
            </p>
        
            <div class="countdown countdown-container">
                <div class="clock">
                    <div class="clock-item clock-days countdown-time-value">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-days" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-days type-time">DAYS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-hours countdown-time-value">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-hours" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-hours type-time">HOURS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-minutes countdown-time-value">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-minutes" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-minutes type-time">MINUTES</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->

                    <div class="clock-item clock-seconds countdown-time-value">
                        <div class="wrap">
                            <div class="inner">
                                <div id="canvas-seconds" class="clock-canvas"></div>

                                <div class="text">
                                    <p class="val">0</p>
                                    <p class="type-seconds type-time">SECONDS</p>
                                </div><!-- /.text -->
                            </div><!-- /.inner -->
                        </div><!-- /.wrap -->
                    </div><!-- /.clock-item -->
                </div><!-- /.clock -->
            </div><!-- /.countdown-wrapper -->
            <div style="clear: both;"></div>
        </div> 
    </div>

    <div class="footer">
         <div class= "container">
             <div class="fb-like" data-href="http://localhost:63342/www/WebsiteProject/PropWebsite/index.php"
                  data-layout="button_count" data-action="like" data-show-faces="true" data-share="true"></div><!--facebooklikebutton-->
             <a href="https://www.facebook.com/Dr3amBattl3/" ><img src="templates/images/fb.png" alt="facebook logo"></a>
            <!-- <a href="https://twitter.com/"><img src="templates/images/twitter.png" alt="twitter logo"></a>-->
        <span id="footer">Follow us on:</span>
        <div class = "clear"></div>
         </div>
    </div>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="js/jquery.countdown.min.js"></script>
    <script src="js/script.js"></script>
    <script type="text/javascript" src="js/kinetic.js"></script>
    <script type="text/javascript" src="js/jquery.final-countdown.js"></script>
    <script type="text/javascript">
    $('.countdown').final_countdown({
        start: '1441104300',
        end: '1454112000',
        now: ((new Date).getTime()/1000).toString()
    });
    </script>
</body>
</html>
