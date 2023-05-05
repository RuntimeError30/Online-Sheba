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

//Adding Lot
if(isset($_POST["AddLot"])){
    $LotName = $_POST["LotName"];
    $LotID = $_POST["LotID"];
    $LotDate = $_POST["LotDate"];


    $lotAddQuery = "INSERT INTO pharmacylot(Name, ID, Date) VALUES ('$LotName','$LotID','$LotDate')";
    mysqli_query($conn,$lotAddQuery);

}

// Item Adding
if(isset($_POST["AddLotItems"])){
    $ProdName = $_POST["ProdName"];
    $ProdID = $_POST["ProdID"];
    $ProdLotID = $_POST["ProdLotID"];
    $Quantity = $_POST["Quantity"];
    $Price = $_POST["Price"];


    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName =  $_FILES["fileImg"]["name"];


    move_uploaded_file($src, 'folder2/'.$imageName);


    // $prodRow = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM pharmacylotproducts"));
    $prod = "INSERT INTO pharmacylotproducts(Name,ID,LotID,Quantity,Price,productImage) VALUES ('$ProdName','$ProdID','$ProdLotID','$Quantity','$Price','$imageName')";
    mysqli_query($conn,$prod);

    // if(($ProdID != $prodRow['ID']) || empty($prodRow['ID'])){

        
    // }
    // else{
    //     $QUAN = $prodRow['Quantity'];
    //     $sum = $Quantity + $QUAN;
    //     $prod = "UPDATE pharmacylotproducts SET Quantity = $sum WHERE ID = '$ProdID' AND LotID = '$ProdLotID'";
    //     mysqli_query($conn,$prod);

    // }


    
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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel="stylesheet" href="style.css">

<title>Home</title>
</head>
<!-- <a href="#"><img src='' alt="" class="scale-50 absolute -top-16 -left-10"></a> -->



<body>
    <main>
    
        <div class="flex flex-wrap ">
            <div class="w-3/12 bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 rounded p-3 shadow-lg ">
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
                        <h1 class="text-5xl text-slate-500 ">800000 TAKA</h1>
                    </div>

                    <div class="text-black mt-16  ml-20 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">NUMBER OF NEW ORDERS</h1>
                        <h1 class="text-5xl text-slate-500 ">20 NEW</h1>

                        <a href="#" class="relative top-5 hover:text-red-500 transition-all">SEE THE NEW ORDERS</a>
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
                <div class="flex  justify-start">
                    <div class="text-black mt-16 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">ADD NEW PRODUCT LOT</h1><br>

                        <!-- NEW PRODUCT LOT -->
                        <form action="" method="post">
                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="LotName" id="" placeholder="Product Lot Name"><br><br>

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="LotID" id="" placeholder="Product Lot ID"><br><br>

                            <input type="Date" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="LotDate" id="" placeholder=""><br><br>

                            

                            <input type="submit" name="AddLot" value="Add Product Lot" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 mt-6 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                        </form>
                    </div>

                    <div class="text-black mt-16  ml-20 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">ADD ITEMS TO LOT</h1><br>

                        <form action="" method="post"  enctype="multipart/form-data">
                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ProdName" id="" placeholder="Product Name"><br><br>

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ProdID" value="<?php echo uniqid("PROD")?>"  id="" placeholder="Product ID (AutoGenerated)"><br><br>

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ProdLotID" id="" placeholder="Category (Enter The LOT ID)"><br><br>

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Quantity" id="" placeholder="Quantity"><br><br>

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Price" id="" placeholder="Price"><br><br>

                            <input type="file" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="fileImg" id="" placeholder="Price"><br>

                            <input type="submit" name="AddLotItems" value="Add Product Lot" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 mt-6 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700" >

                        </form>


                    </div>

                    
                </div>
                <div class="mt-5 mb-10">
                    <h1 class="text-3xl text-slate-500 ">Control All Items From Here</h1><br>
                    <table>
                        <thead>
                            <th class="border-2 px-3">PRODUCT PICTURE</th>
                            <th class="border-2 px-3">PRODUCT NAME</th>
                            <th class="border-2 px-3">PRODUCT ID</th>
                            <th class="border-2 px-3">LOT ID</th>
                            <th class="border-2 px-3">STOCK</th>
                            <th class="border-2 px-3">PRICE</th>
                            <th class="border-2 px-3">ACTION</th>
                        </thead>
                        <tbody>
                        <?php
                        $query1 = "SELECT * FROM pharmacylotproducts";
                        $result = $conn->query($query1);

                   
                            while($Trow = $result->fetch_assoc()){
                                ?>
                            <tr>
                                    <td class="border-2 px-3 "><img class="w-44 h-44" src='folder2/<?php echo $Trow["productImage"]?>'alt=""></td>
                                    <td class="border-2 px-3"><?php echo $Trow["Name"]?></td>
                                    <td class="border-2 px-3"><?php echo $Trow["ID"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["LotID"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Quantity"]?> </td>
                                    <td class="border-2 px-3"><?php echo $Trow["Price"]?> </td>
                                    <td class="border-2 px-3">
                                        <a href="increase.php?ID=<?php echo $Trow['ID']?>" class="mt-10 shadow-xl bg-yellow-400 px-1 py-2">Increase Quantity</a><br><br>

                                        <a href="decrease.php?ID=<?php echo $Trow['ID']?>"  class="mt-10 shadow-xl bg-yellow-400 px-1 py-2">Decrease Quantity</a><br><br>

                                        

                                        <a href="removeProd.php?ID=<?php echo $Trow['ID']?>" class="mt-10 shadow-xl bg-yellow-400 px-1 py-2">Remove Product</a><br>
                                
                                        
                                
                                </td>
                                                     
                            </tr>
                    <?php
                    }
                    ?>
                        </tbody>
                    </table>
                </div>
        </div>
    </main>
    
</body>


</html>