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

$BGFetch = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM hospitalbloodbank WHERE HosID = '$ID' AND BloodGroup = '$BG'"));
$MinusOne = $BGFetch["AddStock"] - $BGFetch["AddStock"];

$update = mysqli_query($conn, "DELETE FROM hospitalbloodbank WHERE HosID = '$ID' AND BloodGroup = '$BG'");

header("Location:HospitalBloodbankList.php");

?>