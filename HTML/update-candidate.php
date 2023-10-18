
<?php include('includes/auth.php'); ?>
<?php
$id1 = $_GET['jb_id'];

include('includes/db.php');
$sql1 = "SELECT * FROM job_apply WHERE id = $id1";
$query1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($query1) > 0){
  while($row = mysqli_fetch_array($query1))
    {
      $name = $row['name'] ;
      $father_name = $row['father_name'] ;
      $email = $row['email'] ;
      $address = $row['address'] ;
      $gender = $row['gender'];
      $country = $row['country'];
      $city = $row['city'];
      $experties = $row['experties'];
      $qualification = $row['qualification'];
      $experience = $row['experience'];
      $about_you = $row['about_you'];
      $picture = $row['picture'];
      $resume = $row['resume'];
      $current_date = $row['current_date'];
    }
  }
?>


<!-- Update table -------->
<?php

  if(isset($_POST['update-post'])){
    $post_title = $_POST['job-title'] ;
    $post_type = $_POST['job-type'] ;
    $city = $_POST['city'] ;
    $category = $_POST['job-category'] ;
    $deadline = $_POST['last-date'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];
    $country = $_POST['country'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];

    $file =$_FILES['file'];
    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
    $fileext = explode('.',$filename);
    // to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
    // we will get jpg
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
      $destinationfile = 'images/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);

    $sql = "UPDATE job_post SET job_title='$post_title', job_type='$post_type',job_category='$category',
    location='$location',salary='$salary',gender='$gender',country='$country',city='$city',qualification='$qualification',
    experience='$experience',last_date='$deadline',message='$message',file='$destinationfile' WHERE id='$id1'";
    $query = mysqli_query($con,$sql);
    if($query){
      echo '<script language="javascript">';
      echo 'alert("Data Updated Successfully!")';
      echo '</script>';
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("DFailed To Updated!")';
      echo '</script>';
    }

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Unsupported File")';
    echo '</script>';
  }
}
 ?>


<div id="data"></div>
  <script language="javascript">
  function processForm(){
    var jobid = Location.search.substring(1).split("&");
    var tem = jobid[0].split("=");
    l = unescape(temp[1]);
    document.getElementById('data').innerHTML = l;
  }
  processForm();

  </script>

<?php include('includes/user_auth.php');

//echo $id2 = $_GET['jb_id'];
//$job =  $_POST['jobid'];
//echo $job;
?>
<?php


  include('includes/db.php');
  if(isset($_POST['apply-now'])){

    $id1 = $job;
    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $experties = $_POST['experties'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $about_you = $_POST['about-you'];
    $resume = $_FILES['resume'];
/* picture check start */
    $pic = $_FILES['picture'];
    $picname = $pic['name'];
    $picerror = $pic['error'];
    $pictmp = $pic['tmp_name'];

    // To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
    $picext = explode('.',$picname);
    // to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
    // we will get jpg
    $piccheck = strtolower(end($picext));
    $picextstored = array('png','jpg','jpeg');
    if(in_array($piccheck,$picextstored)){
      $destinationpic = 'candidates/'.$picname;
      move_uploaded_file($pictmp,$destinationpic);

    /* Resume file check start */
    //$pic = $_FILES['picture'];
    $resumename = $resume['name'];
    $resumerror = $resume['error'];
    $resumetmp = $resume['tmp_name'];

    // To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
    $resumeext = explode('.',$resumename);
    // to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
    // we will get jpg
    $resumecheck = strtolower(end($resumeext));
    $resumeextstored = array('docx','pdf');
    if(in_array($resumecheck,$resumeextstored)){
      $destinationresume = 'candidates/'.$resumename;
      move_uploaded_file($resumetmp,$destinationresume);

      $sql = "INSERT INTO job_apply(name,father_name,email,address,gender,country,city,experties,qualification,
      experience,about_you,picture,resume,j_id) VALUES('$name','$fname','$email','$address','$gender','$country',
      '$city','$experties','$qualification','$experience','$about_you','$destinationpic','$destinationresume','$id1')";
      $query = mysqli_query($con,$sql);
      if($query){
        echo '<script language="javascript">';
        echo 'alert("Job Applied!")';
        echo '</script>';
      }
      else{
        echo '<script language="javascript">';
        echo 'alert("Job Not Applied!")';
        echo '</script>';
      }
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Resume file not supported!")';
      echo '</script>';

    }
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Picture file not supported!")';
    echo '</script>';
  }

  }
 ?>

