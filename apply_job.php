<?php
session_start();
include "config/db.php";

$user_id = $_SESSION['user_id'];
$job_id = $_GET['job_id'];

mysqli_query($conn,
 "INSERT INTO applications(user_id,job_id) 
  VALUES($user_id,$job_id)");
?>
