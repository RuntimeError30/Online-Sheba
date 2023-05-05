<!-- BACKEND -->
<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
    header("Location: index.php");
  }
if(isset($_POST["submit"]))
{
    $DonnerName = $_POST["DonnerName"];
    $DonnerID = $_POST["DonnerID"];
    $DonnerEmail = $_POST["Email"];
    $DonnerBG = $_POST["DonnerBG"];
    $DonnerAge = $_POST["DonnerAge"];
    $DonnerGender = $_POST["DonnerGender"];
    $DonnerDistrict = $_POST["DonnerDistrict"];
    $DonnerDivision = $_POST["DonnerDivision"];
    $DonnerNumber = $_POST["DonnerNumber"];
    $DonnerEmNumber= $_POST["DonnerEmNumber"];
    $Password = $_POST["Password"];
    $ReNewPassword = $_POST["RePassword"];

    $Eligibiliy = "সেট করা হয়নি";
    

    $imageName =  "folder2/avatar.png";

    // $target = 'folder2/' . $imageName;

    // move_uploaded_file($src, $target);
    


    $result1 = mysqli_query($conn, "SELECT * FROM blooddonnerlist WHERE DonnerID = ' $DonnerID' OR Email = '$DonnerEmail'");

    if(mysqli_num_rows($result1)>0){
        echo "<div style= 'font-family: CharukolaUltraLight, sans-serif;' class=''>
        <h1 class= '  flex justify-center relative left-80 top-96 translate-y-44'>এই একাউন্টটি আছে! অনুগ্রহ করে লগ-ইন করুন  </h1>
        </div>";
       

    }
    else{
        
        if($DonnerAge>18){
            if(($Password ==  $ReNewPassword)){

                if( $Password == $ReNewPassword){
                    $query = "INSERT INTO blooddonnerlist VALUES('$DonnerName', '$DonnerEmail', '$DonnerID', '$DonnerBG','$DonnerAge', 
                    '$DonnerGender','$DonnerDistrict', '$DonnerDivision', '$DonnerNumber', '$DonnerEmNumber', '$Password','$imageName')";
                    mysqli_query($conn,$query);

                    $eQury = mysqli_query($conn,"INSERT INTO bloodeligibility(Name, ID, LastDonated, Eligibility, BG, Division, District, Mobile) VALUES ('$DonnerName','$DonnerID','','NOT SET','$DonnerBG','$DonnerDivision','$DonnerDistrict','DonnerMobile')");
                    
        
                    echo "<div style= 'font-family: CharukolaUltraLight, sans-serif;' class=''>
            <h1 class= '  flex justify-center relative left-80 top-96 translate-y-44'>রেজিস্ট্রেশন সফল হয়েছে! লগ-ইন করুন! </h1>
            </div>";
                }
                else{
                     echo "<div style= 'font-family: CharukolaUltraLight, sans-serif;' class=''>
            <h1 class= '  flex justify-center relative left-80 top-96 translate-y-44'>রেজিস্ট্রেশন হইনি!  </h1>
            </div>";
                }
            }
            else{
                echo "<div style= 'font-family: CharukolaUltraLight, sans-serif;' class=''>
                <h1 class= '  flex justify-center relative left-80 top-96 translate-y-44'>পাসওয়ার্ড ম্যাচ করেনি!</h1>
                </div>";
            }

        }
        else{
            echo "<div style= 'font-family: CharukolaUltraLight, sans-serif;' class=''>
            <h1 class= '  flex justify-center relative left-80 top-96 translate-y-44'>আপনার বয়স রক্ত দেওয়ার জন্য উপযুক্ত নয়!</h1>
            </div>";
        }
        
        
    }

    
}
?>



<!-- HTML AND TAILWIND CODES -->










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

    <title>SignUp-blood donner | E-Hospital</title>
</head>

<!-- Do not touch this part -->

