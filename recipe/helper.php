<?php

function render($temp, $data=array()) {
    $path= $temp.'.php';
    if(file_exists($path)){
        extract($data);
        require($path);
    }
}