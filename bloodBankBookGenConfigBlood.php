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

if(isset($_POST["submit"])){

    $Name = $_POST["Name"];
    $Mobile = $_POST["Mobile"];
    $Email = $_POST["Email"];
    $FullAddress = $_POST["FullAddress"];
    $Quantity = $_POST["Quantity"];

    $hosID = $_GET["ID"];
    $BG = $_GET["BG"];
    $STOCKBlood = $_GET["stock"];

    $Notify = "Reservation of Blood Group: ".$BG."(Bag Quantity:".$Quantity.")"." <br><br> Reserved By:<br> Name: ".$Name."Mobile: ".$Mobile."<br> Email: ".$Email."<br>Address: ".$FullAddress;

    $NotQuery = "INSERT INTO hospitalnotification(ID, Notification) VALUES ('$hosID','$Notify')";
    mysqli_query($conn,$NotQuery);


    $updateQuery = "DELETE FROM hospitalbloodbank WHERE HosID = '$hosID' AND BloodGroup = '$BG' LIMIT ".$Quantity;

mysqli_query($conn,$updateQuery);


    
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
<body class="bg-gray-100 ">

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
    <div>
            <div class="text-black mt-4">
                <h1 class="font-bold text-5xl flex justify-center" style="font-family: 'Hind Siliguri', sans-serif;">ব্লাড বুকিং কনফার্মেশন</h1>
                <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার তথ্যসমূহ যাচাই করে নিন</p>
            </div>


            <div class="flex justify-center mt-10 text-black">
            
           <form action="" method="post">
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" value="<?php echo $Prow["Name"]?>" placeholder="<?php echo $Prow["Name"] ?>" ><br><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" value="<?php echo $Prow["DonnerNumber"]?>" placeholder="<?php echo $Prow["DonnerNumber"] ?>" ><br><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" value="<?php echo $Prow["Email"]?>" placeholder="<?php echo $Prow["Email"] ?>"><br><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="FullAddress" id="" placeholder="আপনার ঠিকানা" ><br><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="BG" id="" value="<?php echo $_GET['BG']?>"  ><br><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Quantity" id=""  placeholder="পরিমাণ(ব্যাগ সংখ্যা)" ><br><br><br>
           
        
           <input type="submit" name="submit" value="কনফার্ম বুকিং" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-5 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
           </form> 
           
        </div>
    </div>
        
    </main>
</body>
</html>