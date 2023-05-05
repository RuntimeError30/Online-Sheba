<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM pharmacyadmin WHERE Email = '$Email'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}

date_default_timezone_set("Asia/Dhaka");
$Date = date("y-m-d");

$sumQuery = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(Price) AS 'Price' from confirmorders where PaymentStatus= 'PAID'"));
$todaysell = mysqli_fetch_assoc(mysqli_query($conn, "SELECT SUM(Price) AS 'Price' from confirmorders where PaymentStatus= 'PAID' AND OrderPlaceDate = '$Date'"));


$countNewOrder = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(Status) AS Status FROM confirmorders WHERE Status ='Not Confirmed' AND OrderPlaceDate = '$Date'"));
$AllOrdersCount = mysqli_fetch_assoc(mysqli_query($conn, "SELECT COUNT(Status) AS Status FROM confirmorders "));


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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">

<title>Home</title>
</head>
<!-- <a href="#"><img src='' alt="" class="scale-50 absolute -top-16 -left-10"></a> -->



<body>
    <main>
    
        <div class="flex flex-wrap ">
            <div class="w-1/5 bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 rounded p-3 shadow-lg ">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="w-72 h-full rounded-3xl" src='folder2/nav.png' alt="OnlineSheba" style=" filter: sepia(100%);
                    -webkit-filter: sepia(100%);">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">ONLINE SHEBA</h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">Pharmacy</span>
                        </span>
                    </div>
                    
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="pharmacyDashboard.php" class="flex items-center space-x-3 text-gray-600 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="pharmacyOrders.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Orders</span>
                        </a>
                    </li>
                    
                   
                
                    <li>
                        <a href="settings.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
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
            
            <div class="w-auto ml-10  ">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-gray-100 to-gray-300">
                        <p class="text-slate-800">PHARMACY</p>
                        <h1 class="text-4xl text-slate-600 font-semibold uppercase">ONLINE SHEBA</h1>
                    </div>
                    <br>
                    <p class="text-slate-700"></p>
                </div>
    
                <div class="flex flex-warp justify-start">
                    <div class="text-black mt-16 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">TOTAL SELL</h1>
                        <h1 class="text-5xl text-slate-500 "><?php echo $sumQuery["Price"]; ?> TAKA</h1>

                        <br>
                        <h1 class="text-2xl text-slate-500 ">TODAY'S SELL</h1>
                        <h1 class="text-3xl text-slate-500 "><?php echo $todaysell["Price"]; ?> TAKA</h1>
                    </div>

                    <div class="text-black mt-16  ml-20 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">NUMBER OF NEW ORDERS</h1>
                        <h1 class="text-5xl text-slate-500 "><?php echo $countNewOrder["Status"];?></h1>

                        <br><br>
                        <h1 class="text-2xl text-slate-500 ">ALL TIME ORDERS</h1>
                        <h1 class="text-3xl text-slate-500 "><?php echo $AllOrdersCount["Status"]; ?> </h1>
                    </div>

                    <!-- Showing All Lots -->
                    <div class="text-black mt-16  ml-20 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl overflow-y-scroll">
                        <h1 class="text-2xl text-slate-500 ">LOT ID(Productwise)</h1>
                        <table class="border-2">
                            <thead>
                            <tr>
                                <th class="border-2 px-3">Product Lot</th>
                                <th class="border-2 px-3">Lot ID</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php
                   $query1 = "SELECT * FROM pharmacylot";
                   $result = $conn->query($query1);

                   
                    while($Lrow = $result->fetch_assoc()){
                        ?>
                    <tr>
                            <td class="border-2 px-3"><?php echo $Lrow['Name']?> </td>
                            <td class="border-2 px-3"><?php echo $Lrow['ID']?> </td>                 
                    </tr>
                    <?php
                    }
                    ?>
                            </tbody>

                        </table>
                        
                    </div>
                </div>
                <div class="shadow-2xl px-10 py-5 w-full rounded-xl mt-10">
                <h1 class="text-2xl text-slate-500 font-bold uppercase">Order Details</h1>
                <!-- <table>
                    <thead class="border-2 px-2 border-black">
                    <th class="border-2 px-2">Order ID</tr>
                        <th class="border-2 px-2">Customer Name</tr>
                        <th class="border-2 px-2">Customer Address</tr>
                        <th class="border-2 px-2">Customer Number</tr>
                        <th class="border-2 px-2">Customer </tr>
                        <th class="border-2 px-2">Ordered Product</tr>
                        <th class="border-2 px-2">Product Quantity</tr>
                        <th class="border-2 px-2">Price</tr>
                        <th class="border-2 px-2">Payment Status</tr>
                        
                    </thead>
                </table> -->


                    <table class="">
                        <thead class="">
                            <th class="border-2 px-3">Name</th>
                            <th class="border-2 px-3">Address</th>
                            <th class="border-2 px-3">Number</th>
                            <th class="border-2 px-3">Email</th>
                            <th class="border-2 px-3">Product</th>
                            <th class="border-2 px-3">Quantity</th>
                            <th class="border-2 px-3">Price</th>
                            <th class="border-2 px-3">Payment</th>
                            <th class="border-2 px-3">Status</th>
                            <th class="border-2 px-3">Date</th>
                            <th class="border-2 px-3">Action</th>
                        </thead>

                        <tbody>
                        <?php
                        $query1 = "SELECT * FROM confirmorders WHERE BuyStatus = 'Bought' ORDER BY OrderPlaceDate, Time ASC";
                        $result = $conn->query($query1);

                   
                            while($Trow = $result->fetch_array()){
                                ?>
                            <tr>

  
                                    <td class="border-2 px-3"><?php echo $Trow["Name"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Address"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Mobile"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Email"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["OrderProd"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Quantity"]?></td>
                                    <td class="border-2 px-3"><?php echo $Trow["Price"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["PaymentStatus"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Status"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["OrderPlaceDate"]?> </td>
                                    <td class="border-2 px-3">
                                        <a href="confirmOrder.php?OrderID=<?php echo $Trow['OrderID']?>&&Email=<?php echo $Trow['Email']?>" class="mt-16 relative top-3 shadow-xl bg-yellow-400 px-1 py-2">Confirm Order</a><br><br>

                                        <a href="outofStock.php?OrderID=<?php echo $Trow['OrderID']?>&&Email=<?php echo $Trow['Email']?>"  class="mt-16 relative top-3 shadow-xl bg-yellow-400 px-1 py-2">Out of Stock</a><br><br>

                                        <a href="delivered.php?OrderID=<?php echo $Trow['OrderID']?>&&Email=<?php echo $Trow['Email']?>"  class="mt-16 relative top-3 shadow-xl bg-yellow-400 px-1 py-2">Delivered</a><br><br>

                                        
                                        <a href="paid.php?OrderID=<?php echo $Trow['OrderID']?>&&Email=<?php echo $Trow['Email']?>"  class="mt-16 relative top-3 shadow-xl bg-yellow-400 px-1 py-2">Paid</a><br><br>
                                
                                
                                </td>
                                                     
                            </tr>
                    <?php
                    }
                    ?>
                        </tbody>
                        </tbody>

                    </table>
                </div>
        </div>
    </main>
    
</body>


</html>