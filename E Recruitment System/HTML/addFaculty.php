<?php include('includes/auth.php'); ?>
<?php


include('includes/db.php');
if(isset($_POST['add-faculty'])){
$name = $_POST['name'];
$f_name = $_POST['f-name'];
$designation = $_POST['designation'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$message = $_POST['message'];

$files = $_FILES['file'];
$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

// To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
$fileext = explode('.',$filename);
// to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
// we will get jpg
$filecheck = strtolower(end($fileext));
$fileextstored = array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){
  $destinationfile = 'images/'.$filename;
  move_uploaded_file($filetmp,$destinationfile);

  $sql = "INSERT INTO faculty(name, f_name, designation, gender, country, city, qualification, experience, description, picture)
   VALUES ('$name','$f_name','$designation','$gender','$country',
   '$city','$qualification','$experience','$message','$destinationfile')";
  $query = mysqli_query($con,$sql);
  if($query){
    echo '<script language="javascript">';
    echo 'alert("Faculty Added!")';
    echo '</script>';

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Faculty Not Added!")';
    echo '</script>';
  }
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Unsupported File!")';
    echo '</script>';
  }
}
   ?>








<!DOCTYPE html>
<html lang="zxx">
<head>
      <?php include('includes/dashboard-links.php'); ?>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include('includes/dashboard-header.php') ?>
<!-- Main header end -->

