<?php
include("connection.php");
if(isset($_POST['register'])){
        $name=mysqli_real_escape_string($link,$_POST['name']);
        $user=mysqli_real_escape_string($link,$_POST['user']);
        $pass=mysqli_real_escape_string($link,$_POST['pass']);
        $re_pass=mysqli_real_escape_string($link,$_POST['re_pass']);
        if($pass!=$re_pass){
            $error="Passwords do not match";
            echo $error;
        }
        $query="SELECT id FROM register WHERE mail = '$user'";
        $result= mysqli_query($link, $query);
        if(mysqli_num_rows($result) != 0){
            $error="The username already exists!"; 
            echo $error;
        }
        else{
            $query="INSERT INTO `register`(`id`, `name`, `mail`, `pass`) VALUES (NULL,'$name','$user','$pass')";
            if(!mysqli_query($link, $query)) {
                $error="Could not register your account. Please try again.";
                echo $error;
            }
            else{
                $row= mysqli_fetch_array($result);
                $_SESSION['auth']=true;
                $_SESSION['id']=$row['id'];
                header("Location: choose.php");
            }
        }
    }
?>