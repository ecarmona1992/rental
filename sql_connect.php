<?php
    //hides errors that would otherwise be displayed, comment out for debugging purposes
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);

    $server = "localhost";
    $uname = "root";
    $pass = "password";
    $db = "project1_1";

    $conid = mysqli_connect($server, $uname, $pass, $db);

    if($conid) {
//        echo "Connected. " . mysqli_get_host_info($conid);
    }

    else {
//        echo "Cannot Connect. " . mysqli_connect_errno() . " " . mysqli_connect_error();
    }
?>