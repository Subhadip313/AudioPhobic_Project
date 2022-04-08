<?php 
if(session_status() !== PHP_SESSION_ACTIVE) session_start();
if (isset($_SESSION["User_Email"]) == FALSE) {
  header ('Location:index.php');
exit;
}
  if (empty($_SESSION['token2'])) {
    $_SESSION['token2'] = bin2hex(random_bytes(32));
}
$token2 = $_SESSION['token2'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174253246-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174253246-1');
</script>
<title>AudioPhobic | Online Bengali Audio Stories Streaming Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta
  name="description"           
  content="Audiophobic is an online bengali audio story streaming website, it contains audio stories from different radio stations. Sunday Suspense, audio stories, bengali audio stories. Feluda, Byomkesh, Shanku, Sherloack Homes all kind of characters audio stories are available here.">
  <meta name="author" content="Subhadip Dutta">
   <meta name="keywords" content="sunday suspense | byomkesh bakshi, professor shonku, feluda: 50 years of ray's detective, Byomkesh Bakshi, Tarinikhuro, Sherlock Holmes, Sherlock Holmes Bengali Audio Story, audio story, bangla audio story, sunday suspense">
<link rel="stylesheet" href="style_home.css">
<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
    <script src="https://cdn.onesignal.com/sdks/OneSignalSDK.js" async=""></script>
<script>
  window.OneSignal = window.OneSignal || [];
  OneSignal.push(function() {
    OneSignal.init({
      appId: "4fe901d7-d38d-4976-82cc-9bdc527e9975",
    });
  });
</script>
</head>
<body>
  <!--The profile and catagory division-->
  <div class="clearfix" id="pc">
    <div class="title" style="float:left; width:20%; cursor: pointer;" onclick="window.location='#home'">
        <!--<h1>AudioPhobic</h1>-->
        <img src="webiste_images/audiophobic_icon2.png" class="audiophobic_icon" style="" alt="main_icon">
   <p style="float:left; margin-top:18px; margin-left:5px;"><h2>AudioPhobic</h2></p>
      </div>
      <div id="home" class="search_bar" style="width: 60%; float: left;">
        <form action="">
          <div class="search">
         <input id="search" type="text" placeholder="Search.." name="search" aria-labelledby="search_button">
       </div>
            <div class="search_icon"><button id="search_button" type="submit" aria-label="search"><i class="fa fa-search" style="color:#000;"></i></button></div>
          </form>
      </div>
      <div class="title" style="float:left; width:20%; cursor: pointer;" onclick="openNav()">
        <div style="overflow:auto;">
          <p class="user_name" style="">
          <?php  print_r($_SESSION["User_Name"]); ?></p>
          <img class="user_icon_image" src="webiste_images/user_icon1.png" alt="user" style="float:right; height:50px; width:50px; border-radius:50%; border: 2px solid black;">
        </div>
  </div></div>
  <!--For mobile and tab devices-->
  
  <div class="title_mob" id="home_mob">
        <!--<h1>AudioPhobic</h1>-->
        <a href="#home_mob"><img src="webiste_images/audiophobic_icon2.png" class="audiophobic_icon" style="" alt="main_icon" >
   <p style="float:left; margin-top:18px;">AudioPhobic</p></a>
   <img class="user_icon_image" src="webiste_images/user_icon1.png" alt="user" style="float:right; height:50px; width:50px; border-radius:50%; border: 2px solid black;"onclick="openNav()">
      </div>
        <form class="search_bar_mobile" action="">
          <div class="search">
         <input id="mobile_search" type="text" placeholder="Search.." name="search" aria-labelledby="search_button">
       </div>
            <div class="search_icon"><button id="search_button_mobile" type="submit" aria-label="search"><i class="fa fa-search" style="color:#000;"></i></button></div>
          </form>
      <div class="search_result_mobile">
      </div>

  <div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
      <div class="user_info">
        <div class="user_image">
          <h3>Profile</h3>
          <img class="user_icon_image" src='webiste_images/user_icon1.png' alt="user_image">
        </div>
        <div class="user_info">
          <p>Welcome, <?php  print_r($_SESSION["User_Name"]); ?></p>
          <button class="change_buttton" id="change_icon" style="background:#000;">Change Icon</button>
          <button class="change_buttton" id="sign_out" style="background:red;" onclick="window.location='signout.php'">Sign Out</button>
          <div id="myModal" class="user_icon-modal">
            <div class="user_icon-modal-content">
              <h4 style="">Double click on the icon to select the Avtar</h4>
               <img class="user_icon" src="user_icons\icon1.png" id="icon1.png">
               <img class="user_icon" src="user_icons\icon2.png" id="icon2.png">
               <img class="user_icon" src="user_icons\icon3.png" id="icon3.png">
               <img class="user_icon" src="user_icons\icon4.png" id="icon4.png">
               <img class="user_icon" src="user_icons\icon5.png" id="icon5.png">
               <img class="user_icon" src="user_icons\icon6.png" id="icon6.png">
               <img class="user_icon" src="user_icons\icon7.png" id="icon7.png">
               <img class="user_icon" src="user_icons\icon8.png" id="icon8.png">
               <img class="user_icon" src="user_icons\icon9.png" id="icon9.png">
               <img class="user_icon" src="user_icons\icon10.png" id="icon10.png">
               <img class="user_icon" src="user_icons\icon11.png" id="icon11.png">
               <img class="user_icon" src="user_icons\icon12.png" id="icon12.png">
               <img class="user_icon" src="user_icons\icon13.png" id="icon13.png">
               <img class="user_icon" src="user_icons\icon14.png" id="icon14.png">
               <img class="user_icon" src="user_icons\icon15.png" id="icon15.png">
               <img class="user_icon" src="user_icons\icon16.png" id="icon16.png">
               <img class="user_icon" src="user_icons\icon17.png" id="icon17.png">
               <img class="user_icon" src="user_icons\icon18.png" id="icon18.png">
               <img class="user_icon" src="user_icons\icon19.png" id="icon19.png">
               <img class="user_icon" src="user_icons\icon20.png" id="icon20.png">
              <div class="success_user_icon"></div>
            </div>
          </div>
          <!--<button> Profile</button> <button> Sign out</button>-->
        </div></div></div><!--div mySidenav-->
  <div class="clearfix" id="fix1">
  <div id="pc" class="side1">
    <div class="title2" style="cursor: pointer;" onclick="window.location='#home'">
        <!--<h1>AudioPhobic</h1>-->
        <img src="webiste_images/audiophobic_icon2.png" class="audiophobic_icon" style="" alt="main_icon">
   <p style="float:left; margin-top:18px; margin-left:5px;"><h2>AudioPhobic</h2></p>
      </div>
  <div class="catagory">
        <h3 style="text-align:center;">Categories</h3>
        <button class="dblist" value="feluda">Feluda Unlimited</button>
        <button class="dblist" value="shanku">Shanku Special</button>
        <button class="dblist" value="horror">Horror and Suspense</button>
        <button class="dblist" value="byomkesh">Byomkesh Special</button>
        <button class="dblist" value="tarinikhuro">Tarinikhuro Special</button>
        <button class="dblist" value="sh">Sherlock Holmes</button>
        <button class="dblist" value="tt">Taranath Tantrik</button>
        <button class="dblist" value="other">Other</button>
      </div>
    </div>
    <div class="mid">
      <div class="hint"></div>
      <div id="" class="search_result">
        </div>
      <div class="slideshow-container">
<!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="home_audio/audio_images/Ayna - Nityananda Khan.png" style="width:100%" alt="sunday-suspense">
    </div>
<div class="mySlides fade">
    <img src="home_audio/audio_images/Brindaboney Bibhishon.png" style="width:100%" alt="shonku">
    </div>
<div class="mySlides fade">
    <img src="home_audio/audio_images/Betaal - Taranath Tantrik.png" style="width:100%" alt="sunday-suspense">
    </div>
<div class="mySlides fade">
    <img src="home_audio/audio_images/Bhog - Aveek Sarkar.png" style="width:100%" alt="sunday-suspense">
</div>
<div class="mySlides fade">
    <img src="home_audio/audio_images/Dishergarh Ey Dishehara.png" style="width:100%" alt="sunday-suspense">
</div>
</div><!--slideshow container-->
<h3>MOST POPULAR STORIES</h3>
      <div class="popular">

      </div>
      <h3>RECENTLY PLAYED</h3>
      <div class="recent">
        <span class="recent_message"></span>
      </div>
      
      <h3>LATEST UPLOADS</h3>
      <div class="latest">
      </div>
      <div class="catagory_mobile">
        <h3 style="text-align:left;">Browse by Categories</h3>
        <button class="dblist_mob" value="feluda">Feluda Unlimited</button>
        <button class="dblist_mob" value="shanku">Shanku Special</button>
        <button class="dblist_mob" value="horror">Horror and Suspense</button>
        <button class="dblist_mob" value="byomkesh">Byomkesh Special</button>
        <button class="dblist_mob" value="tarinikhuro">Tarinikhuro Special</button>
        <button class="dblist_mob" value="sh">Sherlock Holmes</button>
        <button class="dblist_mob" value="tt">Taranath Tantrik</button>
        <button class="dblist_mob" value="other">Other</button>
      </div>
      <h3 id="audio_cat_name"></h3>
      <div class="audio_fetch_mobile">
      </div>
      <div class="main_player" id="main_player">
        <h3><span id="fix7"></span>Please wait for few seconds and let the audio load a bit.
        <span style="font-size:14px; color:#777; font-weight:500;">(Some of the Audio Stories sound quality may not be very good, Sorry for that. As I have mentioned before Sunday Suspense is broadcasted by 98.3 FM and these are their content, I have gathered this stories and brought them to you guys in a user-friendly interface only.)</span></h3>
        <div id="audio_time_saved"></div>
      <div class="clearfix">
        <div  class="content_box" style="border:1px solid #000; background-color:#fff; overflow:auto;" id="fix4">
  <!--<img id="img_list" src="webiste_images/sunday_suspense.png" style="width:100%; height:462px;" alt="feluda" onclick="specialfun()">-->
    <div class="audio_list">
      <!--<div id="feluda"></div>
      <div id="shanku"></div>
      <div id="horror"></div>
      <div id="byomkesh"></div>
      <div id="tarinikhuro"></div>-->

    </div>
</div>
      <div class="content_box" style="background-color:#000">
       <div class="save_audio"><a class="fa fa-save" title="Save the audio"></a></div>
  <div style="height:300px;position:relative;">
    <img id="aud_img" src="home_audio/audio_images/shonku.png" style="height:300px; width:100%;" alt="image"><br>
    <marquee class="info" scrolldelay="5" scrollamount="4">Professor Shanku O Gorilla - Satyajit Roy</marquee>
</div>
<div style="height: 168px;">
  <audio id="player" src="home_audio\Professor Sanku O Gorilla.mp3"></audio>
  <input type="hidden" value="1" id="audio_id">
  <div class="player">

<div class="progress-container" style="">
  <span class="progress_bar"><span class="progress_fill"></span></span>
<input type="range" value="0" class="progress" id="progress" min="0" max="100" step="0.1" value="0" style="width:100%;">
</div>
<div class="" style="padding-top:15px;">
<p id="fix5" style="color:#fff; margin:0;">Progress: <span class="status"></span>
<span style="float:right">Duration: <span class="duration" style="margin-right:25px;"></span></span>
</p>
<p id="fix6" style="color:#fff; margin:0;">Progress: <span class="status_mobile"></span> / <span class="duration_mobile" style="margin-right:25px;"></span>
</p>
</div>
<div class="clearfix">
<div class="controls">
<button class="play-pause" style="cursor: pointer;" type="button" aria-label="play_pause"><i id="btn" class="fa-play fa" style="font-size:46px;"></i></button>
</div>
<div class="controls" id="fix2">
  <div class="slider-container">
<span class="bar_mob"><span class="fill_mob"></span></span>
  <input type="range" min="0" max="100" value="100" step="1" class="slider" id="slider_mob">
</div>
<p style="padding:0; color:#fff;"><i class='fa fa-volume-down' style='font-size:20px'></i> <span id="demo_mob" style='font-size:20px'></span></p>
</div>
<div class="controls" id="fix3">
<div class="slider-container">
<span class="bar"><span class="fill"></span></span>
  <input type="range" min="0" max="100" value="10" step="1" class="slider" id="slider">
</div>
<p style="padding:0; color:#fff;"><i class='fa fa-volume-down' style='font-size:20px'></i> <span id="demo" style='font-size:20px'></span></p>
</div><!--control class div-->
</div><!--control class clearfix-->
</div><!--player class div-->
</div><!--3rd box div-->
</div><!--parent content box div-->
</div>
</div><!--main palyer div-->
<h3>Your saved audio stories</h3>
<p style="font-size:15px; font-weight:400;">( Please wait for few seconds and let the audio load, the audio duration will come automatically )</p>
<div class="clearfix" style="border:2px solid #777;">
  <div class="saved_audios_list">
  </div>
<div class="saved_audios_details">
<div class="load_details">    
    <h3>Details:</h3>
    <div class="clearfix">
 <div class="side_image"> 
  <img id="audio_save_image" src="" alt="audio_image" style="">
</div>
  <div class="details">
<audio id="save_player" src=""></audio>
<p id="audio_name" style="font-size:1em;"></p>
<p id="audio_author" style="font-size:0.9em;"></p>
<p id="timestamp"></p>
<p id="progress_time"></p>
<p id="progress_percent"></p>
<input type="hidden" value="" id="save_time">
<button class="play_save_audio" value="" style="background-color:#000;color:#fff; float:left;">Go To Player</button>
<button id="delete_save_time" value="" style="background-color:red;color:#fff; float:right;">Delete</button>
</div> 
</div>
</div>
  </div><!--.saved_audios_details-->
</div><!--clearfix-->

<!--adding the feedback and comment part-->
<h3 id="comment_container" style="padding:50px 0 0 0;">Please feel free to leave a feedback for the website, Thank you.</h3>
<div class="clearfix">
  <div class="comment_disp">
<div class="disp_container" style="background-color:#f1f1f1; margin: 5% 0;">
      <div class="message"></div>
      <div class="comment"></div>
    </div>
  </div>
  <div class="comment_form">
    <form id="myform_comment" name="myform_comment" class="myform_comment" method="post">
      <input id="token2" type="hidden" name="token" value="<?php echo $token2; ?>" />
      <h1>Your Feedback</h1>
      <hr>
      <label for="comment_name"><b>Name<span style="color:red;">*</span></b></label>
      <input id="comment_name" type="text" placeholder="<?php echo $_SESSION["User_Name"];?>" value="<?php echo $_SESSION["User_Name"];?>" name="comment_name" disabled>
      <label for="occupation"><b>Occupation<span style="color:red;">*</span></b></label>
      <input id="occupation" type="text" placeholder="occupation" name="occupation">
      <label for="Comment"><b>Comment<span style="color:red; font-size:14px;"> (350 characters max) *</span></b></label>
      <textarea id="Comment" name="Comment" rows="4" cols="50" wrap="hard" maxlength="350" title="350 characters max"></textarea>
      <input id="Submit" class="comment_button" type="submit" name="comment_submit" value="Submit">
      <input id="Edit" class="comment_button" type="submit" name="comment_submit" value="Edit" style="background-color:#000; color:#fff;">
      <input id="Delete" class="comment_button" type="submit" name="comment_submit" value="Delete" style="background-color:red; color:#fff;">
    </form>
  </div>
  
</div>
</div><!--mid div end-->
</div><!--Content div clearfix-->
<!--Mobile ready showcase-->
<div id="PWA_APP" class="PWA_mobile clearfix" style="">
        <div class="PWA_mobile_side" style="">
        <img src="webiste_images/audiophobic_icon2.png" style="" alt="audiophobic_icon">
      </div>
        <div class="PWA_mobile_main" style="">
          <p class="PWA_mobile_main_heading" style="">Now Listen to audio Stories faster with our free app!</p>
          <p class="PWA_mobile_main_para" style="">I have made two kind of app, One is Web App another is Android app install the web app from the install button below or download the APK from the download link.</p>
        <button class="PWA_button_mobile" style="width:100px; background-color:#000; color:#fff;">Web APP</button>
        <a class="audiophobic_android" style="" href= "https://audiophobic.online/AudioPhobic.apk" download>Android APP</a>
      </div>
      </div>
<!--Donation part-->
<div class="donation_part">
<h2 style="color: #ff6600">Help me to grow</h2>
<hr>
<div class="grow" style="">
<p style="font-size:20px; font-weight:600;">Hi <?php echo $_SESSION["User_Name"];?>,</p> 
 <p> I have been working for the past 2.5 months and for 14-15 hours a day to complete this project. As I am new to backend development, I had to learn PHP, jQuery, AJAX, JSON and then apply them on my website, though this is the first full-stack project that  I have made.  </p>
<p>I have invested a lot of money in hosting and purchasing the domain name. So, if you like my work and if you enjoy this website and everything it has to offer then, please lend some help whatever you want. </p>
<div style="float:right; text-align: right;">
  
  <b>Subhadip Dutta</b><br>creater of AudioPhobic<br><br>
<img src="webiste_images/audiophobic_icon.png" alt="AudioPhobic" style="height:100px; width:auto; border:2px solid #000"><br>
  <a href="https://www.facebook.com/groups/316654272851755/" rel="noopener noreferrer" target="_blank">Join our Facebook Comunity to support</a>
  </div>
</div>
<div style="float:left;">
  <p>Click on the QR code to scan</p>
 <a href="webiste_images/gpay.jpg" target="_blank"><img src="webiste_images/gpay.jpg" alt="gpay_qr" style="height:100px; width:auto; border:2px solid #000"></a><br> 
<p><b>G-Pay number:</b> +91 6290044365</p>
<p><b>UPI ID:</b> subhadipdutta180@okaxis</p>
</div>
</div>
<!--contact part-->
<div class="footer" style="">
<div class="clearfix">
  <div id="fix43" style="">
    <h4 class="perH4" style="color:#ffdd00;"><i class="fa fa-user-circle">  Subhadip Dutta</i></h4>
   <p style="color:#777;">Please check out my portfolio to learn more about my work.<br><br>
      <a class="mainbutton" href="about.html" target="_blank">PORTFOLIO</a>
   </p>
   <h4 class="perH4" style="color:#ffdd00; margin-top:40px;">Contact Me</h4>
    <span style="font-size:15px">&#9743; Phone no:</span> +91 6290044365<br><br>
  <i class="fa fa-whatsapp" style="font-size:15px; background:none; padding:0; margin:0; display: contents; color:#777;"></i><span style="font-size:15px;"> Whatsapp no:</span> +91 6290044365<br><br>
  <span style="font-size:15px;">&#64; Email Id:</span><span style="color:#fff;"> subhadipdutta180@gmail.com</span><br><br><span style="font-size:15px;">&#64; Email Id:</span><span style="color:#fff;"> user_support@audiophobic.online</span>
  </div>
  <div id="fix44" style="">
   <h4 class="perH4" style="color:#ffdd00;">Credits <span style="color:#fff;">&</span> Appreciation</h4>
   <div id="credit_person">
    <p>
    <img src="webiste_images/DSC_0033.jpg" alt="debaparna_pic" style="float:left; height:60px; width:60px; border-radius:50%; border: #fbb034 solid 2px;">
    <span style="margin-left:10px; font-size:1em; color:#fbb034;">Debaparna Bose</span><br>
    <span style="margin-left:15px; font-size:0.8em;">Logo desginer</span>
    <p style="margin-top: 30px;margin-left: 70px; color:#777;">The logo for the AudioPhobic has been created by her.
      <br>Contact:<span style="color:#fff;"> bosedebaparna@gmail.com</span></p>
    </p>
   </div>
   <div id="credit_person" style="margin-top:30px;">
    <p>
    <img src="webiste_images/sayan.png" alt="debaparna_pic" style="float:left; height:60px; width:60px; border-radius:50%; border: #fbb034 solid 2px;">
    <span style="margin-left:10px; font-size:1em; color:#fbb034;">Sayan Roy</span><br>
    <span style="margin-left:15px; font-size:0.8em;">Student-M.SC(Computer Science)</span>
    <p style="margin-top: 30px;margin-left: 70px; color:#777;">He has helped me with the security testing of this wbsite.
      <br>Contact:<span style="color:#fff;">sayan98.roy@gmail.com <br><a href="https://royninja.github.io/" target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:#fff;"> Portfolio</a></span></p>
    </p>
   </div>
  </div><!--fix44-->
  <div id="fix45" style="">
    <h4 class="perH4" style="color:#ffdd00;">Follow Me</h4>
    <p style="color:#777;">Let us be social</p>
    <div>
      <a href="https://www.facebook.com/subhadip.subha.33" rel="noopener noreferrer" class="fa fa-facebook" target="_blank" title="Facebook"></a> 
      <a href="https://www.linkedin.com/in/subhadip-dutta-a8bb66125/" rel="noopener noreferrer" class="fa fa-linkedin-square" title="Linkdin profile" style="" target="_blank"></a>
      <a href="https://www.instagram.com/mr_perfect_since_1998/" rel="noopener noreferrer" class="fa fa-instagram" target="_blank" title="Instagram"></a>
      <a href="mailto:subhadipdutta180@gmail.com" class="fa fa-google" title="Mail me" target="_blank"></a>
      <a href="https://github.com/Subhadip313" rel="noopener noreferrer" class="fa fa-github" title="Github" style="font-size:15px;color:#fff; border:2px solid #fff;" target="_blank"></a> 
    </div>
  </div>
  <div id="fix45" style="">
    <h4 class="perH4" style="color:#ffdd00;">For Notification</h4>
    <p style="color:#fff;">Onesignal.com</p>
    <p style="color:#777;">For sending notification we use a third party service called Onesignal Push Notification which is a multi-platform push notification service and it is totally FREE to use.<br>
      You can go and visit their website for more information.<br>
      <a href="https://onesignal.com/" rel="noopener noreferrer" title="onesignal" target="_blank">Onesignal.com</a>
    </p>
  </div>
</div>
</div>
<script>
//PWA installation//
if ('serviceWorker' in navigator) {
  window.addEventListener('load', function() {
    navigator.serviceWorker.register('/sw.js').then(function(registration) {
      // Registration was successful
      console.log('ServiceWorker registration successful with scope: ', registration.scope);
    }, function(err) {
      // registration failed :(
      console.log('ServiceWorker registration failed: ', err);
    });
  });
}
let deferredPrompt;
var mobile_button=document.querySelector(".PWA_button_mobile");

window.addEventListener('beforeinstallprompt', (e) => {
  // Prevent the mini-infobar from appearing on mobile
  e.preventDefault();
  // Stash the event so it can be triggered later.
  deferredPrompt = e;
  // Update UI notify the user they can install the PWA
  $(".PWA_button_mobile").css('display','block');
  //showInstallPromotion();
});
mobile_button.addEventListener('click', (e) => {
//$("#PWA_button").click(function(e){
  // Hide the app provided install promotion
  //hideMyInstallPromotion();
   $(".PWA_button_mobile").css('display','none');
  // Show the install prompt
  deferredPrompt.prompt();
  // Wait for the user to respond to the prompt
  deferredPrompt.userChoice.then((choiceResult) => {
    if (choiceResult.outcome === 'accepted') {
      console.log('User accepted the install prompt');
    } else {
      console.log('User dismissed the install prompt');
    }
  });
});
window.addEventListener('appinstalled', (evt) => {
  // Log install to analytics
  console.log('INSTALL: Success');
});

//for making the auto refresh of popular and comment div
$(document).ready(function(){
  refresh_popular();
  refresh_comment();
  refresh_audio_save_time();
});
function refresh_popular(){
  setTimeout(function(){
    $(".popular").load("popular.php");
    refresh_popular();},2000);
}
function refresh_comment(){
  setTimeout(function(){
    $(".comment").load("fetch_comment.php");
    refresh_comment();},2000);
}
function refresh_audio_save_time(){
  setTimeout(function(){
    $(".saved_audios_list").load("fetch_audio_save_list.php");
    refresh_audio_save_time();},2000);
}
//for making the user icon modal page
// Get the modal
var modal = document.getElementById("myModal");
$("#change_icon").click(function(){
  modal.style.display = "block";
});

window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//for making the user_icon using php
$(document).ready(function(){
$(".user_icon").click(function(){
  var user_icon = $(this).attr('id');
  var token2 = $("#token2").val();
  $.ajax({
       url: 'select_user_icon.php',
       method:"POST",
        data:{'user_icon': user_icon,'token2':token2},
        success:function(data){
    $(".success_user_icon").html(data);}
    });
  load_image();
});
load_image();
function load_image(){
$.ajax({
       url: 'fetch_user_image.php',
       method:"POST",
      success:function(data){
    $(".user_icon_image").attr('src',"user_icons/"+ data);

  }
    });
}
});

//for search bar
$(document).ready(function(){
$("#search").keyup(function(){
  var name = $("#search").val();
  if (name == ""){
    $(".search_result").css('display','none');
    $(".search_result").html("");
  }else{
    $.ajax({
       url: 'search.php',
       method:"POST",
        data:{'name': name},
        success:function(data){
    $(".search_result").css('display','block');
    $(".search_result").html(data);}
    });
  }
});
$("#mobile_search").keyup(function(){
  var name = $("#mobile_search").val();
  if (name == ""){
    $(".search_result_mobile").css('display','none');
    $(".search_result_mobile").html("");
  }else{
    $.ajax({
       url: 'search.php',
       method:"POST",
        data:{'name': name},
        success:function(data){
    $(".search_result_mobile").css('display','block');
    $(".search_result_mobile").html(data);}
    });
  }
});
  $("#search_button").click(function(){
    var name = $("#search").val();
    event.preventDefault();
  if (name == ""){
    $(".search_result").css('display','none');
    $(".search_result").html("");
  }else{
    $.ajax({
       url: 'search.php',
       method:"POST",
        data:{'name': name},
        success:function(data){
    //$(".hint").html("<h3>Search Results:</h3>");
    $(".search_result").css('display','block');
    $(".search_result").html(data);}
    });
  }
  });
 $("#search_button_mobile").click(function(){
    var name = $("#mobile_search").val();
    event.preventDefault();
  if (name == ""){
    $(".search_result_mobile").css('display','none');
    $(".search_result_mobile").html("");
  }else{
    $.ajax({
       url: 'search.php',
       method:"POST",
        data:{'name': name},
        success:function(data){
    //$(".hint").html("<h3>Search Results:</h3>");
    $(".search_result_mobile").css('display','block');
    $(".search_result_mobile").html(data);}
    });
  }
  }); 
});


//for the comment
$(document).ready(function(){
$('#Submit').on('click', send_data);
$('#Edit').on('click', edit_data);
$('#Delete').on('click', delete_data);
var User_Name = $("#comment_name").val();
//$("#Submit").click(function(){
function send_data(){
   event.preventDefault();
   var User_ocup = $("#occupation").val();
   var User_comment = $("#Comment").val();
   if(User_ocup == "" || User_comment == "" ){
    window.location = "#comment_container";
    $('.message').html("<span style='color:red;'>Please fill all the fields!</span>");
    //document.getElementById("occupation").focus();
   }else{
    var token2 = $("#token2").val();
    $.ajax({
       url: 'send_comment_audio.php',
       method:"POST",
        data:{'comment_name':User_Name, 'occupation':User_ocup,
        'Comment':User_comment, 'token2':token2},
        success:function(data){
      $('#myform_comment')[0].reset();
      /*$("#occupation").val("");
      $("#Comment").val("");*/
      document.getElementById("occupation").focus();
      $('.message').html(data);
      window.location = "#comment_container";
      load_comment();
     }
    });
}
}
//});
 
function edit_data(){
  event.preventDefault();
  var token2 = $("#token2").val();
  $.ajax({
       url: 'edit_comment_audio.php',
       method:"POST",
       dataType: 'json',
      cache: false,
        data:{'comment_name':User_Name,'token2':token2},
        success:function(data){
          /*var User_ocup = data.User_ocup;
          var User_comment = data.User_comment;*/
        if ( data.error_mess == 1 ){
          window.location = "#comment_container";
          $('.message').html("<span style='color:red;'>You have not given any comment yet!</span>");
      //document.getElementById("occupation").focus();
          }else{
        $('#occupation').val(data.User_ocup);
        $('#Comment').val(data.User_comment);
      }
  }
    });
}

function delete_data(){
  event.preventDefault();
  window.location = "#comment_container";
  $('.message').html("<div style='border:1px solid black; margin:10px; padding:15px;'><p><span style='color:red;'>Are you sure you want to delete your feedback?</span></p><p><button id='yes'>Yes</button> <button id='no'>No</button></p></div>");
  $("#yes").click(function(){
var token2 = $("#token2").val();
  $.ajax({
       url: 'delete_comment_audio.php',
       method:"POST",
        data:{'comment_name':User_Name,'token2':token2},
        success:function(data){
          window.location = "#comment_container";
      $('#myform_comment')[0].reset();
    //document.getElementById("occupation").focus();
  $('.message').html(data);
      load_comment();
     }
    });
  });
  $("#no").click(function(){
    $('.message').html("");
    $('#myform_comment')[0].reset();
    document.getElementById("occupation").focus();
  });
}

load_comment();//for firing the comments when the website laods

function load_comment(){
  $.ajax({
   url:"fetch_comment.php",
   method:"POST",
   success:function(data)
   {
    $('.comment').html(data);
   }
  });
  
 }
});
//special effect for title
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
  if (document.body.scrollTop > 80 || document.documentElement.scrollTop > 80) {
      $(".title2").css("display", "block");
  } else {
      $(".title2").css("display", "none");
  }
}
// Automatic Slideshow - change image every 7 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 7000);    
}

