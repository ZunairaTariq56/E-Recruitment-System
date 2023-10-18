<?php
session_start();
if(!isset($_SESSION['fullname'])){
  header('Location:./login.php');
}

 ?>
