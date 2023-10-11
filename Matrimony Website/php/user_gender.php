<?php 
    header("Allow-Access-Control-Orign: *");

    include "config.php";

    $session = "trial181@gmail.com";

    $query = mysqli_query($con, "SELECT searching FROM user WHERE email='$session'");

    $array = mysqli_fetch_array($query);

    $gender = $array['searching'] == "female" ? "male" : "female";

    echo $gender;
?>