$(document).ready(function(){
    onload_fetch_popular();
    onload_fetch();
    function onload_fetch(){
  $.get("fetch_user_activity.php", function(data){
      $(".recent").html(data);
    });
}
function onload_fetch_popular(){
  $.get("popular.php", function(data){
      $(".popular").html(data);
    });
}
  });


  /*Profile Sidenav */
function openNav() {
  if (window.matchMedia("(max-width: 600px)").matches) {
  /* The viewport is less than, or equal to, 600 pixels wide */
  document.getElementById("mySidenav").style.width = "270px";
  $(".title_mob").css('background-color','#fff');
  $(".title_mob").css('border','2px solid #ffcc00');
} else {
  /* The viewport is greater than 700 pixels wide */
  document.getElementById("mySidenav").style.width = "270px";
}
}

function closeNav() {
  if (window.matchMedia("(max-width: 600px)").matches) {
  /* The viewport is less than, or equal to, 600 pixels wide */
  document.getElementById("mySidenav").style.width = "0";
  $(".title_mob").css('background-color','#ffcc00');
  $(".title_mob").css('border','none');

  } else {
  /* The viewport is greater than 700 pixels wide */
  
  document.getElementById("mySidenav").style.width = "0";
}
}
  /*for fetching the audio  list*/
  $(".dblist").click(function() {
    window.location = "#main_player";
    var audio_cat = $(this).attr('value');
  
  $.ajax({
    url : 'fetch_audio_list.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      data: {'audio_cat': audio_cat},
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".audio_list").html(data);

      }
    });
});
  $(document).ready(function(){
    $.ajax({
    url : 'fetch all list.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".audio_list").html(data);

      }
    });
    $.ajax({
    url : 'latest.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".latest").html(data);

      }
    });
});
  $(".dblist_mob").click(function() {
    var audio_cat = $(this).attr('value');
    var audio_search_cat = $(this).text();
  $("#audio_cat_name").css("display","block");
  $("#audio_cat_name").html("Result for <span style='color:green;'>" + audio_search_cat + "</span>:");
  $.ajax({
    url : 'fetch_audio_list_mob.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      data: {'audio_cat': audio_cat},
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".audio_fetch_mobile").html(data);

      }
    });
});
/*for getting the user recent audio files*/
$(document).ready(function(){
$(document).on('click','.recent_container',function(){
  audio_id = $(this).attr('name'); // $(this) refers to div that was clicked
    /*var audio_info = $('.recent_text').text();
    $(".info").text(audio_info);// using this method is not good, using  marquee is also not good*/
    $.ajax({
    url : 'recent_audio.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      data: {'audio_id': audio_id},
      success:function(data){
        
      $(".recent_message").html(data);
      onload_fetch();

      }
    });
    $("#audio_id").val(audio_id);
    window.location = "#main_player";
  $(".search_result").html("");
    $.ajax({
      url : 'fetch_audio_from_db.php',
      type: 'post',
      dataType: 'json',
      cache: false,
      data: {'audio_id': audio_id},
      success:function(data){
        var audio_loc = "home_audio/" + data.audio_loc;
        var audio_img = "home_audio/audio_images/" + data.audio_image;
        var audio_name = data.audio_name;
        var audio_author = data.audio_author;
        $("#aud_img").attr("src",audio_img);
      $("#player").attr("src",audio_loc);
      $(".info").text(audio_name + " - " + audio_author);



      }
    });
    
});
onload_fetch();
function onload_fetch(){
  $.get("fetch_user_activity.php", function(data){
      $(".recent").html(data);
    });
}
});
/*For the audio player */
//special effect for audio list
var audio_id=0;
/*function specialfun(){
  $("#img_list").css("display", "none");
    $(".audio_list").css("display", "block");
     myVar = setTimeout(changefunc, 120000);//change the content back again after 2 min
  }  
function changefunc(){
  $("#img_list").css("display", "block");
    $(".audio_list").css("display", "none");
}*/
  
