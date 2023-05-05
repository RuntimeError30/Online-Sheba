<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
    $DonnerEmail = $_SESSION["Email"];
    $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
    $row = mysqli_fetch_assoc($result);

  $fetchID = $_GET["ID"];
  $fetchProd = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pharmacylotproducts WHERE ID = '$fetchID' "));

}
else{
  header("Location: FirstLanding.php");
}


if(isset($_POST["PlaceOrder"])){
        
    $ClientName = $_POST["ClientName"];
    $ClientMobile = $_POST["ClientMobile"];
    $ClientAddress = $_POST["ClientAddress"];
    $Product = $fetchProd["Name"];
    $ProductID = $fetchProd["ID"];
    $Quantity = $_POST["Quantity"];
    $Price = ($fetchProd["Price"]*$Quantity);

    $Email = $row["Email"];
    $ID = $row["DonnerID"];

    date_default_timezone_set("Asia/Dhaka");
    $Time = date("h:i:sa");
    $Date = date("y-m-d");


    $insertQuery = "INSERT INTO pharmacyorder(Name, Email, ID, Mobile, Address, Product,ProductID, Quantity, Price,Date,Time) VALUES ('$ClientName','$Email','$ID','$ClientMobile','$ClientAddress','$Product','$ProductID','$Quantity','$Price','$Date','$Time')";
    mysqli_query($conn,$insertQuery);
    header("Location: pharmacyPaymentPageDonners.php");

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
<body class="bg-white " style="font-family: 'Hind Siliguri', sans-serif;
font-family: 'Raleway', sans-serif;" style="background-image: url('');">

    <nav class="flex justify-between shadow-xl bg-yellow-400 h-48">
        <a href=""><img src='folder2/nav.png' alt="" class="scale-50 relative -top-10"></a>
        <ul class="flex relative top-28 mx-20">
        <li class="mx-5 "><a href="pharmacyClientDonners.php">ফার্মেসী হোম</a></li>
            <li class="mx-5"><a href="pharmacyPaymentPageDonners.php">কার্ট</a></li>
            <li class="mx-5"><a href="PharmacyOrderHistoryDonners.php">অর্ডার হিস্টোরি</a></li>
            <li class="mx-5"><a href="BloodDonnerdashboard.php">আমার একাউন্ট</a></li>
        </ul>
    </nav>
   
    <main class="flex justify-center " style="background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%; ">
    <div class=" flex mx-10 my-20">
    <div class="p-10  bg-white shadow-xl rounded-2xl grid justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
            <h1 class="font-semibold text-4xl " >প্রোডাক্ট ডিটেইলস</h1>
            <img src='folder2/<?php echo $fetchProd["productImage"]?>' alt="" class=" w-80 h-80">
            <h1 class=" text-2xl ">পন্যের নামঃ <?php echo $fetchProd["Name"]?></h1><br><br>
            <h1 class=" text-2xl font-extrabold text-red-600">পন্যের দামঃ <?php echo $fetchProd["Price"]?> টাকা</h1>
            <h1 class=" text-2xl font-extrabold text-red-600">ডেলিভারী চার্জঃ 60 টাকা</h1><br><br>

        </div>

        <div class="p-10 mx-20  bg-white shadow-xl rounded-2xl grid justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
            <h1 class="font-semibold text-4xl " >আপনার কন্টাক্ট ডিটেইলস</h1>


            <form action="" method="POST">

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ClientName" id="" placeholder="<?php echo $row["Name"]?>" value="<?php echo $row["Name"]?>"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ClientMobile" id="" value="<?php echo $row["DonnerNumber"]?>" placeholder="<?php echo $row["DonnerNumber"]?>"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ClientAddress" id="" placeholder="ডেলিভারী লোকেশন"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Quantity" id="" placeholder="পরিমাণ"><br>



                

                <input type="submit" name="PlaceOrder" value="অর্ডার করুন" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 mt-6 border-none mx-5 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700"><br><br>
            </form>

        </div>

        <div class="p-10 mx-20  bg-white shadow-xl rounded-2xl grid justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
        <h1 class="font-semibold text-4xl " >অর্ডারের শর্তসমূহ</h1>
        <ol>
            <li class="mt-10">১. অর্ডারের চার্জের সাথে ডেলিভারী চার্জ প্রযোজ্য</li>
            <li class="mt-10">২. ডেলিভারী নেওয়ার সময় অবশ্যই ভালোভাবে চেক করে নিন</li>
            <li class="mt-10">৩. অর্ডার কনফার্ম করার ৩ থেকে ৭ কার্যদিবসের মধ্যে ডেলিভারী করা হয়</li>
            <li class="mt-10">৩. এক্সপায়ার্ড বা ত্রুটিযুক্ত প্রোডাক্ট ডেলিভারী করা হয়না</li>
        </ol>
        </div>
    </div>
    </main>
    

</body>


</html>