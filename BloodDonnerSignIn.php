<!-- BACKEND -->
<?php
    require 'config.php';
    if(!empty($_SESSION["Email"])){
        header("Location: BloodDonnerdashboard.php");
      }
    if(isset($_POST["submit"]))
    {

    $DonnerEmail = $_POST["Email"];
    $Password = $_POST["Password"];

    $result =  mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail' OR DonnerID = '$DonnerEmail'");
    $row = mysqli_fetch_assoc($result);

    if(mysqli_num_rows($result)>0){
        if($Password == $row["Password"]){

        $_SESSION["login"] = true;
        $_SESSION["Email"] = $row["Email"];
        $_SESSION["DonnerID"] = $row["DonnerID"];
        header("Location: BloodDonnerMain.php");
        }
        else{
            echo "Password did not matched!";
        }
        
    }else{
        echo "User not registered";
    }
    
}

?>




<!-- HTML AND TAILWIND CODES -->










<!-- HTML AND TAILWIND CODES -->






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

    <title>login-blood donner | E-Hospital</title>
</head>

<!-- Do not touch this part -->

<!-- Edit from this part -->
<body class="bg-gradient-to-r from-[#e7e8ea] via-[#ffffff] to-[#e7e8ea]"  >
    
    

    <main class="overflow-x-hidden overflow-y-hidden" style="background-image: url('folder2/bgPng1.png'); height: 1000px">
       
        
        
        <section class="flex-col py-36 "  >
            
            
            
            <div class="grid justify-end relative right-56 mr-44 top-14">
                <h1 class="font-bold text-5xl flex justify-start" style="font-family: 'Hind Siliguri', sans-serif;">ব্লাড ডোনার সাইন-আপ</h1>
                <p class="font-semibold text-base py-3 flex justify-start" style="font-family: 'CharukolaUltraLight', sans-serif;">ব্লাড ডোনার হতে সাইন আপ ফর্মটি পূরন করুন</p>
            </div>

            <div class="flex justify-center  mr-56 pr-20 relative top-32 scale-100">
                <form action="#"  method="post" autocomplete="off"  class="flex-col">

                    <div id="line" class="relative left-80 top-10 translate-x-6">


                        <div id="horizontal" class=" relative  top-7 left-20 ">
                            <div class="border-2 border-slate-100 rotate-90 -translate-x-52 w-96  relative  top-56 -translate-y-6"></div>
                            <div class="border-2 border-slate-100 rotate-90 -translate-x-52 w-96  relative  top-72 -translate-y-96"></div>

                        </div>
                        

                        <div class="border-2 border-slate-100 w-20 translate-y-48 relative left-16 top-20"></div>
                    </div>
                    
                 
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="ইমেইল অথবা ইউনিক আইডি"><br><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id="" placeholder="পাসওয়ার্ড"><br><br>
                   
                

                    <div class="relative bottom-1/2 -translate-y-24 translate-x-64 left-52 border-2 ml-6 w-96 py-2 flex justify-center">
                        <input type="submit" name="submit" value="সাইন আপ!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                        
                    </div>
                    
                    
                </form>
            </div>
           
        </section> 

        <section class="translate-y-0 relative bottom-5 left-80">

            <div class="flex justify-center text-sm hover:scale-110 ease-out duration-700" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <p>সদস্য হতে ইচ্ছুক? <a href="" class=" hover:text-red-600 duration-700">রেজিস্ট্রেশন করুন!</a></p>
                
            </div>
        </section>

        
    
    </main>
    <!-- <footer class="grid">
        <div>
            <img src='folder2/bloodPNG2.png' alt="">
        </div>
    </footer> -->

    

</body>
</html>