<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


?>



<!-- Front End -->


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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">



<title>Blood Bank | E Hospital</title>
</head>
<body class="bg-gray-100 text-white">

<nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-evenly py-4 px-9 border-spacing-0 border-b-0 h-56">
        <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <li><a href="Landing.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="hospitalListG.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
        <li><a href="FirstSeeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
        
        </ul>
        <a href="Landing.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $Prow["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
    </nav>
    <main>
    
        <div class="flex flex-wrap">
            
            
            <div class="w-auto ml-10 p-5">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl ">
                        <p class="text-slate-700">BLOOD BANK LIST</p>
                        <h1 class="text-4xl text-slate-500 font-semibold uppercase">ব্লাড ব্যাংক</h1>
                    </div>
                    <br>
                    <p class="text-slate-700">Gulshan, Dhaka 1212, Bangladesh</p>
                </div>

                

                <div class="text-slate-800 " style="text-transform: uppercase;" class="overflow-scroll">

                
                <table class="border-2 font-medium">
                <thead >
                <tr >
                    <th class="border-2 px-3">ব্লাড গ্রুপ</th>
                    <th class="border-2 px-3">অ্যাভেলেবিলিটি (ব্যাগ সংখ্যা)</th>
   
                    <th class="border-2 px-3 ">অ্যাকশন</th>
        
                </tr>
                </thead>


                <tbody  id="myTable" >
                    <?php


                   $HOSPid = $_GET['ID'];
                    
                   $query1 = "SELECT BloodGroup, SUM(AddStock) FROM hospitalbloodbank WHERE HosID = '$HOSPid' GROUP BY BloodGroup";
                   $r = $conn->query($query1);

                   
                    while($Brow = $r->fetch_assoc()){
                        ?>
                    <tr>
                            <td class="border-2 px-3 w-72"><?php echo $Brow["BloodGroup"]?> </td>
                            <td class="border-2 px-3 w-72"><?php echo $Brow['SUM(AddStock)']?> </td>
           
                            <td class="border-2 px-3 w-72 "><a href="bloodBankBookGenConfig.php?ID=<?php echo $_GET['ID'] ?>&BG=<?php echo $Brow["BloodGroup"]?>&stock=<?php echo $Brow['SUM(AddStock)']?> " class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">বুকিং<br>

                            
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>

                
                
                

            </table>
                </div>
                
            </div>
        </div>
    </main>
</body>
</html>