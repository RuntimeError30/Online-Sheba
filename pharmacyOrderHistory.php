<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);


  $cusID = $row["UniqueID"];
  $fetchFinal = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM pharmacyorder  WHERE ID = '$cusID'"));

  $SumQuery = mysqli_fetch_assoc(mysqli_query($conn,"SELECT SUM(Price) AS 'Price' from pharmacyorder where ID = '$cusID'"));

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

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">



<link rel="stylesheet" href="style.css">


<title>E-Pharmacy | Online Sheba</title>
</head>
<body class=" " style="font-family: 'Hind Siliguri', sans-serif;
font-family: 'Raleway', sans-serif;" >
    <!-- <img src='' class=" absolute w-screen h-screen opacity-50" alt=""> -->

    <nav class="flex justify-between shadow-xl bg-yellow-400 h-48" style="font-family: 'Hind Siliguri', sans-serif; background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%;">
        <a href="Landing.php"><img src='folder2/nav.png' alt="" class="scale-50 relative -top-10"></a>
        <ul class="flex relative top-28 mx-20">
        <li class="mx-5"><a href="pharmacyClient.php">ফার্মেসী হোম</a></li>
            <li class="mx-5"><a href="pharmacyPaymentPage.php">কার্ট</a></li>
            <li class="mx-5"><a href="pharmacyOrderHistory.php">অর্ডার হিস্টোরি</a></li>
            <li class="mx-5"><a href="index.php">আমার একাউন্ট</a></li>
        </ul>
    </nav>
   
    <main class="grid justify-center " style="background-image: url('folder2/doodlePharma.png'); background-repeat: no-repeat; background-size:100%; ">
        <div class="p-10 mt-20 mx-20 bg-white shadow-xl rounded-2xl grid justify-center" style="font-family: 'Hind Siliguri', sans-serif;">
        <h1 class="font-semibold text-4xl pb-5" >অর্ডার হিস্টোরি</h1>
        <table>
        <thead>

                <th class="border-2 px-3 py-3">প্রোডাক্ট</th>
                <th class="border-2 px-3 py-3">পরিমাণ</th>
                <th class="border-2 px-3 py-3">মোট মূল্য</th>
                <th class="border-2 px-3 py-3">তারিখ</th>

            </thead>
        
            <tbody>
            <?php
                date_default_timezone_set("Asia/Dhaka");
                $Time = date("h:i:s");
                $Date = date("y-m-d");


                        $CustomID = $row["Email"];
                        $query1 = "SELECT * FROM confirmorders WHERE Email = '$CustomID'";
                        $result = $conn->query($query1);

        
                        
                            while($Cartrow = $result->fetch_assoc()){
                                // $millis = $Cartrow['Time'];

                                // $start = strtotime($millis);
                                // $end = strtotime($Time);
                                // $mins = intval(($end - $start)/60);
                                if(!empty($Cartrow)){

                                ?>
                            <tr>

                                    <td class="border-2 px-10 py-8 w-72"><?php echo $Cartrow["OrderProd"]?> </td>
                                    <td class="border-2 px-10 py-8 w-72"><?php echo $Cartrow["Quantity"]?> </td>
                                    <td class="border-2 px-10 py-8 w-72"><?php echo $Cartrow["Price"]?> </td>
                                    <td class="border-2 px-10 py-8 w-72"><?php echo $Cartrow["OrderPlaceDate"]?> </td>
                                    
                                                     
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
                $CustomID1 = $row["Email"];
                $query23 = "SELECT * FROM confirmorders WHERE Email = '$CustomID1'";
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
        
       


    </main><br>
    

    <footer class="bg-gray-900 text-white  h-56 flex justify-start">
        <div class="grid mx-20 my-20">
        <h1 class="font-semibold text-2xl pb-5 tracking-wide uppercase"  style="font-family: 'Hind Siliguri', sans-serif;" >Contact Information</h1>
        Team Encrypted Cops
        </div>
    </footer>
    

</body>


</html>