<!DOCTYPE html>
<html lang="zxx">
<head>
    <title>JOBB - Job Board HTML Template</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">

    <!-- External CSS libraries -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/animate.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap-submenu.css">

    <link rel="stylesheet" type="text/css" href="css/bootstrap-select.min.css">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css">
    <link rel="stylesheet" type="text/css" href="css/daterangepicker.css">
    <link rel="stylesheet" href="css/leaflet.css" type="text/css">
    <link rel="stylesheet" href="css/map.css" type="text/css">
    <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" type="text/css" href="fonts/linearicons/style.css">
    <link rel="stylesheet" type="text/css"  href="css/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" type="text/css"  href="css/dropzone.css">
    <link rel="stylesheet" type="text/css"  href="css/slick.css">

    <!-- Custom stylesheet -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" id="style_sheet" href="css/skins/midnight-blue.css">

    <!-- Favicon icon -->
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon" >

    <!-- Google fonts -->
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,300,700">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Dosis%7CMontserrat:200,300,400,500,600,700,800,900%7CNunito+Sans:200,300,400,600,700,800,900">

    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <link rel="stylesheet" type="text/css" href="css/ie10-viewport-bug-workaround.css">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script  src="js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script  src="js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script  src="js/html5shiv.min.js"></script>
    <script  src="js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include("includes/header.php")?>
<!-- Main header end -->

