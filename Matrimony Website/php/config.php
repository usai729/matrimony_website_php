<?php 
    error_reporting(E_ERROR | E_PARSE);

    $con = mysqli_connect("localhost", "root", "rootmysql@1#", "marriage_site");

    session_start();

    if (!$con) {
        die("Unknown error occured!");
    }
?>