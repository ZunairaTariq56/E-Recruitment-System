

<?php include('includes/user_auth.php');

//$id2 = $_GET['jb_id'];
//$job =  $_POST['jobid'];
 //echo $job;
?>
<?php


  include('includes/db.php');
  if(isset($_POST['add-resume'])){

    $name = $_POST['name'];
    $fname = $_POST['fname'];
    $country = $_POST['country'];
    $city = $_POST['city'];
    $gender = $_POST['gender'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $basic_desc = $_POST['basic_desc'];
    //Educaton Record

    $degree = $_POST['degree'];
    $edu_from_date = $_POST['edu_from_date'];
    $edu_to_date = $_POST['edu_to_date'];
    $edu_institute = $_POST['edu_institue'];
    $edu_desc = $_POST['edu_desc'];

    //Work record
    $job_position = $_POST['job_position'];
    $work_from_date = $_POST['work_from_date'];
    $work_to_date = $_POST['work_to_date'];
    $work_institute = $_POST['work_institute'];
    $work_desc = $_POST['work_desc'];
    // Skills
    $skill_1 = $_POST['skill_1'];
    $value_1 = $_POST['value_1'];
    $skill_2 = $_POST['skill_2'];
    $value_2 = $_POST['value_2'];
    $skill_3 = $_POST['skill_3'];
    $value_3 = $_POST['value_3'];
    // Contact Details
    $email = $_POST['email'];
    $phone = $_POST['phone'];
// check resume already add or
// Check username is exists or not
  $query = "SELECT * FROM add_resume
          WHERE name='".$name."' && email='".$email."'";
  $result = mysqli_query($con,$query);
  $row = mysqli_fetch_array($result);


if($row == 0){
      $sql = "INSERT INTO add_resume(name,fname,country,city,gender,qualification,experience,basic_desc,degree,
      from_date,to_date,institute,education_desc,job_position,work_from_date,work_to_date,work_institute,
      work_desc,skill_1,value_1,skill_2,value_2,skill_3,value_3,email,phone) VALUES('$name','$fname',
      '$country','$city','$gender','$qualification','$experience','$basic_desc','$degree','$edu_from_date',
    '$edu_to_date','$edu_institute','$edu_desc','$job_position','$work_from_date','$work_to_date',
    '$work_institute','$work_desc','$skill_1','$value_1','$skill_2','$value_2','$skill_3','$value_3',
    '$email','$phone')";
      $query = mysqli_query($con,$sql);
      if($query){
        echo '<script language="javascript">';
        echo 'alert("Resume Added!")';
        echo '</script>';
            $_SESSION['degree'] = $degree;
        header('location:job-list.php');
      }
      else{
        echo '<script language="javascript">';
        echo 'alert("Resume Not Added!")';
        echo '</script>';
      }
    }
      else{
        echo '<script language="javascript">';
        echo 'alert("You can add only one resume!")';
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
<header class="main-header header-2 fixed-header">
    <div class="container-fluid">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="navbar-brand logo pad-0" href="index-3.php">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="dashboard.php" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="add-resume.php" class="nav-link">Add Resume</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="bookmark.php" class="nav-link">Bookmark</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="applied.php" class="nav-link">Applied</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="alerts.php" class="nav-link">Alerts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="messages.php" class="nav-link">Messages</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="transaction.html" class="nav-link">Transaction</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="change-password.html" class="nav-link">Change Password</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="edit-profile.html" class="nav-link">Edit Profile</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="index-3.php" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://placehold.it/60x60" alt="avatar">
                                    Hi, <?php echo $_SESSION['fullname'];?>
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.php">Dashboard</a>
                                    <a class="dropdown-item" href="messages.php">Messages</a>
                                    <a class="dropdown-item" href="bookmark.php">Bookmark</a>
                                    <a class="dropdown-item" href="edit-profile.php">Edit profile</a>
                                    <a class="dropdown-item" href="index.php">Logout</a>
                                </div>
                            </div>
                        </li>
                        <li>
                            <a href="employer-dashboard-post-job.html" class="btn btn-theme btn-md"><i class="flaticon-plus"></i> Post a Job</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </div>
</header>
<!-- Main header end -->

<!-- Dashboard start -->
<div class="dashboard">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                        
                          <li><a href="add-resume.php"><i class="flaticon-portfolio"></i>Add Resume</a></li>

                          <li><a href="logout.php"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Add Resume</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                      <li>
                                          <a href="job-list.php">Already Added?</a>
                                      </li>
                                        <li>
                                            <a href="index.html">Index</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="active">Add Resume</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form action="add-resume.php" class=""method="post" id="addResumeForm">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-form">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Your Name</label>
                                            <input type="text" class="input-text" name="name" id="form_name" value="<?php echo $_SESSION['fullname'];?>"readonly="readonly" required="">
                                              <span id="name_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="input-text" name="fname" id="form_fname" placeholder="Father's Name" required="">
                                              <span id="fname_error_message" class="error_form text-danger"> </span>

                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Country</label>
                                            <input type="text" class="input-text" name="country" id="form_country" placeholder="country" required="">
                                              <span id="country_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>City</label>
                                            <input type="text" class="input-text" name="city" id="form_city" placeholder="city" required="">
                                              <span id="city_error_message" class="error_form text-danger"> </span>
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
                                            <label>Qualification</label>
                                            <select class="selectpicker search-fields" name="qualification" id="form_qualification" required="">
                                                <option>Qualification</option>
                                                <option>Matriculation</option>
                                                <option>Gradute</option>
                                            </select>
                                              <span id="qualification_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="selectpicker search-fields" name="experience" id="form_experience" required="">
                                                <option>Experience</option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                              <span id="experiance_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="input-text" name="basic_desc" id="form_basic_desc" placeholder="Detailed Information" required=""></textarea>
                                              <span id="basic_desc_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h4 class="bg-grea-3">Education</h4>
                            <div class="search-form">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Degree</label>
                                            <input type="text" class="input-text" name="degree" id="form_degree" placeholder="Write" required="">
                                              <span id="degree_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>From Date</label>
                                            <input type="text" class="input-text" name="edu_from_date" id="form_edu_from_date" placeholder="07.1.2019" required="">
                                              <span id="edu_from_date_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>To Date</label>
                                            <input type="text" class="input-text" name="edu_to_date" id="form_edu_to_date" placeholder="07.1.2019" required="">
                                            <span id="edu_to_date_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" class="input-text" name="edu_institue" id="form_edu_institute" placeholder="Institute" required="">
                                            <span id="edu_institue_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="input-text" name="edu_desc" id="form_edu_desc" placeholder="Detailed Information" required=""></textarea>
                                            <span id="edu_desc_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h4 class="bg-grea-3">Work Experience</h4>
                            <div class="search-form">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Post</label>
                                            <input type="text" class="input-text" name="job_position" id="form_work_position" placeholder="Job Post">
                                            <span id="work_position_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>From Date</label>
                                            <input type="text" class="input-text" name="work_from_date" id="form_work_from_date" placeholder="07.1.2019" required="">
                                            <span id="work_from_date_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>To Date</label>
                                            <input type="text" class="input-text" name="work_to_date" id="form_work_to_date" placeholder="07.1.2019" required="">
                                            <span id="work_to_date_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Institute</label>
                                            <input type="text" class="input-text" name="work_institute" id="form_work_institute" placeholder="Institute" required="">
                                            <span id="work_institute_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="input-text" name="work_desc" id="form_work_desc" placeholder="Detailed Information" required=""></textarea>
                                            <span id="work_desc_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <h4 class="bg-grea-3">Skills & Portfolio</h4>
                            <div class="search-form">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Skills-1</label>
                                            <input type="text" class="input-text" name="skill_1" id="form_skill_1" placeholder="Skills" required="">
                                            <span id="skill_1_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Value-1</label>
                                            <input type="text" class="input-text" name="value_1" id="form_value_1" placeholder="80%" required="">
                                            <span id="value_1_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Skills-2</label>
                                            <input type="text" class="input-text" name="skill_2" id="form_skill_2" placeholder="Skills" required="">
                                            <span id="skill_2_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Value-2</label>
                                            <input type="text" class="input-text" name="value_2" id="form_value_2" placeholder="80%" required="">
                                            <span id="value_2_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Skills-3</label>
                                            <input type="text" class="input-text" name="skill_3" id="form_skill_3" placeholder="Skills" required="">
                                            <span id="skill_3_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Value-3</label>
                                            <input type="text" class="input-text" name="value_3" id="form_value_3" placeholder="80%" required="">
                                            <span id="value_3_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>


                                </div>
                            </div>
                            <h4 class="bg-grea-3">Contact Details</h4>
                            <div class="search-form">
                                <div class="row pad-20">

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email</label>
                                            <input type="email" class="input-text" name="email" id="form_email" value="<?php echo $_SESSION['email'];?>" readonly="readonly" required="">
                                              <span id="email_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Phone</label>
                                            <input type="text" class="input-text" name="phone" id="form_phone" placeholder="Phone" required="">
                                            <span id="phone_error_message" class="error_form text-danger"> </span>
                                        </div>
                                    </div>

                                </div>
                            </div>
                            <div class="col-lg-4 col-md-12 col-sm-12">
                                <div class="post-btn"><button name="add-resume" class="btn btn-md button-theme">AAdd Resume</button></div>
                            </div>
                        </form>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 e-Recruitment - UOG</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashboard end -->

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

  $(function(){

    $("#name_error_message").hide();
    $("#fname_error_message").hide();
    $("#country_error_message").hide();
    $("#city_error_message").hide();
    $("#basic_desc_error_message").hide();
    $("#degree_error_message").hide();
    $("#edu_from_date_error_message").hide();
    $("#edu_to_date_error_message").hide();
    $("#edu_institue_error_message").hide();
    $("#edu_desc_error_message").hide();
    $("#work_position_error_message").hide();
    $("#work_from_date_error_message").hide();
    $("#work_to_date_error_message").hide();
    $("#work_institute_error_message").hide();
    $("#work_desc_error_message").hide();
    $("#skill_1_error_message").hide();
    $("#value_1_error_message").hide();
    $("#skill_2_error_message").hide();
    $("#value_2_error_message").hide();
    $("#skill_3_error_message").hide();
    $("#value_3_error_message").hide();
    $("#email_error_message").hide();
    $("#phone_error_message").hide();

    var error_name = false;
    var error_fname = false;
    var error_country = false;
    var error_city = false;
    var error_basic_desc = false;
    var error_degree = false;
    var error_edu_from_date = false;
    var error_edu_to_date = false;
    var error_edu_institute = false;
    var error_edu_desc = false;
    var error_work_position = false;
    var error_work_from_date = false;
    var error_work_to_date = false;
    var error_work_institute = false;
    var error_work_desc = false;
    var error_skill_1 = false;
    var error_value_1 = false;
    var error_skill_2 = false;
    var error_value_2 = false;
    var error_skill_3 = false;
    var error_value_3 = false;
    var error_email = false;
    var error_phone = false;

    //var error_designation = false;

    $("#form_name").focusout(function(){
      check_name();
    });

    $("#form_fname").focusout(function(){
      check_fname();
    });

    $("#form_country").focusout(function(){
      check_country();
    });

    $("#form_city").focusout(function(){
      check_city();
    });


    $("#form_basic_desc").focusout(function(){
      check_basic_desc();
    });

    $("#form_degree").focusout(function(){
      check_degree();
    });

    $("#form_edu_from_date").focusout(function(){
      check_edu_from_date();
    });

    $("#form_edu_to_date").focusout(function(){
      check_edu_to_date();
    });

    $("#form_edu_institute").focusout(function(){
        check_edu_institute();
    });

    $("#form_edu_desc").focusout(function(){
      check_edu_desc();
    });

    $("#form_work_position").focusout(function(){
        check_work_position();
    });

    $("#form_work_from_date").focusout(function(){
      check_work_from_date();
    });

    $("#form_work_to_date").focusout(function(){
        check_work_to_date();
    });

    $("#form_work_institute").focusout(function(){
        check_work_institute();
    });

    $("#form_work_desc").focusout(function(){
        check_work_desc();
    });

    $("#form_skill_1").focusout(function(){
        check_skill_1();
    });
    $("#form_value_1").focusout(function(){
        check_value_1();
    });
    $("#form_skill_2").focusout(function(){
        check_skill_2();
    });
    $("#form_value_2").focusout(function(){
        check_value_2();
    });
    $("#form_skill_3").focusout(function(){
        check_skill_3();
    });
    $("#form_value_3").focusout(function(){
        check_value_3();
    });
    $("#form_email").focusout(function(){
        check_email();
    });
    $("#form_phone").focusout(function(){
        check_phone();
    });

    function check_name(){
      var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
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
      var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
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

    function check_country(){
      var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
      var country = $("#form_country").val();
      if(pattern.test(country) && country !== ''){
        $("#country_error_message").hide();
        $("#form_country").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#country_error_message").html("Should contain only characters!");
          $("#country_error_message").show();
          $("#form_country").css("border-bottom","2px solid #F90A0A");
          error_country = true;
      }
    }

    function check_city(){
      var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
      var city = $("#form_city").val();
      if(pattern.test(city) && city !== ''){
        $("#city_error_message").hide();
        $("#form_city").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#city_error_message").html("Should contain only characters!");
          $("#city_error_message").show();
          $("#form_city").css("border-bottom","2px solid #F90A0A");
          error_city = true;
      }
    }

    function check_basic_desc(){
      var pattern = /^[a-zA-Z/^\s\d*$/\.\!\,\']*$/;
      var basic_desc = $("#form_basic_desc").val();
      //var description_length = $("#form_description").val().length;
      if(pattern.test(basic_desc) && basic_desc !== ''){
        $("#basic_desc_error_message").hide();
        $("#form_basic_desc").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#basic_desc_error_message").html("Should contain only characters and min len 20!");
          $("#basic_desc_error_message").show();
          $("#form_basic_desc").css("border-bottom","2px solid #F90A0A");
          error_basic_desc = true;
      }
    }


        function check_degree(){
          var pattern = /^[a-zA-Z/^\s*$/\.\-]*$/;
          var degree = $("#form_degree").val();
          if(pattern.test(degree) && degree !== ''){
            $("#degree_error_message").hide();
            $("#form_degree").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#degree_error_message").html("Should contain only characters!");
              $("#degree_error_message").show();
              $("#form_degree").css("border-bottom","2px solid #F90A0A");
              error_degree = true;
          }
        }

        function check_edu_from_date(){
          var pattern = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2,}$/;
          var edu_from_date = $("#form_edu_from_date").val();
          if(pattern.test(edu_from_date) && edu_from_date !== ''){
            $("#edu_from_date_error_message").hide();
            $("#form_edu_from_date").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#edu_from_date_error_message").html("Should be a valid pattern MM/DD/YYYY!");
              $("#edu_from_date_error_message").show();
              $("#form_edu_from_date").css("border-bottom","2px solid #F90A0A");
              error_edu_from_date = true;
          }
        }
        function check_edu_to_date(){
          var pattern = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2,}$/;
          var edu_to_date = $("#form_edu_to_date").val();
          if(pattern.test(edu_to_date) && edu_to_date !== ''){
            $("#edu_to_date_error_message").hide();
            $("#form_edu_to_date").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#edu_to_date_error_message").html("Should be a valid pattern MM/DD/YYYY!");
              $("#edu_to_date_error_message").show();
              $("#form_edu_to_date").css("border-bottom","2px solid #F90A0A");
              error_edu_to_date = true;
          }
        }
        function check_edu_institute(){
          var pattern = /^[a-zA-Z/^\s*$/\.\-]*$/;
          var edu_institue = $("#form_edu_institute").val();
          if(pattern.test(edu_institue) && edu_institue !== ''){
            $("#edu_institue_error_message").hide();
            $("#form_edu_institute").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#edu_institue_error_message").html("Should contain only characters!");
              $("#edu_institue_error_message").show();
              $("#form_edu_institute").css("border-bottom","2px solid #F90A0A");
              error_edu_institute = true;
          }
        }

        function check_edu_desc(){
          var pattern = /^[a-zA-Z/^\s\d*$/\.\!\'\,\-]*$/;
          var edu_desc = $("#form_edu_desc").val();
          if(pattern.test(edu_desc) && edu_desc !== ''){
            $("#edu_desc_error_message").hide();
            $("#form_edu_desc").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#edu_desc_error_message").html("Should contain only characters!");
              $("#edu_desc_error_message").show();
              $("#form_edu_desc").css("border-bottom","2px solid #F90A0A");
              error_edu_desc = true;
          }
        }
        function check_work_position(){
          var pattern = /^[a-zA-Z/^\s*$/\.\!\-]*$/;
          var work_position = $("#form_work_position").val();
          if(pattern.test(work_position) && work_position !== ''){
            $("#work_position_error_message").hide();
            $("#form_work_position").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#work_position_error_message").html("Should contain only characters!");
              $("#work_position_error_message").show();
              $("#form_work_position").css("border-bottom","2px solid #F90A0A");
              error_work_position = true;
          }
        }
        function check_work_from_date(){
          var pattern = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2,}$/;
          var work_from_date = $("#form_work_from_date").val();
          if(pattern.test(work_from_date) && work_from_date !== ''){
            $("#work_from_date_error_message").hide();
            $("#form_work_from_date").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#work_from_date_error_message").html("Should be a valid pattern MM/DD/YYYY!");
              $("#work_from_date_error_message").show();
              $("#form_work_from_date").css("border-bottom","2px solid #F90A0A");
              error_work_from_date = true;
          }
        }

        function check_work_to_date(){
          var pattern = /^(0[1-9]|1[012])[- /.](0[1-9]|[12][0-9]|3[01])[- /.](19|20)[0-9]{2,}$/;
          var work_to_date = $("#form_work_to_date").val();
          if(pattern.test(work_to_date) && work_to_date !== ''){
            $("#work_to_date_error_message").hide();
            $("#form_work_to_date").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#work_to_date_error_message").html("Should be a valid pattern MM/DD/YYYY!");
              $("#work_to_date_error_message").show();
              $("#form_work_to_date").css("border-bottom","2px solid #F90A0A");
              error_work_to_date = true;
          }
        }
        function check_work_institute(){
          var pattern = /^[a-zA-Z/^\s*$/\.\!\-]*$/;
          var work_institute = $("#form_work_institute").val();
          if(pattern.test(work_institute) && work_institute !== ''){
            $("#work_institute_error_message").hide();
            $("#form_work_institute").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#work_institute_error_message").html("Should contain only characters!");
              $("#work_institute_error_message").show();
              $("#form_work_institute").css("border-bottom","2px solid #F90A0A");
              error_work_institute = true;
          }
        }

        function check_work_desc(){
          var pattern = /^[a-zA-Z/^\s\d*$/\.\!\,\'\-]*$/;
          var work_desc = $("#form_work_desc").val();
          if(pattern.test(work_desc) && work_desc !== ''){
            $("#work_desc_error_message").hide();
            $("#form_work_desc").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#work_desc_error_message").html("Should contain only characters!");
              $("#work_desc_error_message").show();
              $("#form_work_desc").css("border-bottom","2px solid #F90A0A");
              error_work_desc = true;
          }
        }

        function check_skill_1(){
          var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
          var skill_1 = $("#form_skill_1").val();
          if(pattern.test(skill_1) && skill_1 !== ''){
            $("#skill_1_error_message").hide();
            $("#form_skill_1").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#skill_1_error_message").html("Should contain only characters!");
              $("#skill_1_error_message").show();
              $("#form_skill_1").css("border-bottom","2px solid #F90A0A");
              error_skill_1 = true;
          }
        }
        function check_value_1(){
          var pattern = /^(\d+(\.\d+)?%)$/;
          var value_1 = $("#form_value_1").val();
          if(pattern.test(value_1) && value_1 !== ''){
            $("#value_1_error_message").hide();
            $("#form_value_1").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#value_1_error_message").html("Only in digits with %!");
              $("#value_1_error_message").show();
              $("#form_value_1").css("border-bottom","2px solid #F90A0A");
              error_value_1 = true;
          }
        }
        function check_skill_2(){
          var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
          var skill_2 = $("#form_skill_2").val();
          if(pattern.test(skill_2) && skill_2 !== ''){
            $("#skill_2_error_message").hide();
            $("#form_skill_2").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#skill_2_error_message").html("Should contain only characters!");
              $("#skill_2_error_message").show();
              $("#form_skill_2").css("border-bottom","2px solid #F90A0A");
              error_skill_2 = true;
          }
        }
        function check_value_2(){
          var pattern = /^(\d+(\.\d+)?%)$/;
          var value_2 = $("#form_value_2").val();
          if(pattern.test(value_2) && value_2 !== ''){
            $("#value_2_error_message").hide();
            $("#form_value_2").css("border-bottom","2px solid #34F458");
          }
          else{
              $("#value_2_error_message").html("Only in digits with %!");
              $("#value_2_error_message").show();
              $("#form_value_2").css("border-bottom","2px solid #F90A0A");
              error_value_2 = true;
          }
        }      function check_skill_3(){
                var pattern = /^[a-zA-Z/^\s*$/\.]*$/;
                var skill_3 = $("#form_skill_3").val();
                if(pattern.test(skill_3) && skill_3 !== ''){
                  $("#skill_3_error_message").hide();
                  $("#form_skill_3").css("border-bottom","2px solid #34F458");
                }
                else{
                    $("#skill_3_error_message").html("Should contain only characters!");
                    $("#skill_3_error_message").show();
                    $("#form_skill_3").css("border-bottom","2px solid #F90A0A");
                    error_skill_3 = true;
                }
              }
              function check_value_3(){
                var pattern = /^(\d+(\.\d+)?%)$/;
                var value_3 = $("#form_value_3").val();
                if(pattern.test(value_3) && value_3 !== ''){
                  $("#value_3_error_message").hide();
                  $("#form_value_3").css("border-bottom","2px solid #34F458");
                }
                else{
                    $("#value_3_error_message").html("Only in digits with %!");
                    $("#value_3_error_message").show();
                    $("#form_value_3").css("border-bottom","2px solid #F90A0A");
                    error_value_3 = true;
                }
              }

              function check_email(){
                var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
                var email = $("#form_email").val();
                if(pattern.test(email) && email !== ''){
                  $("#email_error_message").hide();
                  $("#form_email").css("border-bottom","2px solid #34F458");
                }
                else{
                    $("#email_error_message").html("Should be a valid email!");
                    $("#email_error_message").show();
                    $("#form_email").css("border-bottom","2px solid #F90A0A");
                    error_email = true;
                }
              }

              function check_phone(){
                var pattern = /^\d{11}$/;
                var phone = $("#form_phone").val();
                if(pattern.test(phone) && phone !== ''){
                  $("#phone_error_message").hide();
                  $("#form_phone").css("border-bottom","2px solid #34F458");
                }
                else{
                    $("#phone_error_message").html("Should contain only 11 digits!");
                    $("#phone_error_message").show();
                    $("#form_phone").css("border-bottom","2px solid #F90A0A");
                    error_phone = true;
                }
              }
    $("#addResumeForm").submit(function(){
      error_name = false;
      error_fname = false;
      error_country = false;
      error_city = false;
      error_basic_desc = false;
      error_degree = false;
      error_edu_from_date = false;
      error_edu_to_date = false;
      error_edu_institute = false;
      error_edu_desc = false;
      error_work_position = false;
      error_work_from_date = false;
      error_work_to_date = false;
      error_work_institute = false;
      error_work_desc = false;
      error_skill_1 = false;
      error_value_1 = false;
      error_skill_2 = false;
      error_value_2 = false;
      error_skill_3 = false;
      error_value_3 = false;
      error_email = false;
      error_phone = false;

      check_name();
      check_fname();
      check_country();
      check_city();
      check_basic_desc();
      check_degree();
      check_edu_from_date();
      check_edu_to_date();
      check_edu_institute();
      check_edu_desc();
      check_work_position();
      check_work_from_date();
      check_work_to_date();
      check_work_institute();
      check_work_desc();
      check_skill_1();
      check_value_1();
      check_skill_2();
      check_value_2();
      check_skill_3();
      check_value_3();
      check_email();
      check_phone();

      if(error_name === false && error_fname === false && error_country === false && error_city === false
      && error_basic_desc === false && error_degree === false && error_edu_from_date === false &&
      error_edu_to_date === false && error_edu_institute === false && error_edu_desc === false &&
      error_work_position === false && error_work_from_date === false &&  error_work_to_date === false &&
      error_work_institute === false && error_work_desc === false && error_skill_1 === false &&
      error_value_1 === false && error_skill_2 === false && error_value_2 === false && error_skill_3 === false
      &&  error_value_3 === false && error_email === false && error_phone === false){
        //alert("Data Added Successfully!");
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
