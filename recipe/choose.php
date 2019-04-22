<?php
if(!isset($_SESSION))
    session_start();
if($_SESSION['auth'] == '1') { 
}
else {
    header("Location: index.php");
}
?>
<html>
    <head>
        <meta charset="utf-8">
        <title>Choose your Recipe</title>
        <link rel="stylesheet" href="mycss/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style type="text/css">
            #mydiv{
                background-image: url('images/5.jpg');
                background-attachment: fixed;
                background-repeat: no-repeat;
                background-size: cover;
            }
        </style>
    </head>
    
    <body>
        <?php include("topnavbar.php");
        ?>
        <div id="mydiv" class="w3-display-container" style="height: 100%; padding-top: 70px;">
            <div class="w3-container w3-padding-24">
                <div class="w3-container w3-center" >
                    <h1 style="font-size: 80px; color: white;">Mr. Recipe</h1>
                    <h4 class="w3-wide">Recipe posting and rating</h4>
                </div>
            </div>
            <div class="w3-container w3-center w3-padding-32">
                <a href="post.php" class="w3-button w3-round-large w3-black">Post your recipe</a>
                <a href="list.php" class="w3-button w3-round-large w3-black">Popular Recipes</a>
            </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>

