<?php
function displayHeadTag(){
    ?>
    <title>Game Convention</title>
    <link href="../templates/css/site.css" rel="stylesheet">  
    <link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.1/css/bootstrap.min.css">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.0/jquery.min.js"></script>
    <script src="../js/jquery.countdown.min.js"></script>
    <script src="../js/script.js"></script>
<?php
}

function displayHeader(){
    ?>
    <div class="navigation">
    <ul class="nav">
        <li>
            <a href="../index.php">Home</a>
        </li>
        <li>
            <a href="../webPages/Media.php">Media</a>
        </li>
        <li>
            <a href="../webPages/Event.php">Event</a>
        </li>
        <li>
            <a href="../webPages/Maps.php">Guide</a>
            <ul>
                <li><a href="../webPages/Maps.php">Travel</a></li>
                <li><a href="../webPages/festivalmap.php">Festival Map</a></li>
            </ul>
        </li>
        <li>
            <a href="../controller/login.php">Log in\Register</a>
            <ul>
                <li><a href="../controller/login.php">Login</a></li>
                <li><a href="../controller/register.php">Register</a></li>
            </ul>
        </li>
        <li>
            <a href="../webPages/Contact_US.php">Contacts</a>
        </li>
    </ul>
</div>

<?php
}

function displayFooter(){
    ?>
    <div class="footer">
    <div class= "container">
        <a href="https://www.facebook.com/Dr3amBattl3/" ><img src="../templates/images/fb.png" alt="facebook logo"></a>
        <span id="footer">Follow us on:</span>
        <div class = "clear"></div>
    </div>
    </div>

<?php    
}
?>
