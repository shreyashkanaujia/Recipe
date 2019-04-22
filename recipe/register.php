<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Register for a cookie..</title>
        <link rel="stylesheet" href="css/style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700,900%7CDays+One:regular">
        
    </head>
    
    <body>
        <div class="section bottom" style="padding-top: 40px; padding-bottom: 50px;">
            <div class="w-container hero-text" style="margin-top: 20px; margin-bottom: 20px;">
                <h2>NOT A MEMBER YET?</h2>
                <div class="blueborder" style="width: "></div>
            </div>
            
            <div class="w-container" style="padding-left: 90px; padding-right: 90px;">
                <form method="post" class="contact-form" action="register_do.php">
                    <input class="w-input field" type="text" placeholder="Full Name" name="name" required  title="2-30 letters">
                    <input class="w-input field" type="text" placeholder="E-mail" name="user" required pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$" title="someone@example.com"> 
                    <input class="w-input field" type="password" placeholder="Password" name="pass" required pattern=".{6,20}" title="6-20 letters">
                    <input class="w-input field" type="password" placeholder="Re-type Password" name="re_pass" required>
                    <button type="submit" class="w-button button darkbutton" name="register" value="1">Register ?</button>
                </form>
            </div>
        </div>
    </body>
</html>