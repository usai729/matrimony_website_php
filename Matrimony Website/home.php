<html>
    <head>
        <title>Home - </title> 

        <meta name="viewport" content="width=device-width" />

        <!--Bootstarp-->
        <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
        crossorigin="anonymous"
        />

        <!--Bootstarp JS-->
        <script
        src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p"
        crossorigin="anonymous"
        ></script>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>

        <link rel="stylesheet" href="./css/home.css">
        <script src="./javascript/home.js"></script>

        <link rel="stylesheet" href="./css/footer.css">

    </head>

    <body>
        <?php 
            include "nav.php";
        ?>
        <div class="filters">
            <i class="fa fa-filter" id="filter_icon"></i> 
            <span style="font-size: 1.03rem; align-self:center;">Age:</span><input type="number" placeholder="From"><span style="font-size: 1.03rem; align-self:center; font-weight:bold;">-</span><input type="number" placeholder="To">
            <select name="religion">
                <option value="" disabled selected>Religion</option>
                <option value="Hindu">Hindu</option>
                <option value="muslim">Muslim</option>
                <option value="christ">Christian</option>
                <option value="doesntmatter">Doesn't Matter</option>
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
                <optgroup>
                    <option value="doesntmatter">Doesn't Matter</option>
                </optgroup>
            </select>
            <select name="prevm">
                <option value="" disabled selected>Previous Marriages</option>
                <option value="none">None</option>
                <option value="1plus">1+</option>
                <option value="doesntmatter">Doesn't Matter</option>
            </select>
            <button class="btn btn-sm btn-secondary">
                Apply Filters <i class="fa fa-check"></i>
            </button>
        </div>
    <center>
        <div class="container" style="margin: 25px">
            <div class="sub">
                <img class="dp" src="https://images.unsplash.com/photo-1558507652-2d9626c4e67a?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxjb2xsZWN0aW9uLXBhZ2V8Mnw2NzU2ODEwOXx8ZW58MHx8fHw%3D&w=1000&q=80">
                <div class="display: block">
                    <table class="table">
                        <tr>
                            <td>Name: </td>
                            <th>Full Name</th>
                        </tr>
                        <tr>
                            <td>DOB: </td>
                            <th>XX-XX-XXXX</th>
                        </tr>
                        <tr>
                            <td>Religion: </td>
                            <th>Hindu/Muslim/Christian</th>
                        </tr>
                        <tr>
                            <td>Caste: </td>
                            <th>OC/OBC/BC/SC/ST</th>
                        </tr>
                        <tr>
                            <td>Previous marriages: </td>
                            <th>None/1+</th>
                        </tr>
                        <tr>
                            <td>Description</td>
                            <th>
                                *******************************
                                ******************
                                ****************************<br>
                                Long Description<br>
                                **********************************
                                **********************
                                *********************
                            </th>
                        </tr>
                    </table>
                    <div style="display: flex; margin: 10px; float: right">
                        <div style="margin: 10px;">
                            <button class="like">Like <i class="fa fa-heart" class="i_like"></i></button>
                        </div>
                        <div style="margin: 10px">
                            <button class="show_profile">View Full Profile <i class="fa fa-eye"></i></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </center>
    <?php 
        include "footer.php";
    ?>
    </body>
</html>