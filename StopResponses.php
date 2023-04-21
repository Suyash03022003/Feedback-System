<?php 
session_start();
include('connect.php');

if(isset($_GET['id'])){
$Feedid = $_GET['id'];

$query = "UPDATE feedbacks SET status = 'Unactive' WHERE status = 'Active' AND feedback_id = '$Feedid' ";
$query_run = mysqli_query($conn, $query); 

if($query_run){
    $_SESSION['message'] = "User deleted Successfully";
    header("Location: teacher.php?email=$EMAIL");
    exit(0);
  }
  else{
    $_SESSION['message'] = "User Not deleted";
    header("Location: teacher.php");
    exit(0);
  }
}

?>