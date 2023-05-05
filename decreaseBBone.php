<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);


}
else{
  header("Location: FirstLanding.php");
}

$ID = $_GET["HosID"];
$BG = $_GET["BG"];


$update = mysqli_query($conn, "DELETE FROM hospitalbloodbank WHERE HosID = '$ID' AND BloodGroup = '$BG' LIMIT 1");
$updateClearance = mysqli_query($conn, "DELETE FROM bloodbankclearance WHERE HospitalID = '$ID' AND BloodGroup = '$BG' LIMIT 1");
header("Location: HospitalbloodbankList.php");


?>