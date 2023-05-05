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


    $Quantity = $_POST["Quantity"];



    $prodIDFetch = $_GET["ID"];

    $prod = "DELETE FROM pharmacylotproducts WHERE ID = '$prodIDFetch'";
    mysqli_query($conn,$prod);

    header("Location:pharmacyDashboard.php");



?>
