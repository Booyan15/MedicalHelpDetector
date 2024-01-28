<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if (isset($_POST["send"])){
    $mail= new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->SMTPAuth=true;
    $mail->Username='therescueteam20@gmail.com';
    $mail->Password='tonnzbnskyonvbzu';
    $mail->SMTPSecure='ssl';
    $mail->Port=465;

    $mail->setFrom('therescueteam20@gmail.com');
    
    $mail->addAddress("therescueteam20@gmail.com");
    $mail->isHTML(true);
    $mail->Subject="Purchase from ".$_POST["name"];
$email=$_POST["email"];
$name=$_POST["name"];
$city=$_POST["city"];
$phone=$_POST["phone"];
$color=$_POST["color"];
    $mail->Body="Name: $name <br> E-mail: $email <br> Customer Info: City:$city, Phone:$phone, Color:$color " ;

    $mail->send();

    echo
    " 
    <script> 
    alert('Purchased');
    document.location.href='detail.php';
    </script>
    ";
}
?>