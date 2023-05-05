<?php
    require 'config.php';
    if(!empty($_SESSION["Email"])){
        header("Location: index.php");
      }
    if(isset($_POST["submit"]))
    {

    $Email = $_POST["Email"];
    $Password = $_POST["Password"];

    $result =  mysqli_query($conn, "SELECT * FROM pharmacyadmin WHERE Email = '$Email' OR ID = '$Email'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
        if($Password == $row["Password"]){

        $_SESSION["login"] = true;
        $_SESSION["Email"] = $row["Email"];
        header("Location: pharmacyDashboard.php");
        }
        else{
            echo " Not a registered user!";
        }
        
    }else{
        echo "Wrong";
    }
    
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

    <title>Login-General Members</title>
</head>

<!-- Do not touch this part -->

<!-- Edit from this part -->
<body>
    

    <main>
        
        
        <section class="flex-col py-36"  style="background-image: url('folder2/bgPng1.png');">
            
            <div>
                <h1 class="font-bold text-5xl flex justify-center" style="font-family: 'Hind Siliguri', sans-serif;">লগ-ইন</h1>
                <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার প্রোফাইলে যেতে অনুগ্রহপূর্বক সঠিক তথ্য প্রদান করুন</p>
            </div>

            <div class="flex justify-center py-20">
                <form action="" method="POST" autocomplete="off" class="flex-col">
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="ইউনিক আইডি অথবা ইমেইল"><br><br><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id="" placeholder="পাসওয়ার্ড"><br><br>
                    <input type="submit" name="submit" value="লগ-ইন!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                </form>
            </div>
           
        </section> 

        <section class="-translate-y-48">
            <div class="flex justify-center hover:scale-110 ease-out duration-700" style="font-family: 'CharukolaUltraLight', sans-serif; " >
                <p class="flex">পাসওয়ার্ড ভুলে গিয়েছেন?<a href="PasswordChange.php" class=" hover:text-red-600 duration-700"  target="_blank">এখানে ক্লিক করুন</a></p><br>
            </div>
            <div class="flex justify-center text-sm hover:scale-110 ease-out duration-700" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <p>নতুন সদস্য হতে ইচ্ছুক? <a href="GeneralSignUp.php" class=" hover:text-red-600 duration-700">এখানে ক্লিক করুন</a></p>
            </div>
        </section>
    </main>
</body>
</html>