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
    $date = date('y-m-d h:i:s');
      

      $stat = "DONATION COMPLETED";
      $QR = "UPDATE bloodrequest SET Status='$stat', CompleteDate = '$date'  WHERE ReciverEmail = '$notMaail'";
      mysqli_query($conn,$QR);

 
      header("Location: DonnerNotification.php");
      
  }

}



?>