<!-- Sub banner start -->
<div class="sub-banner bg-color-full">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Listing</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job Listing</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- job listing section start -->
<div class="job-listing-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-xl-4 col-lg-4 col-md-12">
                <div class="sidebar-right">
                    <!-- Advanced search start -->
                    <div class="widget-4 advanced-search">
                        <form method="POST" class="informeson">
                            <div class="form-group">
                                <label>Keywords</label>
                                <input type="text" name="search" class="form-control selectpicker search-fields" placeholder="Search Keywords">
                            </div>
                            <div class="form-group">
                                <label>Location</label>
                                <select class="selectpicker search-fields" name="Location">
                                    <option>All Location</option>
                                    <option>New York City</option>
                                    <option>Australia</option>
                                    <option>Brazil</option>
                                    <option>Canada</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Categories</label>
                                <select class="selectpicker search-fields" name="categories">
                                    <option>All Categories</option>
                                    <option>Accounting / Finance</option>
                                    <option>Industrial Engineer</option>
                                    <option>hospital / Health Care</option>
                                    <option>Design & Creative</option>
                                </select>
                            </div>
                            <br>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content4">
                                <i class="fa fa-plus-circle"></i> Job Type
                            </a>
                            <div id="options-content4" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox13" type="checkbox">
                                    <label for="checkbox13">
                                        Full Time
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox14" type="checkbox">
                                    <label for="checkbox14">
                                        Part Time
                                    </label>
                                </div>
                                <br>
                            </div>
                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content5">
                                <i class="fa fa-plus-circle"></i> Date Posted
                            </a>
                            <div id="options-content5" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox15" type="checkbox">
                                    <label for="checkbox15">
                                        Last Hour
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox16" type="checkbox">
                                    <label for="checkbox16">
                                        Last 24 Hours
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox17" type="checkbox">
                                    <label for="checkbox17">
                                        Last 7 Days
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox18" type="checkbox">
                                    <label for="checkbox18">
                                        Last 30 Days
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content6">
                                <i class="fa fa-plus-circle"></i> Experience
                            </a>
                            <div id="options-content6" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox19" type="checkbox">
                                    <label for="checkbox19">
                                        1 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox20" type="checkbox">
                                    <label for="checkbox20">
                                        2 Year
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox21" type="checkbox">
                                    <label for="checkbox21">
                                        3 Year
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content">
                                <i class="fa fa-plus-circle"></i> Offerd Salary
                            </a>
                            <div id="options-content" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox2" type="checkbox">
                                    <label for="checkbox2">
                                        10k - 20k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox3" type="checkbox">
                                    <label for="checkbox3">
                                        20k - 30k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox4" type="checkbox">
                                    <label for="checkbox4">
                                        30k - 40k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox1" type="checkbox">
                                    <label for="checkbox1">
                                        40k - 50k
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox7" type="checkbox">
                                    <label for="checkbox7">
                                        50k - 60k
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content3">
                                <i class="fa fa-plus-circle"></i> Qualification
                            </a>
                            <div id="options-content3" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox11" type="checkbox">
                                    <label for="checkbox11">
                                        Intermidiate
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox12" type="checkbox">
                                    <label for="checkbox12">
                                        Gradute
                                    </label>
                                </div>
                                <br>
                            </div>

                            <a class="show-more-options" data-toggle="collapse" data-target="#options-content2">
                                <i class="fa fa-plus-circle"></i> Gender
                            </a>
                            <div id="options-content2" class="collapse">
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox8" type="checkbox">
                                    <label for="checkbox8">
                                        Male
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox9" type="checkbox">
                                    <label for="checkbox9">
                                        Female
                                    </label>
                                </div>
                                <div class="checkbox checkbox-theme checkbox-circle">
                                    <input id="checkbox10" type="checkbox">
                                    <label for="checkbox10">
                                        Others
                                    </label>
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-xl-8 col-lg-8 col-md-12">
                <!-- Option bar start -->
                <div class="option-bar d-none d-xl-block d-lg-block d-md-block d-sm-block">
                    <div class="row">
                        <div class="col-lg-6 col-md-7 col-sm-7">
                            <div class="sorting-options2">
                                <span class="sort">Sort by:</span>
                                <select class="selectpicker search-fields" name="default-order">
                                    <option>Relevance</option>
                                    <option>Newest</option>
                                    <option>Oldest</option>
                                    <option>Random</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-5 col-sm-5">
                            <div class="sorting-options">
                                <a href="#" class="change-view-btn active-view-btn"><i class="fa fa-th-list"></i></a>
                                <a href="#" class="change-view-btn"><i class="fa fa-th-large"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- apply job form -->
                <div class="submit-address dashboard-list">
                    <form action="apply-job.php" method="POST" enctype="multipart/form-data" onsubmit="return validation()">
                        <h4 class="bg-grea-3">Basic Information</h4>
                        <div class="search-contents-sidebar">
                            <div class="row pad-20">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="input-text" name="name" placeholder="Name" id="name1" autocomplete="off">
                                        <span id="name2" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input type="text" class="input-text" name="fname" placeholder="Father's Name" id="fname1" autocomplete="off">
                                        <span id="fname2" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" class="input-text" name="email" placeholder="Email" id="email1" >
                                      <span id="email2" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>address</label>
                                        <input type="text" class="input-text" name="address" placeholder="address" id="address1" >
                                        <span id="address2" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>

                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Gender</label>
                                        <select class="selectpicker search-fields" name="gender" id="gender1" autocomplete="off">
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
                                                <option>Dhaka</option>
                                                <option>Dubai</option>
                                                <option>Mumbai</option>
                                                <option>Califonia</option>
                                            </select>
                                            <span id="city2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Expertis</label>
                                        <select class="selectpicker search-fields" name="experties" id="experties1" autocomplete="off">
                                            <option>Content Writer</option>
                                            <option>Web Developer</option>
                                            <option>Data Scientist</option>
                                            <option>Graphics Designer</option>
                                            <option>Teacher</option>
                                        </select>
                                        <span id="experties2" class="text-danger font-weight-bold"> </span>
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
                                        <select class="selectpicker search-fields" name="experience" id="experties1">
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
                                        <label>About You</label>
                                        <textarea class="input-text" name="about-you" placeholder="Tell us about your self!" id="about_you1"></textarea>
                                        <span id="about_you2" class="text-danger font-weight-bold"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="photoUpload photoUpload-2">
                                        Upload Pic
                                        <input type="file" class="upload" name="picture" id="pic1" >

                                    </div>
                                      <span id="pic2" class="text-danger font-weight-bold"> </span>
                                    <div class="photoUpload photoUpload-2">
                                        Resume
                                        <input type="file" class="upload" name="resume" id="file1" >

                                    </div><br><br>
                                    <span id="file2" class="text-danger font-weight-bold"> </span>
                                    <div class="post-btn" style="padding:0 15%;"><button name="apply-now" class="btn btn-md button-theme">Apply Now</button></div>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
          <!-- End job form --->

            </div>
        </div>
    </div>
