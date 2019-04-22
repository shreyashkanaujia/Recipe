<?php
session_start();

include("connection.php");
$error='';
    if(isset($_POST['login'])) {
        $user=mysqli_real_escape_string($link, $_POST['user']);
        $pass=mysqli_real_escape_string($link, $_POST['pass']);
        
        $query="SELECT * FROM register WHERE mail = '".$user."'";
        $result= mysqli_query($link, $query);
        $row= mysqli_fetch_array($result);
        if(isset($row)) {
            if($row['pass'] == $pass) {
            $_SESSION['id'] = $row['id'];
            $_SESSION['auth']= '1';
            header("Location: choose.php");
            }
            else {
                header("Location: login.php?error=1");
                echo 'Invalid password bro';
                exit();
            }
        }
        else{
            header("Location: login.php?error=2");
            echo 'Invalid username bro';
            exit();
        }
    }
    else {
        echo 'Invalid';
        exit();
        header("Location: login.php?error=3");
    }
?>