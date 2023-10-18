<?php
include('includes/db.php');
if(isset($_POST['user-signup'])){
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $gender = $_POST['gender-type'];
  $password = $_POST['password'];
  $c_password = $_POST['c-password'];
  // Check username is exists or not
    $query = "SELECT * FROM user_registration
            WHERE fullname='".$fullname."' && email='".$email."'";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);


  if($row == 0){
  $sql = "INSERT INTO user_registration (fullname,phone,email,address,gender,password,c_password)
  VALUES('$fullname','$phone','$email','$address','$gender','$password','$c_password')";
  $query = mysqli_query($con,$sql);
  if($query){
    ?>
    <div class="container">
      <div class="alert alert-success alert-2" role="alert">
          <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
          <strong class="alert1">signup successfull!</strong>
      </div>
    </div>

    <?php
    header('location:index-3.php');
  }
  else{
    echo 'not inserted!';
    header('location:user_registration.php');
  }
}
else{
  echo '<script language="javascript">';
  echo 'alert("Record already exists!!")';
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
    <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">

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
    <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</head>
<body class="bg-grea">
<div class="page_loader"></div>

<!-- Contact section start -->
<div class="contact-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Form content box start -->
                <div class="form-content-box">
                    <!-- details -->
                    <div class="details">
                        <!-- Logo-->
                        <a href="index-3.php">
                            <img src="img/black-logo.png" class="cm-logo" alt="black-logo">
                        </a>
                        <!-- Name -->
                        <h3>User Account</h3>
                        <!-- Form start-->
                        <form action="user_registration.php" method="POST" id="user_registrationForm">

                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Full Name" id="form_fname" required="">
                                <span id="fname_error_message" class="error_form text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="input-text" placeholder="Phone No" id="form_phone" required="">
                                <span id="phone_error_message" class="error_form text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <input type="email" name="email" class="input-text" placeholder="Email Address" id="form_email" required="">
                                <span id="email_error_message" class="error_form text-danger"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="input-text" placeholder="Address" id="form_address" required="">
                                <span id="address_error_message" class="error_form text-danger"> </span>
                            </div>
                          <!-- gender -->

                              <div class="form-group">

                                  <select class="selectpicker search-fields" name="gender-type" id="form_gender" required="">
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Other</option>
                                  </select>
                                  <span id="gender_error_message" class="error_form text-danger"> </span>
                              </div>

                          <!-- end gender --->
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" id="form_password" required="">
                                <span id="password_error_message" class="error_form text-danger"> </span>
                            </div>

                            <div class="form-group">
                                <input type="password" name="c-password" class="input-text" placeholder="Confirm Password" id="form_cpassword" required="">
                                <span id="cpassword_error_message" class="error_form text-danger"> </span>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" name="user-signup" class="btn-md button-theme btn-block">Signup</button>
                            </div>
                        </form>
                        <!-- Social List -->
                        <ul class="social-list clearfix">
                            <li><a href="#" class="facebook-bg"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#" class="twitter-bg"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#" class="google-bg"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="#" class="linkedin-bg"><i class="fa fa-linkedin"></i></a></li>
                        </ul>
                    </div>
                    <!-- Footer -->
                    <div class="footer">
                        <span>Already a member? <a href="user_login.php">Login here</a></span>
                    </div>
                </div>
                <!-- Form content box end -->
            </div>
        </div>
    </div>
</div>
<!-- Contact section end -->

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
<!-- javascript validation  -->
<script type="text/javascript">

$(function(){

  $("#fname_error_message").hide();
  $("#phone_error_message").hide();
  $("#email_error_message").hide();
  $("#address_error_message").hide();

  var error_fname = false;
  var error_phone = false;
  var error_email = false;
  var error_address = false;
  var error_password = false;
  var error_cpassword = false;
  //var error_designation = false;

  $("#form_fname").focusout(function(){
    check_fname();
  });

  $("#form_phone").focusout(function(){
    check_phone();
  });

  $("#form_email").focusout(function(){
    check_email();
  });
  $("#form_address").focusout(function(){
    check_address();
  });

  $("#form_password").focusout(function(){
    check_password();
  });

  $("#form_cpassword").focusout(function(){
    check_cpassword();
  });

  function check_fname(){
    var pattern = /^[a-zA-Z/^\s*$/]*$/;
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

  function check_phone(){
    var pattern = /^\d{11}$/;
    var phone = $("#form_phone").val();
    if(pattern.test(phone) && phone !== ''){
      $("#phone_error_message").hide();
      $("#form_phone").css("border-bottom","2px solid #34F458");
    }
    else{
        $("#phone_error_message").html("Should contain only digits and length 11!");
        $("#phone_error_message").show();
        $("#form_phone").css("border-bottom","2px solid #F90A0A");
        error_phone = true;
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
        $("#email_error_message").html("Should contain only characters and min len 20!");
        $("#email_error_message").show();
        $("#form_email").css("border-bottom","2px solid #F90A0A");
        error_email = true;
    }
  }

  function check_address(){
    var pattern = /^[a-zA-Z/^\s*$/\.\,\!\-]*$/;
    var address = $("#form_address").val();
    //var description_length = $("#form_description").val().length;
    if(pattern.test(address) && address !== ''){
      $("#address_error_message").hide();
      $("#form_address").css("border-bottom","2px solid #34F458");
    }
    else{
        $("#address_error_message").html("Should contain only characters and min len 20!");
        $("#address_error_message").show();
        $("#form_address").css("border-bottom","2px solid #F90A0A");
        error_address = true;
    }
  }

  function check_password(){
    //var pattern = /^[a-zA-Z/^\s*$/]*$/;
  //  var password = $("#form_password").val();
    var password_length = $("#form_description").val().length;
    if(password_length < 8){
      $("#password_error_message").html("password must be more than 8 characters!");
      $("#password_error_message").show();
      $("#form_password").css("border-bottom","2px solid #F90A0A");
      error_password = true;

    }
    else{
      $("#password_error_message").hide();
      $("#form_password").css("border-bottom","2px solid #34F458");
    }
  }

  function check_cpassword(){
    //var pattern = /^[a-zA-Z/^\s*$/]*$/;
    var password = $("#form_password").val();
    var cpassword = $("#form_cpassword").val();
    //var password_length = $("#form_description").val().length;
    if(password !== cpassword){
      $("#cpassword_error_message").html("password does not match!");
      $("#cpassword_error_message").show();
      $("#form_cpassword").css("border-bottom","2px solid #F90A0A");
      error_cpassword = true;

    }
    else{
      $("#cpassword_error_message").hide();
      $("#form_cpassword").css("border-bottom","2px solid #34F458");
    }
  }


  $("#user_registrationForm").submit(function(){
    error_fname = false;
    error_phone = false;
    error_email = false;
    error_address = false;
    error_password = false;
    error_cpassword = false;

    check_fname();
    check_phone();
    check_email();
    check_address();
    check_password();
    check_cpassword();

    if(error_fname === false && error_phone === false && error_email === false && error_address === false && error_password === false && error_cpassword === false){
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
