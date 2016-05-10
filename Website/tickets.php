<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type = "text/css" href = "style.css">
    <title>Tickets</title>
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


<div id = "TicketPurchase">
    <h2> Purchase your ticket here </h2>
    <form action="http://example.com/join.php">
        <p>  Ticket Type:
            <input type="text" name="ticket" size="15" maxlength="30" />
        </p>
        <p>  Number of tickets:
            <input type="text" name="numberoftickets" size="15" maxlength="30" />
        </p>
        <p>  Number of people:
            <input type="text" name="numberofpeople" size="15" maxlength="30" />
        </p>
        <p>   Ticket Price:
            <input type="text" name="ticketprice" size="15" maxlength="30" />
        </p>
        <p>   Total Price:
            <input type="text" name="totalprice" size="15" maxlength="30" />
        </p>
        <!-- payment options
        pay online
        pay at event
        -->
    </form>
    <p>
        <input type="submit" value="Pay" />
    </p>
</div>
    <div class="footer" style="color:white;">
        Copyright © DreamBattle.com
    </div>
</body>

</html>
