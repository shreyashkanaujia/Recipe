
<html lang="en" >

    <head>
        <meta charset="UTF-8">
        <title>Categories</title>
        <link rel="stylesheet" href="mycss/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <style>
            #listfood {
                background-image: url(images/8.jpg);
                background-size: cover;
                background-attachment: fixed;
                background-repeat: no-repeat;
            }
        </style>
    </head>

    <body>
        <?php include("topnavbar.php");
        ?>
        <div class="w3-container" style="height:100%; padding-top: 70px" id="listfood">
            <div class="w3-container w3-center w3-padding-24">
                <h1 style="color: white; font-size: 80px;">Select your favourites.</h1>
            </div>
            <div class="w3-container w3-center w3-row w3-padding-24">
                <a href="north-indian.php" class="">North Indian</a>
                <a href="south-indian.php" class="">South Indian</a>
                <a href="chinese.php" class="">Chinese</a>
            </div>
            <div class="w3-container w3-center w3-row w3-padding-24">
                <a href="beverages.php" class="">Beverages</a>
                <a href="cake.php" class="">Cakes &amp; Dessert</a>
            </div>
        </div>
        <?php include("footer.php");
        ?>
	</body>
</html>
