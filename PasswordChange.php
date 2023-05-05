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

    <title>Request for password recovery</title>
</head>
<body>


    <main>
        
        
        <section class="flex-col py-36"  style="background-image: url('folder2/bgPng1.png');">
            <div class="translate-y-20">
                <div class="flex-col my-30">
                    <h1 class="font-bold text-5xl flex justify-center " style="font-family: 'Hind Siliguri', sans-serif;">অভিনন্দন!</h1>
                    <p class="font-semibold text-base py-3 flex justify-center" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার পাসওয়ার্ড রিকোভারি ইমেইল আপনার ইমেইল এড্রেসে পাঠানো হয়েছে অনুগ্রহ করে এই ট্যাবটি ক্লোজ করে দিয়ে লগ-ইন করুন </p>
                </div>
    
                <div class="grid justify-center my-10 ">
                    <form action="PasswordChangeConfig.php" method="post" class="grid justify-center ">
                    <label for="" style="font-family: 'CharukolaUltraLight', sans-serif;">আপনার ইমেইলটি টাইপ করুন </label><br>
                    <input type="text" name="Email" id=""  style="font-family: 'CharukolaUltraLight', sans-serif;" class="bg-transparent border-2 w-96 pl-4 border-slate-900 rounded-lg py-2 hover:scale-110 hover:border-[#c04848] ease-out duration-700" placeholder=""><br>
                    <input type="submit" value="ইমেইল সাবমিট" name="submit" style="font-family: 'CharukolaUltraLight', sans-serif;" class="px-28 -translate-x-6 bg-gradient-to-l from-[#c04848] to-[#480048] drop-shadow-2xl text-white font-extrabold py-4 border-none mx-12 hover:rounded-2xl hover:shadow-2xl hover:cursor-pointer hover:scale-110 hover:bg-gradient-to-r from-[#c04848] to-[#480048] transition-all ease-out duration-700">
                    </form>
                   
                </div>
            </div>
           

        </section>
    </main>
    
</body>
</html>