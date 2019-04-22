<?php
$link=mysqli_connect("localhost","wordpress","wordpress","recipe");
if(mysqli_connect_errno()){
    $error="Failed to connect to MySQL: ". mysqli_connect_errno();
    die();
}
?>