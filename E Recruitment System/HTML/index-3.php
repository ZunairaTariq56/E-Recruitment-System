<!-- Fetch total job ---->
<?php
include('includes/db.php');
$sql = "SELECT * FROM job_post";
$query = mysqli_query($con,$sql);
if(mysqli_num_rows($query) > 0){
  $job = mysqli_num_rows($query);
}
?>
<!-- End Fetch total job ---->

<!-- Fetch total Candidates ---->
<?php
include('includes/db.php');
$sql = "SELECT * FROM job_apply";
$query = mysqli_query($con,$sql);
if(mysqli_num_rows($query) > 0){
  $candidate = mysqli_num_rows($query);
}
?>
<!-- End Fetch total Candidates ---->

<!-- Fetch blog post ---->

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

<!-- Banner start -->
<div class="banner banner_video_bg" id="banner">
    <div class="pattern-overlay">
        <a id="bgndVideo" class="player" data-property="{videoURL:'https://www.youtube.com/watch?v=5e0LxrLSzok',containment:'.banner_video_bg', quality:'large', autoPlay:true, mute:true, opacity:1}">bg</a>
    </div>
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <div class="carousel-caption banner-slider-inner"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner">
        <div class="container">
            <div class="text-center">
                <h3 class="b-text">Find your job</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                <form class="" action="searchjob.php" method="get">


                <div class="inline-search-area ml-auto mr-auto none-768">
                    <div class="search-boxs">
                        <div class="search-col">
                            <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title, Keywords or company name">
                        </div>
                        <div class="search-col">
                            <select class="selectpicker search-fields" name="location">
                                <option>location</option>
                                <option>Gujrat</option>
                                <option>Australian</option>
                                <option>Canada</option>
                                <option>London</option>
                            </select>
                        </div>
                        <div class="find">
                            <button name="find_job" class="btn button-theme btn-search btn-block b-radius">
                                <i class="fa fa-search"></i><strong>Find Job</strong>
                            </button>
                        </div>
                    </div>
                </div>
                  </form>
                <div class="banner-counter-box none-768">
                    <div class="counter-box">
                        <h1 class="counter"><?php echo $job; ?></h1>
                        <p>Jobs Posted</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter">167</h1>
                        <p>Companies</p>
                    </div>
                    <div class="counter-box">
                        <h1 class="counter"><?php echo $candidate; ?></h1>
                        <p>Candidates</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Banner end -->

<!-- Popular categories strat -->
<div class="popular-categories content-area-7">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Popular Categories</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-money"></i>
                    <h5>Accounting / Finance</h5>
                    <span>(2143)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-mortarboard"></i>
                    <h5>Education Training</h5>
                    <span>(742)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-shout"></i>
                    <h5>Digital Marketing</h5>
                    <span>(341)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-radar"></i>
                    <h5>Telecommunication</h5>
                    <span>(410)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-sale"></i>
                    <h5>Sales & Marketing</h5>
                    <span>(23)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-pencil"></i>
                    <h5>Writing & Translations</h5>
                    <span>(43)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-doctor"></i>
                    <h5>Health</h5>
                    <span>(35)</span>
                </div>
            </div>
            <div class="col-lg-3 col-md-4 col-sm-6">
                <div class="categorie-box">
                    <i class="flaticon-truck"></i>
                    <h5>Transportation / Logistics</h5>
                    <span>(7)</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Popular categories end -->

<!-- Job section strat -->

<div class="job-section content-area-5 bg-grea">
    <div class="container">
        <!-- Main title -->
        <div class="main-title text-center">
            <h1>Recent Jobs</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>

        <div class="row">
            <div class="col-lg-12">

                      <?php
                      include('includes/db.php');
                      $sql = "SELECT * FROM job_post";
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

                      ?>

                <div class="job-box">
                    <div class="company-logo">
                        <img src="<?php echo $file; ?>" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-details.php"><?php echo $post_title; ?></a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> <?php echo $category; ?></li>
                                    <li><i class="flaticon-pin"></i> <?php echo $city; ?></li>
                                    <li><i class="flaticon-time"></i> <?php echo $post_type; ?></li>
                                </ul>
                                <h6>Deadline: <?php echo $deadline; ?></h6>
                            </div>
                        </div>
                        <div class="div-right">
                            <a href="apply-job.php?jb_id=<?php echo $id; ?>" class="apply-button">Apply Now</a>
                            <a href="#"><i class="flaticon-heart favourite"></i></a>
                        </div>
                    </div>
                </div>
          <?php
            }
          }

           ?>

                <div class="text-center clearfix">
                    <a href="job-list.php" class="browse-all">Browse All Jobs</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Job section end -->

<!-- Counters strat -->
<div class="counters bg-color-full-2">

    <div class="container">

        <div class="row">
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-user"></i>
                    <h1 class="counter">1967</h1>
                    <p>Members</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-work"></i>
                    <h1 class="counter">667</h1>
                    <p>Jobs</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-document"></i>
                    <h1 class="counter">475</h1>
                    <p>Resumes</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-3 col-sm-6">
                <div class="counter-box">
                    <i class="flaticon-factory"></i>
                    <h1 class="counter">475</h1>
                    <p>Companies</p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Counters end -->

<!-- Testimonial start -->
<?php include("includes/_testimonial.php") ?>
<!-- Testimonial end -->

<!-- Partners strat -->
<div class="partners content-area-15 bg-grea">
    <div class="container">
        <div class="main-title text-center">
            <h1>Companies We've Helped</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 5, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 3}}, {"breakpoint": 768,"settings":{"slidesToShow": 2}}]}'>
                <div class="slick-slide-item"><img src="img/company-logo1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo4.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo1.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo2.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo3.png" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="img/company-logo4.png" alt="brand" class="img-fluid"></div>
            </div>
        </div>
    </div>
</div>
<!-- Partners end -->

<!-- Blog start -->
<div class="blog content-area">
    <div class="container">
        <!-- Main title -->
        <div class="main-title">
            <h1>Latest Blog</h1>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        </div>
        <!-- Slick slider area start -->
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 3, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>

                  <?php
                  include('includes/db.php');
                  $sql = "SELECT * FROM blog_post";
                  $query = mysqli_query($con,$sql);
                  if(mysqli_num_rows($query) > 0){
                    while($data = mysqli_fetch_array($query)){
                      $id = $data['id'];
                      $picture = $data['image'];
                      $title = $data['title'];
                      $operator = $data['admin'];
                      $message = $data['details'];
                      $date = $data['post_date'];

                  ?>  <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="<?php echo $picture; ?>" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>27</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html"><?php echo $title; ?></a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i><?php echo $operator; ?></a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p><?php echo $message; ?></p>
                        </div>
                    </div>
                </div>


            <?php
          }}
            ?>


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
<!-- Blog end -->

<!-- Intro section -->
<div class="intro-section bg-color-full-2">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-md-12 col-sm-12">
                <div class="intro-text">
                    <h3>Gat a Deax App</h3>
                    <p>Searching for jobs never been that easy. Now you can find job matched your career expectation</p>
                </div>
            </div>
            <div class="col-lg-5 col-md-12 col-sm-12">
                <div class="app-download-button">
                    <a href="#" class="android-app"><i class="flaticon-robot"></i>Google Play</a>
                    <a href="#" class="apple-app"><i class="flaticon-apple"></i>Apple Store</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Intro end -->
<?php include("includes/footer.php")?>
<!-- Footer start -->

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
</body>
</html>
