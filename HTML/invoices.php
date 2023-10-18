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
            <h1>Invoice</h1>
            <ul class="breadcrumbs">
                <li><a href="index.html">Home</a></li>
                <li class="active">Invoice</li>
            </ul>
        </div>
    </div>
</div>
<!-- Sub banner end -->

<!-- Invoice section start -->
<div class="invoice-section content-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="content-area5">
                    <div class="submit-address dashboard-list">
                        <form method="GET">
                            <div class="row pad-20">
                                <div class="col-lg-12">
                                    <div class="invoice">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6 invoice-mb-30">
                                                <a href="index.html" class="logo-3">
                                                    <img src="img/black-logo.png" class="cm-logos" alt="black-logo">
                                                </a>
                                            </div>
                                            <div class="col-md-6 col-sm-6 invoice-mb-30">
                                                <div class="order">Order # 12345</div>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <address class="address-info">
                                                    <p class="strong">Billed To:</p>
                                                    <p>Daniel Deve</p>
                                                    <p>42304 Main</p>
                                                    <p>Apt. 6B</p>
                                                    <p>Springfield, ST 35436</p>
                                                </address>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <address class="address-info text-right">
                                                    <p class="strong">Shipped To:</p>
                                                    <p>Daniel Deve</p>
                                                    <p>42304 Main</p>
                                                    <p>Apt. 6B</p>
                                                    <p>Springfield, ST 35436</p>
                                                </address>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <address class="address-info">
                                                    <p class="strong">Payment Method:</p>
                                                    <p>Visa ending 5453</p>
                                                    <p>mdsobuzvodro@gmail.com</p>
                                                </address>
                                            </div>
                                            <div class="col-lg-3 col-md-6 col-sm-6">
                                                <address class="address-info text-right">
                                                    <p class="strong">Order Date:</p>
                                                    <p>August 3,2018</p>
                                                </address>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="table-responsive">
                                                    <table class="table table-condensed">
                                                        <thead class="bg-active">
                                                        <tr>
                                                            <td><strong>#</strong></td>
                                                            <td><strong>Item</strong></td>
                                                            <td class="text-center"><strong>Price</strong></td>
                                                            <td class="text-center"><strong>Quantity</strong></td>
                                                            <td class="text-right"><strong>Totals</strong></td>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        <tr>
                                                            <td><strong>1</strong></td>
                                                            <td>BS-350</td>
                                                            <td class="text-center">$30.99</td>
                                                            <td class="text-center">2</td>
                                                            <td class="text-right">$30.99</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>2</strong></td>
                                                            <td>BS-700</td>
                                                            <td class="text-center">$60.00</td>
                                                            <td class="text-center">3</td>
                                                            <td class="text-right">$60.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>3</strong></td>
                                                            <td>BS-950</td>
                                                            <td class="text-center">$90.00</td>
                                                            <td class="text-center">1</td>
                                                            <td class="text-right">$90.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>4</strong></td>
                                                            <td>BS-1200</td>
                                                            <td class="text-center">$120.00</td>
                                                            <td class="text-center">4</td>
                                                            <td class="text-right">$120.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td><strong>5</strong></td>
                                                            <td>BS-1450</td>
                                                            <td class="text-center">$150.00</td>
                                                            <td class="text-center">5</td>
                                                            <td class="text-right">$150.00</td>
                                                        </tr>
                                                        <tr>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line"></td>
                                                            <td class="no-line text-center"><strong>Total</strong></td>
                                                            <td class="no-line text-right">$550.99</td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Invoice section end -->

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
