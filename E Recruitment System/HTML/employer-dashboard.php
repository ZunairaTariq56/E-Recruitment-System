<?php include('includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
  <?php include('includes/dashboard-links.php'); ?>
</head>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include('includes/dashboard-header.php') ?>
<!-- Main header end -->

<!-- Dashbord start -->
<div class="dashboard">
    <div class="container-fluid">
        <?php include ('includes/dashboard-side-header.php'); ?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Hello , <?php echo $_SESSION['fullname'] ?></h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-3.php">Index</a>
                                            </li>
                                            <li>
                                                <a href="#" class="active">Dashboard</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="alert alert-success alert-2" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <strong>Your listing</strong> YOUR LISTING HAS BEEN APPROVED!
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-success">
                                    <div class="left">
                                        <h4>242</h4>
                                        <p>Active Listings</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-map-marker"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-warning">
                                    <div class="left">
                                        <h4>1242</h4>
                                        <p>Listing Views</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-eye"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-active">
                                    <div class="left">
                                        <h4>786</h4>
                                        <p>Reviews</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-comments-o"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-6">
                                <div class="ui-item bg-dark">
                                    <div class="left">
                                        <h4>42</h4>
                                        <p>Bookmarked</p>
                                    </div>
                                    <div class="right">
                                        <i class="fa fa-heart-o"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-7 col-md-7">
                                <div class="dashboard-list">
                                    <div class="dashboard-message bdr clearfix ">
                                        <div class="tab-box-2">
                                            <div class="clearfix mb-30 comments-tr">
                                                <span>New Users</span>
                                                <ul class="nav nav-pills float-right" id="pills-tab" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="true">Month</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="pills-tabContent">
                                                <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>John Antony</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Emma Connor</h5>
                                                                <p>Visual Designer,Google Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Maikel Alisa</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Nick Jessy</h5>
                                                                <p>Visual Designer,Google Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box mb-0">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Wiltor Delton</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade active show" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Emma Connor</h5>
                                                                <p>Visual Designer,Google Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Wiltor Delton</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>John Antony</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Maikel Alisa</h5>
                                                                <p>Product Designer, Apple Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="new-user-box mb-0">
                                                        <div class="user-author">
                                                            <a href="#">
                                                                <img src="http://placehold.it/60x60" alt="avatar-user">
                                                            </a>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Nick Jessy</h5>
                                                                <p>Visual Designer,Google Inc</p>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="follow">Follow</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-5 col-md-5">
                                <div class="dashboard-list">
                                    <div class="dashboard-message bdr clearfix ">
                                        <div class="tab-box-2">
                                            <div class="clearfix mb-30 comments-tr">
                                                <span>Accounts</span>
                                                <ul class="nav nav-pills float-right" id="pills-tab2" role="tablist">
                                                    <li class="nav-item">
                                                        <a class="nav-link active show" id="pills-profile-tab2" data-toggle="pill" href="#pills-profile2" role="tab" aria-controls="pills-profile" aria-selected="false">Today</a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a class="nav-link" id="pills-contact-tab2" data-toggle="pill" href="#pills-contact2" role="tab" aria-controls="pills-contact" aria-selected="true">Month</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="tab-content" id="pills-tabContent2">
                                                <div class="tab-pane fade" id="pills-contact2" role="tabpanel" aria-labelledby="pills-contact-tab2">
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-facebook"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Facebook</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-linkedin"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Linkedin</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-dribbble"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Dribbble</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-google"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Google</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-twitter"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Twitter</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts mb-0">
                                                        <div class="icon">
                                                            <i class="fa fa-behance"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Behance</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab-pane fade active show" id="pills-profile2" role="tabpanel" aria-labelledby="pills-profile-tab2">
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-linkedin"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Linkedin</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-facebook"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Facebook</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-google"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Google</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-dribbble"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Dribbble</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts">
                                                        <div class="icon">
                                                            <i class="fa fa-behance"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Behance</h5>
                                                                <h6>$45126</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="accounts mb-0">
                                                        <div class="icon">
                                                            <i class="fa fa-twitter"></i>
                                                        </div>
                                                        <div class="user-content">
                                                            <div class="f-left">
                                                                <h5>Twitter</h5>
                                                                <h6>$39053</h6>
                                                            </div>
                                                            <div class="f-right">
                                                                <a href="#" class="delete">
                                                                    <i class="fa fa-trash"></i>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-12">
                                <div class="dashboard-list">
                                    <h3>
                                        Latest Projects</h3>
                                    <div class="dashboard-message dashboard-table-responsive bdr clearfix ">
                                        <div class="table-responsive dashboard-table-responsive">
                                            <table class="table mb-0">
                                                <thead>
                                                <tr>
                                                    <th>#</th>
                                                    <th>Project Name</th>
                                                    <th>Start Date</th>
                                                    <th>Due Date</th>
                                                    <th>Status</th>
                                                    <th>Assign</th>
                                                </tr>
                                                </thead>
                                                <tbody>
                                                <tr>
                                                    <td>1</td>
                                                    <td>Adminto Admin v1</td>
                                                    <td>01/01/2018</td>
                                                    <td>26/04/2018</td>
                                                    <td><span class="badge badge-danger">Released</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>2</td>
                                                    <td>Adminto Frontend v1</td>
                                                    <td>01/01/2018</td>
                                                    <td>26/04/2018</td>
                                                    <td><span class="badge badge-success">Released</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>3</td>
                                                    <td>Adminto Admin v1.1</td>
                                                    <td>01/05/2018</td>
                                                    <td>10/05/2018</td>
                                                    <td><span class="badge badge-pink">Pending</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>4</td>
                                                    <td>Adminto Frontend v1.1</td>
                                                    <td>01/01/2018</td>
                                                    <td>31/05/2018</td>
                                                    <td><span class="badge badge-purple">Work in Progress</span>
                                                    </td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                <tr>
                                                    <td>5</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2018</td>
                                                    <td>31/05/2018</td>
                                                    <td><span class="badge badge-warning">Coming soon</span></td>
                                                    <td>Coderthemes</td>
                                                </tr>
                                                <tr>
                                                    <td>6</td>
                                                    <td>Adminto Admin v1.3</td>
                                                    <td>01/01/2018</td>
                                                    <td>31/05/2018</td>
                                                    <td><span class="badge badge-primary">Coming soon</span></td>
                                                    <td>Adminto admin</td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php include('includes/dashboard-footer.php'); ?>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Dashbord end -->

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
