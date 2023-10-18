<?php


include('includes/db.php');
if(isset($_POST['job-post'])){
$job_title = $_POST['job-title'];
$job_type = $_POST['job-type'];
$job_category = $_POST['job-category'];
$location = $_POST['location'];
$salary = $_POST['salary'];
$gender = $_POST['gender'];
$country = $_POST['country'];
$city = $_POST['city'];
$qualification = $_POST['qualification'];
$experience = $_POST['experience'];
$last_date = $_POST['last-date'];
$message = $_POST['message'];

$files = $_FILES['file'];

$filename = $files['name'];
$fileerror = $files['error'];
$filetmp = $files['tmp_name'];

// To separate string that conaining dot like akram.jpg: it will eparete akram and jpg
$fileext = explode('.',$filename);
// to convert Upercase to owver like JpG to jpg and 'end' used for getting string after dot like akram.jpg:
// we will get jpg
$filecheck = strtolower(end($fileext));
$fileextstored = array('png','jpg','jpeg');
if(in_array($filecheck,$fileextstored)){
  $destinationfile = 'images/'.$filename;
  move_uploaded_file($filetmp,$destinationfile);

  $sql = "INSERT INTO job_post(job_title, job_type, job_category, location, salary,
   gender, country, city, qualification, experience, last_date, message, file)
   VALUES ('$job_title','$job_type','$job_category','$location','$salary','$gender','$country',
   '$city','$qualification','$experience','$last_date','$message','$destinationfile')";
  $query = mysqli_query($con,$sql);
  if($query){
    echo '<script language="javascript">';
    echo 'alert("Job Posted!")';
    echo '</script>';
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Job Not Posted!")';
    echo '</script>';
  }
  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Unsupported File!")';
    echo '</script>';
  }
}
   ?>
