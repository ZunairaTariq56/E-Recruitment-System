<?php

  $id = $_GET['jb_id'];
  include('includes/db.php');
  $sql = "DELETE FROM job_post WHERE id = '$id'";
  $query = mysqli_query($con,$sql);
  if($query){
    echo '<script language="javascript">';
    echo 'alert("Data Deleted Successfully!")';
    echo '</script>';

  }
  else{

    echo '<script language="javascript">';
    echo 'alert("Failed To Delete!")';
    echo '</script>';
  }

?>



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
    <div class="container-fluid">
          <?php include ('includes/dashboard-side-header.php'); ?>
            <div class="col-lg-9 col-md-12 col-sm-12 col-pad">
                <div class="content-area5">
                    <div class="dashboard-content">
                        <div class="dashboard-header clearfix">
                            <div class="row">
                                <div class="col-sm-12 col-md-6"><h4>Manage Jobs</h4></div>
                                <div class="col-sm-12 col-md-6">
                                    <div class="breadcrumb-nav">
                                        <ul>
                                            <li>
                                                <a href="index-3.php">Home</a>
                                            </li>
                                            <li>
                                                <a href="dashboard.php">Dashboard</a>
                                            </li>
                                            <li class="active">Manage Jobs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dashboard-list">
                            <div class="job-info job-info-2">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th>Job Titel</th>
                                        <th class="ds-none"></th>
                                        <th class="hdn">Date</th>
                                        <th>Applications</th>
                                        <th>Status</th>
                                        <th>Actions</th>
                                    </tr>
                                    </thead>
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
                                        $date = $row['post_date'];
                                        $location = $row['location'];
                                        $salary = $row['salary'];
                                        $gender = $row['gender'];
                                        $message = $row['message'];
                                        $country = $row['country'];
                                        $qualification = $row['qualification'];
                                        $experience = $row['experience'];
                    ?>
                                    <tbody>
                                    <tr class="responsive-table">
                                        <td class="image">
                                            <a href="#"><img alt="my-properties-3" src="img/avatar/avatar-3.jpg" class="img-fluid"></a>
                                        </td>
                                        <td class="p-left-20">
                                            <div class="inner">
                                                <h5><a href="#"><?php echo $post_title;?></a></h5>
                                                <ul>
                                                    <li><i class="flaticon-work"></i> <?php echo $category;?></li>
                                                    <li><i class="flaticon-pin"></i> <?php echo $city;?></li>
                                                    <li><i class="flaticon-time"></i><?php echo $post_type;?></li>
                                                </ul>
                                            </div>
                                        </td>
                                        <td class="hdn"><?php echo $date;?></td>
                                        <td>7+ Applied</td>
                                        <td>Active</td>
                                        <td class="actions">
                                            <a href="update-job.php?jb_id=<?php echo $id ?>"><i class="fa fa-pencil"></i></a>
                                            <a href="delete-job.php?jb_id=<?php echo $id ?>"><i class="delete fa fa-trash-o"></i></a>
                                        </td>
                                    </tr>

                                    <?php
                                                  }

                                              }
                                              ?>



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
