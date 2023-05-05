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


if (isset($_POST['upload'])) {

    $src = $_FILES["Book"]["tmp_name"];
    $PDFName =  $_FILES["Book"]["name"];



    $Name = $_POST['Name'];
    $BookID = $_POST['BookID'];
    $Part = $_POST['Part'];
    $Author = $_POST['Author'];
    $ReleaseDate = $_POST['ReleaseDate'];
    $Edition = $_POST['Edition'];
    $UplodersName = $_POST['UplodersName'];
    $UplodersAddress = $_POST['UplodersAddress'];
    $UplodersMobile = $_POST['UplodersMobile']; 
    $UploadDate = $_POST['UploadDate'];

    $target = 'folder2/' . $PDFName;
    move_uploaded_file($src, $target);

    $query="INSERT INTO librarybooks(Book,Name,BookID,Part,Author,ReleaseDate,Edition,UplodersName,UplodersAddress,UplodersMobile,UploadDate) VALUE('$PDFName','$Name','$BookID','$Part','$Author','$ReleaseDate','$Edition','$UplodersName','$UplodersAddress','$UplodersMobile','$UploadDate')";
    mysqli_query($conn, $query);

    header("Location: bookUpload.php");
    echo "Successfully Uploaded!";
    }


    
?>

