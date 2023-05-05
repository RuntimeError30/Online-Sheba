<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM hospitaldoctors WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
  $stat = $_SESSION["login"];
  

  $active = mysqli_query($conn,"UPDATE hospitaldoctors SET ActiveStatus = '$stat' WHERE Email = '$Email'");




$fID = $row["HospitalID"];
$Hosdetails = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE ID = '$fID'");
$HosRow = mysqli_fetch_assoc($Hosdetails);

}
else{
  header("Location: FirstLanding.php");
}

if(isset($_POST["update"])){
    
    $about = $_POST["AboutYou"];
    $docid = $row["ID"];

    $updateQ = "UPDATE hospitaldoctors SET About = '$about',ActiveStatus = '$stat' WHERE HospitalID = '$fID' AND ID = '$docid'";
    mysqli_query($conn,$updateQ);
    header("Location: HospitalDoctordashboard.php");

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



<title>Doctor | <?php echo $row["Name"]; ?></title>
</head>
<body class="bg-gray-100 ">
    <main>
    
        <div class="flex flex-wrap">
            <div class="w-3/12 bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 rounded p-3 shadow-lg ">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="w-44 h-full rounded-3xl" src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="<?php echo $row["Name"]; ?>">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"><?php echo $row["Name"]; ?></h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">Hospital</span>
                        </span>
                    </div>
                    
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="hospitalDashboard.php" class="flex items-center space-x-3 text-gray-600 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="HospitalDoctorPatient.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Patient List</span>
                        </a>
                    </li>
                    
                   
                
                    <li>
                        <a href="HospitalDoctorSettings.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>
                    
                    <li>
                        <a href="docLogout.php?Email=<?php echo $row["Email"]?>" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
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
            
            <div class="w-auto ml-10 ">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-gray-100 to-gray-300">
                        <p class="text-slate-800">DOCTORS PROFILE</p>
                        <h1 class="text-4xl text-slate-600 font-semibold uppercase"><?php echo $row["Name"]; ?></h1>
                    </div>
                    <br>
                    <p class="text-slate-700"><?php echo $HosRow["Location"]; ?></p>
                </div>

                <div class="flex">
                    <div class="text-black mt-16 font-semibold shadow-xl px-4 py-4 w-fit rounded-xl">
                        <h1 class="text-xl text-slate-500 uppercase">DOCTOR PROFILE - <?php echo $HosRow["Name"]; ?></h1>
                        <h1 class="text-3xl text-slate-500 uppercase">DR. <?php echo $row["Name"]; ?></h1>
                        <h1 class="text-md text-slate-500 ">Medicine Speacialist</h1>
                        <br><br>
                        <h1 class="text-md text-slate-500 ">M.B.B.S </h1>




                    </div>
                    <div class="m-10">
                        <img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="" class="w-44 h-56 rounded-3xl relative top-10">
                    </div>                      
                    </div>

                    <div class="mt-12 px-4 py-4  rounded-2xl shadow-xl w-fit h-fit">
                        <h1 class="text-3xl text-slate-500 font-semibold">ABOUT DR. MOHAMMAD DARAIN KHAN</h1>
                  
                        <p class="py-7"><?php echo $row["About"]; ?> </p>
                        <form action="" method="POST">
                            <textarea name="AboutYou" cols="70" rows="5" class="bg-transparent border-2 border-black rounded-xl" placeholder="Write Something About you" style="resize: none;"></textarea><br><br>

                            <input type="submit" id="submit" name="update" value="Update About Status" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#480048] to-[#c04848] transition-all ease-out duration-700"><br>
                        </form>
                    </div>
                    <div class="py-16">

                    </div>
                </div>

                

                <div>

                
               
                
            </div>
        </div>
    </main>
</body>

</html>