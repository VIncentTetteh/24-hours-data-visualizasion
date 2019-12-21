<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;
   
require_once('connect.php');

require_once "vendor/autoload.php";

function save()
{
    global $mysqli;
    $remind = htmlspecialchars($_POST['remind']);
    $email = htmlspecialchars($_POST['email']);
    $time =$_POST['time'];
    $mysqli->query("INSERT INTO reminder(remind,email,time) VALUES('$remind','$email','$time')");
    $result = $mysqli->query("SELECT * FROM reminder");
    $display = '';
    
    while($row = mysqli_fetch_array($result)){
        $display = $row['remind']; 
        $emailsender = $row['email'];
        

    }
    

//PHPMailer Object
$mail = new PHPMailer(true);


    //$mail->SMTPDebug = SMTP::DEBUG_SERVER;                      // Enable verbose debug output
    $mail->isSMTP();                                            // Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                    // Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $mail->Username   = 'vincentchrisbone@gmail.com';                     // SMTP username
    $mail->Password   = 'chris1994';                               // SMTP password
    //$mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
    $mail->Port       = 25;                                    // TCP port to connect to

    //Recipients
    $mail->setFrom('vincent.tetteh@htu.edu.gh', 'Mailer');
    $mail->addAddress($emailsender, 'Joe User');     // Add a recipient
    // $mail->addAddress('ellen@example.com');               // Name is optional
    // $mail->addReplyTo('info@example.com', 'Information');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

       // Optional name

    // Content
    $mail->isHTML(true);                                  // Set email format to HTML
    $mail->Subject = 'Here is Your Reminder';
    $mail->Body    = $display;
    $mail->AltBody = $display;
    $mail->send();

    
    
    if($mail->send()){
        echo '<script> alert("message sent ");</script>';
    }
    else{
        echo '<script> alert("message not sent ");</script>';
    }
} 