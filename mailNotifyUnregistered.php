<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $DonnerEmail = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
  $row = mysqli_fetch_assoc($result);

  $ID = $row["DonnerID"];
  $ConfirmStatus = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM `bloodrequest` WHERE ID = '$ID'"));
}
else{
  header("Location: FirstLanding.php");
}





// ServerCodes

use PHPMailer\PHPMailer\PHPMailer ;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';

if(($ConfirmStatus["Status"]=="Accepted")){
  echo '<script>alert("আপনি ইতোমধ্যে রিকুয়েস্টটি অ্যাকসেপ্ট করেছেন")</script>';
  echo "<script>document.location = 'DonnerNotification.php'</script>";

}
else if(($ConfirmStatus["Status"]=="DONATION COMPLETED")){
  echo '<script>alert("আপনি ইতোমধ্যে ডোনেশন সম্পন্ন করেছেন")</script>';
  echo "<script>document.location = 'DonnerNotification.php'</script>";

}
else{
  if(isset($_GET['ReciverEmail']))
  {
    $notMaail = $_GET['ReciverEmail'];
      $mail = new PHPMailer(true);

      $mail->isSMTP();
      $mail->Host = 'smtp.gmail.com';
      $mail->SMTPAuth = true;
      $mail->Username = 'onlinesheba24712@gmail.com';
      $mail->Password = 'gxeocxvtbaqfgeru';
      $mail->SMTPSecure = 'ssl';
      $mail->Port = 465;

      $mail->setFrom('onlinesheba24712@gmail.com');
      $mail->addAddress($notMaail);
      $mail->isHTML(true);


      $mail->Subject = "Blood Donner Confermation - E Hospital";
      $mail->Body = "সম্মানিত গ্রাহক, <br>আপনার ব্লাড রিকুয়েস্টটি আমাদের রেজিস্টার্ড ডোনার জনাব/জনাবা".$row['Name']. 
      " এক্সেপ্ট করেছেন। তিনি শীঘ্রই আপনার সাথে যোগাযোগ করে রক্তদানের জন্য নিদৃষ্ট স্থানে আসবেণ।

      ধন্যবাদ
      Team OnlineSheba.";

      $mail->send();
      
      
      $stat = "Accepted";
      $QR = "UPDATE bloodrequest SET Status='$stat' WHERE ReciverEmail = '$notMaail'";
      mysqli_query($conn,$QR);
  


  }
}

   
?>
