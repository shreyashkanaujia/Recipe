<?php
include("post_recipe.php");
$error='';
if(isset($_GET['error'])) {
    if($_GET['error'] == '1') {
        $error='';
    }
}
?>

<html lang="en">
    
    <head>
        <meta charset="utf-8">
        <title>Post your Recipe</title>
        <link rel="stylesheet" href="mycss/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

    </head>
    
    <body>
        <?php include("topnavbar.php"); ?>
        <div style="background-color: #BDBDBD; padding-top:70px; height: 100%;">
            <div class="w3-container">
                <h1 class="w3-center" style="color: white;">Post Your Creative Recipe Here..!</h1>
                <div class="blueborder"></div>
            </div>
            <div class="container">
            <div class="w3-section w3-center">
                <form method="post" style="margin:20px;">
                    <div class="col-md-12">
                        <div class="col-md-6" style="padding: 2%">
                        <input type="text" placeholder="Recipe Name" name="recipe" required  title="2-30 letters">
                        </div>
                        <div class="col-md-6">
                        <select placeholder="Full Name" name="category" required>
                            <option value="ni">North Indian</option>
                            <option value="si">South Indian</option>
                            <option value="ch">Chinese</option>
                            <option value="bv">Beverages</option>
                            <option value="ck">Cakes &amp; Stuff</option>
                        </select>
                        </div>
                    </div>
                    <div class="w3-row w3-padding-16">
                        <div class="col-md-6" style="padding: 2%">
                        <input name="num" type="number" placeholder="Ingredients" required>
                        </div>
                        <div class="col-md-6" style="align: center">
                        <input name="image" type="file" placeholder="Upload Image">
                        </div>
                    </div>
                    <div class="w3-row w3-padding-16">
                        <textarea placeholder="Detailed steps here please" name="steps" required></textarea>
                    </div>
                    <div class="w3-row w3-padding-16">
                        <button type="submit" class="w3-button w3-dark-grey" name="post" value="1">Post Recipe ?</button>
                    </div>
                </form>
            </div>
                </div>
        </div>
        <?php include("footer.php");
        ?>
    </body>
</html>