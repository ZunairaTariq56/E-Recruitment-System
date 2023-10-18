<?php include('includes/auth.php'); ?>
<?php
$id1 = $_GET['jb_id'];

include('includes/db.php');
$sql1 = "SELECT * FROM job_post WHERE id = $id1";
$query1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($query1) > 0){
  while($row = mysqli_fetch_array($query1))
    {
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


<!-- Update table -------->
<?php

  if(isset($_POST['update-post'])){
    $post_title = $_POST['job-title'] ;
    $post_type = $_POST['job-type'] ;
    $city = $_POST['city'] ;
    $category = $_POST['job-category'] ;
    $deadline = $_POST['last-date'];
    $location = $_POST['location'];
    $salary = $_POST['salary'];
    $gender = $_POST['gender'];
    $message = $_POST['message'];
    $country = $_POST['country'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];

    $file =$_FILES['file'];
    $filename = $file['name'];
    $fileerror = $file['error'];
    $filetmp = $file['tmp_name'];

    // To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
    $fileext = explode('.',$filename);
    // to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
    // we will get jpg
    $filecheck = strtolower(end($fileext));
    $fileextstored = array('png','jpg','jpeg');
    if(in_array($filecheck,$fileextstored)){
      $destinationfile = 'images/'.$filename;
      move_uploaded_file($filetmp,$destinationfile);

    $sql = "UPDATE job_post SET job_title='$post_title', job_type='$post_type',job_category='$category',
    location='$location',salary='$salary',gender='$gender',country='$country',city='$city',qualification='$qualification',
    experience='$experience',last_date='$deadline',message='$message',file='$destinationfile' WHERE id='$id1'";
    $query = mysqli_query($con,$sql);
    if($query){
      echo '<script language="javascript">';
      echo 'alert("Data Updated Successfully!")';
      echo '</script>';
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("DFailed To Updated!")';
      echo '</script>';
    }

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Unsupported File")';
    echo '</script>';
  }
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
                <div class="content-area5 dashboard-content">
                    <div class="dashboard-header clearfix">
                        <div class="row">
                            <div class="col-sm-12 col-md-6"><h4>Post a Job</h4></div>
                            <div class="col-sm-12 col-md-6">
                                <div class="breadcrumb-nav">
                                    <ul>
                                        <li>
                                            <a href="index-3.php">Home</a>
                                        </li>
                                        <li>
                                            <a href="dashboard.php">Dashboard</a>
                                        </li>
                                        <li class="active">Post a Job</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="submit-address dashboard-list">
                        <form  method="POST" enctype="multipart/form-data">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Title</label>
                                            <input type="text" class="input-text" name="job-title"value="<?php echo $post_title; ?>" require>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Type</label>
                                            <select class="selectpicker search-fields" name="job-type"value="" required >
                                                <option><?php echo $post_type; ?></option>
                                                  <option>Full time</option>
                                                <option>Part time</option>
                                                <option>Freelance</option>
                                                <option>Temporary</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Job Category</label>
                                            <select class="selectpicker search-fields" name="job-category" value="" required>
                                                <option><?php echo $category; ?></option>
                                                <option>Accounting / Finance</option>
                                                <option>Restaurant / Food Service</option>
                                                <option>Counseling</option>
                                                <option>Health Care</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Location</label>
                                            <input type="text" class="input-text" name="location"  value="<?php echo $location; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Salary</label>
                                            <input type="text" class="input-text" name="salary"  value="<?php echo $salary; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="selectpicker search-fields" name="gender" value="" required>
                                                <option><?php echo $gender; ?></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="selectpicker search-fields" name="country" value="" required>
                                                    <option><?php echo $country; ?></option>
                                                    <option>Pakistan</option>
                                                    <option>Country</option>
                                                    <option>Usa</option>
                                                    <option>Bangladesh</option>
                                                    <option>Indea</option>
                                                    <option>Canada</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>City</label>
                                                <select class="selectpicker search-fields" name="city" value="" required>
                                                    <option><?php echo $city; ?></option>
                                                      <option>Sialkot</option>
                                                    <option>Gujrat</option>
                                                    <option>Dhaka</option>
                                                    <option>Dubai</option>
                                                    <option>Mumbai</option>
                                                    <option>Califonia</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <select class="selectpicker search-fields" name="qualification" value="" required>
                                                <option><?php echo $qualification; ?></option>
                                                <option>Matriculation</option>
                                                <option>Gradute</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="selectpicker search-fields" name="experience" value="" required>
                                                <option><?php echo $experience; ?></option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Last Date</label>
                                            <input type="text" class="input-text" name="last-date"  value="<?php echo $deadline; ?>" required>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Job Description</label>
                                            <textarea class="input-text" name="message"  required> <?php echo $message; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="photoUpload photoUpload-2">
                                            Upload Files
                                            <input type="file" class="upload" name="file" value="<?php echo $file; ?>" required>
                                        </div>
                                        <div class="post-btn"><button name="update-post" class="btn btn-md button-theme">Update a job</button></div>
                                    </div>
                                </div>
                            </div>

                        </form>
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
