<?php
include('../includes/common.inc.php');
?>
<!DOCTYPE html>
<html>
<head>
    <?php
        //include('../includes/subPages/headTag.php');
        displayHeadTag();
    ?>
    <link rel="stylesheet" href="../templates/css/timetablejs.css">
</head>
<body onload="initialize()">
    <h1>
    <img src="../templates/images/logo.png" alt="logo" style="width:400px;height:70px" />
    </h1>
        <div class="container">
        <?php
            //include('../includes/subPages/header.php');
            displayHeader();
        ?>
        <div class="content">
            <h3 id="header" align="left">Game Convention program</h3>
            <p id="pargh">

                </br> Below you can view details of the event.
            </p>
            <div class="timetable">
            </div>
            <p></br>For more information about the programmme please click <a href="http://www.games2016.nl/programme">here</a></p></p>
        </div>
        </div>
     <?php
        //include('../includes/subPages/footer.php');
        displayFooter();
    ?>
            <script src="../js/script.js"></script>
           <!-- <script src="../js/timetable.min.js"></script>-->
</body>
</html>