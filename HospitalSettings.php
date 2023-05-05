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




// Profile Pic

if(isset($_POST["submit"])){
    $src = $_FILES["fileImg"]["tmp_name"];
    $imageName =  $_FILES["fileImg"]["name"];

    $target = 'folder2/' . $imageName;

    move_uploaded_file($src, $target);

    $session_test = $_SESSION["Email"];
    $query = "UPDATE hospitaldetails SET ProfilePhoto = '$imageName' WHERE Email = '$session_test'";
    
    
    mysqli_query($conn, $query);
    header("Location: HospitalSettings.php");

}

// Profile Pic End


//General Settings


if(isset($_POST["uploadG"])){
  
    $test = $_SESSION["Email"];

   


    $q2 = "SELECT * FROM generalmemberlist WHERE Email = '$test'";
    $fetchRes = mysqli_fetch_assoc(mysqli_query($conn, $q2));

    // name
    if(empty($_POST['Name'])){
      $DBNAME = $fetchRes['Name'];

    }
    else{
      $DBNAME = $_POST['Name'];
    }

    // Division
    if(empty($_POST['Division'])){
      $DBDIVISION = $fetchRes['Division'];

    }
    
    else{
      $DBDIVISION = $_POST['Division'];
    }
    

       // DIstrict
       if(empty($_POST['District'])){
        $DBDISTRICT = $fetchRes['District'];
  
      }
      else{
        $DBDISTRICT = $_POST['District'];
      }
      


      //Mobile

      if(empty($_POST['Mobile'])){
        $DBMOBILE = $fetchRes['Mobile'];
  
      }
      else{
        $DBMOBILE = $_POST['Mobile'];
      }
      


    $qName =  "UPDATE hospitaldetails SET Name = '$DBNAME' WHERE Email = '$test'";
    mysqli_query($conn, $qName);
    

    $qDivision =  "UPDATE hospitaldetails SET Division = '$DBDIVISION' WHERE Email = '$test'";
    mysqli_query($conn, $qDivision);

    $qMobile =  "UPDATE hospitaldetails SET Division = '$DBMOBILE' WHERE Email = '$test'";
    mysqli_query($conn, $qMobile);

}

//General Settings End


// Password Settings
if(isset($_POST['updatePass'])){
    $OldPassword = $_POST["OldPassword"];
    $NewPassword = $_POST["NewPassword"];
    $ReTypeNewPassword = $_POST["ReTypeNewPassword"];



    $fetchPass = $row["Password"];
    $fetchMail = $row["Email"];
    if(($fetchPass==$OldPassword) && ($NewPassword  == $ReTypeNewPassword )){
        $fetchSQl = "UPDATE hospitaldetails set Password = '$NewPassword'  WHERE Email = '$fetchMail'";
        mysqli_query($conn,$fetchSQl); 
        
        header("Location: HospitalSettings.php");
    }
    else{
        echo "Password Did Not Matched!";
    }
    
}


// Password Settings End

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
            
            <div class="w-auto ml-10">
                <div class="grid pt-20">
                    <div class="grid shadow-2xl w-fit px-4 py-4 rounded-xl ">
                        <p class="text-slate-700">SETTINGS</p>
                        <h1 class="text-4xl text-slate-500 font-semibold uppercase"><?php echo $row["Name"]; ?></h1>
                    </div>
                    <br>
                    <p class="text-slate-700">Gulshan, Dhaka 1212, Bangladesh</p>
                </div>

                <div class="flex">
                    <div class="text-black mt-16 font-semibold shadow-xl px-4 py-4 w-fit rounded-xl">
                        <h1 class="text-2xl text-slate-500 ">UPLOAD BLOOD DATA</h1>

                        <form action="" method="POST" class="mt-10 font-poppins tracking-wide" enctype="multipart/form-data">
                      

                        <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Name" id="" placeholder="Name"><br><br>
                        <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Email" id="" placeholder="Email"><br><br>
                        <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Mobile" id="" placeholder="Mobile"><br><br>


                        <label for="">Please change District and Division Together</label> <br>
                        <select name="Division" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="Empty">Select Division</option>
                        <option value="Dhaka">Dhaka</option>
                        <option value="Khulna">Khulna</option>
                        <option value="Chittagong">Chittagong</option>
                        <option value="Barishal">Barishal</option>
                        <option value="Sylhet">Sylhet</option>
                        <option value="Mymensingh">Mymensingh</option>
                        <option value="Rangpur">Rangpur</option>
                      </select><br><br>



                      <select name="District" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700">
                        <option value="No-Value">Select District</option>
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
                      </select><br><br><br>

                      <input type="text" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Location" id="" placeholder="Location"><br><br>


                       <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="Password" id="" placeholder="For Security Enter Password to Update Info"><br><br>
                        
                        <input type="submit" id="submit" name="uploadG" value="Update Information" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">

                    </form>


                    <br><br>

                    </div>
                    <div class="pl-5">
                        <div class="text-black mt-16 font-semibold shadow-xl px-4 py-4 w-fit rounded-xl">
                            <h1 class="text-2xl text-slate-500 ">SECURITY SETTINGS</h1>

                            <form action="" method="POST" class="mt-10 grid" enctype="multipart/form-data">
                                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="OldPassword" id="" placeholder="Old Password"><br><br>
                                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="NewPassword" id="" placeholder="New Password"><br><br>
                                    <input type="password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" name="ReTypeNewPassword" id="" placeholder="Re-Type New Password"><br><br>
                        
                                    <input type="submit" id="submit" name="updatePass" value="Update Password" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28  bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700"><br>
                                    <a href="">Forget Password</a>

                            </form>
                        </div>

                        
                    </div>


                    <div class="pl-5">
                        <div class="text-black mt-16 font-semibold shadow-xl px-4 py-4 w-fit rounded-xl">
                            <h1 class="text-2xl text-slate-500 ">Change Display Picture</h1>

                            <form action="" method="POST" class="mt-10 grid" enctype="multipart/form-data">
                            <style media="screen">
                        .upload{
                          width: 200px;
                          position: relative;
                          margin: auto;
                          text-align: center;
                          left: 20px;
                          top: -10px;
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

                            </form>
                        </div>

                        
                    </div>
                </div>

                <div>

                
                </div>
                
            </div>
        </div>
    </main>
</body>

</html>