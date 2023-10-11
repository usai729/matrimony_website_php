<?php 
  header("Allow-Access-Control-Orign: *");

  include "./php/config.php";
  //include "./php/user_id.php";

  $sql = "SELECT * FROM user WHERE approved=0";
  $query = mysqli_query($con, $sql);

  if (isset($_POST['accept_btn'])) {
    $user = $_POST['accept_btn'];

    $sql_approve = "UPDATE user SET approved=1 WHERE pId='$user'";
    mysqli_query($con, $sql_approve);

    header("Location: approval.php");
  }
  if (isset($_POST['deny_btn'])) {
    $userd = $_POST['deny_btn'];

    $sql_deny = "INSERT INTO denied(pId, fullname, email, phone, pwd, searching, dp) SELECT pId, fullname, email, phone, pwd, searching, dp FROM user WHERE pId='$userd'";
    $sql_deny_p2 = "DELETE FROM user WHERE pId='$userd'";
    mysqli_query($con, $sql_deny);
    mysqli_query($con, $sql_deny_p2);

    header("Location: approval.php");
  }
?>

<html>
  <head>
    <title>Approve Users - ShubhSaathi.com</title>

    <meta name="viewport" content="width=device-width" />

    <!--Bootstarp-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/joker.css" />
    <link rel="stylesheet" href="./css/approve.css" />

    <!--Font links-->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Grape+Nuts&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Beau+Rivage&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <!---->

    <!--Bootstarp JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--Javascript
    <script src="./javascript/login.js"></script>-->
    <link
      rel="icon"
      href="./assets/images/ShubhSaathi_.png"
      type="image/icon type"
    />
  </head>

  <body>
    <img src="./assets/images/ShubhSaathi_s.png" style="width: 15%">
    <div class="container">
      <?php 
        while ($rows = mysqli_fetch_assoc($query)) {
          $id = $rows['pId'];
          $uid = $rows['unid'];
          $fullname = $rows['fullname'];
          $searchingfor = $rows['searching'];
          $gender = $rows['searching'] == "female" ? "Male":"Female";
          $dob = $rows['dob'];
          $religion = $rows['religion'];
          $caste = $rows['caste'];
          $email = $rows['email'];
          $phone = $rows['phone'];
          $first_marriage = $rows['first_marriage'] == 0 ? "No":"Yes";
          $profession = $rows['profession'];
          $desc = $rows['description'];
          $dp = $rows['dp'];

          echo '
            <div class="section">
              <img
                src="./assets/user_dps/'.$dp.'"
                style="width: 20%"
              />
              <div class="sub_section">
                <h5>'.$uid.'</h5>
                <h3>'.$fullname.'</h3>
                <h3>Searching: '.$gender.'</h3>
                <h5>DOB: '.$dob.'</h5>
                <h5>Religion: '.$religion.'</h5>
                <h5>Caste: '.strtoupper($caste).'</h5>
                <h4>
                  Email: <a href="mailto: '.$email.'">'.$email.'</a>
                </h4>
                <h4>
                  Phone number: '.$phone.'</a>
                </h4>
                <h6>First Marriage: '.$first_marriage.'</h6>
                <h5>Profession: '.$profession.'</h5>
                <p>
                  '.$desc.'
                </p>
              </div>
              <div style="display: block">
              <form action="" method="POST">
                <button class="btn btn-primary" name="accept_btn" value='.$id.'>Accept</button>
                <button class="btn btn-outline-primary" name="deny_btn" value='.$id.'>Deny</button>
              </div>
            </div>
          ';
        }
      ?>
    </div>
  </body>
</html>
