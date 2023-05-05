<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}
?>


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
    <title>Blood Donners | E Hospital</title>
</head>



<link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
<link href="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js">
<link href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
<link href="https://cdnjs.cloudflare.com/ajax/libs/MaterialDesign-Webfont/3.6.95/css/materialdesignicons.css">
<script src="js.js"></script>
<body style="background-image: url('folder2/bgPng1.png');" class="bg-[#fffbff]">
    
    <nav class="bg-gradient-to-r from-[#870000] to-[#190A05] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0 h-56">
        <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <li><a href="Landing.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
        <li><a href="BloodDonnerSearchMember.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
        <li><a href="FirstSeeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
        
        </ul>
        <a href="index.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
    </nav>
    <main style="font-family: 'CharukolaUltraLight', sans-serif; " class="flex-col mx-16 px-9 py-2 my-11">
        <div class="grid justify-start">
        <h1 class="font-bold text-3xl">অনলাইন রক্তদাতার সন্ধান
        </h1> 
        <p>রক্ত দিন জীবন বাঁচান</p>


    </div>

        <div class="py-20">
            <form action="DonnerAccSearch.php" method="POST">
            <div class="flex">

<select name="BG" style="font-family: 'CharukolaUltraLight', sans-serif;"  class="relative mr-7 h-11 -top-5  bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg  hover:scale-110 hover:border-[#c04848] ease-out duration-700">
        <option value="No-Value">ব্লাড গ্রূপ</option>
        <option value="A+">এ পজিটিভ</option>
        <option value="A-">এ নেগেটিভ</option>
        <option value="B+">বি পজিটিভ</option>
        <option value="B-">বি নেগেটিভ</option>
        <option value="O+">ও পজিটিভ</option>
        <option value="O-">ও নেগেটিভ</option>
        <option value="AB+">এবি পজিটিভ</option>
        <option value="AB-">এবি নেগেটিভ</option>
        
      </select><br><br>

    <select name="District" style="font-family: 'CharukolaUltraLight', sans-serif;" class="relative mx-7 h-11 -top-5 left-3 bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg  hover:scale-110 hover:border-[#c04848] ease-out duration-700">
        <option value="No-Value">আপনি কোন জেলায় রক্ত খুঁজছেন?</option>
        <option value="Bandarban">Bandarban</option>
        <option value="Bagerhat">Bagerhat</option>
        <option value="Barguna">Barguna</option>
        <option value="Barisal">Barisal</option>
        <option value="Bhola">Bhola</option>
        <option value="Bogra">Bogra</option>
        <option value="Brahmanbaria">Brahmanbaria</option>
        <option value="Chandpur">Chandpur</option>
        <option value="Chittagong">Chittagong</option>
        <option value="Chuadanga">Chuadanga</option>
        <option value="Comilla">Comilla</option>
        <option value="Cox'sBazar">Cox'sBazar</option>
        <option value="Dhaka">Dhaka</option>
        <option value="Dinajpur">Dinajpur</option>
        <option value="Faridpur">Faridpur</option>
        <option value="Feni">Feni</option>
        <option value="Gaibandha">Gaibandha</option>
        <option value="Gazipur">Gazipur</option>
        <option value="Gopalganj">Gopalganj</option>
        <option value="Habiganj">Habiganj</option>
        <option value="Jaipurhat">Jaipurhat</option>
        <option value="Jamalpur">Jamalpur</option>
        <option value="Jessore">Jessore</option>
        <option value="Jhalokati">Jhalokati</option>
        <option value="Jhenaidah">Jhenaidah</option>
        <option value="Khagrachari">Khagrachari</option>
        <option value="Khulna">Khulna</option>
        <option value="Kishoreganj">Kishoreganj</option>
        <option value="Kurigram">Kurigram</option>
        <option value="Kushtia">Kushtia</option>
        <option value="Lakshmipur">Lakshmipur</option>
        <option value="Lalmonirhat">Lalmonirhat</option>
        <option value="Madaripur">Madaripur</option>
        <option value="Magura">Magura</option>
        <option value="Manikganj">Manikganj</option>
        <option value="Maulvibazar">Maulvibazar</option>
        <option value="Meherpur">Meherpur</option>
        <option value="Munshiganj">Munshiganj</option>
        <option value="Mymensingh">Mymensingh</option>
        <option value="Naogaon">Naogaon</option>
        <option value="Narail">Narail</option>
        <option value="Narayanganj">Narayanganj</option>
        <option value="Narsingdi">Narsingdi</option>
        <option value="Natore">Natore</option>
        <option value="Nawabganj">Nawabganj</option>
        <option value="Netrokona">Netrokona</option>
        <option value="Nilphamari">Nilphamari</option>
        <option value="Noakhali">Noakhali</option>
        <option value="Pabna">Pabna</option>
        <option value="Panchagarh">Panchagarh</option>
        <option value="Patuakhali">Patuakhali</option>
        <option value="Pirojpur">Pirojpur</option>
        <option value="Rajbari">Rajbari</option>
        <option value="Rajshahi">Rajshahi</option>
        <option value="Rangamati">Rangamati</option>
        <option value="Rangpur">Rangpur</option>
        <option value="Satkhira">Satkhira</option>
        <option value="Shariatpur">Shariatpur</option>
        <option value="Sherpur">Sherpur</option>
        <option value="Sirajganj">Sirajganj</option>
        <option value="Sunamganj">Sunamganj</option>
        <option value="Sylhet">Sylhet</option>
        <option value="Tangail">Tangail</option>
        <option value="Thakurgaon">Thakurgaon</option>
      </select><br><br>
<input type="submit" name="search" value="ডোনার খুঁজুন" class="mx-4 relative -top-5 py-3 px-2 w-40 text-white bg-gradient-to-l from-[#c04848] to-[#480048] rounded-md hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
</div>





<table class="border-2">
<thead>
<tr >
    <th class="border-2 px-3">ডোনারের নাম</th>
    <th class="border-2 px-3">রক্তের গ্রুপ</th>
    <th class="border-2 px-3">মোবাইল নাম্বার</th>
    <th class="border-2 px-3">বিভাগ</th>
    <th class="border-2 px-3">জেলা</th>
    <th class="border-2 px-3">রক্ত দানের জন্য এক্টিভ কি না</th>
    <th class="border-2 px-3">অ্যাকশন</th>

</tr>
</thead>

<tbody  id="myTable">
    <?php
    
   $query1 = "SELECT * FROM bloodeligibility  WHERE Eligibility LIKE '%পারবেন'";
   $result = $conn->query($query1);


   
    while($row = $result->fetch_assoc()){
        ?>
    <tr>
        
            <td class="border-2 px-3"><?php echo $row['Name']?> </td>
            <td class="border-2 px-3"><?php echo $row['BG']?> </td>
            <td class="border-2 px-3"><?php echo $row['Mobile']?> </td>
            <td class="border-2 px-3"><?php echo $row['Division']?> </td>
            <td class="border-2 px-3"><?php echo $row['District']?> </td>
            <td class="border-2 px-3"><?php echo $row['Eligibility']?> </td>
            <td class="border-2 px-3"><a href="urgentMessage.php?ID=<?php echo $row['ID']?>" class="">নোটিফিকেশন পাঁঠান</a></td>
         
            
    </tr>
    <?php
    }
    ?>
    
</tbody>



</table>
            
            </form>
            
        </div>
    
        
    </main>
</body>
</html>
















 