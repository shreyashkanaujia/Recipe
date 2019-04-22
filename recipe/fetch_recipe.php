<?php
if(!isset($_SESSION)) {
    session_start();
}

if(!isset($_GET['type'])) {
    echo "ERROR 404";
    exit();
}
else if(isset($_GET['type'])) {
    include("connection.php");
    $type=$_GET['type'];
    $query="SELECE id FROM list WHERE category = '.$type.'";
    $result=mysqli_query($link, $query);
    
    if(mysqli_num_rows($result) >0) {
        $flag=0;
        while($row = mysqli_fetch_assoc($result) && $flag<=4) {
            $name1= $row['recipe'];
            $about1= $row['about'];
            Display($name1, $about1);
            $flag=$flag+1;
        }
    }
    else{
    }
}

?>