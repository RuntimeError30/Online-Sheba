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



if (isset($_GET['ReciverEmail'])){



    $query9 = "SELECT * FROM bloodrequest";
    $result = $conn->query($query9);

    $MAINID = $row['DonnerID'];

$Email = $_GET['ReciverEmail'];



  
    $queryDelete = "DELETE FROM bloodrequest WHERE ID = '$MAINID' AND ReciverEmail='$Email ' ";
    $execute = mysqli_query($conn,$queryDelete);

    header("Location: DonnerNotification.php");
}






?>