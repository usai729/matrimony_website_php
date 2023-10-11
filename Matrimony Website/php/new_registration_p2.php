<?php 
    header("Allow-Access-Control-Orign: *");

    include "config.php";

    $desc = mysqli_real_escape_string($con, $_POST['description']);
    $phone = $_POST['phno'];

    //session_start();
    $session_email = $_SESSION['user'];

    $sql = "UPDATE user SET description='$desc', phone='$phone' WHERE email='$session_email'";

    if (mysqli_query($con, $sql)) {
        echo json_encode(["RESPONSE" => "OK", "MESSAGE" => "NONE"]);
    } else {
        echo json_encode(["RESPONSE" => "ERROR", "MESSAGE" => mysqli_error($con)]);
    }
?>