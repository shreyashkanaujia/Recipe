<?php
    require("connection.php");
    
    $query="SELECT user,recipe,about FROM list_ni";
    $result = mysqli_query($link,"SELECT * FROM list_ni");

?>


<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>North Indian food</title>
        <link rel="stylesheet" href="mycss/w3.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    
    <body>
        <div class="w3-section" style=" margin-bottom: 40px;" id="north">
            <div style="padding-top: 40px;">
            <?php    
                include("topnavbar.php");
            ?>
            </div> 
            <div>
            <?php
                include("leftnavbar.php");
            ?>
            </div>
            <div class="w3-row" style="padding-left: 240px; padding-top: 50px;">
                <div class="w3-col s4 w3-center" style="padding: 30px;">
                    <?php
                    if($row = mysqli_fetch_array($result)){
                    ?>
                    <h2><?php echo $row['recipe']; ?></h2>
                    <div class="blueborder"></div>
                    <p2><?php echo $row['about']; ?>
                    </p2>
                    <?php } ?>
                </div>
                <div class="w3-col s4 w3-center" style="padding:30px">
                    <?php
                    if($row = mysqli_fetch_array($result)){
                    ?>
                    <h2><?php echo $row['recipe']; ?></h2>
                    <div class="blueborder"></div>
                    <p2><?php echo $row['about']; ?>
                    </p2>
                    <?php } ?>
                </div>
            </div>
        </div>
        
    </body>
</html>
