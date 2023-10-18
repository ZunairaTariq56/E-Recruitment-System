<?php

  $job_id = $_GET['jb_id'];
  include('includes/db.php');
  $sql = "SELECT * FROM job_post WHERE id='$job_id'";
  $query = mysqli_query($con,$sql);
  if(mysqli_num_rows($query) > 0){
    while($row = mysqli_fetch_array($query))
      {
      $id = $row['id'];
      $post_title = $row['job_title'] ;
      $post_type = $row['job_type'] ;
      $city = $row['city'] ;
      $category = $row['job_category'] ;
      $deadline = $row['last_date'];
      $file = $row['file'];
      $date = $row['post_date'];
      $location = $row['location'];
      $salary = $row['salary'];
      $gender = $row['gender'];
      $message = $row['message'];
      $country = $row['country'];
      $qualification = $row['qualification'];
      $experience = $row['experience'];
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
    <img class="d-block w-100 h-100" src="img/employer-list.jpg" alt="banner">
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Job Detail</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Job Detail</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Job details page start -->
<div class="job-details-page content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-12">
                <!-- job box 2 start -->
                <div class="job-box-2">
                    <div class="company-logo">
                        <img src="<?php echo $file; ?>" alt="avatar" alt="logo" width="140px"height="80px">
                    </div>
                    <div class="description">
                        <h5 class="title"><a href="#"><?php echo $post_title; ?></a></h5>
                        <div class="candidate-listing-footer">
                            <ul>
                                <li><i class="flaticon-work"></i><?php echo $category; ?></li>
                                <li><i class="flaticon-pin"></i> <?php echo $city; ?></li>
                                <li><i class="flaticon-time"></i> <?php echo $post_type; ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <hr class="hr-boder">
                <!-- job description start -->
                <div class="job-description mb-40">
                    <h3 class="heading-2">Job Description</h3>
                    <p><?php echo $message; ?></p>
                </div>
                <!-- Education + experience start-->
                <div class="education-experience amenities mb-40">
                    <h3 class="heading-2">Education + Experience</h3>
                    <ul>
                        <li>
                            <i class="fa fa-check"></i>M.B.S / M.B.A under National University with CA course complete.
                        </li>
                        <li><i class="fa fa-check"></i>3 or more years of professional design experience</li>
                        <li>
                            <i class="fa fa-check"></i>Excellent communication skills, most notably a demonstrated ability to solicit and address creative and design feedback
                        </li>
                        <li>
                            <i class="fa fa-check"></i>Masters of library science any Green University.
                        </li>
                        <li><i class="fa fa-check"></i>BA/BS degree in a technical field or equivalent practical experience.</li>
                        <li>
                            <i class="fa fa-check"></i>Ability to work independently and to carry out assignments to completion within parameters of instructions given, prescribed routines, and standard accepted practices
                        </li>
                    </ul>
                </div>
                <!-- Responsibilities start-->
                <div class="responsibilities amenities mb-40">
                    <h3 class="heading-2">Responsibilities</h3>
                    <ul>
                        <li>
                            <i class="fa fa-check"></i>Explore and design dynamic and compelling consumer experiences.
                        </li>
                        <li><i class="fa fa-check"></i>Have sound knowledge of commercial activities.</li>
                        <li>
                            <i class="fa fa-check"></i>Build next-generation web applications with a focus on the client side.
                        </li>
                        <li>
                            <i class="fa fa-check"></i>The applicants should have experience in the following areas
                        </li>
                    </ul>
                </div>
                <!-- Location start -->
                <div class="location mb-50">
                    <div class="map">
                        <h3 class="heading-2">Location</h3>
                        <div id="map" class="contact-map"></div>
                    </div>
                </div>
                <!-- Social list 2 start -->
                <div class="social-list-2 sl-3 float-left mb-40">
                    <span>Share</span>
                    <a href="#" class="facebook-bg">
                        <i class="fa fa-facebook"></i>
                    </a>
                    <a href="#" class="twitter-bg">
                        <i class="fa fa-twitter"></i>
                    </a>
                    <a href="#" class="google-bg">
                        <i class="fa fa-google"></i>
                    </a>
                    <a href="#" class="linkedin-bg">
                        <i class="fa fa-linkedin"></i>
                    </a>
                    <a href="#" class="pinterest-bg">
                        <i class="fa fa-pinterest"></i>
                    </a>
                </div>
                <div class="clearfix"></div>
                <!-- Related jobs start -->
                <div class="related-Jobs clearfix">
                    <h3 class="heading-2">Related Jobs</h3>
                    <div class="job-box">
                        <div class="company-logo">
                            <img src="http://placehold.it/90x90" alt="logo">
                        </div>
                        <div class="description">
                            <div class="float-left">
                                <h5 class="title"><a href="job-details.html">Dhaka Event Support Specialist</a></h5>
                                <div class="candidate-listing-footer">
                                    <ul>
                                        <li><i class="flaticon-work"></i> Xero</li>
                                        <li><i class="flaticon-pin"></i> New York City</li>
                                        <li><i class="flaticon-time"></i> Temporary</li>
                                    </ul>
                                    <h6>Deadline: Jan 31, 2019</h6>
                                </div>
                            </div>
                            <div class="div-right">
                                <a href="#" class="apply-button">Apply Now</a>
                                <a href="#"><i class="flaticon-heart favourite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="job-box">
                        <div class="company-logo">
                            <img src="http://placehold.it/90x90" alt="logo">
                        </div>
                        <div class="description">
                            <div class="float-left">
                                <h5 class="title"><a href="job-details.html">Development Marketer</a></h5>
                                <div class="candidate-listing-footer">
                                    <ul>
                                        <li><i class="flaticon-work"></i> Red</li>
                                        <li><i class="flaticon-pin"></i> New York City</li>
                                        <li><i class="flaticon-time"></i> Part Time</li>
                                    </ul>
                                    <h6>Deadline: Jan 31, 2019</h6>
                                </div>
                            </div>
                            <div class="div-right">
                                <a href="#" class="apply-button">Apply Now</a>
                                <a href="#"><i class="flaticon-heart favourite"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="job-box mb-30">
                        <div class="company-logo">
                            <img src="http://placehold.it/90x90" alt="logo">
                        </div>
                        <div class="description">
                            <div class="float-left">
                                <h5 class="title"><a href="job-details.html">Green Development Marketer</a></h5>
                                <div class="candidate-listing-footer">
                                    <ul>
                                        <li><i class="flaticon-work"></i> Zooms</li>
                                        <li><i class="flaticon-pin"></i> New York City</li>
                                        <li><i class="flaticon-time"></i> Full Time</li>
                                    </ul>
                                    <h6>Deadline: Jan 31, 2019</h6>
                                </div>
                            </div>
                            <div class="div-right">
                                <a href="#" class="apply-button">Apply Now</a>
                                <a href="#"><i class="flaticon-heart favourite"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-12">
                <div class="sidebar-right-2">
                    <!-- Search box start -->
                    <div class="widget search-box">
                        <form method="GET">
                            <div class="form-group fg-2">
                                <button class="search-button sj-btn btn-outline">Save job</button>
                            </div>
                            <div class="form-group mb-0">
                                <button class="search-button button-theme">Apply Now</button>
                            </div>
                        </form>
                    </div>
                    <!-- Job overview start -->
                    <div class="job-overview widget">
                        <h3 class="sidebar-title">Job Overview</h3>
                        <div class="s-border"></div>
                        <ul>
                            <li><i class="flaticon-money"></i><h5>Salary</h5><span><?php echo $salary; ?></span></li>
                            <li><i class="flaticon-pin"></i><h5>Location</h5><span><?php echo $location; ?></span></li>
                            <li><i class="flaticon-woman"></i><h5>Gender</h5><span><?php echo $gender; ?></span></li>
                            <li><i class="flaticon-work"></i><h5>Job Type</h5><span><?php echo $post_type; ?></span></li>
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
                                <input type="text" name="name" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group email">
                                <input type="email" name="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group message">
                                <textarea class="form-control" name="message" placeholder="Write message"></textarea>
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
<!-- Job details page end -->

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
