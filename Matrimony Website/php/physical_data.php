<?php 
    header("Allow-Access-Control-Orign: *");

    include "config.php";
    include "user_id.php";

    if (isset($_POST['submit'])) {
        $h_ft = $_POST['height_ft'];
        $h_in = $_POST['height_in'];
        $weight = $_POST['weight'];
        $eye = $_POST['eye_color'];
        $skin = $_POST['skin_color'];
        $age = $_POST['age'];

        $sql = "INSERT INTO physical_details(relId, height_ft, height_in, weight, eye_color, color, age) VALUES('$user_id', '$h_ft', '$h_in', '$weight', '$eye', '$skin', '$age')";
        $query = mysqli_query($con, $sql);

        
        header("Location: ../success.html");
    }
?>