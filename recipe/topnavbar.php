<?php
if(!isset($_SESSION))
    session_start();
$login=1;
if(isset($_SESSION['auth'])){
    if($_SESSION['auth'] == '1'){
        $login=0;
    }
}
else $login=1;
?>

<div class="w3-top" style="z-index: 2">
    <div class="w3-bar w3-black w3-large">
        <?php
        if($login == 1) {
        ?>
        <a href="login.php" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-myblue">Log-In</a>
        <?php }
        else {
        ?>
        <a href="logout.php" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-myblue">Log-out</a>
        <?php }
        ?>
        <a href="register.php" class="w3-bar-item w3-button w3-right w3-padding-16 w3-hover-myblue">Register</a>
        <a href="index.php" class="w3-bar-item w3-button w3-padding-16 w3-hover-myblue">Home</a>
        
    </div>
</div>