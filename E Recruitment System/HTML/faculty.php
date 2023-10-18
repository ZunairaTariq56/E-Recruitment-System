<?php include('includes/auth.php'); ?>
<!DOCTYPE html>
<html lang="zxx">
<head>
      <?php include('includes/dashboard-links.php'); ?>
<body>
<div class="page_loader"></div>

<!-- Main header start -->
<?php include('includes/dashboard-header.php') ?>
<!-- Main header end -->

<!-- Dashboard start -->
<div class="dashboard">
    <div class="container-fluid">
          <?php include ('includes/dashboard-side-header.php'); ?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Manage Candidate</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-3.php">Index</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li class="active">Manage Candidate</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <div class="job-info">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Id></th>
                                        <th class="ds-none"></th>
                                        <th class="hdn">Date</th>

                                        <th>Actions</th>
                                    </tr>
                                    </thead>
                                    <?php
                                    include('includes/db.php');
                                    $sql = "SELECT * FROM faculty";
                                    $query = mysqli_query($con,$sql);
                                    if(mysqli_num_rows($query) > 0){
                                      while($row = mysqli_fetch_array($query))
                                        {

                                        $id = $row['id'];
                                        $name = $row['name'] ;
                                        $fname = $row['f_name'] ;
                                        $designation = $row['designation'] ;
                                        $gender = $row['gender'];
                                        $country = $row['country'];
                                        $city = $row['city'];
                                        $qualification = $row['qualification'];
                                        $experience = $row['experience'];
                                        $about_you = $row['description'];
                                        $picture = $row['picture'];
                                        $date = $row['date'];

                    ?>
                                    <tbody>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="user-photo" src="<?php echo $picture; ?>" class="img-fluid"></a>
                                        </td>
                                        <td>
                                            <div class="inner">
                                                <h5><a href="#"><?php echo $name; ?></a></h5>
                                                <ul>
                                                    <li><i class="flaticon-tick"></i> <?php echo $designation; ?></li>
                                                    <li><i class="flaticon-tick"></i> <?php echo $experience; ?></li>
                                                    <li><i class="flaticon-pin"></i> <?php echo $city; ?></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn"><?php echo $date; ?></td>

                                        <td class="actions">
                                            <a href="update-faculty.php?f_id=<?php echo $id ?>"><i class="fa fa-pencil"></i><?php echo $id ?></a>
                                            <a href="delete-faculty.php?f_id=<?php echo $id ?>"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>
                                <?php } } ?>
                                    </tbody>
                                </table>
                            </div>
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
