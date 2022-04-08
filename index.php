<?php
session_start();
if (empty($_SESSION['token'])) {
    $_SESSION['token'] = bin2hex(random_bytes(32));
}
$token = $_SESSION['token'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Global site tag (gtag.js) - Google Analytics-->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-174253246-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-174253246-1');
</script>

<title>AudioPhobic | Online Bengali Audio Stories Streaming Website</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!--<meta http-equiv="content-security-policy" content="default-src 'self'">-->
<meta
  name="description"           
  content="Audiophobic is an online bengali audio story streaming website, it contains audio stories from different radio stations. Sunday Suspense, audio stories, bengali audio stories. Feluda, Byomkesh, Shanku, Sherloack Homes all kind of characters audio stories are available here.">
  <meta name="author" content="Subhadip Dutta">
   <meta name="keywords" content="sunday suspense | byomkesh bakshi, professor shonku, feluda: 50 years of ray's detective, Byomkesh Bakshi, Tarinikhuro, Sherlock Holmes, Sherlock Holmes Bengali Audio Story, audio story, bangla audio story, sunday suspense">
<link href="style.css?v=<?php echo time(); ?>" rel="stylesheet" type="text/css" />
<link rel="stylesheet" href="style_home.css">
<link href="https://fonts.googleapis.com/css2?family=Roboto+Condensed&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@500&display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css2?family=Bitter&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/site.webmanifest">
<link rel="mask-icon" href="/safari-pinned-tab.svg" color="#5bbad5">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript">
        function preventBack() { window.history.forward(); }
        setTimeout("preventBack()", 0);
        window.onunload = function () { null };
    </script>
<style>
/* Extra small devices (phones, 600px and down) 
@media only screen and (max-width: 600px) {
.mobile_tab_view{display: block;}
.full_body{display: none;}
}

/* Small devices (portrait tablets and large phones, 600px and up)
@media only screen and (min-width: 600px) {
.mobile_tab_view{display: block;}
.full_body{display: none;}
}

/* Medium devices (landscape tablets, 768px and up)
@media only screen and (min-width: 768px) {
.mobile_tab_view{display: block;}
.full_body{display: none;}
}
 

/* Large devices (laptops/desktops, 992px and up) 
@media only screen and (min-width: 992px) {
.mobile_tab_view{display: none;}
.full_body{display: block;}
}

 

/* Extra large devices (large laptops and desktops, 1200px and up) 
@media only screen and (min-width: 1200px) {
.mobile_tab_view{display: none;}
.full_body{display: block;}
}
*/
</style>
</head>
<body>
  <!--Intro part-->
  <!--Computer view-->
  <div class="full_body">
    <div id="mobile" class="home_mobile" style="">
<span style="font-size:30px;cursor:pointer; float:right;margin: 8px 8px 0;" onclick="openNav()">&#9776;</span>
<div style="float:left; font-size:16px; margin:5px; font-family: 'Raleway', sans-serif;">
  <img src="webiste_images/audiophobic_icon2.png" style="height:50px; width:50px; border-radius:50%; float:left;" alt="main_icon">
   <p style="float:left; margin-top:18px; margin-left:5px;"> AudioPhobic</p></div>
</div>
<div class="intro">
<img src="webiste_images\image1.jpg" alt="main_wallpaper" style="position:relative;">
<div id="pc" class="topnavbar">
  <a href="#login">LOGIN</a>
  <a href="#donation">Donation</a>
  <a href="#contact">Contact</a>
  <a href="#content">Content</a>
  <a href="#PWA_APP">AudioPhobic App</a>
  <div style="float:left; font-size:30px; margin:15px; font-family: 'Raleway', sans-serif;">
  <img src="webiste_images/audiophobic_icon2.png" style="height:70px; width:70px; border-radius:50%; float:left;" alt="main_icon">
   <p style="float:left; margin-top:18px; margin-left:5px;"> AudioPhobic</p></div>
</div>
<div id="mySidenav2" class="sidenav">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
  <a href="#login" style="margin-top:60px">LOGIN</a>
  <a href="#donation">Donation</a>
  <a href="#contact">Contact</a>
  <a href="#content">Content</a>
  <a href="#PWA_APP">AudioPhobic App</a>
</div>
<div class="hl"></div>
<div class="intro_quotes_container">
  <p class="intro_quotes">listen to great stories now at your<br> fingertips.</p>
  <p class="intro_quotes_para">Audiophobic is an online audio story streaming website, it contains more than 50 audio stories from different radio stations, also I have included some of my friend's homemade audio stories on this website. Keep listening.</p>
  <div class="login_register">
    <button class="login_button" onclick="window.location='#login'" id="change">LOGIN</button><button class="login_button" onclick="window.location='#why_audiophobic'" id="mobile">Learn More</button><br><br>
    <p><span id="pc">Not Yet Registered? </span><a class="register_button" onclick="document.getElementById('id01').style.display='block'">Register now</a></p>
  </div> 
</div>
</div>
<!--Register form-->
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Form">&times;</span>
  <form id="myForm" name="myForm" class="modal-content" action="register_page.php" method="post" onsubmit="return validateForm()" autocomplete="off">
    <input type="hidden" name="token" value="<?php echo $token; ?>" />
    <div class="container">
      <h1>Register Now</h1>
      <p>Please fill in this form to create an account.</p>
      <!--<span style="color:red;">Don't use any special character like:- ( ' , " , ; , - , -- )</span>-->
      <hr>
      <label for="name"><b>User-name</b></label>
      <input id="Fname" type="text" placeholder="Full Name" name="user_name" required>
      <label for="email"><b>Email</b></label>
      <input id="email" type="text" placeholder="Enter Email" name="email" required>
    <label for="psw"><b>Password</b></label>
      <input id="psw" type="password" placeholder="Enter Password" name="psw" title="The password should be atleast of 8 characters" pattern=".{8,}" required>

      <label for="psw-repeat"><b>Repeat Password</b></label>
      <input id="psw-repeat" type="password" placeholder="Repeat Password" name="psw-repeat" title="Type the password again" pattern=".{8,}" required>

      <!--<label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>-->
      <div class="clearfix">
        <button class="container_button" style="background-color:#000; color:#fff;" type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
        <input class="container_button" style="background-color:#ffe01b; color:#000;" type="submit" name="register" value="Sign Up">
        
      </div>
    </div>
    
  </form>
</div>
<!--login form-->
<div class="clearfix" id="login">
<div class="box left_box">
<div class="slideshow-container">
<!-- Full-width images with number and caption text -->
  <div class="mySlides fade">
    <img src="webiste_images/feluda.jpg" style="width:100%" alt="feluda">
    <div class="slideshow-block">
      <h3>Feluda</h3>
      <span>Did you know?</span>
      <p>Feluda, or Prodosh Chandra Mitter, is a fictional Bengali private investigator created by Indian Bengali film director and writer Satyajit Ray.
      </p>
    </div>
</div>
<div class="mySlides fade">
    <img src="webiste_images/shonku.jpg" style="width:100%" alt="shonku">
    <div class="slideshow-block">
      <h3>Professor Shanku</h3>
      <span>Did you know?</span>
      <p>Professor Shonku is a fictional scientist created by Satyajit Ray (1921–1992),Shonku is an inventor by occupation.
      </p>
    </div>
</div>
<div class="mySlides fade">
    <img src="webiste_images/roopkotha.jpg" style="width:100%" alt="sunday suspense">
    <div class="slideshow-block">
      <h3>Sunday Suspense</h3>
      <span>Did you know?</span>
      <p>It is a radio program, broadcasts by Radio Mirchi 98.3 FM (Kolkata).
      </p>
    </div>
</div>
<div class="mySlides fade">
    <img src="webiste_images/bomkesh.jpg" style="width:100%" alt="sunday suspense">
    <div class="slideshow-block">
      <h3>Byomkesh Bakshi</h3>
      <span>Did you know?</span>
      <p>Byomkesh Bakshi is an Indian-Bengali fictional detective created by Sharadindu Bandyopadhyay.
      </p>
    </div>
</div>
</div><!--slideshow container-->
</div>
<div class="box right_box">

<form id="loginForm" name="loginForm" class="modal-content_login" method="post" onsubmit="" action="login.php">
  <input type="hidden" name="token" value="<?php echo $token; ?>" />
    <div class="login_container">
  <img id="user_image" src="webiste_images/user_icon1.png" class="login_logo" alt="user_icon">
  <div id="login_error"></div>
  <div class="input-container">
  <i class="fa fa-envelope icon" style="font-size: 20px; color:#555;"></i>
  <label for="email"></label>
    <input id="email_log" type="text" placeholder="Enter Email" name="email" ></div>
  <div class="input-container">
  <i class="fa fa-lock icon" style="font-size: 30px; color:#555;"></i>
  <label for="password"></label>
  <input  id="psw_log" type="password" placeholder="Enter Password" name="psw" title="The password should be atleast of 8 characters"></div>
    <!--<label>
        <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> Remember me
      </label>-->
   <input class="modify_button" style="background-color:#000; color:#fff;" type="submit" name="login" value="LOGIN">
  </div>
   </form>

</div>
</div>
<!--Cosmetic changes-->
<div class="why_audiophobic" id="why_audiophobic">
<div class="row_features">
<div class="feature_container">
  <h2 class="feature_h2">Why choose AudioPhobic?</h2>
<div class="features_details">
  <img src="webiste_images/free.png" alt="it's free"></img>
  <h3>It's totally free</h3>
  <p>
    Audiophobic is absolutely free, just register and enjoy.</p>
</div>
<div class="features_details">
  <img src="webiste_images/UI.png" alt="Friendly UI"></img>
  <h3>Friendly UI</h3>
  <p>
    Browsing your audio stories has never been easier.</p>
</div>
<div class="features_details">
  <img src="webiste_images/audio log.png" alt="audio_log"></img>
  <h3>Save your audio log</h3>
  <p>
    Audiophobic provides its user to save their audio runtime.</p>
</div>
<div class="features_details">
  <img src="webiste_images/android.png" alt="mobile_ready"></img>
  <h3>Mobile App</h3>
  <p>
    Audiophobic is also available in android app and PWA app.</p>
</div>
</div>
</div>
</div>
<!--Mobile ready showcase-->
<div class="clearfix" id="PWA_APP">
  <div class="para_1_left">
    <h2>Hey! Not yet a member? Register now!</h2>
    <br><br>
    <a class="para_1_register_button" onclick="document.getElementById('id01').style.display='block'">Register now</a>
    <!--<a class="para_1_register_button" href="#login" style="color:#fff;background-color:#000;">Login now</a>-->
    <p class="para_1_left_apk">AudioPhoic is also available in Android app, download the APK from here.
      <a class="audiophobic_android" href= "https://audiophobic.online/AudioPhobic.apk" download><i class="fa fa-download"></i> Download</a> 
    </p>
  </div>
  <div class="para_1_right">
  <img src="webiste_images/audiophobic 5.jpg" alt="mobile_app_intro">
  <h3>Mobile ready Interface</h3> <a class="PWA_button_mobile" ><i class="fa fa-download" style="color:#fff;"></i> Web APP</a>
  </div>
  </div>
<!--Content part-->
<div class="latest_uploads_home">
  <p style="color:red;">Log in or Register to listen these audio stories</p>
<h3>Is Feluda your favourite detective?</h3> 
<div class="archive_feluda latest_home">
</div> 
<h3>Or do you like science fiction?</h3> 
<div class="archive_shanku latest_home">
</div>
<h3>Check out these latest uploads.</h3>
      <div class="latest_upload latest_home">
      </div>

    </div>
<div id="content" class="content">
  <p class="para">Choose a audio story from the list. Please wait for few seconds and let the audio load a bit. <span style="color:red;">(you will have access to limited audio stories if you are not an
   AudioPhobic member)</span></p>
<div class="clearfix">
  <div id="mobile" class="audio_list_mobile">
    <div class="audio_list">
      <button class="audio_name audio_name_active" value="1">Professor Sanku O Gorilla - Satyajit Roy</button>
      <button class="audio_name" value="2">Konkal - Rabindranath Tagore</button>
      <button class="audio_name" value="3">Jahangir-er Swarnamudra(Feluda Special) - Satyajit Roy</button>
      <button class="audio_name" value="4">Durger Moto Sei Barita - Sunil Gangapadhyay
</button>
      <button class="audio_name" value="5">Hesoram Husiyar er diary - Sukumar Ray</button>
      <button class="audio_name" value="6">Chhalanar Chhanda(Byomkesh Bakshi) - Sharadindu Bandyopadhyay</button>
      <button class="audio_name" value="7">Ganatkar Tarinikhuro - Satyajit Ray</button>
      <button class="audio_name" value="8">Moru Rohosyo(shanku) - Satyajit Ray</button>
    </div>
      </div>
<div id="pc" class="content_box" style="border:1px solid #000; background-color:#fff; overflow:auto;">
  <!--<img id="img_list" src="webiste_images/sunday_suspense.png" style="" alt="feluda" onclick="specialfun()">-->
    <div class="audio_list">
      <button class="audio_name" value="1">Professor Sanku O Gorilla - Satyajit Roy</button>
      <button class="audio_name" value="2">Konkal - Rabindranath Tagore</button>
      <button class="audio_name" value="3">Jahangir-er Swarnamudra(Feluda Special) - Satyajit Roy</button>
      <button class="audio_name" value="4">Durger Moto Sei Barita - Sunil Gangapadhyay
</button>
      <button class="audio_name" value="5">Hesoram Husiyar er diary - Sukumar Ray</button>
      <button class="audio_name" value="6">Chhalanar Chhanda(Byomkesh Bakshi) - Sharadindu Bandyopadhyay</button>
      <button class="audio_name" value="7">Ganatkar Tarinikhuro - Satyajit Ray</button>
      <button class="audio_name" value="8">Moru Rohosyo(shanku) - Satyajit Ray</button>
    </div>
</div>
<div class="content_box" style="background-color:#000">
<!--<div class="loading">
  <img src="webiste_images/disabled.png" alt="disabled" style="">
</div>-->
<div class="after_loading">
<div style="height:300px;position:relative;">
    <img id="aud_img" src="home_audio/audio_images/shonku.png" style="height:300px; width:100%;" alt="image"><br>
    <marquee class="info" scrolldelay="5" scrollamount="4">Professor Shanku O Gorilla - Satyajit Roy</marquee>
</div>
<div style="height: 168px;">
  <audio id="player" src="home_audio/Professor Sanku O Gorilla.mp3"></audio>
  <div class="player">

<div class="progress-container" style="">
  <span class="progress_bar"><span class="progress_fill"></span></span>
<input type="range" value="0" class="progress" id="progress" min="0" max="100" step="0.1" value="0" style="width:100%;">
</div>
<div class="" style="padding-top:15px;">
<p id="fix5" style="color:#fff; margin:0;">Progress: <span class="status"></span>
<span  style="float:right">Duration: <span class="duration" style="margin-right:25px;"></span></span>
</p>
<p id="fix6" style="color:#fff; margin:0;">Progress: <span class="status_mobile"></span> / <span class="duration_mobile" style="margin-right:25px;"></span>
</p>

</div>
<div class="clearfix">
<div class="controls">
<button class="play-pause" style="cursor: pointer;" type="button"><i id="btn" class="fa-play fa" style="font-size:46px;"></i></button>
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
</div><!--after_loading div-->
</div><!--parent content box div-->
</div><!--clearfix div-->
</div><!--main content div-->
<!--introducton and credit giving-->
<div id="contact" style="">
  <div  class="credit">
     <a id="pc" href="https://github.com/Subhadip313" class="github-corner" rel="noopener noreferrer" target="_blank" aria-label="View source on GitHub" target=""><svg width="80" height="80" viewBox="0 0 250 250" aria-hidden="true" style="fill: rgb(21, 21, 19); color: rgb(255, 255, 255); position: absolute; top: 0px; border: 0px; right: 0px;"><path d="M0,0 L115,115 L130,115 L142,142 L250,250 L250,0 Z"></path><path d="M128.3,109.0 C113.8,99.7 119.0,89.6 119.0,89.6 C122.0,82.7 120.5,78.6 120.5,78.6 C119.2,72.0 123.4,76.3 123.4,76.3 C127.3,80.9 125.5,87.3 125.5,87.3 C122.9,97.6 130.6,101.9 134.4,103.2" fill="currentColor" class="octo-arm" style="transform-origin: 130px 106px;"></path><path d="M115.0,115.0 C114.9,115.1 118.7,116.5 119.8,115.4 L133.7,101.6 C136.9,99.2 139.9,98.4 142.2,98.6 C133.8,88.0 127.5,74.4 143.8,58.0 C148.5,53.4 154.0,51.2 159.7,51.0 C160.3,49.4 163.2,43.6 171.4,40.1 C171.4,40.1 176.1,42.5 178.8,56.2 C183.1,58.6 187.2,61.8 190.9,65.4 C194.5,69.0 197.7,73.2 200.1,77.6 C213.8,80.2 216.3,84.9 216.3,84.9 C212.7,93.1 206.9,96.0 205.4,96.6 C205.1,102.4 203.0,107.8 198.3,112.5 C181.9,128.9 168.3,122.5 157.7,114.1 C157.9,116.9 156.7,120.9 152.7,124.9 L141.0,136.5 C139.8,137.7 141.6,141.9 141.8,141.8 Z" fill="currentColor" class="octo-body"></path></svg></a>
    <div class="clearfix">
    <div class="credit_side"><img src="webiste_images\subhadip.png" style="" alt="my_image"></div>
    <div class="credit_main">
       <div class="aboutclm contentclm">
            <h6 class="perH6">I AM, </h6>
            <h3 class="perH3"><span style="color:#ffcc00;">Subhadip</span><br> <span style="font-size: 30px;">Dutta</h3>
            <h4 class="perH4">Junior Web Developer and UI Designer</h4>
            <p class="para2"> <b>"All big stands start from taking short steps"</b><br><br>
              I have created this website for those who love to listen to audio stories, but unable to find any website with good User Interface, I have customized everything for better UI. Please leave feedback about your thoughts regarding this website, it will help me to improve more. You can also see my portfolio from the below button link.<br><br>

            </p>
            <!--<button class="contact_me" onclick="window.location='about.html'">PORTFOLIO</button>-->
            <a class="mainbutton" href="about.html" target="_blank" style="background-color:#000; color:#fff; background-image:none;">PORTFOLIO</a>
            <p class="para2" style="margin-top:45px; text-align: left;">The audio stories, Sunday Suspense is made and broadcasted by 98.3 FM. I have only designed and developed this website, for more information related to Sunday Suspense, please visit<br> <a href="https://www.radiomirchi.com/" target="_blank" rel="noopener noreferrer">radiomirchi.com</a>.</p>
            </div>
          </div>

  </div></div></div>
<!--adding the feedback and comment part-->
<div class="content" style="background-color:#fff;">
  <div style="padding: 0 20px 0 20px;">
    <h1 style="margin-bottom:0;">User Feedbacks</h1>
  </div>
  <!--<div class="comment_form">
    <form id="myform_comment" name="myform_comment" class="myform_comment" method="post">
      <h1>Feedback</h1>
      <span style="color:red;">Please Register or Log In to submit your feedback</span>
      <hr>
      <label for="name"><b>Name<span style="color:red;">*</span></b></label>
      <input id="comment_name" type="text" placeholder="Full Name" name="comment_name" disabled>
      <label for="Occupation"><b>Occupation<span style="color:red;">*</span></b></label>
      <input id="occupation" type="text" placeholder="occupation" name="occupation" disabled>
      <label for="Comment"><b>Comment<span style="color:red; font-size:14px;"> (350 characters max) *</span></b></label>
      <textarea id="Comment" name="Comment" rows="4" cols="50" wrap="hard" maxlength="350" title="350 characters max"disabled></textarea>
      <!--<input class="comment_button" type="submit" name="comment_submit" value="Submit" disabled>-->
    <!--</form>
  </div>-->
  <div id="fix8" style="">
  <div class="comment_disp">
  <div class="disp_container" style="background-color:#f1f1f1; margin: 5% 0;">
      <div class="message"></div>
      <div class="comment"></div>
    </div>
  </div>
</div>
</div>
<!--Donation part-->
<div id="donation" class="donation_part">
<h2 style="color: #ff6600">Help me to grow</h2>
<hr>
<div class="grow">
<p style="font-size:20px; font-weight:600;">Hi User,</p> 
 <p> I have been working for the past 2.5 months and for 14-15 hours a day to complete this project. As I am new to backend development, I had to learn PHP, jQuery, AJAX, JSON and then apply them on my website, though this is the first full-stack project that  I have made.  </p>
<p>I have invested a lot of money in hosting and purchasing the domain name. So, if you like my work and if you enjoy this website and everything it has to offer then, please lend some help whatever you want. </p>
<div style="float:right; text-align: right;">
  
  <b>Subhadip Dutta</b><br>creater of AudioPhobic<br><br>
<img src="webiste_images/audiophobic_icon.png" style="height:100px; width:auto; border:2px solid #000" alt="AudioPhobic"><br>
  <a href="https://www.facebook.com/groups/316654272851755/" target="_blank" rel="noopener noreferrer">Join our Facebook Comunity to support</a>
  </div>
</div>
<div style="float:left;">
  <p>Click on the QR code to scan</p>
 <a href="webiste_images/gpay.jpg" target="_blank"><img src="webiste_images/gpay.jpg" style="height:100px; width:auto; border:2px solid #000" alt="gpay_qr"></a><br> 
<p><b>G-Pay number:</b> +91 6290044365</p>
<p><b>UPI ID:</b> subhadipdutta180@okaxis</p>
</div>
</div>
<!--contact part-->
<div class="footer" style="">
<div class="clearfix">
  <div id="fix43" style="">
    <h4 class="perH4" style="color:#ffdd00;">MY PORTFOLIO</h4>
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
    <span style="margin-left:15px; font-size:0.8em; ">Student-M.SC(Computer Science)</span>
    <p style="margin-top: 30px;margin-left: 70px; color:#777;">He has helped me with the security testing of this wbsite.
      <br>Contact:<span style="color:#fff;">sayan98.roy@gmail.com <br><a href="https://royninja.github.io/" target="_blank" rel="noopener noreferrer" style="text-decoration:none; color:#fff;"> Portfolio</a></span></p>
    </p>
   </div>
  </div><!--fix44-->
  <div id="fix45" style="">
    <h4 class="perH4" style="color:#ffdd00;">Follow Me</h4>
    <p style="color:#777;">Let us be social</p>
    <div>
      <a href="https://www.facebook.com/subhadip.subha.33" class="fa fa-facebook" rel="noopener noreferrer" target="_blank" title="Facebook"></a> 
      <a href="https://www.linkedin.com/in/subhadip-dutta-a8bb66125/" rel="noopener noreferrer" class="fa fa-linkedin-square" title="Linkdin profile" style="" target="_blank" ></a>
      <a href="https://www.instagram.com/mr_perfect_since_1998/" rel="noopener noreferrer" class="fa fa-instagram" target="_blank" title="Instagram"></a>
      <a href="mailto:subhadipdutta180@gmail.com" class="fa fa-google" title="Mail me" target="_blank"></a>
      <a href="https://github.com/Subhadip313" class="fa fa-github" rel="noopener noreferrer" title="Github" style="font-size:15px;color:#fff; border:2px solid #fff;" target="_blank"></a> 
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
</div><!--Full body-->
<!--all java script codes-->
<!-- The core Firebase JS SDK is always required and must be listed first -->
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
/*Latest audio stories section*/
$(document).ready(function(){
    $.ajax({
    url : 'latest.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".latest_upload").html(data);

      }
    });
    $.ajax({
    url : 'archive_feluda.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".archive_feluda").html(data);

      }
    });
    $.ajax({
    url : 'archive_shanku.php',
      type: 'post',
      //dataType: 'json',
      cache: false,
      success:function(data){
        //$("#" + audio_cat).html(data);
      $(".archive_shanku").html(data);

      }
    });
});
//for mobile version
function openNav() {
  if (window.matchMedia("(max-width: 600px)").matches) {
  /* The viewport is less than, or equal to, 600 pixels wide */
  document.getElementById("mySidenav2").style.width = "270px";
  $(".home_mobile").css('background-color','#fff');
  $(".home_mobile").css('border','2px solid #ffcc00');
} else {
  /* The viewport is greater than 700 pixels wide */
  document.getElementById("mySidenav2").style.width = "270px";
}
}

