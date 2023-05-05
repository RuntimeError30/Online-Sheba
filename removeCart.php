<?php
require 'config.php';
$cardID = $_GET["ProductID"];

$Email  = $_GET["Email"];
$cusID = $_GET["ID"];

$productFetcher = $_GET["OrderID"];
$fetchFinal = mysqli_query($conn, "DELETE FROM pharmacyorder WHERE ID = '$cusID' AND ProductID = '$cardID'");
$productFetcher = mysqli_query($conn, "DELETE FROM confirmorders  WHERE OrderID = '$productFetcher'");
header("Location: pharmacyPaymentPage.php");

?>