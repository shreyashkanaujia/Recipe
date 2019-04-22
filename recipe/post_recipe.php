<?php
if(!isset($_SESSION))
    session_start();

if(isset($_SESSION['auth']) || isset($_SESSION['id'])) {
    if($_SESSION['auth']) {
        include("connection.php");
    }
}
else {
    header("Location: login.php");
    exit();
}

$error='';
if(isset($_POST['post'])) {
    $query="SELECT * FROM register WHERE id = '".$_SESSION['id']."'";
    $exec=mysqli_query($link, $query);
    $row=mysqli_fetch_array($exec);
    $name=$row['name'];
    
    $recipe=$_POST['recipe'];
    $category=$_POST['category'];
    $ingred=$_POST['num'];
    $steps=$_POST['steps'];
    $query="INSERT INTO `list` (`id` , `user` , `recipe` , `category` , `ingred` , `steps`) VALUES (NULL , '$name' , '$recipe' , '$category' , '$ingred' , '$steps')";
    if(!mysqli_query($link, $query)) {
        header("Location: choose.php");
        $error='Could not post your recipe. Please try again';
        echo $error;
    }
    else {
        $error='Recipe uploaded successfully..';
    }
}