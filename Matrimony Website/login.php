<?php 
  header("Allow-Access-Control-Orign: *");

  include "./php/config.php";

  $flag = true;

  if (isset($_POST['submit'])) {
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $pwd = md5(mysqli_real_escape_string($con, $_POST['pwd']));

    $sql_query = "SELECT * FROM user WHERE email='$email' AND pwd='$pwd'";
    $query = mysqli_query($con, $sql_query);

    if(mysqli_num_rows($query) == 0) {
      $flag = false;
    } else {
      $flag = true;
    }
  }
?>

<html>
  <head>
    <title>Login - xyz.com</title>

    <meta name="viewport" content="width=device-width" />

    <!--Bootstarp-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/joker.css" />
    <link rel="stylesheet" href="./css/login.css" />

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

    <!--Javascript-->
    <script src="./javascript/login.js"></script>
    <script src="./javascript/joker.js"></script> 

    <link
      rel="icon"
      href="./assets/images/ShubhSaathi_.png"
      type="image/icon type"
    />
  </head>

  <body>
    <div class="container" style="z-index: 1">
      <img
        src="./assets/images/ShubhSaathi_s.png"
        style="width: 30%; float: right"
      />
      <h5>Log In</h5>
      <form action="login.php" method="POST">
        <input type="text" placeholder="Enter your email" name="email" />
        <input
          type="password"
          placeholder="Enter your password"
          id="pwd"
          name="pwd"
        />
        <div class="form-check" style="margin-bottom: 10px">
          <input
            class="form-check-input"
            type="checkbox"
            value=""
            id="flexCheckDefault"
            onchange="show_pwd()"
          />
          <label
            class="form-check-label"
            for="flexCheckDefault"
            style="margin-left: 5px"
          >
            Show password
          </label>
        </div>
        <div class="lower">
          <button
            class="btn btn-success"
            style="border: none; font-weight: bold"
            name="submit"
          >
            Continue
          </button>
          <a href="index.html">Sign Up</a>
        </div>
      </form>
      <div <?php echo $flag == false ? "style='text-align: center; background: red; padding: 5px; border-radius: 4px; opacity: 0.7'":""; ?>>
      <span style="color: white;">
        <?php 
          echo $flag == false ? "<strong>Wrong password/email</strong>" : "";
        ?>
      </span>
      </div>
    </div>
    <div class="footer">
      <h6>&copy; &nbsp; All Rights Reserved</h6>
    </div>
  </body>
</html>