function closeNav() {
  if (window.matchMedia("(max-width: 600px)").matches) {
  /* The viewport is less than, or equal to, 600 pixels wide */
  document.getElementById("mySidenav2").style.width = "0";
  $(".home_mobile").css('background-color','#ffcc00');
  $(".home_mobile").css('border','none');

  } else {
  /* The viewport is greater than 700 pixels wide */
  
  document.getElementById("mySidenav2").style.width = "0";
}
}
//for special effect credits
//for making the auto refresh of popular and comment div
$(document).ready(function(){
refresh_comment();
});
function refresh_comment(){
  setTimeout(function(){
    $(".comment").load("fetch_comment.php");
    refresh_comment();},2000);
}
//for the Login form

$(document).ready(function(){
/*fetch the user image when he types the email address*/
$("#email_log").blur(function(){
var user_email = $("#email_log").val();
if (user_email == ""){
  return;
}else{
//alert(user_email);
  $.ajax({
      url : 'fetch_user_image_home.php',
      type: 'post',
      cache: false,
      data: {'user_email': user_email },
      success:function(data){
        var image_loc = "user_icons/" + data;
        $("#user_image").attr("src",image_loc);
      }
    });
}
});
$('#loginForm').on('submit', function(event){
    event.preventDefault();
   var form_data = $(this).serialize();
    $.ajax({
       url: 'login.php',
       method:"POST",
        data:form_data,
        success:function(data){
          if(data == 'true'){
        document.location.href = "audio_home.php";
          }else{
      $('#loginForm')[0].reset();
      $('#login_error').html(data);
    }
  }

});
});
}); 
//for the comment
//for checking if the username already exist
$("#comment_name").blur(function(){

  var username = $('#comment_name').val();
  if(username == ""){return;}
  $.post('comment_user_nameCheck.php', {'comment_name': username}, 
    function(data){
      
      if(data == "<span style='color:red; font-size: 16px;'>The User Name already used!</span>") {
      $('.message').html(data);
      alert("The name you entered is already taken!");
      document.getElementById("comment_name").focus();
      document.getElementById('comment_name').value = '';
      }
      });
});

