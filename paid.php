<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM pharmacyadmin WHERE Email = '$Email'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


$ClientMail = $_GET["Email"];
$OrderID = $_GET["OrderID"];

$Status = "PAID";

$ConfirmedQ = "UPDATE confirmorders SET PaymentStatus = '$Status' WHERE Email = '$ClientMail' AND OrderID = '$OrderID'";
mysqli_query($conn,$ConfirmedQ);



header("Location: pharmacyOrders.php");

?>