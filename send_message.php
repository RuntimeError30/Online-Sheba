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

$fetchID = $row['UniqueID'];

$resultArr = array();
$message = isset($_POST['message']) ? $_POST['message'] : null;
$from = isset($_POST['fromID']) ? $_POST['fromID'] : null;

if(!empty($message) && !empty($from)){
	$sql = "INSERT INTO chat(message,fromID) VALUES ('".$message."','".$from."')";
	$result['send_status'] = $db->query($sql);
}

$conn->close();
header('Access-Control-Allow-Origin: *');
header('Contect-Type:application/json');

echo json_encode($resultArr);

?>

