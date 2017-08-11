<?php
session_start();
?>
<!DOCTYPE html>
<html>
	<!-- ****** faviconit.com favicons ****** -->
	<link rel="shortcut icon" href="../images/faviconit2/it1.ico">
	<link rel="icon" sizes="16x16 32x32 64x64" href="../images/faviconit2/it1.ico">
	<link rel="icon" type="image/png" sizes="196x196" href="../images/faviconit2/it1-192.png">
	<link rel="icon" type="image/png" sizes="160x160" href="../images/faviconit2/it1-160.png">
	<link rel="icon" type="image/png" sizes="96x96" href="../images/faviconit2/it1-96.png">
	<link rel="icon" type="image/png" sizes="64x64" href="../images/faviconit2/it1-64.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../images/faviconit2/it1-32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../images/faviconit2/it1-16.png">
	<link rel="apple-touch-icon" href="../images/it1-57.png">
	<link rel="apple-touch-icon" sizes="114x114" href="../images/faviconit2/it1-114.png">
	<link rel="apple-touch-icon" sizes="72x72" href="../images/faviconit2/it1-72.png">
	<link rel="apple-touch-icon" sizes="144x144" href="../images/faviconit2/it1-144.png">
	<link rel="apple-touch-icon" sizes="60x60" href="../images/faviconit2/it1-60.png">
	<link rel="apple-touch-icon" sizes="120x120" href="../images/faviconit2/it1-120.png">
	<link rel="apple-touch-icon" sizes="76x76" href="../images/faviconit2/it1-76.png">
	<link rel="apple-touch-icon" sizes="152x152" href="../images/faviconit2/it1-152.png">
	<link rel="apple-touch-icon" sizes="180x180" href="../images/faviconit2/it1-180.png">
	<meta name="msapplication-TileColor" content="#FFFFFF">
	<meta name="msapplication-TileImage" content="../images/faviconit2/it1-144.png">
	<meta name="msapplication-config" content="../images/faviconit2/browserconfig.xml">
	<!-- ****** faviconit.com favicons ****** -->
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Online jobspace where employers meet talents">
	<meta name="keywords" content="job, vacancy, vacancies, jawatan kosong, cari kerja, kerja kosong, jawatan yang diperlukan, post job, post vacancies, jobs hiring ">
	<meta name="author" content="WorksHire by Talent Suites">

    <title>Workshire Login</title>
    <link rel="stylesheet" href="../assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/style.css"> 
    <link rel="stylesheet" type="text/css" media="screen" href="../assets/css/loginstyle.css"> 
    <script type="text/javascript" src="../assets/js/ShowPasswordCheckbox.js"></script>  
    <script type="text/javascript" src="../assets/js/jquery-3.1.1.min.js"></script>
    <script type="text/javascript" src="js/login.js"></script>  
    <script type="text/javascript" src="../assets/js/login_check.js"></script> 
</head>

<body> 
   <div class="login-card">
       <a href="../"><img src="../images/logo.png" class="profile-img-card"></a>
        <p class="profile-name-card"> </p>
        <form class="form-signin" id="form_login" method="post"> 
            <div id="errorMsg" style="color:red; font-size: 12px;" align="center"></div>
            <div id="succMsg" style="color:green; font-size: 12px;" align="center"></div>
            <input class="form-control" type="text" placeholder="username" id="uname" name="uname"  required> 
            <div  class="errorDiv" id="erroruname"><font color="red" size='2'>Username must not content symbol and space
            </font> </div>

            <input class="form-control" type="password" placeholder="password" id="psw" name="psw" required>
            <div  class="errorDiv" id="errorPass"><font color="red" size='2'>Password must be at least 6 characters</font> </div>
            
            <div class="checkbox" align="center">
                <div class="checkbox">
                    <label>
                        <input id="rememberme" type="checkbox" name="" id="" checked>Remember me
                    </label>
                </div>
            </div>
			<p align="center" id="forgotPassword">Forgot your<a style="cursor: pointer;"> password?</a></p>

            <button class="btn btn-primary btn-block btn-lg btn-signin" type="submit" id="submit_button">Sign in</button>
        </form>
        <div align="center">
        <hr>
        <h5><strong>Interested to join?</strong></h5>
        <a href="../sign-up.php" class="forgot-password" class="forgot">Sign Up</a> 
        <br/><br/>
        <button class="homebtn" onClick="location.href='../'">
            <img src="../images/home-1.png" alt="home workshire" style="width:30px; height:30px;" title="Home" />
        </button>
        </div>
   </div>  
</body>
<script type="text/javascript">
            
                //add a show password checkbox to the demo-field
                new ShowPasswordCheckbox(document.getElementById("psw"));
            
                //test the submitted value
                document.getElementById('form_login').onsubmit = function()
                {
                    alert('pword = "' + this.pword.value + '"');
                    return false;
                };
            
            </script> 
</html>