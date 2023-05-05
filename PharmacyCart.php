<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}

$ProdID = $_GET["ID"];


$fetchFinal = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pharmacylotproducts  WHERE ID = '$ProdID '"));

$Name =  $row["Name"];
$ID = $row["UniqueID"];
$Mobile = $row["Mobile"];
$Address = $row["FullAddress"];
$ID = $row["UniqueID"];
$Quantity = 1;
$Price = $fetchFinal["Price"];
$Product = $fetchFinal["Name"];
$orderID = uniqid("ORDER");

date_default_timezone_set("Asia/Dhaka");
$Time = date("h:i:s");
$Date = date("y-m-d");


$PlaceOrderQ = mysqli_query($conn,"INSERT INTO pharmacyorder(Name, Email, ID, Mobile, Address, Product, ProductID, Quantity, Price, Date, Time, OrderID) VALUES ('$Name','$Email','$ID','$Mobile','$Address','$Product','$ProdID','$Quantity ','$Price','$Date','$Time','$orderID')");

$FinalOrder = mysqli_query($conn, "INSERT INTO confirmorders(Name, Mobile, Email, Address, OrderProd, Quantity, Price, PaymentStatus, PaymentMethod, OrderID, Status,OrderPlaceDate,ProdID) VALUES ('$Name','$Mobile','$Email','$Address','$Product','$Quantity','$Price','','','$orderID','Not Set','$Date','$ProdID')");

header("Location: pharmacyClient.php");

?>
