<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM pharmacyadmin WHERE Email = '$Email'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


$ClientMail = $_GET["Email"];
$OrderID = $_GET["OrderID"];
$Notifi = "সন্মানিত গ্রাহক, <br> আশা করি আমাদের প্রোডাক্ট" .$Product." আপনার ভালো লেগেছে। নিত্য প্রয়োজনীয় ঔষধ পেতে আমাদের শপে ভিজিট করার আমন্ত্রন জানাচ্ছি! ";
$Status = "Delivered";

$ConfirmedQ = "UPDATE confirmorders SET Status = '$Status' WHERE Email = '$ClientMail' AND OrderID = '$OrderID'";
mysqli_query($conn,$ConfirmedQ);

$notiQ = mysqli_query($conn,"INSERT INTO notifications(Notifications,Email) VALUES ('$Notifi','$ClientMail')");

// ServerCodes

use PHPMailer\PHPMailer\PHPMailer ;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';




        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'onlinesheba24712@gmail.com';
        $mail->Password = 'gxeocxvtbaqfgeru';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('onlinesheba24712@gmail.com');
        $mail->addAddress($ClientMail);
        $mail->isHTML(true);


        $mail->Subject = "Your Order Has Been Confirmed! ";
        $mail->Body = $Notifi;

        $mail->send();

header("Location: pharmacyOrders.php");

?>