<html>
  <head>
    <title>Find your partner</title>

    <meta name="viewport" content="width=device-width" />

    <!--Bootstarp-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

    <link rel="stylesheet" href="./css/joker.css" />
    <link rel="stylesheet" href="./css/index.css" />

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
    <!--fa-->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />

    <!--Bootstarp JS-->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
      crossorigin="anonymous"
    ></script>

    <!--Javascript-->
    <script src="./javascript/index.js"></script>
    <script src="./javascript/joker.js"></script>

    <link
      rel="icon"
      href="./assets/images/ShubhSaathi_.png"
      type="image/icon type"
    />
  </head>

  <body>
    <!--Header-->
    <div class="header" style="margin-top: 10px">
      <img src="./assets/images/ShubhSaathi_s.png" />
      <!--<h4>
        Find your partner&nbsp;<i
          class="fa fa-heart"
          style="color: rgb(255, 0, 242)"
        ></i>
      </h4>-->
      <h3>Let's start with the basic details</h3>
    </div>
    <!--Main-->
    <div class="alert alert-danger" role="alert" id="alert">
      Couldn't go ahead with 1st phase of registration
    </div>
    <div role="alert" id="alert_exists">
      <strong>Alert!&nbsp;</strong>User with same email address already exists
    </div>
    <div class="container">
      <div class="main">
        <!--Form-->
        <form onsubmit="return false" id="rform">
          <input
            type="text"
            placeholder="Full name"
            name="fname"
            autocomplete="off"
            required
          />
          <div class="form-check" style="margin: 5px">
            <label class="form-check-label" for="working">&nbsp;Working?</label>
            <input
              type="checkbox"
              class="form-check-input"
              id="working"
              onchange="show_fields_1()"
            />
          </div>
          <input
            type="text"
            placeholder="Profession"
            name="profession"
            autocomplete="off"
            id="profession"
            required
          />
          <input type="email" placeholder="Email" name="email" />
          <div class="dob">
            <label style="color: #fff"><strong>DOB</strong></label
            ><br />
            <input
              type="date"
              placeholder="DOB"
              title="DOB"
              style="width: 100%"
              name="dob"
              required
            />
          </div>
          <div class="select">
            <select name="religion" required>
              <option value="" disabled selected>Religion</option>
              <option value="Hindu">Hindu</option>
              <option value="Muslim">Muslim</option>
              <option value="Christian">Christian</option>
            </select>
            <select name="caste" required>
              <option value="" disabled selected>Caste</option>
              <optgroup label="OC">
                <option value="oc">OC</option>
              </optgroup>
              <optgroup label="OBC">
                <option value="OBC-A">OBC-A</option>
                <option value="OBC-B">OBC-B</option>
                <option value="OBC-C">OBC-C</option>
                <option value="OBC-D">OBC-D</option>
              </optgroup>
              <optgroup label="BC">
                <option value="BC-A">BC-A</option>
                <option value="BC-B">BC-B</option>
              </optgroup>
              <optgroup label="SC/ST">
                <option value="SC">SC</option>
                <option value="ST">ST</option>
              </optgroup>
            </select>
          </div>
          <select style="width: 100%" name="search_for" required>
            <option value="" disabled selected>Looking for...</option>
            <option value="female">Woman</option>
            <option value="male">Man</option>
          </select>
          <input
            type="password"
            placeholder="Create a password"
            style="width: 100%"
            name="pwd"
            required
          />
          <div class="form-check form-switch" style="margin-bottom: 8px">
            <label class="form-check-label" for="flexSwitchCheckChecked"
              >First Marriage?</label
            >
            <input
              class="form-check-input"
              type="checkbox"
              role="switch"
              id="flexSwitchCheckChecked"
              name="first_marriage"
              checked
            />
          </div>
          <div class="buttons">
            <button onclick="submit_form()">
              <i class="fa fa-heart"></i>&nbsp;Continue
            </button>
            <a href="login.html" id="login">Log In</a>
          </div>
        </form>
        <!---->
      </div>
    </div>
    <!--Footer-->
    <?php 
      include "footer.php";
    ?>
  </body>
</html>