var audio = document.getElementById("player");
  var $progress_fill = $(".progress_bar .progress_fill");
  var $progress_slider = $("#progress");
  

$(document).ready(function(){
  
  $(".play-pause").click(function(){
    if (audio.paused == true){
      audio.play();
      $("#btn").toggleClass("fa-pause",true);
      $("#btn").addClass("fa");
      $("#btn").toggleClass("fa-play",false);
      
      }else{
    audio.pause();
    $("#btn").toggleClass("fa-play",true);
    $("#btn").addClass("fa");
    $("#btn").toggleClass("fa-pause",false);
    }
  });
  /*if(audio.paused){
    alert("true");
    if($("#btn").hasClass("fa") && $("#btn").hasClass("fa-pause")){
    $("#btn").toggleClass("fa-pause");
    $("#btn").addClass("fa-play");
      }else{
    //$("#btn").toggleClass("fa-play");
    //$("#btn").addClass("fa-pause");
      }
  }*/
});
//for making the total duration of the file
audio.onloadedmetadata = function(){
var duration = audio.duration;
given_seconds = duration.toFixed(0); 
 hours = Math.floor(given_seconds / 3600); 
 minutes = Math.floor((given_seconds - (hours * 3600)) / 60); 
 seconds = given_seconds - (hours * 3600) - (minutes * 60); 
timeString = hours.toString().padStart(2, '0') + ':' + 
      minutes.toString().padStart(2, '0') + ':' + 
            seconds.toString().padStart(2, '0'); 
//document.querySelector('.duration').textContent  = timeString; 
$(".duration, .duration_mobile").text(timeString);
};
                       
