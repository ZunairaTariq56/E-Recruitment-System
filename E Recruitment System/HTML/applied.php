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
            <a class="navbar-brand logo pad-0" href="index.html">
                <img src="img/logos/black-logo.png" alt="logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto d-lg-none d-xl-none">
                    <li class="nav-item dropdown">
                        <a href="dashboard.html" class="nav-link">Dashboard</a>
                    </li>
                    <li class="nav-item dropdown active">
                        <a href="add-resume.html" class="nav-link">Add Resume</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="bookmark.html" class="nav-link">Bookmark</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="applied.html" class="nav-link">Applied</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="alerts.html" class="nav-link">Alerts</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="messages.html" class="nav-link">Messages</a>
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
                        <a href="index.html" class="nav-link">Logout</a>
                    </li>
                </ul>
                <div class="navbar-buttons ml-auto d-none d-xl-block d-lg-block">
                    <ul>
                        <li>
                            <div class="dropdown btns">
                                <a class="dropdown-toggle" data-toggle="dropdown">
                                    <img src="http://placehold.it/60x60" alt="avatar">
                                    Hi, John
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="dashboard.html">Dashboard</a>
                                    <a class="dropdown-item" href="messages.html">Messages</a>
                                    <a class="dropdown-item" href="bookmark.html">Bookmark</a>
                                    <a class="dropdown-item" href="edit-profile.html">Edit profile</a>
                                    <a class="dropdown-item" href="index.html">Logout</a>
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
    <div class="container-fluid ">
        <div class="row">
            <div class="col-lg-3 col-md-12 col-sm-12 col-pad">
                <div class="dashboard-nav d-none d-xl-block d-lg-block">
                    <div class="dashboard-inner">
                        <h4>Main</h4>
                        <ul>
                            <li><a href="dashboard.html"><i class="flaticon-dashboard"></i>Dashboard</a></li>
                            <li><a href="add-resume.html"><i class="flaticon-portfolio"></i>Add Resume</a></li>
                            <li><a href="bookmark.html"><i class="flaticon-heart"></i>Bookmark</a></li>
                            <li class="active"><a href="applied.html"><i class="flaticon-safe"></i>Applied</a></li>
                            <li><a href="alerts.html"><i class="flaticon-alert"></i>Alert</a></li>
                            <li><a href="messages.html"><i class="flaticon-mail"></i>Messages<span class="nav-tag">6</span></a></li>
                            <li><a href="transaction.html"><i class="flaticon-buy"></i>Transaction</a></li>
                            <li><a href="change-password.html"><i class="flaticon-lock"></i>Change Password</a></li>
                        </ul>

                        <h4>Account</h4>
                        <ul>
                            <li><a href="edit-profile.html"><i class="flaticon-user"></i>Edit Profile</a></li>
                            <li><a href="index.html"><i class="flaticon-logout"></i>Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Applied</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index.html">Index</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.html">Dashboard</a>
                                        </li>
                                        <li class="active">Applied</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <h4>Applied</h4>
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="job-box jb-3 jb-4">
                                        <div class="company-logo">
                                            <img src="http://placehold.it/60x60" alt="logo">
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
                                                </div>
                                            </div>
                                            <div class="div-right">
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-box jb-3 jb-4">
                                        <div class="company-logo">
                                            <img src="http://placehold.it/60x60" alt="logo">
                                        </div>
                                        <div class="description">
                                            <div class="float-left">
                                                <h5 class="title"><a href="job-details.html">Media and Public Relation Executive</a></h5>
                                                <div class="candidate-listing-footer">
                                                    <ul>
                                                        <li><i class="flaticon-work"></i> Hotel</li>
                                                        <li><i class="flaticon-pin"></i> New York City</li>
                                                        <li><i class="flaticon-time"></i> Full Time</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="div-right">
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-box jb-3 jb-4">
                                        <div class="company-logo">
                                            <img src="http://placehold.it/60x60" alt="logo">
                                        </div>
                                        <div class="description">
                                            <div class="float-left">
                                                <h5 class="title"><a href="job-details.html">Dhaka Event Support Specialist</a></h5>
                                                <div class="candidate-listing-footer">
                                                    <ul>
                                                        <li><i class="flaticon-work"></i> Xero</li>
                                                        <li><i class="flaticon-pin"></i> New York City</li>
                                                        <li><i class="flaticon-time"></i> Full Time</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="div-right">
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-box jb-3 jb-4">
                                        <div class="company-logo">
                                            <img src="http://placehold.it/60x60" alt="logo">
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
                                                </div>
                                            </div>
                                            <div class="div-right">
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="job-box jb-3 jb-4">
                                        <div class="company-logo clearfix">
                                            <img src="http://placehold.it/60x60" alt="logo">
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="description">
                                            <div class="float-left">
                                                <h5 class="title"><a href="job-details.html">Application Developer For Mobile</a></h5>
                                                <div class="candidate-listing-footer">
                                                    <ul>
                                                        <li><i class="flaticon-work"></i> Hexagon</li>
                                                        <li><i class="flaticon-pin"></i> New York City</li>
                                                        <li><i class="flaticon-time"></i> Full Time</li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="div-right">
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-check-circle-o"></i></a>
                                                <a href="#" class="btn-1 btn-gray"><i class="fa fa-fw fa-times-circle-o"></i></a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                    <p class="sub-banner-2 text-center">© 2019 Theme Vessel. Trademarks and brands are the property of their respective owners.</p>
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
</body>
</html>