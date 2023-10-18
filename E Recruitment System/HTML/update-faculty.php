<?php include('includes/auth.php'); ?>
<?php
$id1 = $_GET['f_id'];

include('includes/db.php');
$sql1 = "SELECT * FROM faculty WHERE id = $id1";
$query1 = mysqli_query($con,$sql1);
if(mysqli_num_rows($query1) > 0){
  while($row = mysqli_fetch_array($query1))
    {
      $name = $row['name'] ;
      $f_name = $row['f_name'] ;
      $designation = $row['designation'] ;
      $gender = $row['gender'] ;
      $country = $row['country'];
      $city = $row['city'];
      $qualification = $row['qualification'];
      $experience = $row['experience'];
      $description = $row['description'];
      $picture = $row['picture'];
      $date = $row['date'];
    }
  }
?>


<!-- Update table -------->
<?php

  if(isset($_POST['update-faculty'])){
    $name = $_POST['name'] ;
    $f_name = $_POST['f-name'] ;
    $designation = $_POST['designation'] ;
    $gender = $_POST['gender'] ;
    $country = $_POST['country'];
    $city = $_POST['city'];
    $qualification = $_POST['qualification'];
    $experience = $_POST['experience'];
    $description = $_POST['description'];

    $file =$_FILES['picture'];
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

    $sql = "UPDATE faculty SET name='$name', f_name='$f_name',gender='$gender',
    country='$country',city='$city',qualification='$qualification',
    experience='$experience',description='$description',picture='$destinationfile' WHERE id='$id1'";
    $query = mysqli_query($con,$sql);
    if($query){
      echo '<script language="javascript">';
      echo 'alert("Data Updated Successfully!")';
      echo '</script>';
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Failed To Updated!")';
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
                                            <label>Name</label>
                                            <input type="text" class="input-text" name="name"value="<?php echo $name; ?>" require>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Father's Name</label>
                                            <input type="text" class="input-text" name="f-name"value="<?php echo $f_name; ?>" require>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Desigantion</label>
                                            <select class="selectpicker search-fields" name="designation" id="job-category1" value="<?php echo $designation; ?>">
                                              <option><?php echo $designation; ?></option>
                                                <option>Networking</option>
                                                <option>Accounting / Finance</option>
                                                <option>Programming</option>
                                                <option>MathMetics</option>
                                                <option>Health Care</option>
                                            </select>
                                            <span id="job-category2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Gender</label>
                                            <select class="selectpicker search-fields" name="gender" value="<?php echo $gender; ?>" id="gender1">
                                                <option><?php echo $gender; ?></option>
                                                <option>Male</option>
                                                <option>Female</option>
                                            </select>
                                            <span id="gender2" class="text-danger font-weight-bold"> </span>
                                        </div>
                                    </div>

                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <div class="form-group">
                                                <label>Country</label>
                                                <select class="selectpicker search-fields" name="country" value="<?php echo $country; ?>" required>
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
                                                <select class="selectpicker search-fields" name="city" value="<?php echo $city; ?>" required>
                                                    <option><?php echo $city; ?></option>
                                                    <option>Sialkot</option>
                                                    <option>Gujrat</option>
                                                    <option>Lahore</option>
                                                    <option>Rawal Pindi</option>
                                                    <option>Faislabad</option>
                                                    <option>Multan</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Qualification</label>
                                            <select class="selectpicker search-fields" name="qualification" value="<?php echo $qualification; ?>" required>
                                                <option><?php echo $qualification; ?></option>
                                                <option>Matriculation</option>
                                                <option>Gradute</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Experience</label>
                                            <select class="selectpicker search-fields" name="experience" value="<?php echo $experience; ?>" required>
                                                <option><?php echo $experience; ?></option>
                                                <option>1 Year</option>
                                                <option>2 Year</option>
                                                <option>3 Year</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Description</label>
                                            <textarea class="input-text" name="description"  required> <?php echo $description; ?></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="photoUpload photoUpload-2">
                                            Upload Files
                                            <input type="file" class="upload" name="picture" value="<?php echo $picture; ?>" required>
                                        </div>
                                        <div class="post-btn"><button name="update-faculty" class="btn btn-md button-theme">Update Faculty</button></div>
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
