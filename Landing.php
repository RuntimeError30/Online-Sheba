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
    <title>Home</title>
</head>
<body class="edit">

    <main class="grid">
        

        <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0">
            <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
            <ul class="px-10 py-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
            <li><a href="ELibrary.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
            <li><a href="hospitalListG.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
            <li><a href="pharmacyClient.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-ফার্মেসি</a></li>
            <li><a href="BloodDonnerSearchMember.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
            <li><a href="seeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
            
            </ul>
            <a href="index.php" style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
        </nav>
        


        <div>
            
        </div>

        <div class="-my-1">
                <svg id="wave" class="py-o" style="transform:rotate(180deg); transition: 0.3s" viewBox="0 0 1440 490" version="1.1" xmlns="http://www.w3.org/2000/svg">
                    <defs><linearGradient id="sw-gradient-0" x1="0" x2="0" y1="1" y2="0"><stop stop-color="rgba(72, 0, 72, 1)" offset="0%">
                    </stop><stop stop-color="rgba(192, 72, 72, 1)" offset="100%"></stop></linearGradient></defs>
                    <path style="transform:translate(0, 0px); opacity:1" fill="url(#sw-gradient-0)" d="M0,147L720,343L1440,196L2160,196L2880,49L3600,98L4320,147L5040,147L5760,98L6480,
                    392L7200,245L7920,343L8640,392L9360,343L10080,196L10800,147L11520,294L12240,441L12960,294L13680,147L14400,0L15120,147L15840,294L16560,196L17280,294L17280,490L16560,
                    490L15840,490L15120,490L14400,490L13680,490L12960,490L12240,490L11520,490L10800,490L10080,490L9360,490L8640,490L7920,490L7200,490L6480,490L5760,490L5040,490L4320,490L3600,490L2880,
                    490L2160,490L1440,490L720,490L0,490Z"></path></svg>
        </div>
        
        <div class="h-96 -translate-y-1/2 pb-20  flex justify-center">
            <img src='folder2/final2.png' alt="">
            
        </div>
        <div class="flex justify-center -translate-y-80 align-middle pt-5 pb-20 shadow-slate-100">
            <img src='folder2/typo.png' alt="" class="h-44 -translate-y-96">
        </div>
        <div class="-translate-y-28">
            <p class="flex justify-center text-center pb-20 -translate-y-96 font-semibold" style="font-family: 'CharukolaUltraLight', sans-serif;"> 
                আপনার এবং আপনার পরিবারের সুরক্ষা স্বার্থে ইমার্জেন্সিবা জরুরী সেবার অপশনটি চালু করা হয়েছে। <br>
                পরিবারের যেকোনো মানুষের যেকোনো প্রয়োজনে যাতে ২৪ঘন্টা ডাক্তারের সাথে যোগাযোগ করতে পারে <br>
                সেই নিশ্চয়তার সাথেই আমরা এটি চালু করেছি। <br> <br>

                যেভাবে ব্যবহার করবেন ইমার্জেন্সি বাটনঃ<br><br>

                প্রথম ধাপঃ বাটনে ক্লিক করুন <br>
                দ্বিতীয় ধাপঃ আপনার নাম, ঠিকানা, সমস্যা এবং মোবাইল নাম্বার দিন <br>
                তৃতীয় ধাপঃ আপনার ঠিকানা অনুযায়ী আশেপাশের যেকোনো একটি হাসপাতাল নির্বাচন করুন <br>
                চতূর্থ ধাপঃ টেলিমেডিসিন নির্বাচন করুন এবং আপনার কলটি নিকটস্থ হাসপাতালে ট্রামস্ফার করা হবে খুবি শীঘ্রই।<br>
                    


            </p>
            
        </div>
        <div class="flex justify-center -translate-y-96">
            <button type="button" class="bg-gradient-to-r from-[#c04848] to-[#480048] font-semibold -translate-y-40 px-44 py-4 bg-gradient-to-b rounded-2xl hover:text-white transition-all hover:ease-in hover:bg-gradient-to-l from-[#c04848] to-[#480048] duration-700 " style="font-family: 'CharukolaUltraLight', sans-serif;" onclick="alert('পেজটি এখনো ডেভেলপ হচ্ছে')">ইমার্জেন্সি!</button>

        </div>
        
        <div class="flex justify-center -translate-y-80">
            <div class="mx-14 bg-slate-100 flex-col h-32 w-1/5 rounded-2xl  shadow-2xl" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <h1 class="text-2xl font-bold px-3 py-4">সদস্য সংখ্যা</h1>
                <input type="text" class="relative h-10 w-44 left-3 text-2xl bg-transparent font-bold" value="১০২৬২" readonly >
            </div>

            <div class="mx-14 bg-slate-100 flex justify-center  h-32 w-1/5 rounded-2xl shadow-2xl" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <h1 class="text-2xl font-bold px-3 py-4">রক্ত পেয়েছেন </h1>
                <input type="text" class="relative h-10 w-44 top-16 right-36 text-2xl bg-transparent font-bold" value="১০২৬২" readonly >       
            </div>
            
            <div class="mx-14 bg-slate-100 flex justify-center  h-32 w-1/5 rounded-2xl shadow-2xl" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <h1  class="text-2xl font-bold px-3 py-4">ব্যবহার করছেন</h1>
                <input type="text" class="relative h-10 w-44 top-16 right-36 text-2xl bg-transparent font-bold" value="১০২৬২" readonly >        
            </div>
        </div>

        <div class="">
            <footer class="px-3 py-7 flex justify-start bg-gradient-to-b from-[#480048] to-[#480048] text-white h-96">
                <div class="relative left-20 px-10 mx-9">
                    <h1 class="font-bold text-4xl border-b-2 ">Quick Contacts</h1> <br>
                    <p class="font-medium">Team Encrypted Cops</p>
                </div>
              
     
            </footer>
           </div>
    </main>

</body>
</html>