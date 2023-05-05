<?php
require 'config.php';
if(!empty($_SESSION["Email"])){
  $Email = $_SESSION["Email"];
  $result = mysqli_query($conn, "SELECT * FROM generalmemberlist WHERE Email = '$Email'");
  $row = mysqli_fetch_assoc($result);
}
else{
  header("Location: login.php");
}
?>





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


    <title>Settings- <?php echo $row["Name"]; ?></title>
</head>
<body>


    <main>

    <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0">
            <img src='Images and logo/logo4.png' alt="E-Hospital" class="h-20 px-3">
    
            <ul class="mx-10 my-10 space-x-9 flex justify-end" style="font-family: 'CharukolaUltraLight', sans-serif;" id="menuList">
            <li><a href="Landing.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">হোম</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">ই-লাইব্রেরি</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">হাসপাতালের তালিকা</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অ্যাম্বুলেন্স পরিষেবা</a></li>
            <li><a href="#" class="hover:text-rose-600 hover:shadow-xl transition-colors">অনলাইন রক্তদাতার সন্ধান</a></li>
            <li><a href="FirstSeeMore.php" class="hover:text-rose-600 hover:shadow-xl transition-colors">আরও দেখুন!</a></li>
            
            </ul>
            <a href="Landing.php"style="font-family: 'CharukolaUltraLight', sans-serif;" class="flex"><img src='folder2/<?php echo $row["ProfilePhoto"]; ?>' class=" relative w-20 h-20 py-1 border-2 -left-10 top-3 rounded-lg scale-50 "></a>
        </nav>



        <div class="flex flex-wrap bg-gray-50 w-full h-full">
            <div class="w-3/12 bg-white rounded p-3 shadow-lg">
                <div class="flex items-center space-x-4 p-2 mb-5">
                    <img class="w-44 h-full rounded-3xl" src='folder2/<?php echo $row['ProfilePhoto']; ?>' alt="Mohammad Darain Khan">
                    <div>
                        <h4 class="font-semibold text-lg text-gray-700 capitalize font-poppins tracking-wide"><?php echo $row['Name']; ?></h4>
                        <span class="text-sm tracking-wide flex items-center space-x-1">
                            <svg class="h-4 text-green-500" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                            </svg><span class="text-gray-600">Verified</span>
                        </span>
                    </div>
                </div>
                <ul class="space-y-2 text-sm">
                    <li>
                        <a href="index.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                </svg>
                            </span>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
                                </svg>
                            </span>
                            <span>Notifications</span>
                        </a>
                    </li>
                    <li>
                        <a href="#" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 8h10M7 12h4m1 8l-4-4H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-3l-4 4z"></path>
                                </svg>
                            </span>
                            <span>Chats</span>
                        </a>
                    </li>
                   
                
                    <li>
                        <a href="settings.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus-within:bg-gray-200 focus:shadow-black ">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4"></path>
                                </svg>
                            </span>
                            <span>Settings</span>
                        </a>
                    </li>
                    <li>
                        <a href="security.php" class="flex items-center space-x-3 text-gray-700 p-2 rounded-md font-medium hover:bg-gray-200 focus:bg-gray-200 focus:shadow-outline">
                            <span class="text-gray-600">
                                <svg class="h-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                </svg>
                            </span>
                            <span>Security</span>
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
        
        
            <div class="w-auto ml-28 ">
                <div class="p-10 scale-125 text-gray-600 top-20 relative">
                    <h1 class="text-2xl font-bold "><?php echo $row['Name']; ?></h1>
                    <p class=" text-gray-500">Customize Your Profile Here</p>
                </div>
               

            <div class="flex-col my-28 pl-28 tracking-wider">
                
                <form action="test.php" method="POST" enctype="multipart/form-data" class="flex-col -translate-x-1/3 -translate-y-32">
                   
                    <!-- <img src='folder2/done 1.jpg' class="h-72 absolute left-28 translate-x-96 translate-y-5 rounded-2xl drop-shadow-2xl" alt="">
                    <button type="menu"><img src="https://www.kindpng.com/picc/m/109-1095065_camera-cam-device-photo-shot-mode-mobile-phone.png" alt="Camera Cam Device Photo Shot Mode Mobile - Phone Camera Icon Png, Transparent Png@kindpng.com" class="h-10 absolute left-48 translate-x-72 translate-y-64 rounded-full"></button>
                    <input type="file" src="" class="h-10 absolute left-48 translate-x-72 translate-y-80 "> -->

                    <style media="screen">
                        .upload{
                          width: 200px;
                          position: relative;
                          margin: auto;
                          text-align: center;
                          left: 390px;
                          top: 160px;
                        }
                        .upload img{
                          border-radius: 70%;
                          border: 8px solid #DCDCDC; 
                          width: 150px;
                          height: 150px;
                        }
                        .upload .rightRound{
                          position: absolute;
                          bottom: 0;
                          right: 50px;
                          background: #00B4FF;
                          width: 32px;
                          height: 32px;
                          line-height: 33px;
                          text-align: center;
                          border-radius: 50%;
                          overflow: hidden;
                          cursor: pointer;
                        }
                        .upload .leftRound{
                          position: absolute;
                          bottom: 0;
                          left: 0;
                          background: red;
                          width: 32px;
                          height: 32px;
                          line-height: 33px;
                          text-align: center;
                          border-radius: 50%;
                          overflow: hidden;
                          cursor: pointer;
                        }
                        .upload .fa{
                          color: white;
                        }
                        .upload input{
                          position: absolute;
                          transform: scale(2);
                          opacity: 0;
                        }
                        .upload input::-webkit-file-upload-button, .upload input[type=submit]{
                          cursor: pointer;
                        }
                      </style>
                        <input type="hidden" name="ProfilePhoto" >
                          <div class="upload">
                            <img src='folder2/<?php echo $row['ProfilePhoto']; ?>' id = "image">
                    
                            <div class="rightRound" id = "upload">
                              <input type="file" name="fileImg" id = "fileImg" accept=".jpg, .jpeg, .png">
                              <i class = "fa fa-camera"></i>
                            </div>
                    
                            <div class="leftRound" id = "cancel" style = "display: none;">
                              <i class = "fa fa-times"></i>
                            </div>
                            <div class="rightRound" id = "confirm" style = "display: none;">
                              <input type="submit" name="submit" >
                              <i class = "fa fa-check"></i>
                            </div>
                        </div>
                    
                        <script type="text/javascript">
                            document.getElementById("fileImg").onchange = function(){
                            document.getElementById("image").src = URL.createObjectURL(fileImg.files[0]); // Preview new image
                    
                            document.getElementById("cancel").style.display = "block";
                            document.getElementById("confirm").style.display = "block";
                    
                            document.getElementById("upload").style.display = "none";
                          }
                    
                          var userImage = document.getElementById('image').src;
                          document.getElementById("cancel").onclick = function(){
                            document.getElementById("image").src = userImage; // Back to previous image
                    
                            document.getElementById("cancel").style.display = "none";
                            document.getElementById("confirm").style.display = "none";
                    
                            document.getElementById("upload").style.display = "block";
                          }
                        </script>
















                    
                    <label for="" class="pr-14"  style="font-family: 'CharukolaUltraLight', sans-serif;"> আপনার নাম</label><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" placeholder=" <?php echo $row["Name"]; ?>"><br><br>

                    <label for="" class="pr-10"  style="font-family: 'CharukolaUltraLight', sans-serif;">ইউনিক আইডি</label><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="UniqueID" id="" placeholder="<?php echo $row["UniqueID"]; ?>" readonly><br><br>

                    <label for="" class="pr-8"  style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার ইমেইল</label><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder=" <?php echo $row["Email"]; ?>" readonly><br><br>


                    <label for="" class="pr-10"  style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার বিভাগ</label><br>
                    <select name="Division" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="Empty">বিভাগ</option>
                        <option value="Dhaka">ঢাকা</option>
                        <option value="Khulna">খুলনা</option>
                        <option value="Chittagong">চট্টগ্রাম</option>
                        <option value="Barishal">বরিশাল</option>
                        <option value="Sylhet">সিলেট</option>
                        <option value="Mymensingh">ময়মনুসিংহ</option>
                        <option value="Rangpur">রংপুর</option>
                      </select><br><br>


                      <label for="" class="pr-24"  style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার জেলা</label><br>
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

                      <label for="" class="pr-20"  style="font-family: 'CharukolaUltraLight', sans-serif;">মোবাইল নাম্বার</label><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" placeholder="মোবাইল নাম্বার"><br><br>

                    <label for="" class="pr-8"  style="font-family: 'CharukolaUltraLight', sans-serif;">জরূরী মোবাইল নাম্বার</label><br>
                    <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="EmergencyMobile" id="" placeholder="জরুরী মোবাইল নাম্বার"><br><br>


                    <br><br>
                    <label for="" class="pr-8"  style="font-family: 'CharukolaUltraLight', sans-serif;">আপডেট করতে পাসওয়ার্ড দিন</label><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id=""><br><br>
                    <label for="" class="pr-8"  style="font-family: 'CharukolaUltraLight', sans-serif;">পুনরায় পাসওয়ার্ড দিন</label><br>
                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ReTypePassword" id=""><br><br>

                    
                    <input type="submit" name="update" value="আপডেট!" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-1 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700" >
                </form>
                





                </div>
            </div>
        </div>
    </main>

</body>
</html>