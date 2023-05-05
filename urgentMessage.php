<?php
require 'config.php';
$ID =  $_GET['ID'];



if (isset($_POST['MessageBtn'])){
$Name = $_POST["Name"];
$Email = $_POST["Email"];
$Mobile = $_POST["Mobile"];
$District = $_POST["District"];
$Division = $_POST["Division"];
$BloodLocation = $_POST["BloodLocation"];
$BloodDate = $_POST["BloodDate"];
$Message = $_POST["Message"];
$Emergency = $_POST["Emergency"];
$date = date('y-m-d');


$FullMsg = $Name.", বিভাগঃ ".$Division.", জেলাঃ ".$District."। ".$BloodLocation." এ যেয়ে ".$BloodDate." তারিখের মধ্যে রক্ত দিতে হবে। <br> রক্ত দিতে যোগাযোগ করুনঃ <br> ইমেইলঃ ".$Email."<br> মোবাইলঃ ".$Mobile."<br>পাঠানো ম্যাসেজঃ <br> ".$Message;


    $query = "INSERT INTO bloodrequest(ID,Notifications,Date,ReciverEmail,Emergency) VALUE('$ID','$FullMsg','$date','$Email','$Emergency') "; 
    mysqli_query($conn, $query);

    header("Location: AfterNotificationMessage.php");
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

    <title>SignUp-blood donner | E-Hospital</title>
</head>


<body class="bg-gradient-to-r from-[#e7e8ea] via-[#ffffff] to-[#e7e8ea]" style="font-family: 'CharukolaUltraLight', sans-serif;"  >
    
    

    <main class="" style="background-image: url('folder2/bgPng1.png'); height: 1000px">
   
        <div class="grid justify-center mt-44">
            <h1 style="font-family: 'Hind Siliguri', sans-serif;" class="text-4xl font-bold">নিচের ফর্মটি পূরন করুন</h1>
            <p class="align-middle">আপনার রিকুয়েস্ট নোটিফিকেশন ডোনার রিসিভ করলেই আপনাকে ইমেইল করবে অথবা মোবাইলে যোগাযোগ করবে</p>
        </div>

        <div class="grid justify-center mt-10 translate-x-72">
            <form action="" method="post" class="translate-x-44">
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" placeholder="আপনার নাম"><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="আপনার ইমেইল"><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" placeholder="আপনার মোবাইল নাম্বার"><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="District" id="" placeholder="জেলা"><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Division" id="" placeholder="বিভাগ"><br><br>
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="BloodLocation" id="" placeholder="কোথায় রক্ত দিতে যেতে হবে?"><br><br>
                <label for="">রক্ত কবে দিতে হবে?</label><br>
                <input type="date" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="BloodDate" id="" placeholder="রক্ত কবে দিতে হবে?"><br><br>
                <input type="checkbox" value="Emergency" name="Emergency">জরূরী রক্ত প্রয়োজন<br><br>
                <textarea name="Message" id="" cols="30" rows="10" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="ডোনারের উদ্দ্যেশ্যে কোনো ম্যাসেজ"></textarea>
                <input type="submit" name="MessageBtn" value="ডোনারকে ম্যাসেজ দিন"  class="px-28 translate-y-16 -translate-x-52 relative right-56  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                
            </form>
            
        </div>

        
    </main>


    

</body>
</html>