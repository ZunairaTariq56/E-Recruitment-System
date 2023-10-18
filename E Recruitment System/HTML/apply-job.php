

<?php include('includes/user_auth.php');

$id2 = $_GET['jb_id'];
//$job =  $_POST['jobid'];
 //echo $job;
?>
<!--  Fetch data from resume table-->

<?php
  include('includes/db.php');
  if(isset($_POST['apply-now'])){

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
    $job = $_POST['jID'];
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
    // Fetch  job ---->



    // End Fetch total job ---->
    //Fetch data from add_resume

    $sql = "SELECT * FROM add_resume WHERE email = '$email' and name = '$name'";
    $query = mysqli_query($con,$sql);
    $rows = mysqli_num_rows($query);
    if($rows == 1){

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
        '$city','$experties','$qualification','$experience','$about_you','$destinationpic','$destinationresume','$job')";
        $query = mysqli_query($con,$sql);
        if($query){

            echo "<script>document.location='job-list.php'</script>";
        }
        else{
          echo "<script>alert('Job Not Applied!');</script>";
        }
      }
      else{
          echo "<script>alert('Resume File Not Supported!');'</script>";

      }
    }
    else{
    echo "<script>alert('Picture File Not Supported!');'</script>";
    }


    }
    else{
    echo "<script>alert('Resume Not Added!');document.location='add-resume.php'</script>";
    }

    // end from add_resume

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
    <img class="d-block w-100 h-100" src="img/employer-list.jpg" alt="banner">
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

            <div class="col-xl-12 col-lg-12 col-md-12">
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
                    <form action="apply-job.php" method="POST" enctype="multipart/form-data" id="jobForm">
                        <h4 class="bg-grea-3">Basic Information</h4>
                        <div class="search-contents-sidebar">
                            <div class="row pad-20">
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Name</label>
                                        <input type="text" class="input-text" name="name" value="<?php echo $_SESSION['fullname'];?>" id="form_name" required="" readonly="readonly" >
                                        <span id="name_error_message" class="error_form text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>Father's Name</label>
                                        <input type="text" class="input-text" name="fname" placeholder="Father's Name" id="form_fname" required="">
                                        <span id="fname_error_message" class="error_form text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                      <label>Email</label>
                                      <input type="email" class="input-text" name="email" value="<?php echo $_SESSION['email'];?>" id="form_email" required="" readonly="readonly" >
                                      <span id="email_error_message" class="error_form text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label>address</label>
                                        <input type="text" class="input-text" name="address" placeholder="address" id="form_address" required="">
                                        <span id="address_error_message" class="error_form text-danger"> </span>
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
                                <div class="col-lg-12 col-md-12 col-sm-12">
                                    <div class="form-group">
                                        <label>Job ID</label>
                                        <input type="text" class="input-text" name="jID" value="<?php echo $id2; ?>" id="form_jID" required=""  readonly="readonly" >
                                        <span id="jID_error_message" class="error_form text-danger"> </span>
                                    </div>
                                </div>
                                <!--From resume-->

                                  <!--From resume-->
                              <div class="col-lg-12">
                                    <div class="form-group">
                                        <label>About You</label>
                                        <textarea class="input-text" name="about-you" placeholder="Tell us about your self!" id="form_description" required=""></textarea>
                                        <span id="description_error_message" class="error_form text-danger"> </span>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="photoUpload photoUpload-2">
                                        Upload Pic
                                        <input type="file" class="upload" name="picture" id="form_picture" required="">

                                    </div>
                                      <span id="picture_error_message" class="error_form text-danger"> </span>
                                    <div class="photoUpload photoUpload-2">
                                        Resume
                                        <input type="file" class="upload" name="resume" id="form_resume" required="">

                                    </div><br><br>
                                  <span id="resume_error_message" class="error_form text-danger"> </span>
                                    <div class="post-btn" style="padding:0 85%;"><button name="apply-now" class="btn btn-md button-theme">Apply Now</button></div>

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

  $(function(){

    $("#name_error_message").hide();
    $("#fname_error_message").hide();
    $("#email_error_message").hide();
    $("#address_error_message").hide();
    $("#description_error_message").hide();

    var error_name = false;
    var error_fname = false;
    var error_email = false;
    var error_address = false;
    var error_description = false;
    //var error_designation = false;

    $("#form_name").focusout(function(){
      check_name();
    });

    $("#form_fname").focusout(function(){
      check_fname();
    });
    $("#form_email").focusout(function(){
      check_email();
    });

    $("#form_address").focusout(function(){
      check_address();
    });
    $("#form_description").focusout(function(){
      check_description();
    });

    function check_name(){
      var pattern = /^[a-zA-Z/^\s*$/\.\,]*$/;
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
      var pattern = /^[a-zA-Z/^\s*$/\.\,]*$/;
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

    function check_email(){
      var pattern = /^([\w-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([\w-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$/;
      var email = $("#form_email").val();
      //var description_length = $("#form_description").val().length;
      if(pattern.test(email) && email !== ''){
        $("#email_error_message").hide();
        $("#form_email").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#email_error_message").html("Enter Valid Email!");
          $("#email_error_message").show();
          $("#form_email").css("border-bottom","2px solid #F90A0A");
          error_email = true;
      }
    }

    function check_address(){
      var pattern = /^[a-zA-Z/^\s*$/\,\.\-]*$/;
      var address = $("#form_address").val();
      //var description_length = $("#form_description").val().length;
      if(pattern.test(address) && address !== ''){
        $("#address_error_message").hide();
        $("#form_address").css("border-bottom","2px solid #34F458");
      }
      else{
          $("#address_error_message").html("Should contain only characters!");
          $("#address_error_message").show();
          $("#form_address").css("border-bottom","2px solid #F90A0A");
          error_address = true;
      }
    }


    function check_description(){
      var pattern = /^[a-zA-Z/^\s*$/\,\.\!]*$/;
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
      error_name = false;
      error_fname = false;
      error_email = false;
      error_address = false;
      error_description = false;

      check_name();
      check_fname();
      check_email();
      check_address();
      check_description();

      if(error_name === false && error_fname === false && error_email === false && error_address === false && error_description === false){

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