<!-- Dashboard start -->
<div class="dashboard">
    <div class="container-fluid">
          <?php include ('includes/dashboard-side-header.php'); ?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Add faculty</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index-3.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li class="active">Post a Job</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form action="addFaculty.php" method="POST" enctype="multipart/form-data" id="facultyForm">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" class="input-text" name="name" placeholder="Name" id="form_name" required="">
                                            <span id="name_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="input-text" name="f-name" placeholder="Father's Name" id="form_fname" required="">
                                              <span id="fname_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Desigantion</label>
                                            <select class="selectpicker search-fields" name="designation" id="form_designation" required="">
                                                <option>Networking</option>
                                                <option>Accounting / Finance</option>
                                                <option>Programming</option>
                                                <option>MathMetics</option>
                                                <option>Health Care</option>
                                            </select>
                                            <span id="designation_error_message" class="error_form"> </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="selectpicker search-fields" name="gender" id="gender1">
                                                <option>Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <span id="gender2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="selectpicker search-fields" name="country" id="country1" autocomplete="off">
                                                    <option>Pakistan</option>
                                                    <option>Country</option>
                                                    <option>Usa</option>
                                                    <option>Bangladesh</option>
                                                    <option>Indea</option>
                                                    <option>Canada</option>
                                                </select>
                                                <span id="country2" class="text-danger font-weight-bold"> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="selectpicker search-fields" name="city" id="city1" autocomplete="off">
                                                    <option>Sialkot</option>
                                                    <option>Gujrat</option>
                                                    <option>Lahore</option>
                                                    <option>Rawal Pindi</option>
                                                    <option>Faislabad</option>
                                                    <option>Multan</option>
                                                </select>
                                                <span id="city2" class="text-danger font-weight-bold"> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <select class="selectpicker search-fields" name="qualification" id="qualification1" autocomplete="off">
                                                <option>Qualification</option>
                                                <option>Matriculation</option>
                                                <option>Gradute</option>
                                            </select>
                                            <span id="qualification2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="selectpicker search-fields" name="experience" id="experience1" autocomplete="off">
                                                <option>Experience</option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                            <span id="experience2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="input-text" name="message" placeholder="message" id="form_description" autocomplete="off"></textarea>
                                            <span id="description_error_message" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="photoUpload photoUpload-2">
                                            Upload Files
                                            <input type="file" class="upload" name="file" id="pic1" autocomplete="off">
                                        </div>
                                        <span id="pic2" class="text-danger font-weight-bold"> </span>
                                        <div class="post-btn"><button name="add-faculty" class="btn btn-md button-theme">Add Faculty</button></div>
                                    </div>
                                </div>
                            </div>

                        </form>
                    </div>
                      <?php include('includes/dashboard-footer.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index-3.php">
        <input type="search" value="" placeholder="type keyword(s) here" />
        <button type="submit" class="btn btn-sm button-theme">Search</button>
    </form>
</div>

<script src="js/jquery-2.2.0.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script  src="js/bootstrap-submenu.js"></script>
<script  src="js/rangeslider.js"></script>
<script  src="js/jquery.mb.YTPlayer.js"></script>
<script  src="js/bootstrap-select.min.js"></script>
<script  src="js/jquery.easing.1.3.js"></script>
<script  src="js/jquery.scrollUp.js"></script>
<script  src="js/jquery.mCustomScrollbar.concat.min.js"></script>
<script  src="js/leaflet.js"></script>
<script  src="js/leaflet-providers.js"></script>
<script  src="js/leaflet.markercluster.js"></script>
<script  src="js/moment.min.js"></script>
<script  src="js/daterangepicker.min.js"></script>
<script  src="js/dropzone.js"></script>
<script  src="js/slick.min.js"></script>
<script  src="js/jquery.filterizr.js"></script>
<script  src="js/jquery.magnific-popup.min.js"></script>
<script  src="js/jquery.countdown.js"></script>
<script  src="js/maps.js"></script>
<script  src="js/app.js"></script>

<!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>
<!-- Custom javascript -->
<script  src="js/ie10-viewport-bug-workaround.js"></script>

<script type="text/javascript">

  $(function(){

    $("#name_error_message").hide();
    $("#fname_error_message").hide();
    $("#designation_error_message").hide();
    $("#description_error_message").hide();

    var error_name = false;
    var error_fname = false;
    var error_description = false;
    //var error_designation = false;

    $("#form_name").focusout(function(){
      check_name();
    });

    $("#form_fname").focusout(function(){
      check_fname();
    });

    $("#form_description").focusout(function(){
      check_description();
    });

    function check_name(){
      var pattern = /^[a-zA-Z/^\s*$/\.\,\'\-]*$/;
      var name = $("#form_name").val();
      if(pattern.test(name) && name !== ''){
        $("#name_error_message").hide();
        $("#form_name").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#name_error_message").html("Should contain only characters!");
          $("#name_error_message").show();
          $("#form_name").css("border-bottom","2px solid #F90A0A");
          error_name = true;
      }
    }

    function check_fname(){
      var pattern = /^[a-zA-Z/^\s*$/\.\,\'\-]*$/;
      var fname = $("#form_fname").val();
      if(pattern.test(fname) && fname !== ''){
        $("#fname_error_message").hide();
        $("#form_fname").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#fname_error_message").html("Should contain only characters!");
          $("#fname_error_message").show();
          $("#form_fname").css("border-bottom","2px solid #F90A0A");
          error_fname = true;
      }
    }

    function check_description(){
      var pattern = /^[a-zA-Z/^\s\d*$/\.\,\'\!\-]*$/;
      var description = $("#form_description").val();
      //var description_length = $("#form_description").val().length;
      if(pattern.test(description) && description !== ''){
        $("#description_error_message").hide();
        $("#form_description").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#description_error_message").html("Should contain only characters and min len 20!");
          $("#description_error_message").show();
          $("#form_description").css("border-bottom","2px solid #F90A0A");
          error_description = true;
      }
    }


    $("#facultyForm").submit(function(){
      error_name = false;
      error_fname = false;
      error_description = false;

      check_name();
      check_fname();
      check_description();

      if(error_name === false && error_fname === false && error_description === false){
        alert("Data Added Successfully!");
        return true;
      }
      else{
        alert("Please fill the form correctly");
        return false;
      }
    });

  });

</script>
</body>
</html>
