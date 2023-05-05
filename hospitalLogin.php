<!-- BACKEND-->

<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
    header("Location: index.php");
  }
if(isset($_POST["submit"]))
{
    $Name = $_POST["Name"];
    $ID = $_POST["ID"];
    $Email = $_POST["Email"];
    $District = $_POST["District"];
    $Division = $_POST["Division"];
    $Location = $_POST["Location"];
    $Mobile = $_POST["Mobile"];
    $RegNo = $_POST["RegNo"];
    $NewPassword = $_POST["Password"];
    $ReNewPassword = $_POST["ReNewPassword"];
    $ProfilePic = "GO TO SETTINGS & <br> SET A DISPLAY PICTURE";
    


    $duplicate = mysqli_query($conn, "SELECT * FROM hospitaldetails WHERE ID = '$ID' OR Email = '$Email'");

    if(mysqli_num_rows($duplicate)>0){
        echo "following user exists"; 

    }
    else{
        if( $NewPassword == $ReNewPassword){
            $query = "INSERT INTO hospitaldetails VALUES('$Name', '$ID' ,'$Email', '$Division','$Location', 
            '$District','$Mobile','$RegNo','$NewPassword','$ProfilePic')";
           mysqli_query($conn,$query);

           echo "Registration Successful";
        }
        else{
            echo "Password Dosen't Match";
        }
    }

    
}
?> 


<!-- HTML AND TAILWIND CODES -->

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

    <title>Login-General Members</title>
</head>

<!-- Do not touch this part -->

<!-- Edit from this part -->




<body>


    

    <main class="scale-90">
         
        
        <section class="flex-col py-10"  style="background-image: url('folder2/bgPng1.png');">
            
            <div>
                <h1 class="font-bold text-5xl flex justify-center" style="font-family: 'Hind Siliguri', sans-serif;">হাসপাতাল সাইন-আপ</h1>
                <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার হাসপাতালের সেবাটি চালু করতে ফর্মটি পুরন করুন</p>
            </div>

            <div class="flex justify-center py-14">
                <form action="" method="post" autocomplete="off" class="flex-col">
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" placeholder="হাসপাতালের নাম"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="হাসপাতাল ই-মেইল"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ID" id="" placeholder="হাসপাতাল আইডি"><br><br>
                    

                    <select name="Division" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">বিভাগ</option>
                        <option value="Dhaka">ঢাকা</option>
                        <option value="Khulna">খুলনা</option>
                        <option value="Chittagong">চট্টগ্রাম</option>
                        <option value="Barisal">বরিশাল</option>
                        <option value="Sylhet">সিলেট</option>
                        <option value="Mymensingh">ময়মনুসিংহ</option>
                        <option value="Rangpur">রংপুর</option>
                      </select><br><br>


                    <select name="District" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">জেলা</option>
                        <option value="Bandarban">Bandarban</option>
                        <option value="Bagerhat">Bagerhat</option>
                        <option value="Barguna">Barguna</option>
                        <option value="Barisal">Barisal</option>
                        <option value="Bhola">Bhola</option>
                        <option value="Bogra">Bogra</option>
                        <option value="Brahmanbaria">Brahmanbaria</option>
                        <option value="Chandpur">Chandpur</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Chuadanga">Chuadanga</option>
                        <option value="Comilla">Comilla</option>
                        <option value="Cox'sBazar">Cox'sBazar</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Dinajpur">Dinajpur</option>
                        <option value="Faridpur">Faridpur</option>
                        <option value="Feni">Feni</option>
                        <option value="Gaibandha">Gaibandha</option>
                        <option value="Gazipur">Gazipur</option>
                        <option value="Gopalganj">Gopalganj</option>
                        <option value="Habiganj">Habiganj</option>
                        <option value="Jaipurhat">Jaipurhat</option>
                        <option value="Jamalpur">Jamalpur</option>
                        <option value="Jessore">Jessore</option>
                        <option value="Jhalokati">Jhalokati</option>
                        <option value="Jhenaidah">Jhenaidah</option>
                        <option value="Khagrachari">Khagrachari</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Kishoreganj">Kishoreganj</option>
                        <option value="Kurigram">Kurigram</option>
                        <option value="Kushtia">Kushtia</option>
                        <option value="Lakshmipur">Lakshmipur</option>
                        <option value="Lalmonirhat">Lalmonirhat</option>
                        <option value="Madaripur">Madaripur</option>
                        <option value="Magura">Magura</option>
                        <option value="Manikganj">Manikganj</option>
                        <option value="Maulvibazar">Maulvibazar</option>
                        <option value="Meherpur">Meherpur</option>
                        <option value="Munshiganj">Munshiganj</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Naogaon">Naogaon</option>
                        <option value="Narail">Narail</option>
                        <option value="Narayanganj">Narayanganj</option>
                        <option value="Narsingdi">Narsingdi</option>
                        <option value="Natore">Natore</option>
                        <option value="Nawabganj">Nawabganj</option>
                        <option value="Netrokona">Netrokona</option>
                        <option value="Nilphamari">Nilphamari</option>
                        <option value="Noakhali">Noakhali</option>
                        <option value="Pabna">Pabna</option>
                        <option value="Panchagarh">Panchagarh</option>
                        <option value="Patuakhali">Patuakhali</option>
                        <option value="Pirojpur">Pirojpur</option>
                        <option value="Rajbari">Rajbari</option>
                        <option value="Rajshahi">Rajshahi</option>
                        <option value="Rangamati">Rangamati</option>
                        <option value="Rangpur">Rangpur</option>
                        <option value="Satkhira">Satkhira</option>
                        <option value="Shariatpur">Shariatpur</option>
                        <option value="Sherpur">Sherpur</option>
                        <option value="Sirajganj">Sirajganj</option>
                        <option value="Sunamganj">Sunamganj</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Tangail">Tangail</option>
                        <option value="Thakurgaon">Thakurgaon</option>
                    </select><br><br>

                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Location" id="" placeholder="সম্পুর্ণ ঠিকানা"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" placeholder="মোবাইল নাম্বার"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="RegNo" id="" placeholder="হাসপাতাল রেজিস্ট্রেশন নং (সরকার হতে)"><br><br>


                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id="" placeholder="নতুন পাসওয়ার্ড"><br><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ReNewPassword" id="" placeholder="নতুন পাসওয়ার্ডটি রি-টাইপ করুন"><br><br>
                
                    <input type="submit" id="submit" name="submit" value="সাইন আপ!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                
                </form>
            </div>
           
        </section> 

        <section class="-translate-y-20">
            <div class="flex justify-center text-sm hover:scale-110 ease-out duration-700" style="font-family: 'CharukolaUltraLight', sans-serif; display:flex">
                <p>ইতোমধ্যে একজন সদস্য? <a href="hospitalLoginMain.php" class=" hover:text-red-600 duration-700">লগ-ইন করতে এখানে ক্লিক করুন</a></p>
            </div>
        </section>
    </main>
    

</body>
</html>