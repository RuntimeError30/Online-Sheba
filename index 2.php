
  <?php
        session_start();
        $u_name = $_SESSION['user_name'];
        $phn_num = $_SESSION['phone_number'];
        $u_email =  $_SESSION['user_email'];
        if(!empty($u_name)){

        
        
    ?> 

<!DOCTYPE html>

        <html lang="en">
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">
        
            <title>Munshi Shop</title>
            <link rel="icon" href="images/mLogo.webp" type="images/icon">
        
            <link rel="stylesheet" href="styles/bootstrap-337.min.css">
            <link rel="stylesheet" href="font-awsome/css/font-awesome.min.css">
            <link rel="stylesheet" href="uiucss.css">
            <link rel="stylesheet" href="ijk.css">
           
            
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css" integrity="sha512-17EgCFERpgZKcm0j0fEq1YCJuyAWdz9KUtv1EjVuaOz8pDnh/0nZxmU6BBXwaaxqoi9PQXnRWqlcDB027hgv9A==" crossorigin="anonymous" />
            <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.css" integrity="sha512-yHknP1/AwR+yx26cB1y0cjvQUMvEa2PFzt1c9LlS4pRQ5NOTZFWbhBig+X9G9eYW/8m0/4OXNx8pxJ6z57x0dw==" crossorigin="anonymous" />
        

            <style>

                            body{
                                font-size: 14px;
                                line-height: 1.42857143;
                                color: #333333;
                                background-color: black;
                                overflow-x: hidden;
                            }

                            p.price {
                            padding-top: 15px;
                        }

                        p.price {
                            padding-top: 15px !important;
                        }

                        .max-width.container {
                            height: 570px;
                        }
                        iframe {
                            width: 565px;
                        }

                            #navbar{
                                border-radius: 0px !important;
                            }
                            marquee {
                                padding: 10px;
                                font-size: 30px;
                                font-family: cursive;
                                color: red;
                                cursor: pointer;
                            }
                            .offer a:hover {
                            text-decoration: none;
                            border: 1px solid black;
                        }


                            .text.text2::before{
                                content: "";
                                position: absolute;
                                top: 0;
                                left: 0;
                                height: 100%;
                                width: 100%;
                                background-color: red;
                                border-left: 2px solid blue;
                                animation: animate 4s steps(12) infinite;

                            }

                            @keyframes animate{
                                40%, 60%{
                                    left: 100%;
                                }
                                100%{
                                    left: 0%;
                                }
                            }

                            .about .about-content .right a{
                                display: inline-block;
                                background-color: red;
                                color: #fff;
                                font-size: 20px;
                                padding: 10px 30px;
                                margin-top: 20px;
                                border-radius: 6px;
                                border: 2px solid red;
                                text-decoration: none;
                                transition: all 0.4s ease;
                            }


                            @media (min-width:450px){
                                .max-width{
                                padding: 0 23px;
                                }
                                .about .about-content .right {
                                    padding-top: 10px;
                                    width: 100%;
                                    text-align: justify;
                                    justify-content: center;
                                }

                                .about .about-content .left {
                                width: 100%;
                            }

                                .about .about-content .left img {
                                    width: 100%;
                                
                                }

                                .same-height-row :last-child{
                                    padding-bottom: 20px;
                                }


                            .col-md-12.headPhnTitleHeader h2 {
                                padding-top: 70px;
                                color: #fff;
                            }


                            }



                            @media (min-width: 890px){
                                .about .about-content .left {
                                    width: 45%;
                                }

                                .about .about-content .right {
                                    width: 50%;
                                    text-align: justify;
                                    justify-content: center;
                                }

                                .col-md-12.headPhnTitleHeader h2 {
                                padding-top: 70px;
                                color: #fff;
                            }

                            }

                            .slick-prev:before {
                                content: '←';
                                color: red;
                                font-size: 25px;
                            }

                            .slick-next:before {
                                content: '→';
                                color: red;
                                font-size: 25px;
                            }

                            #outerContent {
                                background-color: rgb(236, 226, 226);
                                position: relative;
                                top: 50px;
                                height: 660px;
                            }

                            .headPhnsection {
                                /* background-color: black; */
                                text-align: center;
                            }

                            .col-md-12.headPhnTitleHeader {
                                /* margin-top: 60px; */
                                color: #fff;
                            }



                            .product {
                                background-color: #fff;
                                padding: 10px;
                                text-align: center;
                                border-radius: 5px;
                                /* width: 350px;
                                height: 420px; */
                            }


                            div#content\ headPhnSec {
                                background-color: black !important;
                            }

                            .headTitle{
                                text-align: center;
                                background-color: black;
                            }
                            section#outerContent\ hpnSen {
                                background-color: black;
                            }

                            .box_h.box_h2 {
                                background-color: black;
                            }

                            .box_h{
                                background-color:  rgb(236, 226, 226);;
                                margin: 0 0 30px;
                                box-sizing: border-box;
                                padding: 5px;
                                border-radius: 5px;
                                transition:all .4s ease;
                            
                            }

                            .headphnSlid{
                                background-color: #222;
                            }

                            .home img{
                                width: 50px;
                                border-radius: 13px;
                            }

                            section .title {
                        position: relative;
                        text-align: center;
                        font-size: 40px;
                        font-weight: 500;
                        margin-bottom: 60px;
                        padding-bottom: 20px;
                        font-family: "Helvetica Neue",Helvetica,Arial,sans-serif;
                        height: 0vh;
                        }

                        section#about {
                            height: 140vh;
                        }

                        #top ul.menu > li a:hover {
                        color: red;
                        text-decoration: none;
                        
                        transition: 0.4s;
                        
                        }

                            

            </style>
        </head>



        <body>

        

            <?php
                    $conn = new mysqli('localhost','root','','munshiShop');
                    $id = 1;
                    $add = 1;
                
                    $sql = "SELECT views FROM viewers ";
                    $result = $conn->query($sql);

                    while ( $data = $result->fetch_assoc()) {
                            $user_view = $data['views'];    
                        }

                    $totalView = $user_view + $add;

                    $sql1 =   "UPDATE viewers 
                    SET views='$totalView'	
                    WHERE viewId='$id' ";

                    if(mysqli_query($conn, $sql1)==TRUE){
                    //  echo "<script>window.location.href='account.php';</script>";
                    }else {
                        echo 'Data Not Update';
                    }

                    // echo $totalView;

            
            ?>
        
        <div id="top">
            
            <div class="container">
                
                <div class="col-md-6 offer">
                    
                    <a href="index.php" class="btn btn-success btn-sm">স্বাগতম</a>
                    <a >ই-সার্জিকাল এন্ড ফার্মেসিতে</a>
                </div>
                
                <div class="col-md-6">
                    
                    <ul class="menu">
                        
                        <li><a><?php echo    $u_name = $_SESSION['user_name']; ?></a></li>
                     
                        <li>
                            <a href="adminLogin.php">এডমিন</a>
                        
                        </li>
                        <li>
                            <a href="account.php">আমার অ্যাকাউন্ট</a>
                        </li>
                        <li>
                            <a href="cart.php">কার্টে যান</a>
                        </li>
                        <li>
                            <a href="checkout.php">লগআউট</a>
                        </li>
                        
                    </ul>
                    
                </div>
                
            </div>
            
        </div>
        
        <div id="navbar" class="navbar navbar-default">
            
            <div class="container">
                
                <div class="navbar-header">
                    
                    <a href="index 2.php" class="navbar-brand home">
                        
                        <img src="images/mLogo.webp" alt="" class="hidden-xs">
                        <img src="images/mLogo.webp" alt="" class="visible-xs">
                            
                    </a>
                    
                    <button class="navbar-toggle" data-toggle="collapse" data-target="#navigation">
                        
                        <span class="sr-only">Toggle Navigation</span>
                        
                        <i class="fa fa-align-justify"></i>
                        
                    </button>
                    
                    
                    
                </div>
                <div class="navbar-collapse collapse" id="navigation">
                    <div class="padding-nav">
                        <ul class="nav navbar-nav left">
                            <li class="active">
                                <a href="index 2.php">হোম</a>
                            </li>
                            <li>
                                <a href="shop.php">শপ</a>
                            </li>
                            <li>
                                <a href="account.php">আমার অ্যাকাউন্ট</a>
                                
                            </li>
                            <li>
                                <a href="cart.php">অর্ডার কার্ট</a>
                            </li>
                            <li>
                                <a href="comnt2.php">কাস্টমার কমেন্ট</a>
                            </li>
                            <li>
                                <a href="contact.php">আমাদের সাথে যোগাযোগ করুন</a>
                            </li>
                            
                        </ul>
                        
                    </div>
                    
                    <a href="cart.php" class="btn navbar-btn btn-primary right"> 
                    <i style="margin-right: 7px;" class="fa fa-shopping-cart"></i> 
                        <span>আমার অর্ডার</span>                   
                    </a>
                    
            
                </div>
                
            </div>
            
        </div>

             
        <div  id="slider">
            
            <div class="col-md-12">
                
                <div class="carousel slide" id="myCarousel" data-ride="carousel">
                    
                    <ol class="carousel-indicators">
                        
                        <li class="active" data-target="#myCarousel" data-slide-to="0"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                        <li data-target="#myCarousel" data-slide-to="3"></li>
                        <li data-target="#myCarousel" data-slide-to="4"></li>
                        <li data-target="#myCarousel" data-slide-to="5"></li>
                        <li data-target="#myCarousel" data-slide-to="6"></li>
                        
                    </ol>
                    
                    <div class="carousel-inner">
                        
                      
                        
                        <div class="item active">
                            
                            <img  style="width: 1500px; height:450px"  src="img/medicin2.jpeg" alt="Slider Image 2">
                        </div>

                        <div class="item ">
                            
                            <img style="width: 1500px; height:450px" src="img/ehospital01.png" alt="Slider Image 1">
                                                       
                        </div>

                        <div class="item">
                            
                            <img  style="width: 1500px; height:450px"  src="img/Thermometer.jpeg" alt="Slider Image 2">
                        </div>

                        <div class="item">
                            
                            <img  style="width: 1500px; height:450px"  src="img/preshar.jpg" alt="Slider Image 2">
                        </div>

                        <div class="item">
                            
                            <img  style="width: 1500px; height:450px"  src="img/doctor1.jpeg" alt="Slider Image 2">
                        </div>
                        
                        <div class="item">
                            
                            <img  style="width: 1500px; height:450px"  src="img/diabatis.webp" alt="Slider Image 3">
                            
                        </div>
                        
                        <div class="item">
                            
                            <img  style="width: 1500px; height:450px"  src="img/ehospitalsystem-banner.webp" alt="Slider Image 4">
                            
                        </div>
                        
                    </div>
                    
                    <a href="#myCarousel" class="left carousel-control" data-slide="prev">
                        
                        <span class="glyphicon glyphicon-chevron-left"></span>
                        <span class="sr-only">Previous</span>
                        
                    </a>
                    
                    <a href="#myCarousel" class="right carousel-control" data-slide="next">
                        
                        <span class="glyphicon glyphicon-chevron-right"></span>
                        <span class="sr-only">Next</span>
                        
                    </a>
                    
                </div>
                
            </div>
            
        </div>


        <div >
                <marquee behavior="scroll" direction="left" onmouseover="this.stop();" onmouseout="this.start();">ই-হাসপিটাল ফার্মেসিতে স্বাগতম... এখানে সব পণ্যে ১০% ছাড়!!!</marquee>
        </div>

            
        <section class="about" id="about">
                        <div class="max-width container">
                            <h2 class="title">আমাদের সম্পর্কে</h2>
                            <div class="about-content">
                                <div class="column left">
                                            <img src="img/doctor1.jpeg" alt="">
                                </div>
                                <div class="column right">
                                    <div class="text">এখানে আপনি পাবেন <span class="typing_2"> </span></div>
                                    <p>আজকে আমি একটি নতুন ব্যবসার সুযোগ হিসেবে বাংলাদেশে অনলাইন ফার্মেসির উপর ফোকাস করছি। এই নিবন্ধটি জুড়ে, আমি অনলাইন মেডিসিন স্টোর কীভাবে কাজ করে এবং নতুন ব্যবসার সুযোগ তৈরি করে এবং সেই সুযোগগুলি ব্যবহার করে লাভের মার্জিন কীভাবে বাড়ানো হবে তার সমস্ত কারণ বর্ণনা করেছি। তাই আপনার ভবিষ্যৎ...</p>
                                    <a href="readMore.php">আরও পড়ুন</a>
                                </div>
                            </div>
                        </div>
            </section>


            <div id="advantage">
                <div class="container">
                <h2 class="title">আমরা বিশ্বাস করি</h2>
                    <div class="same-height-row">
                        <div class="col-sm-4">
                            <div class="box same-height">
                                <div class="icon">
                                <i class="fa fa-heart"></i> 
                                </div>
                                <h3><a href="#">আমরা আমাদের গ্রাহককে সাহায্য করি</a></h3>
                                <p>আজকে আমি একটি নতুন ব্যবসার সুযোগ হিসেবে বাংলাদেশে অনলাইন ফার্মেসির উপর ফোকাস করছি। এই নিবন্ধটি জুড়ে, আমি অনলাইন মেডিসিন স্টোর কীভাবে কাজ করে এবং নতুন ব্যবসার সুযোগ তৈরি করে এবং সেই সুযোগগুলি ব্যবহার করে লাভের মার্জিন কীভাবে বাড়ানো হবে তার সমস্ত কারণ বর্ণনা করেছি। </p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height">
                                <div class="icon">
                                <i class="fa fa-tag"></i> 
                                </div>
                                <h3><a href="#">উত্তম মূল্য</a></h3>
                                <p>আজকে আমি একটি নতুন ব্যবসার সুযোগ হিসেবে বাংলাদেশে অনলাইন ফার্মেসির উপর ফোকাস করছি। এই নিবন্ধটি জুড়ে, আমি অনলাইন মেডিসিন স্টোর কীভাবে কাজ করে এবং নতুন ব্যবসার সুযোগ তৈরি করে এবং সেই সুযোগগুলি ব্যবহার করে লাভের মার্জিন কীভাবে বাড়ানো হবে তার সমস্ত কারণ বর্ণনা করেছি।</p>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <div class="box same-height">
                                <div class="icon">
                                <i class="fa fa-thumbs-up"></i> 
                                </div>
                                <h3><a href="#">১০০% আসল পণ্য</a></h3>
                                <p>আজকে আমি একটি নতুন ব্যবসার সুযোগ হিসেবে বাংলাদেশে অনলাইন ফার্মেসির উপর ফোকাস করছি। এই নিবন্ধটি জুড়ে, আমি অনলাইন মেডিসিন স্টোর কীভাবে কাজ করে এবং নতুন ব্যবসার সুযোগ তৈরি করে এবং সেই সুযোগগুলি ব্যবহার করে লাভের মার্জিন কীভাবে বাড়ানো হবে তার সমস্ত কারণ বর্ণনা করেছি।</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>






        <section id="outerContent">  

            <div id="hot">
                    <div class="box_h">
                        <div class="container">
                            <div class="col-md-12">
                                <h2>এন্টিবায়োটিক ঔষধ</h2>
                            </div>
                        </div>
                    </div>
                </div>
            <div id="content" class="container">
                    <div class="row s_slider">
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="details.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/as.webp" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="details.php">অ্যামিকাসিন</a>
                                    </h3>
                                    <p class="price">১২ টাকা</p>
                                    <p class="button">
                                        <a href="details.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="detailsMAir.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/gen.webp" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="detailsMAir.php">জেনটামাইসিন</a>
                                    </h3>
                                    <p class="price">১৫০ টাকা</p>
                                    <p class="button">
                                        <a href="detailsMAir.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="detailsHp.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/cana.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="detailsHp.php">কানামাইসিন</a>
                                    </h3>
                                    <p class="price">৮৫ টাকা</p>
                                    <p class="button">
                                        <a href="detailsHp.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="detailsAsus.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/niyo.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="detailsAsus.php">নিওমাইসিন</a>
                                    </h3>
                                    <p class="price">১২৫ টাকা</p>
                                    <p class="button">
                                        <a href="detailsAsus.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="detailsLenvo.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/netilmicin-250x250.webp" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="detailsLenvo.php">নেটিলমাইসিন</a>
                                    </h3>
                                    <p class="price">১১০ টাকা</p>
                                    <p class="button">
                                        <a href="detailsLenvo.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>                     
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="detailsSurfs.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="images/tobramycin-0-3-500x500.webp" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="detailsSurfs.php">টোবরামাইসিন</a>
                                    </h3>
                                    <p class="price">১৯০ টাকা</p>
                                    <p class="button">
                                        <a href="detailsSurfs.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" >Next</button>
                    
                    </div>
                        
                    
            </div>
        </section>


        <section id="outerContent hpnSen">
            <div id="content headPhnSec" class="container ">

                    <div id="hot ">
                            <div class="box_h box_h2">
                                <div class="container">
                                    <div class="col-md-12 headTitle">
                                        <h2> স্ফিগমোম্যানোমিটার</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row s_slider1">

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="h2wrlsHPhone.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/depositphotos_10815241-stock-photo-medical-sphygmomanometer.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="h2wrlsHPhone.php">অয়ান স্ফিগমোম্যানোমিটার </a>
                                    </h3>
                                    <p class="price">৩০৫০ টাকা</p>
                                    <p class="button">
                                        <a href="h2wrlsHPhone.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="fluaHPhone.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/istockphoto-466567025-612x612.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="fluaHPhone.php">মারকুরি স্ফিগমোম্যানোমিটার</a>
                                    </h3>
                                    <p class="price">৫৪৩০ টাকা</p>
                                    <p class="button">
                                        <a href="fluaHPhone.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="cuteWlsHPhn.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/digital.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="cuteWlsHPhn.php">অমরণ বিপি৭৮৫ স্ফিগমোম্যানোমিটার</a>
                                    </h3>
                                    <p class="price">৭৯৯৯ টাকা</p>
                                    <p class="button">
                                        <a href="cuteWlsHPhn.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="gHPhn.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/digi2.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="gHPhn.php">ডিজিটাল স্ফিগমোম্যানোমিটার</a>
                                    </h3>
                                    <p class="price">৫০০০ টাকা</p>
                                    <p class="button">
                                        <a href="gHPhn.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="bhp.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/jaziki.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="bhp.php">জে.পি.ই স্ফিগমোম্যানোমিটার</a>
                                    </h3>
                                    <p class="price">২৫০০ টাকা</p>
                                    <p class="button">
                                        <a href="bhp.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div> 
                            <!-- মাকিএশন  -->
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="twee.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="headPhone/bp.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    <h3>
                                    <a href="twee.php">বি.পি স্ফিগমোম্যানোমিটার</a>
                                    </h3>
                                    <p class="price">৪০৫০ টাকা</p>
                                    <p class="button">
                                        <a href="twee.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" >Next</button>
                    
                    </div>
                                
            </div>
        </section>


        <section id="outerContent">  
            <div id="hot">
                    <div class="box_h">
                        <div class="container">
                            <div class="col-md-12">
                                <h2>থার্মোমিটার</h2> 
                                <!-- Pizza & Burger -->
                            </div>
                        </div>
                    </div>
                </div>
            <div id="content" class="container">
                    <div class="row s_slider">
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="BeefPizza.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="food/mrc.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="BeefPizza.php">এমআরসি থার্মোমিটার</a>
                                    </h3>
                                    <p class="price">৬৫০ টাকা</p>
                                    <p class="button">
                                        <a href="BeefPizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="Cheesepizza.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="food/ComfortFlexDigitalThermometer.png" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="Cheesepizza.php">কমফোর্টফ্লেক্স ডিজিটাল থার্মোমিটার</a>
                                    </h3>
                                    <p class="price">৮৯০ টাকা</p>
                                    <p class="button">
                                        <a href="Cheesepizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                    <a href="SicilianPizza.php">
                                        <img style="width: 350px; height: 265px" class="img-responsive" src="food/DT-R1221AWGMedicalThermometer.jpeg" alt="macbookLaptop">
                                    </a>

                                    <div class="text">
                                        <h3>
                                        <a href="SicilianPizza.php">ডিটি-আর১২২১ থার্মোমিটার</a>
                                        </h3>
                                        <p class="price">৭৬০ টাকা</p>
                                        <p class="button">
                                            <a href="SicilianPizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                        
                                        </p>
                                    
                                    </div>
                                </div>
                        </div>
                    
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="ItalianPizza.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="food/Infrared In-Ear Digital Thermometer.jpg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="ItalianPizza.php">ইনফ্রারেড ইন-ইয়ার থার্মোমিটার</a>
                                    </h3>
                                    <p class="price">৯৯০ টাকা</p>
                                    <p class="button">
                                        <a href="ItalianPizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="GreekPizza.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="food/PSD-Thr.jpg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="GreekPizza.php">পি এস ডি থার্মোমিটার</a>
                                    </h3>
                                    <p class="price">৭০০ টাকা</p>
                                    <p class="button">
                                        <a href="GreekPizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product">
                                <a href="DetroitPizza.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="food/Smart Ear Digital Thermometer.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text">
                                    <h3>
                                    <a href="DetroitPizza.php">ইয়ার ডিজিটাল থার্মোমিটার</a>
                                    </h3>
                                    <p class="price">৭৫০ টাকা</p>
                                    <p class="button">
                                        <a href="DetroitPizza.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                    
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" >Next</button>
                    
                    </div>
                        
                    
            </div>
        </section>


        <section id="outerContent hpnSen">
            <div id="content headPhnSec" class="container ">

                    <div id="hot ">
                            <div class="box_h box_h2">
                                <div class="container">
                                    <div class="col-md-12 headTitle">
                                        <h2>চশমা</h2>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <div class="row s_slider1">
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="realme8.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-1.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                  
                                    <p class="price">৩৫০ টাকা</p>
                                    <p class="button">
                                        <a href="realme8.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="realmec35.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-6.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    
                                    <p class="price">৪০০ টাকা</p>
                                    <p class="button">
                                        <a href="realmec35.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="samsungGlxs21.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-5.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    
                                    <p class="price">২৫০ টাকা</p>
                                    <p class="button">
                                        <a href="samsungGlxs21.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="smsngGxys22.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-2.jpeg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    
                                    <p class="price">৫০০ টাকা</p>
                                    <p class="button">
                                        <a href="smsngGxys22.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="oppreno.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/61X0bQv1bnL._UX569_.jpg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                    
                                    <p class="price">৫৫০ টাকা</p>
                                    <p class="button">
                                        <a href="oppreno.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="oppof21pro.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-4.jpg" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                   
                                    <p class="price">৬৫০ টাকা</p>
                                    <p class="button">
                                        <a href="oppof21pro.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="vivoy33.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-7.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                   
                                    <p class="price">২৫০ টাকা</p>
                                    <p class="button">
                                        <a href="vivoy33.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
        
                        <div class="col-sm-4 col-sm-6 single">
                            <div class="product headphnSlid">
                                <a href="vivoy23.php">
                                    <img style="width: 350px; height: 265px" class="img-responsive" src="mobile/ch-8.webp" alt="macbookLaptop">
                                </a>

                                <div class="text t_x">
                                  
                                    <p class="price">৩৫০ টাকা</p>
                                    <p class="button">
                                        <a href="vivoy23.php" class="btn btn-default">বিস্তারিত দেখুন</a>
                                    
                                    </p>
                                
                                </div>
                            </div>
                        </div>
                        
                        <button class="slick-next slick-arrow" aria-label="Next" type="button" >Next</button>
                    
                    </div>
                                
            </div>
        </section>
        
        <section class="contact" id="contact">
            <div class="max-width container">
                <h2 class="title">সেরা হসপিটালের অবস্থান </h2>
                <div class="contact-content">
                    <div class="column left">
                        <div class="mapDiv">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.3922957217756!2d90.41356271498235!3d23.804645284562657!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7abd941ed15%3A0xf151df4e4e9c047c!2sUnited%20Hospital%20Limited!5e0!3m2!1sen!2sbd!4v1667791972074!5m2!1sen!2sbd" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> </div>
                    </div>


                    <?php
                                    
                        $conn = new mysqli('localhost','root','','munshiShop');
                        if(!$conn){
                            echo 'not connect';
                        }


                        if ( isset($_POST['submit'])) {
                                    $User_Name = $_POST['userName'];
                                    $user_email = $_POST['userEmail'];
                                    $user_cmnt = $_POST['comment'];

                                    if (!empty($User_Name)  && !empty($user_email) && !empty($user_cmnt) ) {
            
        
            
                                        $sql = "INSERT INTO userComment (userName,	userEmail,	comment)
                                        VALUES('$User_Name' ,  '$user_email', '$user_cmnt')";
                                        if ($conn->query($sql)== TRUE) {
                                        
                                
                                        }else{
                                            echo 'not in'.$conn->error;
                                        }
                                
                                
                                    }
                                
                        }


                    ?>

                    <div class="column right">
                        <div class="text">ওয়েবসাইটি ব্যাবহার সম্পর্কে কিছু মন্তব্য করুন</div>
                        <form action="index.php" method="POST">
                            <div class="fields">
                                <div class="field name">
                                    <input type="text" placeholder="নাম" name="userName" required>
                                </div>

                                <div class="field email">
                                    <input type="email" placeholder="ই-মেইল" name="userEmail" required>
                                </div>
                            </div>
                            

                                <div class="field textarea">
                                    <textarea cols="30" rows="10" project placeholder="কমেন্ট করুন.." name="comment"   required></textarea>
                                </div>
                                <div class="button">
                                    <button  type="submit"  name="submit">পাঠান</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>

      

        <?php 

            include("includes/footer.php");

        ?>

        
            <script src="js/jquery-331.min.js"></script>
            <script src="https://cdn.jsdelivr.net/npm/typed.js@2.0.12"></script>
            <script src="js/bootstrap-337.min.js"></script>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.min.js" integrity="sha512-XtmMtDEcNz2j7ekrtHvOVR4iwwaD6o/FUJe6+Zq+HgcCsk3kj4uSQQR8weQ2QVj1o0Pk6PwYLohm206ZzNfubg==" crossorigin="anonymous"></script>
        
    <script>
        

        var typed = new Typed(".typing_2", {
            strings: [' এন্টিবায়োটিক ঔষধ ।', ' থার্মোমিটার ।',' স্ফিগমোম্যানোমিটার ।',' ব্লাড সুগার মিটার ।',' চশমা ।'],
            typeSpeed: 74,
            backSpeed: 74,
            loop: true
        });

  


        $('.s_slider').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
        });

        $('.s_slider1').slick({
            slidesToShow: 3,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 3000,
        });




    </script>
            
            
        </body>
</html>

<?php 

    }else{
        header("location:checkout.php");
    }

?>

