<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $DonnerEmail = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}



$EmailGetter = $_GET["Email"];

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
        $mail->addAddress($EmailGetter);
        $mail->isHTML(true);


        $mail->Subject = "PASSWORD RECOVERY ALLERT ";
        $mail->Body = "Dear ". $row['Name'] .", <br>We noticed that you have requested us to recover your password. <br> Your Password is: ".$row['Password']. 
        " <br>If you think that this request is not from you, please login to your profile and change the password.

        Thank you!
        Team OnlineSheba.";

        $mail->send();

        
        echo"
        Close This Tab and login"; 

        $_SESSION = [];
        session_unset();
        session_destroy();
        header("Location: BloodDonnerSignIn.php");

?>






<!DOCTYPE html>
<html lang="en">
    <!-- Do not touch this part -->    
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com
    "></script>
        <link href="https://fonts.maateen.me/charukola-ultra-light/font.css
    " rel="stylesheet">
    <link rel="icon" href="Images and logo/logo4.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">

    <title>Request for password recovery</title>
</head>
<body>


    <main>
        
        
        <section class="flex-col py-36"  style="background-image: url('folder2/bgPng1.png');">
            <div class="translate-y-20">
                <div class="flex-col my-30">
                    <h1 class="font-bold text-5xl flex justify-center " style="font-family: 'Hind Siliguri', sans-serif;">অভিনন্দন!</h1>
                    <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার পাসওয়ার্ড রিকোভারি ইমেইল আপনার ইমেইল এড্রেসে পাঠানো হয়েছে অনুগ্রহ করে এই ট্যাবটি ক্লোজ করে দিয়ে লগ-ইন করুন </p>
                </div>
    
                <div class="grid justify-center my-10 ">
  
                   
                </div>
            </div>
           

        </section>
    </main>
    
</body>
</html>