<?php 
    header("Allow-Access-Control-Orign: *");

    include "./php/config.php";
    include "./php/user_id.php";

    //session_start();

    $sql_basic_details = "SELECT * FROM user INNER JOIN physical_details ON user.pId = physical_details.relId WHERE user.pId='$user_id'";
    $query_1 = mysqli_query($con, $sql_basic_details);
    
    $sql_job_details = "SELECT * FROM job WHERE relId='$user_id'";
    $query_2 = mysqli_query($con, $sql_job_details);

    $sql_residence_details = "SELECT * FROM residence WHERE relId='$user_id'";
    $query_3 = mysqli_query($con, $sql_residence_details);
?>

<html>
  <head>
    <title>ShubhSaathi.com - My Profile</title>

    <meta name="viewport" content="width=device-width" />

    <!--Javascript-->
    <script src="./javascript/myprofile.js"></script>

    <!--CSS-->
    <link rel="stylesheet" href="./css/my_profile.css" />

    <!--Bootstarp-->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />

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

    <link
      rel="icon"
      href="./assets/images/ShubhSaathi_.png"
      type="image/icon type"
    />
  </head>

  <body>
    <?php 
      include "nav.php";
    ?>
    <center>
      <?php 
        while ($rows = mysqli_fetch_assoc($query_1)) {
          //
          $fullname = $rows['fullname'];
          $unid = $rows['unid'];
          $searchingfor = $rows['searching'];
          $gender = $rows['searching'] == "female" ? "Male":"Female";
          $dob = $rows['dob'];
          $religion = $rows['religion'];
          $caste = $rows['caste'];
          $email = $rows['email'];
          $phone = $rows['phone'];
          $first_marriage = $rows['first_marriage'] == 0 ? "No":"Yes";
          $profession = $rows['profession'] == 0 ? "No":"Yes";
          $desc = $rows['description'];
          //
          $dp = $rows['dp'];
          //
          $height = $rows['height_ft'];
          $height_in = $rows['height_in'];
          $weight = $rows['weight'];
          $eye = $rows['eye_color'];
          $color = $rows['color'];
          $age = $rows['age'];
          //

          echo '
            <div class="sub">
              <div class="basic_info">
                <div class="profile_pic">
                  <img src="/assets/user_dps/'.$dp.'" id="dp">
                <div class="info_p1">
                  <table class="table" style="padding: 10px;">
                    <tr>
                      <td class="light">Full Name</td>
                      <td class="b" id="fname">'.ucfirst($fullname).'</td>
                    <tr>
                    <tr>
                      <td class="light">ID</td>
                      <td class="b" id="unid" style="text-decoration: line-through;">'.$unid.'</td>
                      <!--<td style="border: none; cursor: pointer; color: gray" id="eye"><label for="check"><i class="fa fa-eye"></i></label></td>
                      <input type="checkbox" id="check" onchange="show_id()">-->
                    <tr>
                    <tr>
                      <td class="light">Searching</td>
                      <td class="b" id="searchFor">'.ucfirst($searchingfor).'</td>
                    <tr>
                    <tr>
                      <td class="light">DOB</td>
                      <td class="b">'.$dob.'</td>
                    <tr>
                    <tr>
                      <td class="light">Religion</td>
                      <td class="b" id="rel">'.$religion.'</td>
                    <tr>
                    <tr>
                      <td class="light">Caste</td>
                      <td class="b" id="castep">'.strtoupper($caste).'</td>
                    <tr>
                    <tr>
                      <td class="light">First Marriage</td>
                      <td class="b">'.$first_marriage.'</td>
                    <tr>
                    <tr>
                      <td class="light">Working</td>
                      <td class="b">'.$profession.'</td>
                    <tr>
                    <tr>
                      <td class="light">E-mail</td>
                      <td class="b" id="mail">'.$email.'</td>
                    <tr>
                    <tr>
                      <td class="light">Phone</td>
                      <td class="b" id="ph">'.$phone.'</td>
                    <tr>
                    <tr>
                      <td class="light">Description</td>
                      <td class="b" id="des">'.$desc.'</td>
                    <tr>
                  </table>
                </div>
                </div>
                <div id="physical_details">
                  <table class="table" style="border: 0.5px solid lightgray;">
                    <tr style="text-align: center;">
                      <td><span class="light">Height</span><br><span class="b">'.$height.'\' '.$height_in.'</span></td>
                      <td><span class="light">Weight</span><br><span class="b">'.$weight.' Kgs</span></td>
                      <td><span class="light">Skin Complexion</span><br><span class="b">'.ucfirst($color).'</span></td>
                      <td><span class="light">Eye Color</span><br><span class="b">'.ucfirst($eye).'</span></td>
                    </tr>
                  </table>
                </div>
                <div style="display: flex; align-items: flex-end; justify-content: flex-end; margin: 0px 15px 0px 0px;">
                  <button id="edit_btn" data-bs-toggle="modal" data-bs-target="#basicDetails"><i class="fa fa-pencil"></i>&nbsp;Edit Details</button>
                </div>
              </div>
            </div>
          ';
        }

        if (!$query_3) {
          echo '
            <div class="sub">
              <div id="residence_na">
                <button style="border: none; background-color: transparent; color: gray;"  data-bs-toggle="modal" data-bs-target="#residence">
                  <i class="fa fa-home"></i>&nbsp;
                  Update Residential Details
                </button>
              </div>
            </div>
          ';
        }

        if (mysqli_num_rows($query_2) == 0) {
          echo '
            <div class="sub">
              <div id="job_na">
                <button style="border: none; background-color: transparent; color: gray;"  data-bs-toggle="modal" data-bs-target="#jobDetails">
                  <i class="fa fa-computer"></i>&nbsp;
                  Update Job Details
                </button>
              </div>
            </div>
          ';
        }
      ?>
    </center>

    <!-- Modals -->
    <!-- Edit Basic Details -->
    <div class="modal fade" id="basicDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- SELECTOR -->
            <div style="display: flex;">
              <form>
                <table>
                  <tr>
                    <td>
                      <label for="BDetails">Basic Details</label>
                      <input type="radio" name="selector" value="basic_details" id="BDetails" onchange="show_form(this.value)">
                    </td>
                    <td> 
                      <label for="PDetails">Physical Details</label>
                      <input type="radio" name="selector" value="physical_details" id="PDetails" onchange="show_form(this.value)">
                    </td>
                  </tr>
                </table>
              </form>
            </div>
            <!-- Basic Details -->
            <form id="basicdetails">
              <input type="text" name="fullname" placeholder="Name" id="full_name">
              <input type="hidden" id="uniqueb">
              <br><br>
              <div class="select">
                <select name="religion" id="religion">
                  <option value="" disabled selected>Religion</option>
                  <option value="Hindu">Hindu</option>
                  <option value="Muslim">Muslim</option>
                  <option value="Christian">Christian</option>
                </select>
                <select name="caste" id="caste">
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
              <br>
              <input type="email" name="email" placeholder="E-mail" id="email">
              <br><br>
              <input type="number" name="phno" placeholder="Phone Number" id="phno">
              <br><br>
              <textarea placeholder="Description" id="desc"></textarea>
              <br><br>
            </form>
            <!-- Physical Details --> 
            <form id="physicaldetails">
              <input type="hidden" id="uniquep">
              <div style="display: block;">
                <h6>Height</h6>
                <div style="display: flex;">
                  <select name="height_ft" required>
                    <option value="" disabled selected>Feet</option>
                    <option value="4">4 Ft</option>
                    <option value="5">5 Ft</option>
                    <option value="6">6 Ft</option>
                    <option value="7">7 Ft</option>
                  </select>
                  <select name="height_in" required>
                    <option value="" disabled selected>Inches</option>
                    <option value="0">0 In</option>
                    <option value="1">1 In</option>
                    <option value="2">2 In</option>
                    <option value="3">3 In</option>
                    <option value="4">4 In</option>
                    <option value="5">5 In</option>
                    <option value="6">6 In</option>
                    <option value="7">7 In</option>
                    <option value="8">8 In</option>
                    <option value="9">9 In</option>
                    <option value="10">10 In</option>
                    <option value="11">11 In</option>
                    <option value="12">12 In</option>
                  </select>
              </div>
              <div style="display: block;">
                <h6>Weight</h6>
                <input type="number" name="weight" placeholder="Weight in KGs">
              </div>
              <div style="display: block;">
                <h6>Eye Color</h6>
                <select name="eye_color" required>
                  <option value="" disabled selected>Eye Color</option>
                  <option value="black">Black</option>
                  <option value="brown">Brown</option>
                  <option value="blue">Blue</option>
                  <option value="green">Green</option>
                  <option value="hazel">Hazel</option>
                  <option value="Amber">Amber</option>
                </select>
              </div>
              <div style="display: block;">
                <h6>Skin Color</h6>
                <select name="skin_color" required>
                  <option value="" disabled selected>Skin Color</option>
                  <optgroup>
                    <option value="vfair">Very Fair</option>
                    <option value="fair">Fair</option>
                  </optgroup>
                  <optgroup>
                    <option value="medium">Medium</option>
                  </optgroup>
                  <optgroup>
                    <option value="dark">Dark</option>
                    <option value="vdark">Very Dark</option>
                  </optgroup>
                </select>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Update Residence -->
    <div class="modal fade" id="residence" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            ...
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Save changes</button>
          </div>
        </div>
      </div>
    </div>
    <!-- Update Job -->
    <div class="modal fade" id="jobDetails" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Work Details</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <!-- Basic Details -->
            <form>
              <input type="text" name="profession" placeholder="Profession Title" required />
              <input type="text" name="company" placeholder="Company/Business Type" autocomplete="off" required />
              <div style="display: block">
                <p>Salary Range</p>
                <div style="display: flex">
                  <input type="number" name="from" placeholder="From" required min="15000" />
                  <input type="number" name="to" placeholder="To" required min="20000" />
                </div>
              </div>
              <div class="btns">
                <input type="submit" class="btn btn-primary" value="Add Profession Details" name="submit" />
              </div>
                </form>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancel</button>
                <button type="button" class="btn btn-primary">Update</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>