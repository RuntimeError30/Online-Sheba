<?php

require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $Prow = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


$id = $_GET["ID"];
$query1 = "SELECT * FROM hospitaldetails WHERE ID = '$id'";
$row = mysqli_fetch_assoc(mysqli_query($conn,$query1));





$emptyQ = "SELECT * FROM ratings";
$emptyCheck = (mysqli_fetch_assoc(mysqli_query($conn,$emptyQ)));


    if(isset($_POST['rateBtn'])){



        $Rate = $_POST["rate"];
        $RateHosp = $_GET["ID"];
        $RaterName = $Prow["Name"];
        $RaterID = $Prow["UniqueID"];
    
    
        //Check if there is ratings



        if(($emptyCheck["ID"] == $Prow["UniqueID"]) &&  ($emptyCheck["HosID"] == $_GET["ID"])){
            $sqlRate1 = "UPDATE ratings SET Rate = '$Rate' WHERE ID = '$RaterID' AND HosID = '$RateHosp' ";
            mysqli_query($conn, $sqlRate1);
        }
        else{
            $sqlRate1 = "INSERT INTO ratings(Rate, HosID, Name, ID) VALUES ('$Rate','$RateHosp','$RaterName','$RaterID')";
            mysqli_query($conn, $sqlRate1);

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
<link href="https://fonts.googleapis.com/css2?family=Hind+Siliguri:wght@500;700&display=swap" rel="stylesheet">

<!-- CSS -->

<style>
    #rate {
        float: left;

        padding: 0 10px;
    }
    #rate:not(:checked) > input {
        position:absolute;
        top:-9999px;
    }
    #rate:not(:checked) > label {
        float:right;
        width:1em;
        overflow:hidden;
        white-space:nowrap;
        cursor:pointer;
        font-size:30px;
        color:#ccc;
    }
    #rate:not(:checked) > label:before {
        content: '★ ';
    }
    #rate > input:checked ~ label {
        color: #ffc700;    
    }
    #rate:not(:checked) > label:hover,
    #rate:not(:checked) > label:hover ~ label {
        color: #deb217;  
    }
    #rate > input:checked + label:hover,
    #rate > input:checked + label:hover ~ label,
    #rate > input:checked ~ label:hover,
    #rate > input:checked ~ label:hover ~ label,
    #rate > label:hover ~ input:checked ~ label {
        color: #c59b08;
    }</style>


<!-- CSS -->

