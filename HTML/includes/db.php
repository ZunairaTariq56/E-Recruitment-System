<?php

$con = mysqli_connect("localhost","root","");

// Check connection
/*if ($con)
  {
  echo "Connection Successfull!";
  }
  else{
    echo "Failed!";
  }*/
  $db = mysqli_select_db($con,'recruitment');
?>
