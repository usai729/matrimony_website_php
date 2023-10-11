<?php 
    header("Allow-Access-Control-Orign: *");

    include "config.php";

    session_start();
        
    $image = $_FILES['image'];
    $image_final_name = uniqid().$image['name'];
    $address = "..\\assets\\user_dps\\".$image_final_name;

    $session_email = $_SESSION['user'];

    $sql = "UPDATE user SET dp='$image_final_name' WHERE email='$session_email'";

    if (move_uploaded_file($image['tmp_name'], $address)) {
        if (mysqli_query($con, $sql)) {
            echo json_encode(["RESPONSE" => "OK", "MESSAGE" => "NONE"]);
        } else {
            echo json_encode(["RESPONSE" => "ERROR", "MESSAGE" => mysqli_error($con)]);
        }
    }
?>