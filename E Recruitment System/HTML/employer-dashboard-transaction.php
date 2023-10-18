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

<!-- Dashboard start -->
<div class="dashboard">
    <div class="container-fluid ">
      <?php include ('includes/dashboard-side-header.php'); ?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Transaction</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index-3.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li class="active">Transaction</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <div class="single-manage-jobs table-responsive transaction-table">
                            <table class="table">
                                <thead>
                                <tr>
                                    <th>Package</th>
                                    <th>Payment Date</th>
                                    <th>Payment Method</th>
                                    <th>Amount</th>
                                    <th>Status</th>
                                </tr>
                                </thead>
                                <tbody>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Node.js Developer</a></td>
                                    <td class="table-date">12 June, 2018</td>
                                    <td>Paypal</td>
                                    <td>$210.50</td>
                                    <td><span class="pending">Approved</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                                    <td class="table-date">29 May, 2018</td>
                                    <td>Bank Transfer</td>
                                    <td>$122.00</td>
                                    <td><span class="expired">Pending</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                                    <td class="table-date">28 June, 2018</td>
                                    <td>Bank Wire Transfer</td>
                                    <td>$197.00</td>
                                    <td><span class="pending">Approved</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                                    <td class="table-date">29 May, 2018</td>
                                    <td>Payoneer</td>
                                    <td>$122.00</td>
                                    <td><span class="expired">Pending</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                                    <td class="table-date">14 May, 2018</td>
                                    <td>Bank Wire Transfer</td>
                                    <td>$197.00</td>
                                    <td><span class="pending">Approved</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Frontend React Developer</a></td>
                                    <td class="table-date">28 June, 2018</td>
                                    <td>Bank Wire Transfer</td>
                                    <td>$197.00</td>
                                    <td><span class="pending">Approved</span></td>
                                </tr>
                                <tr>
                                    <td class="manage-jobs-title"><a href="#">Full Stack PHP Developer </a></td>
                                    <td class="table-date">29 May, 2018</td>
                                    <td>Swift</td>
                                    <td>$122.00</td>
                                    <td><span class="expired">Pending</span></td>
                                </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <?php include('includes/dashboard-footer.php'); ?>
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
