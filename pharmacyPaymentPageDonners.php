<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
    $DonnerEmail = $_SESSION["Email"];
    $result = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE Email = '$DonnerEmail'");
    $row = mysqli_fetch_assoc($result);

  $cusID = $row["DonnerID"];
  $fetchFinal = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pharmacyorder  WHERE ID = '$cusID'"));

  $SumQuery = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(Price) AS 'Price' from pharmacyorder where ID = '$cusID'"));

}
else{
  header("Location: FirstLanding.php");
}



if(isset($_POST["OrderConfirmed"])){

    $Payment = $_POST["Payment"];
    $BkashNum = $_POST["BkashNum"];
    $BkasPass = $_POST["BkasPass"];
    $Ammount = $_POST["Ammount"];

    if($Payment == "Bkash"){
        $Name = $fetchFinal["Name"];
        $Mobile =$fetchFinal["Mobile"];
        $Address = $fetchFinal["Address"];
        $Product = $fetchFinal["Product"];
        
        $Quantity = $fetchFinal["Quantity"];
        $Price = ($fetchFinal["Price"]+60);
    
        $Email = $row["Email"];
        $ID = $row["DonnerID"];
        $PaymentStatus = "PAID";
        $method  = "Bkash";
        $OrderID =  uniqid("ORDER");
        $Notifi = "আপনার অর্ডার " .$Product." সফলভাবে প্লেস হয়েছে!";

        date_default_timezone_set("Asia/Dhaka");
        $Time = date("h:i:s");
        $Date = date("y-m-d");

        $PlaceOrderQ = mysqli_query($conn,"INSERT INTO confirmorders(Name, Mobile, Email, Address, OrderProd, Quantity,Price, PaymentStatus, PaymentMethod, OrderID, OrderPlaceDate) VALUES ('$Name','$Mobile','$Email','$Address','$Product','$Quantity','$Price','$PaymentStatus','$method','$OrderID','$Date')");
        $deleteCart = mysqli_query($conn, "DELETE FROM pharmacyorder WHERE ID = '$cusID'");
        $notifyQ = mysqli_query($conn,"INSERT INTO notifications(ID, Notifications) VALUES ('$ID','$Notifi')");
        
    }
    else if($Payment == "COD"){
        $Name = $fetchFinal["Name"];
        $Mobile =$fetchFinal["Mobile"];
        $Address = $fetchFinal["Address"];
        $Product = $fetchFinal["Product"];
        
        $Quantity = $fetchFinal["Quantity"];
        $Price = ($fetchFinal["Price"]+60);
    
        $Email = $row["Email"];
        $ID = $row["DonnerID"];
        $PaymentStatus = "PENDING";
        $method  = "COD";
        $OrderID =  uniqid("ORDER");
        $Notifi = "আপনার অর্ডার " .$Product." সফলভাবে প্লেস হয়েছে!";

        date_default_timezone_set("Asia/Dhaka");
        $Time = date("h:i:s");
        $Date = date("y-m-d");

        $PlaceOrderQ = mysqli_query($conn,"INSERT INTO confirmorders(Name, Mobile, Email, Address, OrderProd, Quantity,Price, PaymentStatus, PaymentMethod, OrderID, OrderPlaceDate) VALUES ('$Name','$Mobile','$Email','$Address','$Product','$Quantity','$Price','$PaymentStatus','$method','$OrderID','$Date')");
        $deleteCart = mysqli_query($conn, "DELETE FROM pharmacyorder WHERE ID = '$cusID'");
        $notifyQ = mysqli_query($conn,"INSERT INTO notifications(ID, Notifications) VALUES ('$ID','$Notifi')");
    }
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


<title>E-Pharmacy | Online Sheba</title>
</head>
<body class=" " style="font-family: 'Hind Siliguri', sans-serif;
font-family: 'Raleway', sans-serif;" >
    <!-- <img src='' class=" absolute w-screen h-screen opacity-50" alt=""> -->

    <nav class="flex justify-between shadow-xl bg-yellow-400 h-48" style=" font-family: 'Hind Siliguri', sans-serif; background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%;">
        <a href="BloodDonnerMain.php"><img src='folder2/nav.png' alt="" class="scale-50 relative -top-10"></a>
        <ul class="flex relative top-28 mx-20">
            <li class="mx-5 "><a href="pharmacyClientDonners.php">ফার্মেসী হোম</a></li>
            <li class="mx-5"><a href="pharmacyPaymentPageDonners.php">কার্ট</a></li>
            <li class="mx-5"><a href="PharmacyOrderHistoryDonners.php">অর্ডার হিস্টোরি</a></li>
            <li class="mx-5"><a href="BloodDonnerdashboard.php">আমার একাউন্ট</a></li>
        </ul>
    </nav>
   
    <main class="grid justify-center " style="background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%; ">
        <div class="p-10 mt-20 mx-20 bg-white shadow-xl rounded-2xl grid justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
        <h1 class="font-semibold text-4xl pb-5" >আপনার কার্ট</h1>
        <table>
        <thead>
                <th class="border-2 px-3 py-3">আপনার নাম</th>
                <th class="border-2 px-3 py-3">ইমেইল</th>
                <th class="border-2 px-3 py-3">মোবাইল</th>
                <th class="border-2 px-3 py-3">ডেলিভারী এড্রেস</th>
                <th class="border-2 px-3 py-3">প্রোডাক্ট</th>
                <th class="border-2 px-3 py-3">পরিমাণ</th>
                <th class="border-2 px-3 py-3">মোট মূল্য</th>
                <th class="border-2 px-3 py-3">অ্যাকশন</th>
            </thead>
        
            <tbody>
            <?php
                date_default_timezone_set("Asia/Dhaka");
                $Time = date("h:i:s");
                $Date = date("y-m-d");


                        $CustomID = $row["DonnerID"];
                        $query1 = "SELECT * FROM pharmacyorder WHERE ID = '$CustomID'";
                        $result = $conn->query($query1);

        
                        
                            while($Cartrow = $result->fetch_assoc()){
                                // $millis = $Cartrow['Time'];

                                // $start = strtotime($millis);
                                // $end = strtotime($Time);
                                // $mins = intval(($end - $start)/60);
                                if(!empty($Cartrow)){

                                ?>
                            <tr>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Name"]?></td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Email"]?> </td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Mobile"]?> </td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Address"]?> </td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Product"]?> </td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Quantity"]?> </td>
                                    <td class="border-2 px-3 py-7"><?php echo $Cartrow["Price"]?> </td>
                                    <td class="border-2 px-3 py-7"> <a href="removeCart.php?ID=<?php echo $Cartrow['ID']?>&&ProductID=<?php echo $Cartrow['ProductID']?>" class="mt-10 shadow-xl bg-yellow-400 px-1 py-2">কার্ট থেকে রিমুভ করুন</a></td>
                                                     
                            </tr>
                    <?php
                    }else{
                        
                            ?>
                            <div class="p-10 mt-20 mx-20 bg-white shadow-xl rounded-2xl grid justify-center top-20">
                            <h1 style="font-family: 'Hind Siliguri', sans-serif;">আপনার কার্টটি এম্পটি!</h1><br>
                            <a href="pharmacyClient.php" class="flex justify-center relative right-5">অর্ডার করতে এখানে ক্লিক করুন</a>
                            <?php
                    }
                    
                }

                    ?>
            </tbody>
        </table>

        </div>
        <div>
        <?php
                $CustomID1 = $row["DonnerID"];
                $query23 = "SELECT * FROM pharmacyorder WHERE ID = '$CustomID1'";
                $result = $conn->query($query23);

                while($Fetrow = $result->fetch_assoc()){
                    if($Fetrow == 0){
                        ?>
                        <h1 class="relative -top-10">xdlkughdukghdfgiuh</h1>
                        
                        <?php
                    }
                }
                ?>
        </div>
        
        <div class="mt-20 mx-20 px-5 py-5 bg-white shadow-xl rounded-2xl flex flex-warp justify-start ">
        
            <div class="grid">
                <h1 class="font-semibold text-4xl pb-5" style="font-family: 'Hind Siliguri', sans-serif;" >ফাইনাল রিচেক</h1>
                <form action="" method="POST" >
                    <p class="italic">অর্ডার করেছেনঃ <?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{echo $fetchFinal["Name"];} ?> </p>
                    <p class="italic">ডেলিভারী এড্রেস <?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{echo $fetchFinal["Address"];} ?> </p>
                    <p class="italic">মোবাইল <?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{echo $fetchFinal["Mobile"];} ?> </p>
                  
                    <p class="italic">প্রোডাক্টসমূহের মূল্যঃ  <?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{echo $fetchFinal["Price"];}?></p>
                    <p class="italic"><?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{ echo "ডেলিভারী চার্জঃ 60 টাকা";}?></p><br><br>
                    <p class="italic">মোট মূল্যঃ <?php if(empty($fetchFinal)){echo "NO ORDER FOUND";} else{echo ($SumQuery["Price"]+60);} ?></p><br>

                    
                </form>

            </div>
            
            <div class="grid mx-20">

                <h1 class="font-semibold text-4xl pb-5" style="font-family: 'Hind Siliguri', sans-serif;" >পেমেন্ট মেথড</h1>

                

                <div>
    <div class="form-check">

    <form action="" method="POST">
        <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="Payment" value="Bkash" id="Bkash">
      <label class="form-check-label inline-block text-gray-800" for="Bkash">
        বিকাশ
      </label><br>
      <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="BkashNum" id="" placeholder="বিকাশ নাম্বার" required><br>
      <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="BkasPass" id="" placeholder="বিকাশ পাসওয়ার্ড" required><br>

      <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Ammount" id="" placeholder="<?php if(empty($fetchFinal)){echo "0";} else{echo ($SumQuery["Price"]+60);} ?>" readonly><br><br>
      
    </div>
    <div class="form-check">
      <input class="form-check-input appearance-none rounded-full h-4 w-4 border border-gray-300 bg-white checked:bg-blue-600 checked:border-blue-600 focus:outline-none transition duration-200 mt-1 align-top bg-no-repeat bg-center bg-contain float-left mr-2 cursor-pointer" type="radio" name="Payment" id="COD" value="COD" >
      <label class="form-check-label inline-block text-gray-800" for="COD">
        ক্যাশ অন ডেলিভারী
      </label>
      <input type="submit" name="OrderConfirmed" value="অর্ডার কনফার্ম করুন" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 mt-6 border-none mx-5 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700"><br><br>

    </form>
      
    </div>

            </div>
            <div>
                <a href="pharmacyClientDonners.php" style="font-family: 'Hind Siliguri', sans-serif;" class="flex relative right-20">কার্টে আরও পন্য যোগ করুন</a>
            </div>
        
        
        </div>
        <div>
            
        </div>


    </main><br>
    

    <footer class="bg-gray-900 text-white  h-56 flex justify-start">
        <div class="grid mx-20 my-20">
        <h1 class="font-semibold text-2xl pb-5 tracking-wide uppercase"  style="font-family: 'Hind Siliguri', sans-serif;" >Contact Information</h1>
        Team Encrypted Cops
        </div>
    </footer>
    

</body>


</html>