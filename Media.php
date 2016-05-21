<!DOCTYPE html>
<html>
<head>
     <?php
        include ('../includes/common.inc.php');
        displayHeadTag();
     ?>
<body>
<div id="fb-root"></div>
<script>(function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) return;
        js = d.createElement(s); js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.6";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script><!--facebook comments-->
    <h1>
    <img src="../templates/images/logo.png" alt="logo" style="width:400px;height:70px" />
    </h1>
    <div class="container">
         <?php
            displayHeader();
        ?>
        <div class="content">
            <div id="Regwrapper">
                <table class="table1">
                    <video width="720" height="540" controls>
                        <source src="../templates/images/Star%20Wars%20Battlefront.mp4" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
            </table>
            </div>
        </div>
        <div class="fb-comments" data-href="http://localhost:63342/www/WebsiteProject/PropWebsite/index.php" data-numposts="5"></div><!--facebook comments-->
    </div>
    <?php
        displayFooter();
    ?>             
</body>
</html>