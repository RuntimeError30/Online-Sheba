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
    <title>Our services</title>
</head>


<main>
        
        
    <section class="flex-col py-36"  style="background-image: url('folder2/bgPng1.png');">
        
        <div class="grid justify-start mx-20 ">
            <h1 class="font-bold text-3xl " style="font-family: 'CharukolaUltraLight', sans-serif;">আমাদের আরও সেবাসমূহ</h1>


            <div class="grid font-sem text-xl mt-7 " style="font-family: 'CharukolaUltraLight', sans-serif;">

                <a href="" class="hover:bg-red-600 rounded-md w-full hover:text-white delay-100 ease-in transition-all" >ব্লাড ব্যাংক </a><br>
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all" >হাসপাতালে কেবিন বুকিং </a><br>
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">নিদৃষ্ট ডাক্তারের থেকে সেবা নিন </a><br>
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">অর্গান ডোনার হোন </a><br>
               
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">ডাক্তার লগ-ইন অথবা সাইন-আপ </a><br>
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">হাসপাতাল লগ-ইন অথবা সাইন-আপ  </a><br>
                <a href="" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">নিকটস্থ হাসপাতাল খুঁজুন</a><br><br><br>

                <a href="Landing.php" class="hover:bg-red-600 w-full hover:text-white delay-100 ease-in transition-all">পূর্বরর্তী পেইজে যান</a>
            </div>
            
        </div>
       
    </section> 


</main>