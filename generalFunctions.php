<?php
    require '../library/PhpMailer/PHPMailerAutoload.php';
    require '../library/PhpMailer/class.phpmailer.php';
    require '../library/PhpMailer/class.smtp.php';
    
//remove special characters of input string, input variable is an item of array
function array_sanitize(&$item){
    $item = mysql_real_escape_string($item);
}
function output_error($error){
    return '<ul class = errorlist><li>'.implode('</li><li>',$error) . '</li></ul>';
}

//Using phpMailer to sent email
function sentEmail($email,$msg, $subject){
    //testing mail function of php/ didn't work on localhost
    //$msg = 'Pleasmail('olivvatti@yahoo.com','My subject',$msg,'From: customerService@dreambattle.com')e click this link to activate your account';
    // mail('olivvatti@yahoo.com','My subject',$msg,'From: customerService@dreambattle.com');
    // try to use phpMailer, it works
    $mail = new PHPMailer;
    $mail->IsSMTP();                                      // Set mailer to use SMTP
    $mail->Host = 'smtp.gmail.com';                 // Specify main and backup server
    $mail->Port = 587;                                    // Set the SMTP port
    $mail->SMTPAuth = true;                               // Enable SMTP authentication
    $mail->Username = 'loopitdreambattle@gmail.com';                // SMTP username
    $mail->Password = 'LoopIT2016';                  // SMTP password
    $mail->SMTPSecure = 'tls';                            // Enable encryption, 'ssl' also accepted

    $mail->From = 'dreambattle@suport.com';
    $mail->FromName = 'Dream Battle team';
    $mail->AddAddress($email);               // Name is optional

    $mail->IsHTML(TRUE);                                  // Set email format to HTML
    $mail->Subject = $subject;
    $mail->Body    = $msg;

    if(!$mail->Send()) {
       echo 'Message could not be sent.';
       echo 'Mailer Error: ' . $mail->ErrorInfo;
       exit;
    }

    echo 'Message has been sent';
}