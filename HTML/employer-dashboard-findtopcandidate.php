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
                        <form action="topcandidate.php" method="get" enctype="multipart/form-data" onsubmit="return validation()">
                            <h4 class="bg-grea-3">Basic Information</h4>
                            <div class="search-contents-sidebar">
                                <div class="row pad-20">
                                    <div class="col-lg-12 col-md-6 col-sm-12">
                                      <div class="col-lg-12 col-md-6 col-sm-12">
                                          <div class="form-group">
                                              <label>Qualification</label>
                                              <select class="selectpicker search-fields" name="education" id="qualification1" autocomplete="off">
                                                  <option>Qualification</option>
                                                  <option>Matriculation</option>
                                                  <option>Gradute</option>
                                              </select>
                                              <span id="qualification2" class="text-danger font-weight-bold"> </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-12 col-md-6 col-sm-12">
                                          <div class="form-group">
                                              <label>Experience</label>
                                              <select class="selectpicker search-fields" name="experience" id="experties1">
                                                  <option>Experience</option>
                                                  <option>1 Year</option>
                                                  <option>2 Year</option>
                                                  <option>3 Year</option>
                                              </select>
                                              <span id="experience2" class="text-danger font-weight-bold"> </span>
                                          </div>
                                      </div>
                                      <div class="col-lg-12 col-md-6 col-sm-12">
                                          <div class="form-group">
                                              <label>Expertis</label>
                                              <select class="selectpicker search-fields" name="skills" id="experties1" autocomplete="off">
                                                  <option>Content Writer</option>
                                                  <option>Web Developer</option>
                                                  <option>Data Scientist</option>
                                                  <option>Graphics Designer</option>
                                                  <option>Teacher</option>
                                              </select>
                                              <span id="experties2" class="text-danger font-weight-bold"> </span>
                                          </div>
                                      </div>
                                    </div>


                                    <div class="col-lg-6">

                                        <div class="post-btn"><button name="find_candidate" class="btn btn-md button-theme">Find Candidate</button></div>
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
    <form action="index-3.php">
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

<script type="text/javascript">

function validation(){
  var job_title = document.getElementById('job-title1').value;
  var job_type = document.getElementById('job-type1').value;
  var job_category = document.getElementById('job-category1').value;
  var location = document.getElementById('location1').value;
  var salary = document.getElementById('salary1').value;
  var gender = document.getElementById('gender1').value;
  var country = document.getElementById('country1').value;
  var city = document.getElementById('city1').value;
  var qualification = document.getElementById('qualification1').value;
  var experience = document.getElementById('experties1').value;
  var last_date = document.getElementById('last-date1').value;
  var job_des = document.getElementById('job-des1').value;
  var files = document.getElementById('file1').value;
  if (job_title == ""){
    document.getElementById('job_title2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if((job_title.length <= 2) || (job_title.length > 20)){
    document.getElementById('name2').innerHTML = "** Title length must be between 2 to 20!";
    return false;
  }
  if(!isNaN(job_title)){
    document.getElementById('job-title2').innerHTML = "** Only characters are allowed!";
    return false;
  }
  // job_type
  if (job_type == ""){
    document.getElementById('job-type2').innerHTML = "** Please fill the text field!";
    return false;
  }

  // job_category
  if (job_category == ""){
    document.getElementById('job-category2').innerHTML = "** Please fill the email field!";
    return false;
  }

// location
  if (location == ""){
    document.getElementById('location2').innerHTML = "** Please fill the text field!";
    return false;
  }
  if(!isNaN(location)){
    document.getElementById('location2').innerHTML = "** Only characters are allowed!";
    return false;
  }
  // salary
    if (location == ""){
      document.getElementById('salary2').innerHTML = "** Please fill the text field!";
      return false;
    }
    if(!isNaN(salary)){
      document.getElementById('salary2').innerHTML = "** Only characters are allowed!";
      return false;
    }
// Gender
if (gender == ""){
  document.getElementById('gender2').innerHTML = "** Please select your gender!";
  return false;
}
// Country
if (country == ""){
  document.getElementById('country2').innerHTML = "** Please select your country!";
  return false;
}
// City
if (city == ""){
  document.getElementById('city2').innerHTML = "** Please select your city!";
  return false;
}
// Qualification
if (qualification == ""){
  document.getElementById('qualification2').innerHTML = "** Please select your qualification!";
  return false;
}
// Experience
if (experience == ""){
  document.getElementById('experience2').innerHTML = "** Please select your experience!";
  return false;
}
if (job_des == ""){
  document.getElementById('job-des2').innerHTML = "** Please fill the text field!";
  return false;
}
if((job_des.length <= 30) || (job_des.length > 100)){
  document.getElementById('job_des2').innerHTML = "**Length must be between 30 to 100!";
  return false;
}
// last-date-to-apply
if (last_date == ""){
  document.getElementById('last_date2').innerHTML = "** Please add last date to apply!";
  return false;
}
// Picture
if (pic1 == ""){
  document.getElementById('pic2').innerHTML = "** Please select your picture!";
  return false;
}

}
</script>
</body>
</html>
