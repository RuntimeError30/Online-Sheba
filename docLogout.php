<?php
require 'config.php';
$_SESSION = [];
$Email = $_GET["Email"];

$active = mysqli_query($conn,"UPDATE hospitaldoctors SET ActiveStatus = 0 WHERE Email = '$Email'");
session_unset();
session_destroy();

header("Location: FirstLanding.php");