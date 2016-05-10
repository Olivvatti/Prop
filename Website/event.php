<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <title>Event</title>
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

<div id="details">
    <h2>Event History</h2>
    <p> ......has been going on for years.
        <br>Brings together the gaming community..</p>
    <h2>Event Details</h2>
    <p> Date:
        <br>Time:
        <br>Place:
        <br>Collaborators:
        <br>Events:</p>
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
<script type="text/javascript">
    $('.countdown').final_countdown({
        start: '1441104300',
        end: '1454112000',
        now: ((new Date).getTime()/1000).toString()
    });
</script>
    <div class="footer" style="color:white;">
        Copyright © DreamBattle.com
    </div>
</body>
</html>