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




if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM pharmacylotproducts WHERE Name LIKE '%".$valueToSearch."%'";
    $search_result = mysqli_query($conn,$query);

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">



<link rel="stylesheet" href="style.css">

<title>Home</title>
</head>
<body class=" " style="font-family: 'Hind Siliguri', sans-serif;
font-family: 'Raleway', sans-serif;" >
    <!-- <img src='folder2/doodlePharma.png' class=" absolute w-screen h-screen opacity-50" alt=""> -->
    <nav class="flex justify-between shadow-xl bg-yellow-400 h-48" style=" font-family: 'Hind Siliguri', sans-serif; background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%;">
        <a href="Landing.php"><img src='folder2/nav.png' alt="" class="scale-50 relative -top-10"></a>
        <ul class="flex relative top-28 mx-20">
        <li class="mx-5 px-2 py-4"><a href="pharmacyClient.php">ফার্মেসী হোম</a></li>
            <li class="mx-5 px-2 py-4"><a href="pharmacyPaymentPage.php">কার্ট</a></li>
            <li class="mx-5 px-2 py-4"><a href="pharmacyOrderHistory.php">অর্ডার হিস্টোরি</a></li>
            <li class="mx-5 px-2 py-4"><a href="index.php">আমার একাউন্ট</a></li>
        </ul>
    </nav>
    <main style="background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%; ">
    <section class="grid px-12 pt-12 ">
        <div class="flex justify-center scale-75 relative -top-32">
            <img src='folder2/pharma.png' alt="" class=" absolute scale-50 left-1/3 -top-28">
            
            
            <img src='folder2/pharma2.png' alt="" class=" absolute scale-50 -left-44">


            <div class="grid justify-center absolute top-56 left-1/2 -translate-x-24 scale-110">
                <h1 class="flex justify-start text-6xl font-extrabold tracking-wide relative top-24 right-44 text-transparent bg-clip-text bg-gradient-to-r from-[#03001e] via-[#7303c0] via-[#ec38bc] to-[#fdeff9]" style="font-family: 'Hind Siliguri', sans-serif;">২৪ ঘন্টা</h1><br>
               
                <h1 class="flex justify-start text-6xl font-extrabold tracking-wide relative top-14 right-44 text-transparent bg-clip-text bg-gradient-to-r from-[#03001e] via-[#7303c0] via-[#ec38bc] to-[#fdeff9]" style="font-family: 'Hind Siliguri', sans-serif;">সপ্তাহে ৭ দিন</h1>
    
                <h1 class="flex justify-start text-6xl font-extrabold tracking-wide relative top-12 right-44 text-red-500" style="font-family: 'Hind Siliguri', sans-serif;">ইমার্জেনসি ঔষধ</h1>
    
                <h1 class="flex justify-start text-md font-extrabold tracking-wide relative top-12 right-44 text-red-500" style="font-family: 'Hind Siliguri', sans-serif;">যখনই প্রয়োজন পাশে আছে</h1>
                <h1 class="flex justify-start text-6xl font-extrabold tracking-wide relative top-5  text-orange-400" style="font-family: 'Hind Siliguri', sans-serif;">অনলাইন সেবা <br> ফার্মেসি</h1>
            </div><br>
        </div>

        



    </section>
    <div class="flex justify-start mx-20 relative top-44 mt-44 translate-y-52" style=" font-family: 'Hind Siliguri', sans-serif; background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%;">
    
    <form action="" method="POST" class="flex">
        <div class="grid ">
            <div class="flex justify-between">
                <h1 class="flex justify-start text-5xl font-extrabold tracking-wide relative  text-transparent bg-clip-text bg-gradient-to-r from-gray-700 via-gray-900 to-black" style="font-family: 'Hind Siliguri', sans-serif;">ঔষধসমূহ</h1>



                    



                

            </div>
            <div class="flex flex-wrap w-full h-full mt-20">
            <?php while($Frow = mysqli_fetch_assoc($search_result)):?>
                <tr>
                <div class="mx-12">
                    <img src='folder2/<?php echo $Frow["productImage"]?>' alt="" class=" w-44 h-72">
                    <h1 class="text-xl font-semibold flex justify-center"><?php echo $Frow["Name"]?></h1>
                    <h1 class="text-lg font-thin flex justify-center">মূল্যঃ <?php echo $Frow["Price"]?></h1>
                    <a href="PharmacyOrder.php?ID=<?php echo $Frow['ID']?>" class="flex justify-center shadow-xl py-2 mt-5 bg-yellow-400 hover:rounded-2xl transition-all">অর্ডার করুন</a>
                    <a href="" class="flex justify-center shadow-xl py-2 mt-5 bg-yellow-400 hover:rounded-2xl transition-all">কার্টে যোগ করুন</a>
                </div>

                </tr>
                <?php endwhile;?>


                
            
              
                
            </div>

        </div>
    </form>
        
        
    </div>
    </main>

    <footer class="bg-gray-900 text-white mt-96 relative top-20 h-56 flex justify-start">
        <div class="grid mx-20 my-20">
        <h1 class="font-semibold text-2xl pb-5 tracking-wide uppercase"  style="font-family: 'Hind Siliguri', sans-serif;" >Contact Information</h1>
        Team Encrypted Cops
        </div>
    </footer>
    

</body>


</html>

