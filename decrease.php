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
if(isset($_POST["AddLotItems"])){

    $Quantity = $_POST["Quantity"];



    $prodIDFetch = $_GET["ID"];

    $prodRow = mysqli_fetch_assoc(mysqli_query($conn,"SELECT * FROM pharmacylotproducts"));

    $QUAN = $prodRow['Quantity'];
    $sum = $QUAN - $Quantity;
    $prod = "UPDATE pharmacylotproducts SET Quantity = $sum WHERE ID = '$prodIDFetch'";
    mysqli_query($conn,$prod);

    header("Location:pharmacyDashboard.php");
    
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
    
        <div class="flex justify-center">
            
    
              
                <div class="flex justify-center">
                    

                    <div class="text-black mt-16  ml-20 font-semibold shadow-2xl px-10 py-16 w-fit rounded-xl">

                        <h1 class="text-3xl text-slate-500 ">DECREASE PRODUCT MANUALLY</h1><br>

                        <form action="" method="post"  enctype="multipart/form-data">
                          

                            <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Quantity" id="" placeholder="Quantity"><br><br>


                            <input type="submit" name="AddLotItems" value="Add Product Lot" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 mt-6 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700" >

                        </form>


                    </div>

                    
                </div>
               
        </div>
    </main>
    
</body>


</html>