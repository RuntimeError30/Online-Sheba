<?php

require 'config.php';
if(!empty($_SESSION["Email"])){
  $DonnerEmail = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


$id = $_GET["ID"];
$query1 = "SELECT * FROM hospitaldetails WHERE ID = '$id'";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query1));



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

<!-- CSS -->



<!-- CSS -->

<title>Profile- <?php echo $row["Name"]; ?></title>
</head>
<body class="bg-gray-100" style="font-family: 'CharukolaUltraLight', sans-serif;">
    <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-between py-4 px-9 border-spacing-0 border-b-0 h-56">
        <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <li><a href="BloodDonnerMain.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="ELibraryDonners.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="hospitalListBlood.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="pharmacyClientDonners.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-ফার্মেসি</a></li>
        <li><a href="BloodDonnerSearch.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
        
        </ul>
        <a href="Landing.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $Prow["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
    </nav>
    <main class="">
        <div class="m-10">
        <div class="text-3xl py-3 font-semibold">
            <h1><?php echo $row['Name']?>হাসপাতালের বিশেষজ্ঞগণ</h1>
        </div>
        <div>
        <table class="border-2">
                <thead>
                <tr >
                    <th class="border-2 px-3">ছবি</th>
                    <th class="border-2 px-3">নাম</th>
                    <th class="border-2 px-3">বিশেষজ্ঞ</th>
                    <th class="border-2 px-3">মোবাইল</th>

                    <th class="border-2 px-3">অ্যাকশন</th>
                </tr>
                </thead>

                <tbody  id="myTable">
                    <?php
                   $query1 = "SELECT * FROM hospitaldoctors WHERE HospitalID = '$id'";
                   $result = $conn->query($query1);

                   
                    while($Drow = $result->fetch_assoc()){
                        ?>
                    <tr>
                            <td class="border-2 px-3"><img class="w-40" src='folder2/<?php echo $Drow['ProfilePhoto']?>' alt=""> </td>
                            <td class="border-2 px-3"><?php echo $Drow['Name']?> </td>
                            <td class="border-2 px-3"><?php echo $Drow['Sector']?> </td>
                            <td class="border-2 px-3"><?php echo $Drow['Mobile']?> </td>
                           
                            <td class="border-2 px-3"><a href="DocAppsetBloodDonner.php?ID=<?php echo $Drow['ID']?>&&HospitalID=<?php echo $Drow['HospitalID']?>" >অ্যাপয়েন্টমেন্ট দিন</a></td>

                            
                    </tr>
                    <?php
           
                    }
                    ?>
                    
                </tbody>
                
                

            </table>
        </div>
        </div>
        
        
    </main>
    
</body>

</html>



