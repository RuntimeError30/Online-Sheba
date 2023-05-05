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
    <title>E Library</title>
</head>
<body style="background-image: url('folder2/bgPng1.png');" class="bg-[#fffbff]">
    
    <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0 h-56">
        <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <li><a href="Landing.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
        <li><a href="FirstSeeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
        
        </ul>
        <a href="Landing.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
    </nav>
    <main style="font-family: 'CharukolaUltraLight', sans-serif; " class="flex-col mx-28 px-9 py-2 my-11 ">
        <div class="grid justify-start scale-110 relative left-20">
        <h1 class="font-bold text-3xl">ই-লাইব্রেরি</h1> 
        <p>আপনার প্রয়োজনীয় বই এখানে পাবেন খুব সহজেই!</p>
    </div>

        <div class="grid py-20">
            <form action="bookUploadConfig.php" method="post" class="grid text-lg file:rounded-full" enctype="multipart/form-data">

                    <label class="">বই</label>
                    <input type="file" name="Book" class="border-2 border-gray-300 block w-1/3 text-sm text-gray-500 file:mr-4 file:py-2 file:px-4 hover:file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-[#3b2f3b] file:text-white hover:file:bg-[#554e55] transition-all ease-out duration-700" accept=".pdf"/><br>


                    <label class="">বইয়ের নাম</label>
                    <input type="text" name="Name" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" id="" placeholder=""><br>

                    <label class="" hidden>বুক আইডি</label>
                    <input type="text" name="BookID" id="" value="<?php 
                    echo uniqid("Book"); ?>"  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" id="" placeholder="" hidden readonly><br>


                    <label class="">খন্ড</label>
                    <input type="text" name="Part" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" id="" placeholder=""><br>

                    <label class="">লেখকের নাম</label>
                    <input type="text" name="Author" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

                    <label class="">প্রকাশ তারিখ এবং সাল</label>
                    <input type="datetime-local" name="ReleaseDate" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" id="" placeholder=""><br>

                    <label class="">মুদ্রন</label>
                    <input type="text" name="Edition" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

                    <label class="">আপলোডকারীর নাম</label>
                    <input type="text" name="UplodersName" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

                    <label class="">আপলোডকারীর ঠিকানা</label>
                    <input type="text" name="UplodersAddress" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

                    <label class="">আপলোডকারীর মোবাইল</label>
                    <input type="text" name="UplodersMobile" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

                    <label class="">আপলোডের তারিখ</label>
                    <input type="datetime-local" name="UploadDate" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-1/3 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700"  id="" placeholder=""><br>

            
                    <input type="submit" value="আপলোড" name="upload" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-3 w-96 bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                   
            </form>
        </div>
        
    </main>
</body>
</html>
