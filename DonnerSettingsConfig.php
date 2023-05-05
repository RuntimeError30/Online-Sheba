<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $DonnerEmail = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}




    if(isset($_POST["submit"])){
        $src = $_FILES["fileImg"]["tmp_name"];
        $imageName =  $_FILES["fileImg"]["name"];
    
        $target = 'folder2/' . $imageName;
    
        move_uploaded_file($src, $target);
    
        $session_test = $_SESSION["Email"];
        $query = "UPDATE blooddonnerlist SET ProfilePhoto = '$imageName' WHERE Email = '$session_test'";
        
        
        mysqli_query($conn, $query);
    
        header("Location: DonnerSettings.php");
    }
    
    
    if(isset($_POST["update"])){
      
      $test = $_SESSION["Email"];
  
     
  
  
      $q2 = "SELECT * FROM blooddonnerlist WHERE Email = '$test'";
      $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $q2));
  
      // name
      if(empty($_POST['DonnerName'])){
        $DBNAME = $fetchRes['Name'];
  
      }
      else{
        $DBNAME = $_POST['DonnerName'];
        if($_POST["Password"] == $row['Password']){
          $qName =  "UPDATE blooddonnerlist SET Name = '$DBNAME' WHERE Email = '$test'";
          mysqli_query($conn, $qName);
        }
      }
  
      
  
      // Division
      if(empty($_POST['DonnerDivision'])){
        $DBDIVISION = $fetchRes['DonnerDivision'];
  
      }
      
      else{
        $DBDIVISION = $_POST['DonnerDivision'];
        if($_POST["Password"] == $row['Password']){
          $qDivision =  "UPDATE  blooddonnerlist SET DonnerDivision = '$DBDIVISION ' WHERE Email = '$test'";
          mysqli_query($conn, $qDivision);
        }
      }
      
  
         // DIstrict
         if(empty($_POST['DonnerDistrict'])){
          $DBDISTRICT = $fetchRes['DonnerDistrict'];
    
        }
        else{
          $DBDISTRICT = $_POST['DonnerDistrict'];
          if($_POST["Password"] == $row['Password']){
            $qDistrict =  "UPDATE blooddonnerlist SET DonnerDistrict = '$DBDISTRICT' WHERE Email = '$test'";
          mysqli_query($conn, $qDistrict);
          }
        }
        
  
  
        //Mobile
  
        if(empty($_POST['DonnerNumber'])){
          $DBMOBILE = $fetchRes['DonnerNumber'];
    
        }
        else{
          $DBMOBILE = $_POST['DonnerNumber'];
          if($_POST["Password"] == $row['Password']){
            $qMobile =  "UPDATE blooddonnerlist SET  DonnerNumber = '$DBMOBILE' WHERE Email = '$test'";
              mysqli_query($conn, $qMobile);
          }
        }
  
  
        //Emergency mobile
        if(empty($_POST['DonnerEmNumber'])){
          $DBEMERGENCYMOBILE = $fetchRes['DonnerEmNumber'];
    
        }
        else{
          $DBEMERGENCYMOBILE = $_POST['DonnerEmNumber'];
          if($_POST["Password"] == $row['Password']){
            $qEmergencyMobile =  "UPDATE blooddonnerlist SET DonnerEmNumber = '$DBEMERGENCYMOBILE' WHERE Email = '$test'";
              mysqli_query($conn, $qEmergencyMobile);
          }
        }




  
        //Name
        
    
      
      
  
          //Division
        
      

          //District
        
    

  
      
  //Mobile
  


    //EmergencyMobile
  

    // else{
    //     header("Location: DonnerSettings.php");
    //     echo "Password did not matched!";
        
    // }
      
  
      
      
   
  
      header("Location: DonnerSettings.php");
  }
 





?>