<!DOCTYPE html>
<html>
<head>
    <title> Game Convention </title>
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <!--  <script type="text/javascript" src="/engine1/jquery.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script type="text/javascript" src="main.js"></script>-->
</head>
<body>
<hl>
    <img src="../media page/bd.png" alt="Logo" style="width:200px;height: 200px" />
</hl>
<div class="container">
    <div id="navigation">
        <ul class="nav">
            <li>
                <a href="home.php">HOME</a></li>

            <li>
                <a href="event.php">EVENT</a></li>

            <li>
                <a href = "media.php">MEDIA</a></li>

            <li>
                <a href= "tickets.php">TICKETS</a></li>

            <li>
                <a href ="location.php">TRAVEL GUIDE</a>
                <ul>
                    <li><a href="festivalmap.php">FESTIVAL</a></li>
                    <li><a href="transport.php">TRANSPORTATION</a></li>
                </ul>
            </li>
            <li>
                <a href = "contact.php">CONTACT</a></li>

            <li>
                <a href = "register-login.php">REGISTRATION/LOGIN</a>
                <ul>
                    <li><a href="login.php">LOGIN</a></li>
                    <li><a href="Registration.php">REGISTER</a></li>
                </ul>
            </li>
        </ul>
    </div>

    <div class="info">

        <h2 style="color:white;">LATEST NEWS</h2>
        <div class="Images">
            <p style="color:black;"  width="300" height="300">
                Watch out for the latest Dream Battle
                <br> Game Convention coming soon. Details
                <br> for the event will soon be available
                <br> on the Events page.
            </p>
            <img src="../media page/WoW.jpg" alt="World of Warcraft" style="width:300px;height:300px">
        </div>

        <div class="Images2">
            <img src="../media page/EuroGames.jpg" alt="Euro Games" width="300" height="300">
            <p style="color:black;"  width="300" height="300">
                Book your tickets now, book a camp,
                <br> save your place at the event of the year.
                <br> Avoid the hustle at the gates.
                <br> Book now and monitor all your information
                <br> as the event looms closer.
            </p>
        </div>
    </div>
    <div class="content BG">
     <!--   <p>
            <img src="templates/images/jazz.png" alt="logo1" style="width:500px;height:300px; padding-top: 40px;">
        </p>-->

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
<div class="footer" style="color:white;">
    Copyright © DreamBattle.com
</div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
<script src="js/query.countdown.min.js"></script>
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