$(document).ready(function(){
$('#myform_comment').on('submit', function(event){
   event.preventDefault();
   var form_data = $(this).serialize();
    $.ajax({
       url: 'send_comment.php',
       method:"POST",
        data:form_data,
        success:function(data){
      $('#myform_comment')[0].reset();
      $('.message').html(data);
      load_comment();
     }
    });
});

 
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
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

//validating the form fields
function validateForm() {
 const re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  var email = document.forms["myForm"]["email"].value;
  var pass = document.forms["myForm"]["psw"].value;
  var pass_rep = document.forms["myForm"]["psw-repeat"].value;

  var check= re.test(email);
  if (check == false){
  alert('The entered email is not in correct format');
    document.getElementById("email").focus();
    document.getElementById('email').value = '';
    return false;
  }
  if(pass != pass_rep){
  alert('The Password did not matched, please type again carefully');
    document.getElementById("psw").focus();
    document.getElementById('psw').value = '';
    document.getElementById('psw-repeat').value = '';
    return false;
  }
}
$("#Fname").blur(function(){
  var User_name = $('#Fname').val();
  if(User_name == ""){return;}
  $.post('Username_check.php', {'User_name':User_name }, function(data){
      
      if(data=='The name already taken') {
      alert(data);
      document.getElementById("Fname").focus();
      document.getElementById('Fname').value = '';
      }
      });
});
$("#email").blur(function(){

  var emailval = $('#email').val();
  if(email == ""){return;}
  $.post('email_check.php', {'email': emailval}, function(data){
      
      if(data=='email already exist') {
      alert(data);
      document.getElementById("email").focus();
      document.getElementById('email').value = '';
      }
      });
});

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

/*For the audio player */
//special effect for audio list
var audio_id=0;
/*function specialfun(){
  $("#img_list").css("display", "none");
    $(".audio_list").css("display", "block");
     myVar = setTimeout(changefunc, 180000);//change the content back again after 3min
  }  
function changefunc(){
  $("#img_list").css("display", "block");
    $(".audio_list").css("display", "none");
}*/
  
/*for calling the audio source on clicking the buttons*/
$(".audio_name").click(function() {
  $(".loading").css("display","none");
  $(".after_loading").css("display","block");
    audio_id = $(this).attr('value'); // $(this) refers to button that was clicked
    var audio_info = $(this).text();
    $("button").removeClass("audio_name_active");//for removing previous active button
    $(this).addClass('audio_name_active');
    $(".info").text(audio_info);// using this method is not good, using  marquee is also not good
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
      

      }
    });
    
});

var audio = document.getElementById("player");
/*audio.oncanplaythrough = function() {
    alert("Can play through audio without stopping");
};*/
  var $progress_fill = $(".progress_bar .progress_fill");
  var $progress_slider = $("#progress");
/*if (audio.readyState == 4){ 
    $(".after_loading").css("display","none");
    $(".loading").css("display","block");
}else{
 $(".loading").css("display","none");
 $(".after_loading").css("display","block");}*/
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
  
 /* $(audio).on('timeupdate', function(){
    
    if(audio.currentTime == 0){
      audio.pause();
      $("#status").text("0%");
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
    $("#status").text(timeString);
    //$("#status").text(Math.round(percent*100)/100+"%");
    $progress_fill.css("width", $progress_slider.val() + "%");
    }
});*/
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

</script>
</body>
</html>