<?php
session_start();
if(!isset($_SESSION['fullname'])){
  header('Location:./user_login.php');
}

 ?>
