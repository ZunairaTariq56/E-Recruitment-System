<?php
include('includes/db.php');
$page = (isset($_GET['page']) && $_GET['page'] > 0) ? $_GET['page'] : 1;
$perPage = 5;
$limit = ($page > 1) ? ($page * $perPage) - $perPage : 0 ;
$sql = "SELECT SQL_CALC_FOUND_ROWS * FROM job_apply LIMIT {$limit}, {$perPage}";
$query = mysqli_query($con,$sql);
$records = mysqli_fetch_all($query);
$total = mysqli_query($con, "SELECT FOUND_ROWS() as total");
$total = mysqli_fetch_assoc($total)['total'];
$pages = ceil($total/$perPage);
//print_r($pages);

?>
