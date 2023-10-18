<?php include('includes/auth.php'); ?>
<?php

  $id = $_GET['c_id'];
  include('includes/db.php');
  $sql = "SELECT * FROM job_apply WHERE id='$id'";
  $query = mysqli_query($con,$sql);
  if(mysqli_num_rows($query) > 0){
    while($data = mysqli_fetch_array($query)){
      $name = $data['name'];
      $fname = $data['father_name'];
      $email = $data['email'];
      $address = $data['address'];
      $gender = $data['gender'];
      $experience = $data['experience'];
      $city = $data['city'];
      $country = $data['country'];
      $qualification = $data['qualification'];
      $experties = $data['experties'];
      $about_you = $data['about_you'];
      $picture = $data['picture'];
      $resume = $data['resume'];
    }
  }

 ?>

 <?php

 // Import PHPMailer classes into the global namespace
 // These must be at the top of your script, not inside a function
 use PHPMailer\PHPMailer\PHPMailer;
 use PHPMailer\PHPMailer\Exception;

 // Load Composer's autoloader
 require 'vendor/autoload.php';

 // Instantiation and passing `true` enables exceptions
 $mail = new PHPMailer(true);
 $receiver = $email;
 try {
     //Server settings
     $mail->SMTPDebug = 0;                                       // Enable verbose debug output
     $mail->isSMTP();                                            // Set mailer to use SMTP
     $mail->Host       = 'smtp.gmail.com';  // Specify main and backup SMTP servers
     $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
     $mail->Username   = 'akramilm74@gmail.com';                     // SMTP username
     $mail->Password   = '0347gmail';                               // SMTP password
     $mail->SMTPSecure = 'tls';                                  // Enable TLS encryption, `ssl` also accepted
     $mail->Port       = 587;                                    // TCP port to connect to

     //Recipients

     $mail->setFrom('akramilm74@gmail.com', 'akramilm');
     $mail->addAddress($receiver, 'Joe User');     // Add a recipient


     // Attachments
     // Optional name

     // Content
     $mail->isHTML(true);                                  // Set email format to HTML
     $mail->Subject = 'Sub PHPMAILER';
     $mail->Body    = 'This is demo</b>';
     $mail->AltBody = 'alternative text!';

     $mail->send();
     echo 'Message has been sent';
 } catch (Exception $e) {
     echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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
            <h1>Candidates Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Candidates Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Candidate section start -->
<div class="candidate-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- job box start -->
                <div class="job-box-2">
                    <div class="company-logo">
                        <img src="<?php echo $picture; ?>" alt="avatar" width="140px"height="70px">
                    </div>
                    <div class="description">
                        <h5 class="title"><a href="#"><?php echo $name; ?></a></h5>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li><i class="flaticon-tick"></i><?php echo $experties; ?></li>
                                <li><i class="flaticon-pin"></i> <?php echo $city; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <hr class="hr-boder clearfix">
                <!-- about me start -->
                <div class="about-me mb-40">
                    <h3 class="heading-2">About Me</h3>
                    <p><?php echo $about_you; ?></p>
                </div>
                <!-- Education start-->
                <div class="education mb-50">
                    <h3 class="heading-2">Education</h3>
                    <div class="education-box">
                        <div class="icon">
                            <i class="flaticon-mortarboard"></i>
                        </div>
                        <div class="employer-info">
                            <h5>Web Designer <span> / themeforest</span></h5>
                            <h6>2015 - 2019</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum.</p>
                        </div>
                    </div>
                    <div class="education-box mb-0">
                        <div class="icon">
                            <i class="flaticon-mortarboard"></i>
                        </div>
                        <div class="employer-info">
                            <h5>Graphic Designer <span> / themeforest</span></h5>
                            <h6>2014 - 2018</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum.</p>
                        </div>
                    </div>
                </div>
                <!-- Work experiance start-->
                <div class="work-experiance mb-50">
                    <h3 class="heading-2">Work Experiance</h3>
                    <div class="education-box">
                        <div class="icon">
                            <i class="flaticon-work"></i>
                        </div>
                        <div class="employer-info">
                            <h5>Dhaka College <span> / Economics</span></h5>
                            <h6>2015 - 2019</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum.</p>
                        </div>
                    </div>
                    <div class="education-box mb-0">
                        <div class="icon">
                            <i class="flaticon-work"></i>
                        </div>
                        <div class="employer-info">
                            <h5>University of south asia <span> / Computer Science</span></h5>
                            <h6>2014 - 2018</h6>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec luctus tincidunt aliquam. Aliquam gravida massa at sem vulputate interdum.</p>
                        </div>
                    </div>
                </div>
                <!-- Progressbar example start -->
                <div class="progressbar-example mb-40">
                    <h3 class="heading-2">Professional Skills</h3>
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="progress-box">
                                <p class="progress-title">Web Development</p>
                                <p class="progress-size">80%</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="progress-box">
                                <p class="progress-title">Consulting</p>
                                <p class="progress-size">100%</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="progress-box">
                                <p class="progress-title">Branding & Identity</p>
                                <p class="progress-size">70%</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="70" aria-valuemin="0" aria-valuemax="100" style="width: 70%"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-12">
                            <div class="progress-box">
                                <p class="progress-title">Graphic Design</p>
                                <p class="progress-size">90%</p>
                                <div class="progress">
                                    <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style="width: 90%"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Portfolio start -->
                <div class="portfolio">
                    <h3 class="heading-2">Portfolio</h3>
                    <div class="container">
                        <div class="slick-slider-area">
                            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="http://placehold.it/750x540" title="Portfolio">
                                            <img src="http://placehold.it/214x160" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="http://placehold.it/750x540" title="Portfolio">
                                            <img src="http://placehold.it/214x160" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item">
                                    <div class="portfolio-item">
                                        <a href="http://placehold.it/750x540" title="Portfolio">
                                            <img src="http://placehold.it/214x160" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="slick-slide-item clearfix">
                                    <div class="portfolio-item">
                                        <a href="http://placehold.it/750x540" title="Portfolio">
                                            <img src="http://placehold.it/214x160" alt="gallery" class="img-fluid">
                                        </a>
                                        <div class="portfolio-content">
                                            <div class="portfolio-content-inner">
                                                <p>Portfolio</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="slick-prev slick-arrow-buton">
                                <i class="fa fa-angle-left"></i>
                            </div>
                            <div class="slick-next slick-arrow-buton">
                                <i class="fa fa-angle-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <div class="widget">
                        <form method="GET">
                            <div class="form-group mb-0">
                                 <a href="<?php echo $resume; ?>" class="search-button button-theme">DOWNLOAD CV</a>
                                <!-- <a href="<?php echo $resume; ?>"><button class="search-button button-theme">Download CV </button>-->
                            </div>
                        </form>
                    </div>
                    <!-- Job overview start -->
                    <div class="job-overview widget">
                        <h3 class="sidebar-title">Job Overview</h3>
                        <div class="s-border"></div>
                        <ul>
                            <li><i class="flaticon-money"></i><h5>Experties</h5><span><?php echo $experties; ?></span></li>
                            <li><i class="flaticon-pin"></i><h5>Location</h5><span><?php echo $address; ?></span></li>
                            <li><i class="flaticon-woman"></i><h5>Gender</h5><span><?php echo $gender; ?></span></li>
                            <li><i class="flaticon-work"></i><h5>Email</h5><span><?php echo $email; ?></span></li>
                            <li><i class="flaticon-honor"></i><h5>Qualification</h5><span><?php echo $qualification; ?></span></li>
                            <li><i class="flaticon-notepad"></i><h5>Experience</h5><span><?php echo $experience; ?></span></li>
                        </ul>
                    </div>
                    <div class="clearfix"></div>
                    <!-- Quick contact start -->
                    <div class="widget-5 contact-2 quick-contact">
                        <h3 class="sidebar-title">Quick Contacts</h3>
                        <div class="s-border"></div>
                        <form action="#" method="GET" enctype="multipart/form-data">
                            <div class="form-group name">
                              <label>Subject</label>
                                <input type="text" name="subject" class="form-control" >
                            </div>
                            <div class="form-group email">
                              <label>Email</label>
                                <input type="email" name="email" class="form-control" value="<?php echo $email; ?>">
                            </div>
                            <div class="form-group message">
                              <label>Message</label>
                                <textarea class="form-control" name="message" ></textarea>
                            </div>
                            <div class="send-btn">
                                <button type="submit" class="btn btn-md button-theme">Send Message</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Candidate section end -->

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
<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
            (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
        m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');
    ga('create', 'UA-89110077-3', 'auto');
    ga('send', 'pageview');
</script>

<script  src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBgCdL8eyrNZ4mR0qmepD6Q4N3ULd76J94"></script>
<script>
    function LoadMap(propertes) {
        var defaultLat = 40.7110411;
        var defaultLng = -74.0110326;
        var mapOptions = {
            center: new google.maps.LatLng(defaultLat, defaultLng),
            zoom: 15,
            scrollwheel: false,
            styles: [
                {
                    featureType: "administrative",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: "water",
                    elementType: "labels",
                    stylers: [
                        {visibility: "off"}
                    ]
                },
                {
                    featureType: 'poi.business',
                    stylers: [{visibility: 'off'}]
                },
                {
                    featureType: 'transit',
                    elementType: 'labels.icon',
                    stylers: [{visibility: 'off'}]
                },
            ]
        };
        var map = new google.maps.Map(document.getElementById("map"), mapOptions);
        var infoWindow = new google.maps.InfoWindow();
        var myLatlng = new google.maps.LatLng(40.7110411, -74.0110326);

        var marker = new google.maps.Marker({
            position: myLatlng,
            map: map
        });
        (function (marker) {
            google.maps.event.addListener(marker, "click", function (e) {
                infoWindow.setContent("" +
                    "<div class='map-properties contact-map-content'>" +
                    "<div class='map-content'>" +
                    "<p class='address'>20-21 Kathal St. Tampa City, FL</p>" +
                    "<ul class='map-properties-list'> " +
                    "<li><i class='flaticon-phone'></i>  +0477 8556 552</li> " +
                    "<li><i class='flaticon-phone'></i>  info@themevessel.com</li> " +
                    "<li><a href='index.html'><i class='fa fa-globe'></i>  http://www.example.com</li></a> " +
                    "</ul>" +
                    "</div>" +
                    "</div>");
                infoWindow.open(map, marker);
            });
        })(marker);
    }
    LoadMap();
</script>

</body>
</html>
