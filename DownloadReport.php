
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

$hosid = $_GET["ID"];
if(isset($_POST["submit"])){
    

      $PatientID= $_POST["PatientID"];

      $sql="SELECT * FROM hospitalpatientreport WHERE PatientID = '$PatientID' AND HosID = '$hosid'";
      $query=mysqli_query($conn,$sql);
      while ($info=mysqli_fetch_array($query)) {
        ?>
      <embed type="application/pdf" src="folder2/<?php echo $info['ReportPDF'] ; ?>" width="1920" height="1080">
    <?php
      }
    }

  ?>


<!DOCTYPE html>
<html lang="en">

    <!-- Do not touch this part -->    

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="https://cdn.tailwindcss.com
    "></script>
        <link href="https://fonts.maateen.me/charukola-ultra-light/font.css
    " rel="stylesheet">
    <link rel="icon" href="Images and logo/logo4.png">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">

    <title>Report | E Hospital</title>
</head>

<!-- Do not touch this part -->

<!-- Edit from this part -->
<body>
    

    <main>
        
        
        <section class="flex-col py-36"  style="background-image: url('folder2/bgPng1.png');">
            
            <div>
                <h1 class="font-bold text-5xl flex justify-center" style="font-family: 'Hind Siliguri', sans-serif;">রিপোর্ট ডাউনলোড</h1>
                <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">রিপোর্ট ডাউনলোড করতে প্রেস্কিপশনে দেওয়া পেশেন্ট আইডি দিয়ে খুঁজুন</p>
            </div>

            <div class="flex justify-center py-20">
                <form action="" method="POST"  class="flex-col">
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="PatientID" id="" placeholder="পেশেন্ট আইডি"><br><br><br>
                  
                    <input type="submit" name="submit" value="ডাউনলোড!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                </form>
            </div>
           
        </section> 

    </main>
</body>
</html>