<?php 
    include "config.php";

   // session_start();

    //$session = $_SESSION['user'];

    $session = "trial278sh@d.com";

    $sql = "SELECT pId FROM user WHERE email='$session'";
    $query = mysqli_query($con, $sql);

    $rows = mysqli_fetch_array($query);

    $user_id = $rows['pId'];
?>