//to make sure if the audio ended then change the pause button
 $(audio).on('ended', function(){
     
      if($("#btn").hasClass("fa") && $("#btn").hasClass("fa-pause")){
        
        $("#btn").toggleClass("fa-pause");
    $("#btn").addClass("fa-play");
      }
  });


// Assign an ontimeupdate event to the audio element, and execute a function if the current playback position has changed
  $("#progress").on("input",function(n){
    
            audio.currentTime = this.value * audio.duration / 100;
            audio.play();
    //to make sure if currentTime is > 0 the #btn class will be pause
    if(audio.currentTime > 0){
    $("#btn").toggleClass("fa-play");
    $("#btn").addClass("fa-pause");
    }
        })
  
  $(audio).on('timeupdate', function(){
    
    if(audio.currentTime == 0){
      audio.pause();
      $(".status, .status_mobile").text("00:00:00");
      $progress_slider.val(0);
      $(".progress_fill").css("width",0);
      
    if($("#btn").hasClass("fa") && $("#btn").hasClass("fa-pause")){
    $("#btn").toggleClass("fa-pause");
    $("#btn").addClass("fa-play");
      }
    }else{
    var percent = audio.currentTime/ audio.duration * 100;
    $("#progress").val(percent).change();
    var duration = audio.currentTime;
    given_seconds = duration.toFixed(0); 
    hours = Math.floor(given_seconds / 3600); 
    minutes = Math.floor((given_seconds - (hours * 3600)) / 60); 
    seconds = given_seconds - (hours * 3600) - (minutes * 60); 
    timeString = hours.toString().padStart(2, '0') + ':' + 
      minutes.toString().padStart(2, '0') + ':' + 
            seconds.toString().padStart(2, '0'); 
    $(".status, .status_mobile").text(timeString);
    //$("#status").text(Math.round(percent*100)/100+"%");
    $progress_fill.css("width", $progress_slider.val() + "%");
    }
});