<!-- Edit from this part -->
<body class="bg-gradient-to-r from-[#e7e8ea] via-[#ffffff] to-[#e7e8ea]"  >
    
    

    <main class="overflow-x-hidden overflow-y-hidden" style="background-image: url('folder2/bgPng1.png'); height: 1000px">
       
        
        
        <section class="flex-col py-36">
            
            
            
            <div class="grid justify-end relative right-56 mr-44 top-14">
                <h1 class="font-bold text-5xl flex justify-start" style="font-family: 'Hind Siliguri', sans-serif;">ব্লাড ডোনার সাইন-আপ</h1>
                <p class="font-semibold text-base py-3 flex justify-start" style="font-family: 'CharukolaUltraLight', sans-serif;">ব্লাড ডোনার হতে সাইন আপ ফর্মটি পূরন করুন</p>
            </div>

            <div class="flex justify-center  mr-56 pr-20 relative -top-32 scale-100">
                <form action="#"  method="post" autocomplete="off"  class="flex-col">

                    <div id="line" class="relative left-80 top-14 translate-x-6">


                        <div id="horizontal" class=" relative  top-72 left-20 ">
                            <div class="border-2 border-slate-100 rotate-90 -translate-x-52 w-96  relative  top-56 -translate-y-6"></div>
                            <div class="border-2 border-slate-100 rotate-90 -translate-x-52 w-96  relative  top-72 -translate-y-96"></div>

                        </div>
                        

                        <div class="border-2 border-slate-100 w-20 translate-y-48 relative left-16 top-20"></div>
                    </div>
                    
                   <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="DonnerName" id="" placeholder="আপনার নাম"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="আপনার ইমেইল"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="DonnerID" id="" placeholder="ইউনিক আইডি"><br><br>



                    <select name="DonnerBG" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">ব্লাড গ্রূপ</option>
                        <option value="A+">এ পজিটিভ</option>
                        <option value="A-">এ নেগেটিভ</option>
                        <option value="B+">বি পজিটিভ</option>
                        <option value="B-">বি নেগেটিভ</option>
                        <option value="O+">ও পজিটিভ</option>
                        <option value="O-">ও নেগেটিভ</option>
                        <option value="AB+">এবি পজিটিভ</option>
                        <option value="AB-">এবি নেগেটিভ</option>
                      </select><br><br>

                      <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="DonnerAge" id="" placeholder="আপনার বয়স"><br><br>
                      <select name="DonnerGender" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">লিঙ্গ</option>
                        <option value="Male">পুরুষ</option>
                        <option value="Female">মহিলা</option>
                        <option value="Others">অন্যান্য</option>
                    
                      </select><br><br>


                      <select name="DonnerDivision" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">বিভাগ</option>
                        <option value="Dhaka">ঢাকা</option>
                        <option value="Khulna">খুলনা</option>
                        <option value="Chittagong">চট্টগ্রাম</option>
                        <option value="Barishal">বরিশাল</option>
                        <option value="Slyhet">সিলেট</option>
                        <option value="Mymensing">ময়মনুসিংহ</option>
                        <option value="Rangpur">রংপুর</option>
                      </select><br><br>


                    <select name="DonnerDistrict" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
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

                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="DonnerNumber" id="" placeholder="মোবাইল নাম্বার"><br><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="DonnerEmNumber" id="" placeholder="জরুরী মোবাইল নাম্বার"><br><br>
    


                    <br><br>

                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id="" placeholder="নতুন পাসওয়ার্ড"><br><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="RePassword" id="" placeholder="নতুন পাসওয়ার্ডটি রি-টাইপ করুন"><br><br>
                

                    <div class="relative bottom-1/2 -translate-y-24 translate-x-64 left-52 border-2 ml-6 w-96 py-2 flex justify-center">
                        <input type="submit" name="submit" value="সাইন আপ!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                        
                    </div>
                    
                    
                </form>
            </div>
           
        </section> 

        <section class="-translate-y-96 relative bottom-56 left-80">

            <div class="flex justify-center text-sm hover:scale-110 ease-out duration-700" style="font-family: 'CharukolaUltraLight', sans-serif;">
                <p>আপনি কি একজন সদস্য? <a href="BloodDonnerSignIn.php" class=" hover:text-red-600 duration-700">লগ-ইন করুন!</a></p>
                
            </div>
        </section>

        
    
    </main>
    <!-- <footer class="grid">
        <div>
            <img src='folder2/bloodPNG2.png' alt="">
        </div>
    </footer> -->

    

</body>
</html>