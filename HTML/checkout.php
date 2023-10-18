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
    <div class="container">
        <div class="breadcrumb-area">
            <h1>Checkout</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Checkout</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Checkout start -->
<div class="checkout content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-8">
                <div class="checkout-box mb-20">
                    <h3>Billing Cycle</h3>
                    <div class="row">
                        <div class="col-md-4 col-sm-4">
                            <div class="package-select">
                                <input id="radio-1" class="radio-1" name="radio-payment-type" type="radio">
                                <label for="radio-1">Free</label>
                                <h4>$49.00</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="package-select">
                                <input id="radio-2" class="radio-1" name="radio-payment-type" type="radio">
                                <label for="radio-2">Stater</label>
                                <h4>$49.00</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4">
                            <div class="package-select">
                                <input id="radio-3" class="radio-1" name="radio-payment-type" type="radio">
                                <label for="radio-3">Stater</label>
                                <h4>$49.00</h4>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="paypal mb-40">
                    <h3>PayPal</h3>
                    <img src="http://placehold.it/203x70" alt="payment">
                    <h5>You will be redirected to PayPal to complete payment.</h5>
                </div>
                <div class="contact-2">
                    <h3>Payment Method</h3>
                    <form action="#" method="GET" enctype="multipart/form-data">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <input type="text" name="cardholder-name" class="form-control" placeholder="Cardholder Name">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group mb-30">
                                    <input type="text" name="cardholder-name" class="form-control" placeholder="Credit Card Number">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-30">
                                    <input type="text" name="expiry-month" class="form-control" placeholder="Expiry Month">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-30">
                                    <input type="text" name="expiry-year" class="form-control" placeholder="Expiry Year">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group mb-30">
                                    <input type="text" name="cvv" class="form-control" placeholder="CVV">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="package-select ps form-group">
                                    <input id="radio-4" class="radio-4" name="radio-payment-type" type="radio">
                                    <label for="radio-4"> You accepts our Terms and Conditions </label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="send-btn mb-30">
                                    <a href="payment.html" class="btn btn-md button-theme">Proceed Payment</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="checkout-info">
                    <h5>Summary</h5>
                    <hr>
                    <ul>
                        <li>
                            Standard Plan<span class="pull-right">$70.00</span>
                        </li>
                        <li>
                            VAT (20%)<span class="pull-right">$34.00</span>
                        </li>
                    </ul>
                    <hr>
                    <p>
                        Grand Total<span class="pull-right">$104</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Checkout end -->

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
</body>
</html>
