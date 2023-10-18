<?php
include('includes/db.php');
if(isset($_POST['signup'])){
  $companyname = $_POST['companyname'];
  $fullname = $_POST['fullname'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $address = $_POST['address'];
  $gender = $_POST['gender-type'];
  $password = $_POST['password'];
  $c_password = $_POST['c-password'];
  // Check username is exists or not
    $query = "SELECT * FROM admin_registration
            WHERE fullname='".$fullname."' ";
    $result = mysqli_query($con,$query);
    $row = mysqli_fetch_array($result);


  if($row == 0){
  $sql = "INSERT INTO admin_registration (companyname,fullname,phone,email,address,gender,password,c_password)
  VALUES('$companyname','$fullname','$phone','$email','$address','$gender','$password','$c_password')";
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
    header('location:signup.php');
  }
}
else{
  echo 'record already exists!';

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
                        <h3>Create an account</h3>
                        <!-- Form start-->
                        <form action="Signup.php" method="POST" onsubmit="return validation()">
                          <div class="form-group">
                              <input type="text" name="companyname" class="input-text" placeholder="Company Name" id="company1" autocomplete="off">
                                <span id="company2" class="text-danger font-weight-bold"> </span>
                          </div>
                            <div class="form-group">
                                <input type="text" name="fullname" class="input-text" placeholder="Full Name" id="fullname1" autocomplete="off">
                                  <span id="fullname2" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="phone" class="input-text" placeholder="Phone No" id="phone1" autocomplete="off">
                                  <span id="phone2" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="email" class="input-text" placeholder="Email Address" id="email1" autocomplete="off">
                                  <span id="email2" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="text" name="address" class="input-text" placeholder="Address" id="address1" autocomplete="off">
                                  <span id="address2" class="text-danger font-weight-bold"> </span>
                            </div>
                          <!-- gender -->

                              <div class="form-group">

                                  <select class="selectpicker search-fields" name="gender-type" id="gender1" autocomplete="off">
                                      <option>Gender</option>
                                      <option>Male</option>
                                      <option>Female</option>
                                      <option>Other</option>
                                  </select>
                                    <span id="gender2" class="text-danger font-weight-bold"> </span>
                              </div>

                          <!-- end gender --->
                            <div class="form-group">
                                <input type="password" name="password" class="input-text" placeholder="Password" id="password1" autocomplete="off">
                                  <span id="password2" class="text-danger font-weight-bold"> </span>
                            </div>
                            <div class="form-group">
                                <input type="password" name="c-password" class="input-text" placeholder="Confirm Password" id="cpassword" autocomplete="off">
                                <span id="password3" class="text-danger font-weight-bold"> </span>
                            </div>

                            <div class="form-group mb-0">
                                <button type="submit" name="signup" class="btn-md button-theme btn-block">Signup</button>
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
                        <span>Already a member? <a href="login.html">Login here</a></span>
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

function validation(){
  var companyname = document.getElementById('company1').value;
  var fullname = document.getElementById('fullname1').value;
  var phone = document.getElementById('phone1').value;
  var email = document.getElementById('email1').value;
  var address = document.getElementById('address1').value;
  var gender = document.getElementById('gender1').value;
  var password = document.getElementById('password1').value;
  var passwords = document.getElementById('cpassword').value;

  if (companyname == ""){
    document.getElementById('company2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((companyname.length <= 3) || (fullname.length > 20)){
    document.getElementById('company2').innerHTML = "** Company length must be between 3 to 20!";
    return false;
  }
  if(!isNaN(companyname)){
    document.getElementById('company2').innerHTML = "** Only characters are allowed!";
    return false;
  }

  if (fullname == ""){
    document.getElementById('fullname2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((fullname.length <= 2) || (fullname.length > 20)){
    document.getElementById('fullname2').innerHTML = "** User length must be between 2 to 20!";
    return false;
  }
  if(!isNaN(fullname)){
    document.getElementById('fullname2').innerHTML = "** Only characters are allowed!";
    return false;
  }

  if (phone == ""){
    document.getElementById('phone2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if(isNaN(phone)){
    document.getElementById('phone2').innerHTML = "** Only digits allowed!";
    return false;
  }
  if(phone.length!=11){
    document.getElementById('phone2').innerHTML = "** Phone length must be 11!";
    return false;
  }

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

  if (address == ""){
    document.getElementById('address2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((address.length <= 10) || (address.length > 30)){
    document.getElementById('address2').innerHTML = "** Address length must be between 10 to 30!";
    return false;
  }


  if (gender == ""){
    document.getElementById('gender2').innerHTML = "** Please select your gender!";
    return false;
  }

  if (password == ""){
    document.getElementById('password2').innerHTML = "** Please fill the password field!";
    return false;
  }
  if((password.length <= 5) || (password.length >20)){
    document.getElementById('password2').innerHTML = "** Password length must be bet ween 5 to 20!";
    return false;
  }

  if (passwords == ""){
    document.getElementById('password3').innerHTML = "** Please fill the confirm password field!";
    return false;
  }

  if(password != passwords){
    document.getElementById('password3').innerHTML = "** Password not matched!";
    return false;
  }
}

</script>
</body>
</html>
