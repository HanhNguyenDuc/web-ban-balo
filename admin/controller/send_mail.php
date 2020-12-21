<?php
include "../lib/PHPMailer/src/Exception.php";
include "../lib/PHPMailer/src/OAuth.php";
include "../lib/PHPMailer/src/PHPMailer.php";
include "../lib/PHPMailer/src/POP3.php";
include "../lib/PHPMailer/src/SMTP.php";

use PHPMailer\PHPMailer\PHPMailer;

function sendMail($email, $body, $subject)
{
    $mail = new PHPMailer(true);
    $config_email = 'baloshophanhnd@gmail.com';
    $config_pass = 'balo@123';
    $mail->IsSMTP(); // set mailer to use SMTP
    $mail->CharSet = 'UTF-8';
    $mail->Host = "smtp.gmail.com"; // specify main and backup server
    $mail->Port = 587; // set the port to use
    $mail->SMTPAuth = true; // turn on SMTP authentication
    $mail->SMTPSecure = 'tls';
    $mail->SMTPOptions = array(
        'ssl' => array(
            'verify_peer' => false,
            'verify_peer_name' => false,
            'allow_self_signed' => true
        )
    );
    $mail->Username = $config_email; // your SMTP username or your gmail username
    $mail->Password = $config_pass; // your SMTP password or your gmail password
    $from = $config_email; // Reply to this email
    //$to=$email; // Recipients email ID
    $name = 'Shop Balo Đức Hạnh'; // Recipient's name
    $mail->setFrom($from, $subject);
    $mail->FromName = 'Shop Balo Đức Hạnh'; // Name to indicate where the email came from when the recepient received

    $mail->AddAddress($email, $name);
    $mail->AddReplyTo($from, $subject);
    $mail->IsHTML(true); // send as HTML
    $mail->Subject = $subject;
    $mail->Body = $body; //HTML Body
    if ($mail->Send()) {
        return true;
    } else {
        return false;
    }
}

