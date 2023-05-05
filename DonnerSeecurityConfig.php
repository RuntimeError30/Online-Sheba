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





if(isset($_POST["updatePass"])){
    $test = $_SESSION["Email"];

   


    $FETCHQUERY = "SELECT Password FROM blooddonnerlist WHERE Email = '$DonnerEmail'";
    $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $FETCHQUERY));

    $DBPASS = $fetchRes['Password'];

    $CurrentPassword = $_POST['CurrentPassword']; 
    $NewPassword = $_POST['NewPassword'];
    $ReNewPassword = $_POST['ReNewPassword'];

    // name
    if($DBPASS == $CurrentPassword){
        if($NewPassword == $ReNewPassword){
            $UPDATEQUERY =  "UPDATE blooddonnerlist SET Password = '$NewPassword' WHERE Email = '$test'"; 
            mysqli_query($conn, $UPDATEQUERY);
            header("Location: DonnerSeecurity.php");
            
            echo "Password Saved!";
        }
        else{
            echo "Password did not matched!";
        }

    }
    else{
        echo "Current password did not matched!";
    }
    
}

?>


