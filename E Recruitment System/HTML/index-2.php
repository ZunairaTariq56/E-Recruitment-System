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
<div class="banner bg-color-full" id="banner">
    <div id="bannerCarousole" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item banner-max-height active">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1000" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1000" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
            <div class="carousel-item banner-max-height">
                <img class="d-block w-100 h-100" src="http://placehold.it/1920x1000" alt="banner">
                <div class="carousel-caption banner-slider-inner d-flex text-center"></div>
            </div>
        </div>
    </div>
    <div class="banner-inner bi-2 text-left">
        <div class="container">
            <div class="row">
                <div class="col-lg-9">
                    <div class="tc">
                        <h1>Find your job</h1>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit</p>
                        <div class="inline-search-area ml-auto mr-auto none-768">
                            <div class="search-boxs">
                                <div class="search-col">
                                    <input type="text" name="search" class="form-control has-icon b-radius" placeholder="Job title, Keywords or company name">
                                </div>
                                <div class="search-col">
                                    <select class="selectpicker search-fields" name="location">
                                        <option>location</option>
                                        <option>New York</option>
                                        <option>Australian</option>
                                        <option>Canada</option>
                                        <option>London</option>
                                    </select>
                                </div>
                                <div class="find">
                                    <button class="btn button-theme btn-search btn-block b-radius">
                                        <i class="fa fa-search"></i><strong>Find Job</strong>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="browse-jobs none-768">
                            Browse job offers by <a href="#">Category</a> or <a href="#">Location</a>
                        </div>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-details.html">Restaurant General Manager</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hotel</li>
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
                <div class="job-box">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-details.html">Marketing Dairector</a></h5>
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
                <div class="job-box mb-30">
                    <div class="company-logo">
                        <img src="http://placehold.it/90x90" alt="logo">
                    </div>
                    <div class="description">
                        <div class="float-left">
                            <h5 class="title"><a href="job-details.html">Application Developer For Mobile</a></h5>
                            <div class="candidate-listing-footer">
                                <ul>
                                    <li><i class="flaticon-work"></i> Hexagon</li>
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
                <div class="text-center clearfix">
                    <a href="job-list.html" class="browse-all">Browse All Jobs</a>
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
<div class="testimonial">
    <div class="container">
        <div class="main-title">
            <h1>What Our Users Say</h1>
        </div>
        <div class="slick-slider-area">
            <div class="row slick-carousel" data-slick='{"slidesToShow": 2, "responsive":[{"breakpoint": 1024,"settings":{"slidesToShow": 2}}, {"breakpoint": 768,"settings":{"slidesToShow": 1}}]}'>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/50x50" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Eliane Perei
                                </h5>
                                <h6>Web Developer</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/50x50" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Maria Blank
                                </h5>
                                <h6>Office Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/50x50" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    Karen Paran
                                </h5>
                                <h6>Support Manager</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="testimonial-inner">
                        <div class="content-box">
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever</p>
                        </div>
                        <div class="media">
                            <a href="#">
                                <img src="http://placehold.it/50x50" alt="testimonial-avatar" class="img-fluid">
                            </a>
                            <div class="media-body align-self-center">
                                <h5>
                                    John Pitarshon
                                </h5>
                                <h6>Creative Director</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
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
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
                <div class="slick-slide-item"><img src="http://placehold.it/130x66" alt="brand" class="img-fluid"></div>
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
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="http://placehold.it/350x231" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>27</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">How To Get Out Of Stress At Work</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="http://placehold.it/350x231" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Back To Work After Vacation</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="http://placehold.it/350x231" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Job Motivational Quote</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
                        </div>
                    </div>
                </div>
                <div class="slick-slide-item">
                    <div class="blog-3">
                        <div class="blog-photo">
                            <img src="http://placehold.it/350x231" alt="blog" class="img-fluid">
                            <div class="date-box">
                                <span>23</span>Feb
                            </div>
                        </div>
                        <div class="detail">
                            <h3>
                                <a href="blog-details.html">Job Motivational Quote</a>
                            </h3>
                            <div class="post-meta">
                                <span><a href="#"><i class="flaticon-male"></i>Amdin</a></span>
                                <span><a href="#"><i class="flaticon-comment"></i>27</a></span>
                                <span><a href="#"><i class="fa fa-heart-o"></i>27</a></span>
                            </div>
                            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the</p>
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

<!-- Footer start -->

<!-- Footer end -->
<?php include("includes/footer.php")?>
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

<script>
    var latitude = 51.541216;
    var longitude = -0.095678;
    var providerName = 'Hydda.Full';
    generateMap(latitude, longitude, providerName);
</script>
</body>
</html>
