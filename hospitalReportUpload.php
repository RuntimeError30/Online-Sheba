<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: FirstLanding.php");
}


$HosID = $row["ID"];

if(isset($_POST["uploadRep"])){


    $src = $_FILES["PatientReport"]["tmp_name"];
    $PatientReport=  $_FILES["PatientReport"]["name"];


    $PatientName = $_POST["PatientName"];
    $PatientMobile = $_POST["PatientMobile"];
    $PatientAddress = $_POST["PatientAddress"];
    $PatientEmail = $_POST["PatientEmail"];
    $PatientID = $_POST["PatientID"];




    $target = 'folder2/' . $PatientReport;
    move_uploaded_file($src, $target);

    $Q1 = "INSERT INTO hospitalpatient(Name, Mobile, Address, Email, PatientID, HosID) VALUES ('$PatientName','$PatientMobile','$PatientAddress','$PatientEmail','$PatientID','$HosID')";
    mysqli_query($conn,$Q1); 


    $Q2 = "INSERT INTO hospitalpatientreport (PatientID,HosID, Email, ReportPDF) VALUES ('$PatientID','$HosID','$PatientEmail','$PatientReport')";
    mysqli_query($conn,$Q2); 
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



<title>Dashboard | <?php echo $row["Name"]; ?></title>
</head>
<body class="bg-gray-100 ">
    <main>
    
        <div class="flex flex-wrap">
            <div class="w-3/12 bg-gray-300 rounded p-3 shadow-lg h-screen">
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
                            <span>Dashboard</span>
                        </a>
                    </li>
                    <li>
                        <a href="hospitalNotification.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                       
                        <a href="hospitalDoctorsList.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.982 18.725A7.488 7.488 0 0012 15.75a7.488 7.488 0 00-5.982 2.975m11.963 0a9 9 0 10-11.963 0m11.963 0A8.966 8.966 0 0112 21a8.966 8.966 0 01-5.982-2.275M15 9.75a3 3 0 11-6 0 3 3 0 016 0z"></path>
                                </svg>
                            </span>
                            <span>Doctors</span>
                        </a>
                    </li>
                    <li>
                       
                        <a href="hospitalBloodBank.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d=" M15 11.25l1.5 1.5.75-.75V8.758l2.276-.61a3 3 0 10-3.675-3.675l-.61 2.277H12l-.75.75 1.5 1.5M15 11.25l-8.47 8.47c-.34.34-.8.53-1.28.53s-.94.19-1.28.53l-.97.97-.75-.75.97-.97c.34-.34.53-.8.53-1.28s.19-.94.53-1.28L12.75 9M15 11.25L12.75 9"></path>
                                </svg>
                            </span>
                            <span>Blood Bank</span>
                        </a>
                    </li>


                    <li>
                        <a href="hospitalReportUpload.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span>Report Upload</span>
                        </a>
                    </li>
                
                    <li>
                        <a href="HospitalSettings.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>

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
            
            <div class=" ml-10 p-5 flex-warp">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl ">
                        <p class="text-slate-700">UPLOAD REPORT</p>
                        <h1 class="text-4xl text-slate-500 font-semibold uppercase"><?php echo $row["Name"]; ?></h1>
                    </div>
                    <br>
                    <p class="text-slate-700">Gulshan, Dhaka 1212, Bangladesh</p>
                </div>

                <div class="text-black mt-16 font-semibold shadow-xl px-4 py-4 w-fit rounded-xl">
                    <h1 class="text-2xl text-slate-500 ">UPLOAD REPORT</h1>

                    <form action="" method="POST" class="mt-10 font-poppins tracking-wide" enctype="multipart/form-data">

                        <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="PatientName" id="" placeholder="Patient Name"><br><br>

                        <input type="text" name="PatientMobile" id="" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="Patient Mobile Number"><br><br>

                        <input type="text" name="PatientAddress" id="" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="Patient Address"><br><br>

                        <input type="text" name="PatientEmail" id="" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="PatientEmail(If Any)"><br><br>

                        <label class="text-slate-500">Autogenerated Paitent ID (Please Note in the Moneyrecit)</label><br>
                        <input type="text" name="PatientID" id="" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" value="<?php echo uniqid("Report"); ?>" placeholder="" readonly><br><br>
                        
                        <label class="text-slate-500">Upload Report</label><br>
                        <input type="file" name="PatientReport" id="" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" accept=".pdf" ><br><br>



                        <input type="submit" id="submit" name="uploadRep" value="Update Report" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700"><br><br>
                        <a href="HospitalBloodbankList.php"><a href="hospitalReportShow.php">Go to All Reports</a>
                    </form>


                    


                    <br><br>
                    <p>Successfully Updated Blood Bank Stock</p>
                </div>

                <div>

                
                </div>
                
            </div>
        </div>
    </main>
</body>

</html>