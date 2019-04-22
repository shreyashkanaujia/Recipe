<?php
if(!isset($_SESSION))
    session_start();
if(isset($_SESSION['auth'])) {
    if($_SESSION['auth'] == '1'){
        header("Location: choose.php");
    }
}
$error='';
if(isset($_GET['error'])) {
    if($_GET['error'] == '1')
        $error='Invalid Password';
    else if($_GET['error'] == '2')
        $error='Invalid Username';
    else if($_GET['error'] == '3')
        $error='Invalid Form';
    
}
?>

<html lang="en" >
    <head>
        <meta charset="UTF-8">
        <title>Mr. Recipe Login</title>
        <link rel="stylesheet" href="mycss/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #myback{
                background-image: url(images/7.jpg);
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
            }
            .mytest:after,.mytest:before {
                display: table; 
                clear: both; 
            }
        </style>
    </head>

    <body style="">
        <?php include("topnavbar.php"); ?>
        <div class="w3-container" style="height: 100%; padding-top: 80px;" id="myback">
            <div class="w3-container">
                <div class="w3-container w3-center w3-padding-24">
                    <h1 style="color: white; font-size: 50px;">Login here to continue</h1>
                </div>
            </div>
            <div class="w3-center"><p style="color:white;">
                <?php
                if($error!=''){
                    echo $error;
                }
                ?>
                </p>
            </div>
            <div class="w3-container w3-center">
                <form method="post" class="w3-container w3-card-4 w3-light-grey w3-center" action="login_do.php">
                    <div class="w3-row w3-section">
                        <input type="text" placeholder="Username/Mail" name="user" required autofocus>
                    </div>
                    <div class="w3-row w3-section">
                        <input type="password" placeholder="*****" name="pass" required>
                    </div>
                        <button type="submit" class="w3-button" name="login" value="1" >Login</button>
                </form>
            </div>
            
        </div>
        <?php
        include("footer.php");
        ?>
        
        <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	   <script type="text/javascript" src="js/webflow.js"></script>
    </body>
</html>

<!--
        <div style="display: block; margin-left: auto; margin-right: auto; width: 30%;">
	    <form method="post" name="login">
		<fieldset>
		    <input type="text" name="user"  placeholder="username" autofocus required class="w-input field">
		    <input type="password" name="pass"  placeholder="*****" required class="w-input field" >
		    <div class="w-hidden-small w-hidden-tiny buttonalign">
                <div style=" padding-top: 20px;">
                    <a href="register.php" style="color: white; text-decoration: none;"> Not a member? Register here. </a>
                </div>
			<button type="submit" name="submit" style="margin-top: 40px;" class="buttonhome button" >Login !</button>
		    </div>
		</fieldset>
	    </form>
	    </div>
        -->
        
<!--
<script src="https://apis.google.com/_/scs/apps-static/_/js/k=oz.gapi.fr.jCj8c77aZ-I.O/m=plusone/rt=j/sv=1/d=1/ed=1/am=IQ/rs=AItRSTOyb9DFxJR-oLMIoD6azhb9yGuJ3Q/cb=gapi.loaded_0" async=""></script>
        <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.4.7/webfont.js"></script>
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900%7CDays+One:regular">
  <script>
    WebFont.load({
      google: {
        families: ["Lato:100,300,400,700,900", "Days One:regular"]
      }
    });
  </script>
  <script>
    if (/mobile/i.test(navigator.userAgent)) document.documentElement.className += ' w-mobile';
  </script>
  <link rel="shortcut icon" type="image/x-icon" href="https://y7v4p6k4.ssl.hwcdn.net/528e651363ab10ec42000100/5297ae9b6614a1bf07000068_favicon.jpg">
  <link rel="apple-touch-icon" href="https://y7v4p6k4.ssl.hwcdn.net/528e651363ab10ec42000100/5297ae946614a1bf07000067_webicon.png">
  <script type="text/javascript" src="https://apis.google.com/js/plusone.js" gapi_processed="true"></script>
  <meta name="chromesniffer" id="chromesniffer_meta" content="{&quot;GoogleFontApi&quot;:-1,&quot;jQuery&quot;:&quot;1.10.2&quot;,&quot;Plus1&quot;:-1}">
  <script type="text/javascript" src="chrome-extension://homgcnaoacgigpkkljjjekpignblkeae/detector.js"></script>
-->