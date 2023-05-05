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
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>

<script>
    var from = null, start=0;
    $(document).ready(function(){
        from = prompt("Please Enter Your ");
        $('from').submit(function(e){
			$.post(url,{
				message: $('#message').val(),
				fromID: from
			})
			$('#message').val('');
			return false;
		});
    });
</script>


<title>Profile- <?php echo $row["Name"]; ?></title>
</head>
<body class=" bg-gray-100 "  >
    <main class="overflow-y-hidden overflow-x-hidden">
    <nav class="bg-gradient-to-r from-[#870000] to-[#190A05] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0">
            <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
            <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
            <li><a href="BloodDonnerMain.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
            <li><a href="" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
            
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
                
                </ul>
            </div>
            
            <div class="w-auto ml-10 flex"  style="font-family: 'CharukolaUltraLight', sans-serif;">
                <div class="translate-y-10  ">
                    <form action="" method="" class=" translate-y-96 absolute top-64 flex ">
                        <textarea name="" id="message" placeholder="message" cols="90" rows="2" style="resize: none;" class="border-2 border-slate-300 rounded-2xl"></textarea>
                        <button type="submit"  name="send" value="send"><img src="https://img.icons8.com/nolan/64/filled-sent.png" class="scale-75"></button>
                    </form>
                </div>

				
            </div>
            
        </div>
    </main>
    <footer></footer>
</body>
</html>