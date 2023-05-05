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

if(isset($_POST["APButton"])){

    $Name = $_POST["Name"];
    $Mobile = $_POST["Mobile"];
    $Email = $_POST["Email"];
    $Problems = $_POST["Problems"];
    $Age = $_POST["Age"];
    $Gender = $_POST["Gender"];
    $AppointmentID = $_POST["AppointmentID"];
    

    date_default_timezone_set('Asia/Dhaka');
    $time = date('h:i:s a');
    $Date = $_POST["Date"];

    $HosID = $_GET["HospitalID"];
    $DocID = $_GET["ID"];
    $AppointmentID = $_POST["AppointmentID"];


    $AppQuery = "INSERT INTO appointments(Name, Age, Gender, Email, Mobile, Problems, HospitalID, DoctorID, AppointmentID, Date, Time) VALUES ('$Name','$Age','$Gender','$Email','$Mobile','$Problems','$HosID','$DocID','$AppointmentID','$Date','$time')";
    mysqli_query($conn,$AppQuery);
    header("Location: AfterAppointment.php");
}



?>


<!DOCTYPE html>
<html lang="en">

    <!-- Do not touch this part -->    

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

    <title>SignUp-blood donner | E-Hospital</title>
</head>


<body class="bg-gradient-to-r from-[#e7e8ea] via-[#ffffff] to-[#e7e8ea]" style="font-family: 'CharukolaUltraLight', sans-serif;"  >
    
    

    <main class="" style="background-image: url('folder2/bgPng1.png'); height: 1000px">
   
        <div class="grid justify-center mt-44">
            <h1 style="font-family: 'Hind Siliguri', sans-serif;" class="text-4xl font-bold">নিচের ফর্মটি পূরন করুন</h1>
            <p class="align-middle">[ফর্মটি পূরণ করে অ্যাপয়েন্টমেন্ট নিন</p>
        </div>

        <div class="grid justify-center mt-10">
            <form action="" method="post" class="translate-x-44">
                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" placeholder="আপনার নাম"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="আপনার ইমেইল"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" placeholder="আপনার মোবাইল"><br><br>

                <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Age" id="" placeholder="বয়স"><br><br>

                      <select name="Gender" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">লিঙ্গ</option>
                        <option value="Male">পুরুষ</option>
                        <option value="Female">মহিলা</option>
                        <option value="Others">অন্যান্য</option>
                    
                      </select><br><br>
                      <label for="">অ্যাপয়েন্টমেন্টটি কবে নিতে চাচ্ছেন?</label><br>
                      <input type="date" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Date" id="" placeholder="আপনার মোবাইল"><br><br>  

                <input type="text" value="<?php echo uniqid("Appointment")?>" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="AppointmentID" id="" hidden>
                


                <textarea name="Problems" id="" cols="30" rows="10" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="সমস্যার সংক্ষিপ্ত বর্ণনা দিন" ></textarea>

                
                
                
                <input type="submit" name="APButton" value="অ্যাপয়েন্টমেন্ট দিন"  class="px-28 translate-y-16  relative right-1/2 bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                
            </form>
            
        </div>

        
    </main>


    

</body>
</html>