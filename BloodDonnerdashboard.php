<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $DonnerEmail = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
  $row = mysqli_fetch_assoc($result);

  $ID = $row["DonnerID"];

  $bloodrequest = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(Status) AS Status FROM bloodrequest WHERE ID = '$ID'"));
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



<title>Profile- <?php echo $row["Name"]; ?></title>
</head>
<body class=" bg-gray-100">
    <main class="">
    <nav class="bg-gradient-to-r from-[#870000] to-[#190A05] text-white flex justify-between py-4 px-9 border-spacing-0 border-b-0">
            <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
            <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
            <li><a href="BloodDonnerMain.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="ELibraryDonners.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="hospitalListBlood.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="pharmacyClientDonners.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-ফার্মেসি</a></li>
        <li><a href="BloodDonnerSearch.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
            
            </ul>
            <a href="BloodDonnerdashboard.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
        </nav>
        <div class="flex flex-wrap bg-gray-100 w-full h-screen">
            <div class="w-3/12  bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="w-44 h-full rounded-3xl" src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"><?php echo $row["Name"]; ?></h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" href="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">রক্তদাতা</span>
                        </span>
                    </div>
                    
                </div>
                <ul class="space-y-7 text-sm">
                <li>
                        <a href="BloodDonnerdashboard.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="DonnerNotification.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span>Chats</span>
                        </a>
                    </li>
                   
                
                    <li>
                        <a href="DonnerSettings.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus-within:bg-gray-200 focus:shadow-black ">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="DonnerSeecurity.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <span>Security</span>
                        </a>
                    </li>
                    <li>
                        <a href="logout.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                </svg>
                            </span>
                            <span>Logout</span>
                        </a>
                    </li>
                </ul>
            </div>
            
            <div class="w-auto ml-10"  style="font-family: 'CharukolaUltraLight', sans-serif;">
                <div class="pl-10 scale-125 text-gray-600 ml-16 top-20 relative">
                    <h1 class="text-2xl font-bold ">সুস্বাগতম <?php echo $row["Name"]; ?></h1>
                    <p class=" text-gray-500">আপনার প্রোফাইলের তথ্যসমূহ</p>
                </div>
                <div class="grid my-28  pl-28 tracking-wider">
                    <p class="py-5 scale-125 text-gray-600">নাম: <?php echo $row["Name"]; ?></p>
                    <p class="py-5 scale-125 text-gray-600">রক্তের গ্রুপ: <?php echo $row["DonnerBG"]; ?></p>
                    <p class="py-5 scale-125 text-gray-600">ইউনিক আইডি: <?php echo $row["DonnerID"]; ?></p>
                    <p class="py-5 scale-125 text-gray-600">মোবাইল: <?php echo $row["DonnerNumber"]; ?></p>
                    <p class="py-5 scale-125 text-gray-600">লিঙ্গ: <?php echo $row["DonnerGender"]; ?></p>
                    <p class="py-5 scale-125 text-gray-600">বিভাগ: <?php echo $row["DonnerDivision"]; ?></p>

                    
                </div>

                <div class="pl-10 scale-125 text-gray-600 ml-16 top-3 relative">
                    <h1 class="text-2xl font-bold ">আপনার কার্য এবং রক্তদানের সারাংস</h1>

                    
                </div>
                <div class="flex  scale-150 text-white ml-36 top-24 relative ">
                    <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-xl shadow-xl p-3 ml-10">
                        <h1 class="text-sm font-light ">সবশেষ রক্ত দিয়েছেন</h1><br>



                        <form action="eligiblesetting.php" method="POST">
                            <input type="date" name="DATE" id="" class="text-black"><br><br>
                            <div class="flex">
                                <input type="checkbox" name="donnerType" id="" value="FirstTime" > <p class="text-xs">আমি পূর্বে কখনো রক্ত দেইনি</p> 
                           
                            </div><br>

                            <div class="flex">
                            <input type="checkbox" name="donnerType" id="" value="NotFirstTime" > <p class="text-xs">পূর্বে রক্ত দিলেও ওয়েবসাইটে নতুন</p> 
                           
                            </div><br>
                           
                            <input type="submit" name="checker" value="এলিজিবিলিটি চেকার" class="mx-4 relative py-3 px-2 w-40 scale-90 text-white bg-gradient-to-l from-[#c04848] to-[#480048] rounded-md hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                        
                       

                        </form>
                       
                        </div>
                
                        <div class="m-8"></div>


                        <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-xl shadow-xl p-3">
                            <h1 class="text-sm font-light ">পূর্ব রক্তদানের হিস্টোরি থেকে<br> আমি রক্তদানের জন্য উপযুক্ত কি?</h1><br>



                            <?php

                             
                            ?>
                            <p class="text-sm pt-6"><?php
    
                            $fetchID = $row["DonnerID"];
                            $q2 = "SELECT Eligibility FROM bloodeligibility WHERE ID = '$fetchID'";
                            $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $q2));
                            $fetchEligibiti = $fetchRes['Eligibility'];


                             echo $fetchEligibiti;?></p> 
                            
                           
                        </div>

                        <div class="m-8"></div>

                        <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-xl shadow-xl p-3">
                            <h1 class="text-sm font-light ">শুরু থেকে <br> এই পর্যন্ত রক্তদান করেছি...</h1><br>
                            <p class="text-sm pt-6"><?php echo $bloodrequest["Status"]?></p> 
                            
                           
                        </div>
                    
                </div>

                <br><br><br><br><br><br>

                <!-- <div class="flex scale-150 text-white ml-36 top-24 relative ">
                    <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-2xl shadow-xl p-3 ml-10">
                        <h1 class="text-sm font-light ">সবশেষ রক্ত দিয়েছেন</h1><br>
                        <input type="date" name="" id="" class="text-black"><br><br>
                        <div class="flex">
                            <input type="checkbox" name="" id="" value="First Time" > <p class="text-xs">আমি পূর্বে কখনো রক্ত দেইনি</p> 

                        </div>
                       
                        </div>
                
                        <div class="m-8"></div>


                        <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-2xl shadow-xl p-3">
                            <h1 class="text-sm font-light ">পূর্ব রক্তদানের হিস্টোরি থেকে<br> আমি রক্তদানের জন্য উপযুক্ত কি?</h1><br>
                            <p class="text-sm pt-6">দিতে পারেন</p> 
                            
                           
                        </div>

                        <div class="m-8"></div>

                        <div class="bg-gradient-to-r from-[#870000] to-[#190A05] rounded-2xl shadow-xl p-3">
                            <h1 class="text-sm font-light ">শুরু থেকে br এই পর্যন্ত রক্তদান করেছি...</h1><br>
                            <p class="text-sm pt-6">১০ বার</p> 
                            
                           
                        </div>
                    
                </div> -->
            </div>
        </div>
    </main>
    <footer></footer>
</body>
</html>