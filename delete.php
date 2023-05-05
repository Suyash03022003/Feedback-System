<?php 
session_start();
include('connect.php');

$EMAIL = $_GET['email'];

$query = "DELETE FROM login WHERE EMAIL = '$EMAIL'";
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