</div>
<!-- job listing section end -->

<!-- Footer start -->
<?php include("includes/footer.php")?>
<!-- Footer end -->

<!-- Sub footer start -->

<!-- Sub footer end -->

<!-- Full Page Search -->
<div id="full-page-search">
    <button type="button" class="close">×</button>
    <form action="index.html#">
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

function validation(){
  var name = document.getElementById('name1').value;
  var fname = document.getElementById('fname1').value;
  var email = document.getElementById('email1').value;
  var address = document.getElementById('address1').value;
  var gender = document.getElementById('gender1').value;
  var country = document.getElementById('country1').value;
  var city = document.getElementById('city1').value;
  var experties = document.getElementById('experties1').value;
  var qualification = document.getElementById('qualification1').value;
  var experience = document.getElementById('experties1').value;
  var about_you = document.getElementById('about_you1').value;
  var pic = document.getElementById('pic1').value;
  var file = document.getElementById('file1').value;
  if (name == ""){
    document.getElementById('name2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((name.length <= 2) || (name.length > 20)){
    document.getElementById('name2').innerHTML = "** Name length must be between 2 to 20!";
    return false;
  }
  if(!isNaN(name)){
    document.getElementById('name2').innerHTML = "** Only characters are allowed!";
    return false;
  }
  // Father name
  if (fname == ""){
    document.getElementById('fname2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((fname.length <= 2) || (fname.length > 20)){
    document.getElementById('fname2').innerHTML = "** FName length must be between 2 to 20!";
    return false;
  }
  if(!isNaN(fname)){
    document.getElementById('fname2').innerHTML = "** Only characters are allowed!";
    return false;
  }
  // email
  if (email == ""){
    document.getElementById('email2').innerHTML = "** Please fill the email field!";
    return false;
  }
  if(email.indexOf('@') <=0){
    document.getElementById('email2').innerHTML = "** @ position is invalid!";
    return false;
  }
  if((email.charAt(email.length-4)!='.') && (email.charAt(email.length-3)!='.')){
    document.getElementById('email2').innerHTML = "** Dot position is invalid!";
    return false;
  }
// Address
  if (address == ""){
    document.getElementById('address2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((address.length <= 10) || (address.length > 30)){
    document.getElementById('address2').innerHTML = "** Address length must be between 10 to 30!";
    return false;
  }
// Gender
if (gender == ""){
  document.getElementById('gender2').innerHTML = "** Please select your gender!";
  return false;
}
// Country
if (country == ""){
  document.getElementById('country2').innerHTML = "** Please select your country!";
  return false;
}
// City
if (city == ""){
  document.getElementById('city2').innerHTML = "** Please select your city!";
  return false;
}
// Experties
if (experties == ""){
  document.getElementById('experties2').innerHTML = "** Please select your experties!";
  return false;
}
// Qualification
if (qualification == ""){
  document.getElementById('qualification2').innerHTML = "** Please select your qualification!";
  return false;
}
// Experience
if (experience == ""){
  document.getElementById('experience2').innerHTML = "** Please select your experience!";
  return false;
}
if (about_you == ""){
  document.getElementById('about_you2').innerHTML = "** Please fill the text field!";
  return false;
}
if((about_you.length <= 30) || (about_you.length > 100)){
  document.getElementById('about_you2').innerHTML = "**Length must be between 30 to 100!";
  return false;
}
// Picture
if (pic == ""){
  document.getElementById('pic2').innerHTML = "** Please select your picture!";
  return false;
}
// CV
if (file == ""){
  document.getElementById('file2').innerHTML = "** Please select your resume!";
  return false;
}
}
</script>
</body>
</html>
