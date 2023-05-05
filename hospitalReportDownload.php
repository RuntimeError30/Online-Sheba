<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com
"></script>
    <link href="https://fonts.maateen.me/charukola-ultra-light/font.css
" rel="stylesheet">
<link rel="icon" href="Images and logo/logo4.png">
    <title>Report</title>
</head>
  <body>
    <div class="bg-white">

    <div>
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



      $HosID = $row["ID"];
      $PatientID= $_GET['PatientID'];

      $sql="SELECT * FROM hospitalpatientreport WHERE HosID= '$HosID' AND  PatientID = '$PatientID'";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="folder2/<?php echo $info['ReportPDF'] ; ?>" width="1920" height="1080">
    <?php
      }

      ?>

    </div>
    </div>
    

  </body>
</html>