<?php 
session_start();
include('connect.php');

$EMAIL = $_GET['email'];
$query1 = "SELECT * FROM user WHERE EMAIL = '$EMAIL'";
$result = mysqli_query($conn, $query1);
$row = mysqli_fetch_array($result);
$CATEGORY = $row['category'];
$query = "DELETE FROM user WHERE EMAIL = '$EMAIL'";
$query_run = mysqli_query($conn, $query); 

if($query_run){
    header("Location: ManageUser.php?email=$EMAIL&active=$CATEGORY");
    exit(0);
  }
  else{
    header("Location: ManageUser.php");
    exit(0);
  }
?>