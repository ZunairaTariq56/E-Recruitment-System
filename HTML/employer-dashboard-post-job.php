<?php include('includes/auth.php'); ?>
<?php


include('includes/db.php');
if(isset($_POST['job-post'])){
$job_title = $_POST['job-title'];
$job_type = $_POST['job-type'];
$job_category = $_POST['job-category'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$last_date = $_POST['last-date'];
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

  $sql = "INSERT INTO job_post(job_title, job_type, job_category, location, salary,
   gender, country, city, qualification, experience, last_date, message, file)
   VALUES ('$job_title','$job_type','$job_category','$location','$salary','$gender','$country',
   '$city','$qualification','$experience','$last_date','$message','$destinationfile')";
  $query = mysqli_query($con,$sql);
  if($query){
    echo '<script language="javascript">';
    echo 'alert("Job Posted!")';
    echo '</script>';

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Job Not Posted!")';
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
                            <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
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
                        <form action="employer-dashboard-post-job.php" method="POST" enctype="multipart/form-data" id="jobForm">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="input-text" name="job-title" placeholder="Your Title" id="form_jtitle" required="">
                                            <span id="jtitle_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <select class="selectpicker search-fields" name="job-type" id="form_jtype" required="">
                                                <option>Full time</option>
                                                <option>Part time</option>
                                                <option>Freelance</option>
                                                <option>Temporary</option>
                                            </select>
                                            <span id="jtype_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Category</label>
                                            <select class="selectpicker search-fields" name="job-category" id="form_jcategory" required="">
                                                <option>Job Category</option>
                                                <option>Accounting / Finance</option>
                                                <option>Restaurant / Food Service</option>
                                                <option>Counseling</option>
                                                <option>Health Care</option>
                                            </select>
                                            <span id="jcategory_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="input-text" name="location" placeholder="Location" id="form_location" required="">
                                            <span id="location_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="text" class="input-text" name="salary" placeholder="USD" id="form_salary" required="">
                                            <span id="salary_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="selectpicker search-fields" name="gender" id="form_gender" required="">
                                                <option>Gender</option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <span id="gender_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="selectpicker search-fields" name="country" id="form_country" required="">
                                                    <option>Pakistan</option>
                                                    <option>Country</option>
                                                    <option>Usa</option>
                                                    <option>Bangladesh</option>
                                                    <option>Indea</option>
                                                    <option>Canada</option>
                                                </select>
                                                <span id="country_error_message" class="error_form text-danger"> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="selectpicker search-fields" name="city" id="form_city" required="">
                                                    <option>Sialkot</option>
                                                    <option>Gujrat</option>
                                                    <option>Dhaka</option>
                                                    <option>Dubai</option>
                                                    <option>Mumbai</option>
                                                    <option>Califonia</option>
                                                </select>
                                                <span id="city_error_message" class="error_form text-danger"> </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <select class="selectpicker search-fields" name="qualification" id="form_qualification" required="">
                                                <option>Qualification</option>
                                                <option>Matriculation</option>
                                                <option>Gradute</option>
                                            </select>
                                            <span id="qualification_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="selectpicker search-fields" name="experience" id="form_experience" required="">
                                                <option>Experience</option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                            <span id="experience_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Last Date</label>
                                            <input type="text" class="input-text" name="last-date" placeholder="Last Date For Apply" id="form_ldate" required="">
                                            <span id="ldate_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="input-text" name="message" placeholder="message" id="form_description" required=""></textarea>
                                            <span id="description_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="photoUpload photoUpload-2">
                                            Upload Files
                                            <input type="file" class="upload" name="file" id="form_picture" autocomplete="off" required="">
                                        </div>
                                        <span id="picture_error_message" class="error_form text-danger"> </span>
                                        <div class="post-btn"><button name="job-post" class="btn btn-md button-theme">Post a job</button></div>
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

  $("#jtitle_error_message").hide();
  $("#jtype_error_message").hide();
  $("#jcategory_error_message").hide();
  $("#location_error_message").hide();
  $("#salary_error_message").hide();
  $("#gender_error_message").hide();
  $("#country_error_message").hide();
  $("#city_error_message").hide();
  $("#qualification_error_message").hide();
  $("#experience_error_message").hide();
  $("#ldate_error_message").hide();
  $("#description_error_message").hide();
  $("#picture_error_message").hide();

  var error_jtitle = false;
  var error_jtype = false;
  var error_jcategory = false;
  var error_location = false;
  var error_salary = false;
  var error_gender = false;
  var error_country = false;
  var error_city = false;
  var error_qualification = false;
  var error_experience = false;
  var error_ldate = false;
  var error_description = false;
  var error_picture = false;
  //var error_designation = false;

  $("#form_jtitle").focusout(function(){
    check_jtitle();
  });

  $("#form_jtype").focusout(function(){
    check_jtype();
  });

  $("#form_jcategory").focusout(function(){
    check_description();
  });

  $("#form_location").focusout(function(){
    check_location();
  });

  $("#form_salary").focusout(function(){
    check_salary();
  });

  $("#form_gender").focusout(function(){
    check_gender();
  });

  $("#form_country").focusout(function(){
    check_country();
  });

  $("#form_city").focusout(function(){
    check_city();
  });

  $("#form_qualification").focusout(function(){
    check_qualification();
  });

  $("#form_experience").focusout(function(){
    check_experience();
  });

  $("#form_ldate").focusout(function(){
    check_ldate();
  });

  $("#form_description").focusout(function(){
    check_description();
  });

  $("#form_picture").focusout(function(){
    check_picture();
  });



  function check_jtitle(){
    var pattern = /^[a-zA-Z/^\s*$/\.\!\'\-]*$/;
    var jtitle = $("#form_jtitle").val();
    if(pattern.test(jtitle) && jtitle !== ''){
      $("#jtitle_error_message").hide();
      $("#form_jtitle").css("border-bottom","2px solid #34F458");
    }
    else{
        $("#jtitle_error_message").html("Should contain only characters!");
        $("#jtitle_error_message").show();
        $("#form_jtitle").css("border-bottom","2px solid #F90A0A");
        error_jtitle = true;
    }
  }

  function check_salary(){
    var pattern = /^\d{3}$/;
    var salary = $("#form_salary").val();
    if(pattern.test(salary) && salary !== ''){
      $("#salary_error_message").hide();
      $("#form_salary").css("border-bottom","2px solid #34F458");
    }
    else{
        $("#salary_error_message").html("Should be digits!");
        $("#salary_error_message").show();
        $("#form_salary").css("border-bottom","2px solid #F90A0A");
        error_salary = true;
    }
  }

  function check_ldate(){
    var pattern = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2,}$/;
    var ldate = $("#form_ldate").val();
    if(pattern.test(ldate) && ldate !== ''){
      $("#ldate_error_message").hide();
      $("#form_ldate").css("border-bottom","2px solid #34F458");
    }
    else{
        $("#ldate_error_message").html("Should be a valid pattern MM/DD/YYYY!");
        $("#ldate_error_message").show();
        $("#form_ldate").css("border-bottom","2px solid #F90A0A");
        error_ldate = true;
    }
  }

  function check_description(){
    var pattern = /^[a-zA-Z/^\s\d*$/\,\.\!\'\-]*$/;
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


  $("#jobForm").submit(function(){
    error_jtitle = false;
    error_salary = false;
    error_ldate = false;
    error_description = false;

    check_jtitle();
    check_salary();
    check_ldate();
    check_description();

    if(error_jtitle === false && error_salary === false && error_ldate === false && error_description === false){
    
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