//to make sure if currentTime is > 0 the #btn class will be pause
if(audio.currentTime > 0){
  $("#btn").toggleClass("fa-play");
    $("#btn").addClass("fa-pause");
}

//for connecting the volume slider with the audio
if (window.matchMedia("(max-width: 600px)").matches) {
  audio.volume = 1;
  }else{
audio.volume = 0.1;}
  var $fill = $(".bar .fill");
  var $slider = $("#slider");
  //var slider = document.getElementById("slider");
  var output = document.getElementById("demo");
  output.innerHTML = $slider.val();
  slider.oninput = function() {
    
  $fill.css("width", $slider.val() + "%");
  output.innerHTML = $slider.val();
  
  audio.volume = ($slider.val() / 100);}
//for mobile volume control
var $fill_mob = $(".bar_mob .fill_mob");
  var $slider_mob = $("#slider_mob");
  //var slider = document.getElementById("slider");
  var output_mob = document.getElementById("demo_mob");
  output_mob.innerHTML = $slider_mob.val();
  slider_mob.oninput = function() {
    
  $fill_mob.css("width", $slider_mob.val() + "%");
  output_mob.innerHTML = $slider_mob.val();
  
  audio.volume = ($slider_mob.val() / 100);}
//for making the save feature
function load_audio_save_time(){
  $.ajax({
   url:"fetch_audio_save_list.php",
   method:"POST",
   success:function(data)
   {
    $('.saved_audios_list').html(data);
   }
  });
}
$(".save_audio").click(function(){
      if (audio.currentTime > 0 && $("#btn").hasClass("fa") && $("#btn").hasClass("fa-pause")){
        audio.pause();
        $("#btn").toggleClass("fa-play",true);
      $("#btn").addClass("fa");
      $("#btn").toggleClass("fa-pause",false);
      }
var audio_id = $("#audio_id").val();
var audio_time = audio.currentTime;
var token2 = $("#token2").val();
$.ajax({
       url: 'send_audio_save_time.php',
       method:"POST",
        data:{'audio_id': audio_id, 'audio_time':audio_time, 'token2':token2},
        success:function(data){
     $("#audio_time_saved").css('display','block');
     window.location = '#audio_time_saved';     
    $("#audio_time_saved").html(data);
    setTimeout(function(){ $("#audio_time_saved").html("");
      $("#audio_time_saved").css("display","none"); }, 30000);
  }
    });
load_audio_save_time();
});
$(document).ready(function(){
  load_audio_save_time();
});
$(".play_save_audio").click(function() {
audio_id = $(this).attr('value');
$.ajax({
      url : 'fetch_audio_from_db.php',
      type: 'post',
      dataType: 'json',
      cache: false,
      data: {'audio_id': audio_id},
      success:function(data){
        var audio_loc = "home_audio/" + data.audio_loc;
        var audio_img = "home_audio/audio_images/" + data.audio_image;
        $("#aud_img").attr("src",audio_img);
      $("#player").attr("src",audio_loc);
      $(".info").text(data.audio_name + " - " + data.audio_author);

      }
    });
window.location = "#main_player";
});
var save_audio = document.getElementById("save_player");
save_audio.onloadedmetadata = function(){
var duration = save_audio.duration;
given_seconds = duration.toFixed(0); 
 hours = Math.floor(given_seconds / 3600); 
 minutes = Math.floor((given_seconds - (hours * 3600)) / 60); 
 seconds = given_seconds - (hours * 3600) - (minutes * 60); 
  
timeString = hours.toString().padStart(2, '0') + ':' + 
      minutes.toString().padStart(2, '0') + ':' + 
            seconds.toString().padStart(2, '0'); 
  
  document.querySelector('#save_duration').textContent  = timeString; };
$("#delete_save_time").click(function(){
  save_id = $(this).attr('value');
  var token2 = $("#token2").val();
  $.ajax({
      url : 'delete_audio_save_time.php',
      type: 'post',
      cache: false,
      data: {'save_id': save_id,'token2':token2},
      success:function(data){
      $(".saved_audios_details").html(data);
       $("#save_player").attr("src","");
       setTimeout(function(){ location.reload(); }, 5000);}
    });
});
</script>
</body>
</html>