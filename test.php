
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

if(isset($_POST["submit"])){
    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName =  $_FILES["fileImg"]["name"];

    $target = 'folder2/' . $imageName;

    move_uploaded_file($src, $target);

    $session_test = $_SESSION["Email"];
    $query = "UPDATE generalmemberlist SET ProfilePhoto = '$imageName' WHERE Email = '$session_test'";
    
    
    mysqli_query($conn, $query);

    header("Location: settings.php");
}





if(isset($_POST["update"])){
  
    $test = $_SESSION["Email"];

   


    $q2 = "SELECT * FROM generalmemberlist WHERE Email = '$test'";
    $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $q2));

    // name
    if(empty($_POST['Name'])){
      $DBNAME = $fetchRes['Name'];

    }
    else{
      $DBNAME = $_POST['Name'];
    }

    // Division
    if($_POST['Division']=="Empty"){
      $DBDIVISION = $fetchRes['Division'];

    }
    
    else{
      $DBDIVISION = $_POST['Division'];
    }
    

       // DIstrict
       if($_POST['District']=="No-value"){
        $DBDISTRICT = $fetchRes['District'];
  
      }
      else{
        $DBDISTRICT = $_POST['District'];
      }
      


      //Mobile

      if(empty($_POST['Mobile'])){
        $DBMOBILE = $fetchRes['Mobile'];
  
      }
      else{
        $DBMOBILE = $_POST['Mobile'];
      }


      //Emergency mobile
      if(empty($_POST['EmergencyMobile'])){
        $DBEMERGENCYMOBILE = $fetchRes['EmergencyMobile'];
  
      }
      else{
        $DBEMERGENCYMOBILE = $_POST['EmergencyMobile'];
      }


    $qName =  "UPDATE generalmemberlist SET Name = '$DBNAME' WHERE Email = '$test'";
    mysqli_query($conn, $qName);
    

    $qDivision =  "UPDATE generalmemberlist SET Division = '$DBDIVISION ' WHERE Email = '$test'";
    mysqli_query($conn, $qDivision);

    $qDistrict =  "UPDATE generalmemberlist SET District = '$DBDISTRICT' WHERE Email = '$test'";
    mysqli_query($conn, $qDistrict);

    $qMobile =  "UPDATE generalmemberlist SET  Mobile = '$DBMOBILE' WHERE Email = '$test'";
    mysqli_query($conn, $qMobile);

    $qEmergencyMobile =  "UPDATE generalmemberlist SET EmergencyMobile = '$DBEMERGENCYMOBILE' WHERE Email = '$test'";
    mysqli_query($conn, $qEmergencyMobile);
    
 

    header("Location: settings.php");
}

?>