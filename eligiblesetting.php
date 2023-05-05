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




$Name = $row["Name"];

$ID= $row["DonnerID"];

$LastDonated = $_POST["DATE"];

$BG = $row["DonnerBG"];

$division = $row["DonnerDivision"];

$district = $row["DonnerDistrict"];

$Mobile = $row["DonnerNumber"];






    
if(isset($_POST["checker"])){


  // $result11 = mysqli_query($conn, "SELECT * FROM bloodeligibility WHERE ID = '$ID'");
  // $row = mysqli_fetch_assoc($result11);



  $date1=date_create($LastDonated);
  $date2=date_create("today");
  $diff=date_diff($date1,$date2);
  



      if($_POST["donnerType"]=="FirstTime"){




        $quName =  "UPDATE
        bloodeligibility SET Eligibility = 'দিতে পারবেন' WHERE ID = '$ID'";
        mysqli_query($conn, $quName);
  
        header("Location: BloodDonnerdashboard.php");

      }

      if($_POST["donnerType"]=="NotFirstTime"){
        if( $diff->format("%a") > 180){

          $quName =  "UPDATE
          bloodeligibility SET Eligibility = 'দিতে পারবেন' WHERE ID = '$ID'";
          mysqli_query($conn, $quName);
      
          header("Location: BloodDonnerdashboard.php");
        }
        else{
          $UpdateName =  "UPDATE  bloodeligibility SET 	LastDonated= '$LastDonated', Eligibility='দিতে পারবেন না' WHERE ID = '$ID'";
          mysqli_query($conn, $UpdateName);
          header("Location: BloodDonnerdashboard.php");
        }

      }

      else{
        if( $diff->format("%a") > 180){

          $quName =  "UPDATE
          bloodeligibility SET Eligibility = 'দিতে পারবেন' WHERE ID = '$ID'";
          mysqli_query($conn, $quName);
      
          header("Location: BloodDonnerdashboard.php");
        }
        else if( $diff->format("%a") < 180){
          $UpdateName =  "UPDATE  bloodeligibility SET 	LastDonated= '$LastDonated', Eligibility='দিতে পারবেন না' WHERE ID = '$ID'";
          mysqli_query($conn, $UpdateName);
          header("Location: BloodDonnerdashboard.php");
        }
        
      }
   
}


?>