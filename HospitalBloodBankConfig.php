<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);

  $HosID = $row["ID"];


}
else{
  header("Location: FirstLanding.php");
}

if(isset($_POST["upload"])){

  $stock = 1;
  $updateDate = $_POST["updateDate"];
  $BloodGroup = $_POST["BloodGroup"];
  $BloodID = uniqid("BG");
  $HOSID = $row["ID"];
  

  $fetchHospital =  mysqli_fetch_all(mysqli_query($conn,"SELECT * FROM hospitalbloodbank WHERE HosID = '$HosID'"));


                   
  $src = $_FILES["Clearance"]["tmp_name"];
  $PDFName =  $_FILES["Clearance"]["name"];
  $target = 'folder2/' . $PDFName;
  move_uploaded_file($src, $target);

  $bankQuery = mysqli_query($conn,"INSERT INTO hospitalbloodbank(BloodGroup, AddStock, UpdateDate, HosID) VALUES ('$BloodGroup','$stock','$updateDate', '$HOSID')");
  $clearanceQ =  mysqli_query($conn,"INSERT INTO bloodbankclearance(BloodID, ClearancePdf, BloodGroup, HospitalID) VALUES ('$BloodID','$PDFName','$BloodGroup','$HOSID')");
  header("Location: HospitalbloodbankList.php");
 


  


}


?>