<title>Profile- <?php echo $row["Name"]; ?></title>
</head>
<body class="bg-gray-100" style="font-family: 'CharukolaUltraLight', sans-serif;">
    <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-evenly py-4 px-9 border-spacing-0 border-b-0 h-56">
        <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
        <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
        <li><a href="Landing.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
        <li><a href="hospitalListG.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
        <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
        <li><a href="FirstSeeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
        
        </ul>
        <a href="Landing.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $Prow["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
    </nav>
    <main class="">
        <div class="grid justify-center ">
            <div class="shadow-2xl bg-gray-100 w-fit h-fit">


                <div id="sidebar" class="grid  justify-start absolute -left-3 top-72 bg-gradient-to-b from-[#2c2c2c] to-[#181818] w-fit h-fit p-5 rounded-r-xl scale-90">
                    <ul class="space-y-2 text-sm">
                        <a href="DocAppointment.php?ID=<?php echo $row['ID']?>"  class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide hover:text-white transition-all">
                           <span class="flex my-6 " id="DoctorsList">
                            
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 hover:text-white transition-all">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9 12h3.75M9 15h3.75M9 18h3.75m3 .75H18a2.25 2.25 0 002.25-2.25V6.108c0-1.135-.845-2.098-1.976-2.192a48.424 48.424 0 00-1.123-.08m-5.801 0c-.065.21-.1.433-.1.664 0 .414.336.75.75.75h4.5a.75.75 0 00.75-.75 2.25 2.25 0 00-.1-.664m-5.8 0A2.251 2.251 0 0113.5 2.25H15c1.012 0 1.867.668 2.15 1.586m-5.8 0c-.376.023-.75.05-1.124.08C9.095 4.01 8.25 4.973 8.25 6.108V8.25m0 0H4.875c-.621 0-1.125.504-1.125 1.125v11.25c0 .621.504 1.125 1.125 1.125h9.75c.621 0 1.125-.504 1.125-1.125V9.375c0-.621-.504-1.125-1.125-1.125H8.25zM6.75 12h.008v.008H6.75V12zm0 3h.008v.008H6.75V15zm0 3h.008v.008H6.75V18z" />
                              </svg>
                              <span class="px-2 text-lg">ডাক্তার এপয়েন্টমেন্ট</span>
                              
                           </span>
                           
                        </a>
                    </ul>
    
                    <ul class="space-y-2 text-sm">
                    <a href="bloodBankBookGen.php?ID=<?php echo $row['ID']?>" class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">
                           <span class="flex my-6" id="BloodBank">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-gray-500 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 11.25l1.5 1.5.75-.75V8.758l2.276-.61a3 3 0 10-3.675-3.675l-.61 2.277H12l-.75.75 1.5 1.5M15 11.25l-8.47 8.47c-.34.34-.8.53-1.28.53s-.94.19-1.28.53l-.97.97-.75-.75.97-.97c.34-.34.53-.8.53-1.28s.19-.94.53-1.28L12.75 9M15 11.25L12.75 9" />
                              </svg><span class="px-2 text-lg">ব্লাড ব্যাংক</span>
                              
                           </span>
                           
                        </a>
                    </ul>
                    <ul class="space-y-2 text-sm">
                    <a href="DownloadReport.php?ID=<?php echo $row['ID']?>" class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide">
                           <span class="flex my-6" id="star">
    
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"  class="w-6 h-6 text-gray-500 ">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M11.48 3.499a.562.562 0 011.04 0l2.125 5.111a.563.563 0 00.475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 00-.182.557l1.285 5.385a.562.562 0 01-.84.61l-4.725-2.885a.563.563 0 00-.586 0L6.982 20.54a.562.562 0 01-.84-.61l1.285-5.386a.562.562 0 00-.182-.557l-4.204-3.602a.563.563 0 01.321-.988l5.518-.442a.563.563 0 00.475-.345L11.48 3.5z" />
                              </svg><span class="px-2 text-lg">রিপোর্ট ডাউনলোড</span>
                              
                              
                           </span>
                        </a>
                    </ul>



                    
            
                    
                </div>
                <div id="coverPhoto" class="relative mt-32  px-10 ">
                    <img src='' alt="" srcset="">
                    <div class="flex">
                        <img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="" srcset="" class="h-56 w-56 relative -translate-y-28 scale-90 shadow-2xl rounded-full">
    
                        <div class="pl-5 mt-5">
                            <h1 class="text-5xl font-bold "><?php echo $row["Name"];?></h1>
                            <p><?php echo $row["Location"]; ?></p>
                        
                        </div>
                        
                    </div>


                    <div class=" ">
                        <div class="">
                            <h1 class="text-3xl  font-bold ">রেটিং এবং কমেন্টসমূহ</h1>
                            <form action="" method="post" >
                                <div id="rate" class="">
                                    <br>
                                    <h1> ৫ এর মধ্যে রেটিং দিন</h1>
            
                                    
                                    <h1 class="text-3xl font-semibold">৪.৫/৫</h1>
                                    <input type="radio" id="star5" name="rate" value="5" />
                                    <label for="star5" title="5 star">5 stars</label>

                                    <input type="radio" id="star4" name="rate" value="4" />
                                    <label for="star4" title="4 star">4 stars</label>

                                    <input type="radio" id="star3" name="rate" value="3" />
                                    <label for="star3" title="3 star">3 stars</label>

                                    <input type="radio" id="star2" name="rate" value="2" />
                                    <label for="star2" title="2 star">2 stars</label>

                                    <input type="radio" id="star1" name="rate" value="1" />
                                    <label for="star1" title="1 star">1 star</label>
            
                                    
                                </div>

                                  <input type="submit" name="rateBtn"  class="relative right-2.5 top-3 py-2 px-1 w-40 -translate-x-40 translate-y-32  text-white bg-gradient-to-l from-[#c04848] to-[#480048] rounded-md hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                            </form>        
                        </div>
                    </div>
                </div>
            </div> 
            <div  class="relative grid top-20 bg-gray-100 shadow-2xl  w-full h-fit p-3">

            </div>



            </div>
        



        </div>
    </main>
    
</body>

</html>



