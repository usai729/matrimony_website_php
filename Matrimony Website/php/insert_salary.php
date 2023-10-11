<?php 
  header("Allow-Access-Control-Orign: *");

  include "./config.php";
  include "./user_id.php";

  $session = $_SESSION['user'];

  $title = $_POST['profession'];
  $company = $_POST['company'];
  $from = $_POST['from'];
  $to = $_POST['to'];

  $sql = "INSERT INTO job(relId, job_title, company, salary_from, salary_to) VALUES('$user_id', '$title', '$company', '$from', '$to')";

  if (mysqli_query($con, $sql)) {
      echo json_encode(["RESPONSE" => "OK"]);
  } else {
      echo json_encode(["RESPONSE" => "ERROR"]);
  }
?>