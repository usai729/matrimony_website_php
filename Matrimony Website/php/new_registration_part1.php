<?php 
    header("Allow-Access-Control-Orign: *");

    include "config.php";

    //session_start();
    $fullname = mysqli_real_escape_string($con, $_POST['fname']);
    $profession = empty(mysqli_real_escape_string($con, $_POST['profession'])) ? : mysqli_real_escape_string($con, $_POST['profession']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $dob = mysqli_real_escape_string($con, $_POST['dob']);
    $religion = mysqli_real_escape_string($con, $_POST['religion']);
    $caste = mysqli_real_escape_string($con, $_POST['caste']);
    $search_for = mysqli_real_escape_string($con, $_POST['search_for']);
    $pwd = md5(mysqli_real_escape_string($con, $_POST['pwd']));
    $first = !isset($_POST['first_marriage']) ? "0":"1";

    $resp = false;

    $unid = intval((uniqid()*uniqid())*9/3);

   $sql = "INSERT INTO user(unid, fullname, profession, email, pwd, dob, religion, caste, searching, first_marriage, approved) 
            VALUES(UUID(), '$fullname', '$profession', '$email', '$pwd', '$dob', '$religion', '$caste', '$search_for', '$first', '0')";
   $sql_verify = "SELECT * FROM user WHERE email='$email'";
   $q = mysqli_query($con, $sql_verify);

   if (mysqli_num_rows($q) == 0) {
        if (mysqli_query($con, $sql)) {
            echo json_encode(["RESPONSE" => "OK", "MESSAGE" => "NONE", "ISSUE" => "NONE"]);

            $resp = true;
        } else {
            echo json_encode(["RESPONSE" => "ERROR", "MESSAGE" => "ERROR IN SQL", "ISSUE" => mysqli_error($con)]);

            $resp = false;
        }
   } else {
       echo json_encode(["RESPONSE" => "EXISTS", "MESSAGE" => "USER WITH THE SAME EMAIL ALREADY EXISTS", "ISSUE" => "NONE"]);

       $resp = false;
   }

   if ($resp) {
       $_SESSION['user'] = $email;
   }
?>