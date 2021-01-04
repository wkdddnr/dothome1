<?php
    $host = "localhost";
    $user = "wkdddnr";
    $pw = "ekffufk00!!";
    $dbName = "wkdddnr";
    $dbConnect = new mysqli($host, $user, $pw, $dbName);
    $dbConnect -> set_charset("utf8");

    if(mysqli_connect_errno()){
        echo "database connect false";
    } else {
        //echo "database connect true";
    }
?>