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







if(isset($_POST['search']))
{
    $valueToSearch = $_POST['valueToSearch'];

    $query = "SELECT * FROM librarybooks WHERE CONCAT(`Book`, `Name`, `BookID`, `Part`, `Author`, `ReleaseDate`, `Edition`, `UplodersName`, `UplodersAddress`, `UplodersMobile`, `UploadDate`) LIKE '%".$valueToSearch."%'";
    $search_result = mysqli_query($conn,$query);
    
    
}
//  else {
//     $query = "SELECT * FROM librarybooks";
//     $search_result = filterTable($query);
// }

// // function to connect and execute the query
// function filterTable($query)
// {
//     require 'config.php';
//     $filter_Result = mysqli_query($conn, $query);
//     return $filter_Result;
// }

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





    <title>E Library</title>
</head>
<body style="background-image: url('folder2/bgPng1.png');" class="bg-[#fffbff]">
    
    <nav class="bg-gradient-to-b from-[#480048] to-[#480048] text-white flex justify-center py-4 px-9 border-spacing-0 border-b-0 h-56">
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
    <main style="font-family: 'CharukolaUltraLight', sans-serif; " class="flex-col mx-16 px-9 py-2 my-11">
        <div class="grid justify-start">
        <h1 class="font-bold text-3xl">ই-লাইব্রেরি</h1> 
        <p>আপনার প্রয়োজনীয় বই এখানে পাবেন খুব সহজেই!</p>
        <a href="bookUpload.php" class="mt-8 py-3 px-2 w-40 text-white bg-gradient-to-l from-[#c04848] to-[#480048] rounded-md hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">বই আপলোড করুন</a>
        
      
    </div>

        <div class="py-20">
        <form action="" method="post">
            < <div class="flex">
                <input type="text" name="valueToSearch" id="search" value="" style="font-family: 'CharukolaUltraLight', sans-serif;" class="relative -top-5 bg-transparent border-2 w-96 h-11 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder="বই সার্চ করুন"><br>
                <input type="submit" name="search" value="বই খুঁজুন" class="mx-4 relative -top-5 py-3 px-2 w-40 text-white bg-gradient-to-l from-[#c04848] to-[#480048] rounded-md hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                </div>
            
            <table>
                <tr>
    
                    <th class="border-2 px-3">পিডিএফ</th>
                    <th class="border-2 px-3">বইয়ের নাম</th>
                    <th class="border-2 px-3">বুক আইডি</th>
                    <th class="border-2 px-3">খন্ড</th>
                    <th class="border-2 px-3">লেখক</th>
                    <th class="border-2 px-3">প্রকাশ তারিখ এবং সময়</th>
                    <th class="border-2 px-3">মুদ্রন</th>
                    <th class="border-2 px-3">আপলোডকারীর নাম</th>
                    <th class="border-2 px-3">আপলোডকারীর ঠিকানা</th>
                    <th class="border-2 px-3">আপলোডকারীর মোবাইল</th>
                    <th class="border-2 px-3">আপলোডের তারিখ</th>
                    <th class="border-2 px-3">অ্যাকশন</th>

                </tr>

      <!-- populate table from mysql database -->
                <?php while($row = mysqli_fetch_array($search_result)):?>
                <tr>
                            <td class="border-2 px-3"><?php echo $row['Book']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Name']?> </td>
                            <td class="border-2 px-3"><?php echo $row['BookID']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Part']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Author']?> </td>
                            <td class="border-2 px-3"><?php echo $row['ReleaseDate']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Edition']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersName']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersAddress']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersMobile']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UploadDate']?> </td>
                            <td class="border-2 px-3"><a href="download.php?BookID=<?php echo $row['BookID']?>" target="blank">View</a></td>

                </tr>
                <?php endwhile;?>
            </table>
        </form>
        
            
        </div>
        
    </main>

</body>
</html>








<!-- 

<table class="border-2">
                <thead>
                <tr >
                    <th class="border-2 px-3">পিডিএফ</th>
                    <th class="border-2 px-3">বইয়ের নাম</th>
                    <th class="border-2 px-3">বুক আইডি</th>
                    <th class="border-2 px-3">খন্ড</th>
                    <th class="border-2 px-3">লেখক</th>
                    <th class="border-2 px-3">প্রকাশ তারিখ এবং সময়</th>
                    <th class="border-2 px-3">মুদ্রন</th>
                    <th class="border-2 px-3">আপলোডকারীর নাম</th>
                    <th class="border-2 px-3">আপলোডকারীর ঠিকানা</th>
                    <th class="border-2 px-3">আপলোডকারীর মোবাইল</th>
                    <th class="border-2 px-3">আপলোডের তারিখ</th>
                    <th class="border-2 px-3">অ্যাকশন</th>
                </tr>
                </thead>

                <tbody  id="myTable">
                    <?php
                   $query1 = "SELECT * FROM librarybooks";
                   $result = $conn->query($query1);

                   
                    while($row = $result->fetch_assoc()){
                        ?>
                    <tr>
                            <td class="border-2 px-3"><?php echo $row['Book']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Name']?> </td>
                            <td class="border-2 px-3"><?php echo $row['BookID']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Part']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Author']?> </td>
                            <td class="border-2 px-3"><?php echo $row['ReleaseDate']?> </td>
                            <td class="border-2 px-3"><?php echo $row['Edition']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersName']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersAddress']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UplodersMobile']?> </td>
                            <td class="border-2 px-3"><?php echo $row['UploadDate']?> </td>
                            <td class="border-2 px-3"><a href="download.php?BookID=<?php echo $row['BookID']?>" target="blank">View</a></td>

                            
                    </tr>
                    <?php
                    }
                    ?>
                    
                </tbody>
                
                

            </table> -->