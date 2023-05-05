<!-- Session Codes -->
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



// ServerCodes

use PHPMailer\PHPMailer\PHPMailer ;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';



    if(isset($_POST['submit']))
    {
        $mail = new PHPMailer(true);

        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'onlinesheba24712@gmail.com';
        $mail->Password = 'gxeocxvtbaqfgeru';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;

        $mail->setFrom('onlinesheba24712@gmail.com');
        $mail->addAddress($_POST["Email"]);
        $mail->isHTML(true);


        $mail->Subject = "PASSWORD RECOVERY ALLERT ";
        $mail->Body = "Dear ". $row['Name'] .", <br>We noticed that you have requested us to recover your password. <br> Your Password is: ".$row['Password']. 
        " <br>If you think that this request is not from you, please login to your profile and change the password.

        Thank you!
        Team OnlineSheba.";

        $mail->send();

        
        echo"
        Close This Tab and login"; 
        header("Location: Landing.php");
    }
?>