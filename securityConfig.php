<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}



if(isset($_POST["updatePass"])){
    $test = $_SESSION["Email"];

   


    $FETCHQUERY = "SELECT NewPassword FROM generalmemberlist WHERE Email = '$test'";
    $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $FETCHQUERY));

    $DBPASS = $fetchRes['NewPassword'];

    $CurrentPassword = $_POST['CurrentPassword']; 
    $NewPassword = $_POST['NewPassword'];
    $ReNewPassword = $_POST['ReNewPassword'];

    // name
    if($DBPASS == $CurrentPassword){
        if($NewPassword == $ReNewPassword){
            $UPDATEQUERY =  "UPDATE generalmemberlist SET NewPassword = '$NewPassword', ReNewPassword = '$ReNewPassword' WHERE Email = '$test'"; 
            mysqli_query($conn, $UPDATEQUERY);
            header("Location: security.php");
            
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


