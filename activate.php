<?php
    include '../model/User.class.php' ;
    include '../functions/generalFunctions.php';
    
    //Check for input values
    $errors = array();
    if(isset($_GET['email'],$_GET['hash'])===true){
        $email = $_GET['email'];
        $hash = $_GET['hash'];
        if(User::user_exists($email)===FALSE){
            $errors[]='Sorry, something went wrong, we could not find that email address';
        } else if(User::activate_user($email, $hash)===FALSE){
            $errors[] = 'We had problems activating your account';
        }
    }
    else
    {
        header('Location: index.php');
    }
    
    //Activate user
    if(empty($errors) === FALSE){
        ?>
            <h2> Sorry, there are some errors: </h2>      
        <?php
        echo output_error($errors);
    } else {
        $eventAccount = EventAccount::getByEmailAddress($email);
        $infors = $eventAccount->GetData();
        $msg = "<p>Hello ".$infors['First_Name'].", </p> <p>You registered for our game convention, Here is your information: </p><p> Your event account ID:".$infors['Account_ID']."</p>"."<p> Kind regards,</p> <p>Dream Battle team.</p>";
        $subject = "Game Convention e-ticket";
        sentEmail($email, $msg, $subject);
        require '../webPages/Activated.view.php';
    }
?>