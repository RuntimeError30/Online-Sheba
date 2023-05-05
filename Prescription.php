<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM hospitaldoctors WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);



$fID = $row["HospitalID"];
$Hosdetails = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE ID = '$fID'");
$HosRow = mysqli_fetch_assoc($Hosdetails);




}
else{
  header("Location: FirstLanding.php");
}





// ServerCodes

use PHPMailer\PHPMailer\PHPMailer ;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer\src\Exception.php';
require 'phpmailer\src\PHPMailer.php';
require 'phpmailer\src\SMTP.php';

$AppID1 = $_GET["ID"];
$AppQuery = mysqli_query($conn, "SELECT * FROM appointments WHERE AppointmentID = '$AppID1'");
$AppFet = mysqli_fetch_assoc($AppQuery);



if(isset($_POST["upload"])){
    $AppID = $_GET["ID"];
    $DocID = $_GET["DoctorID"];
    $HosID = $_GET["HosID"];
    $src = $_FILES["PatientPrescription"]["tmp_name"];
    $PatientPrescription =  $_FILES["PatientPrescription"]["name"];

    $target = 'folder2/' . $PatientPrescription;
    move_uploaded_file($src, $target);



    //Email the prescription
    
    $mail = new PHPMailer(true);

    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'onlinesheba24712@gmail.com';
    $mail->Password = 'gxeocxvtbaqfgeru';

    $mail->SMTPSecure = 'ssl';
    $mail->Port = 465;


    $mail->setFrom('onlinesheba24712@gmail.com');
    $mail->addAddress($AppFet['Email']);
    $mail->isHTML(true);


    $mail->Subject = "Download Prescription - ".$HosRow["Name"];
    $mail->Body = "জনাব/জনাবা, <br>আপনার প্রেস্কিপশনটি ডাউনলোড করে নিতে অ্যাটাচড ফাইলটি চেক করুন<br>

    ধন্যবাদ
    Team OnlineSheba. <br>
    ";
    $mail->addAttachment('folder2/'.$PatientPrescription);
    $mail->send();





    // Prescription Upload to Database




    $query = "INSERT INTO prescriptions (AppointmentID, HospitalID, DoctorID, Prescription) VALUES ('$AppID','$DocID','$HosID','$PatientPrescription')";
    mysqli_query($conn,$query);

    $UpdateSatQuery = "UPDATE appointments SET Status = 'Checked' WHERE AppointmentID = '$AppID' AND HospitalID ='$HosID' AND DoctorID = '$DocID'";
    mysqli_query($conn,$UpdateSatQuery);

    echo "Successfully Uploaded";

    $delquery = "DELETE FROM appointments WHERE ";
    


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
            <div class="w-3/12 bg-[conic-gradient(at_top_right,_var(--tw-gradient-stops))] from-gray-900 via-gray-100 to-gray-900 rounded p-3 shadow-lg h-screen">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="w-44 h-full rounded-3xl" src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="<?php echo $row["Name"]; ?>">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"><?php echo $row["Name"]; ?></h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">DOCTOR</span>
                        </span>
                    </div>
                    
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="HospitalDoctorDashboard.php" class="flex items-center space-x-3 text-gray-600 p-2 rounded-md font-medium hover:bg-gray-200 bg-gray-200 focus:shadow-outline">
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
            
            <div class="w-auto ml-10 ">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl bg-[conic-gradient(at_left,_var(--tw-gradient-stops))] from-gray-100 to-gray-300">
                        <p class="text-slate-800">DOCTORS PROFILE</p>
                        <h1 class="text-4xl text-slate-600 font-semibold uppercase"><?php echo $HosRow["Name"]; ?></h1>
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
                        <p class="py-7"><?php echo $row["About"]; ?> </p>




                    </div>
                    <div class="m-10">
                        <img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' alt="" class="w-44 h-56 rounded-3xl relative top-10">
                    </div>                      
                    </div>

                    <!-- Upload Section -->
                    <div>
                        <div class="flex flex-col items-center justify-center w-full h-auto my-20 bg-white sm:w-3/4 sm:rounded-lg sm:shadow-xl">
                            <div class="mt-10 mb-10 text-center">
                                <h2 class="text-2xl font-semibold mb-2">UPLOAD PRESCRIPTION HERE</h2>
                                <p class="text-xs text-gray-500">File should be of format .pdf</p>
                            </div>
                            <form action="" method="POST" class="relative w-4/5 h-32 max-w-xs mb-10 bg-white bg-gray-100 rounded-lg shadow-inner" enctype="multipart/form-data">
                                <input type="file" id="file-upload" class="hidden" name="PatientPrescription" accept=".pdf">
                                <label for="file-upload" class="z-20 flex flex-col-reverse items-center justify-center w-full h-full cursor-pointer">
                                    <p class="z-10 text-xs font-light text-center text-gray-500">Drag & Drop your files here</p>
                                    <svg class="z-10 w-8 h-8 text-indigo-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M2 6a2 2 0 012-2h5l2 2h5a2 2 0 012 2v6a2 2 0 01-2 2H4a2 2 0 01-2-2V6z"></path>
                                     </svg>
                                </label>
                                <input type="submit" name="upload" value="Upload"  class="p-10 relative -right-10 bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white  py-1 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                            </form>
        </div>
                    </div>

                   
                </div>

                

                <div>

                
               
                
            </div>
        </div>
    </main>
</body>

</html>