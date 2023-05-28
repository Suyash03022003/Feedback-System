<?php 

session_start();
include('connect.php');

if(isset($_GET['id'])){
$Feedid = $_GET['id'];

$query = "UPDATE feedbacks SET status = 'Unactive' WHERE status = 'Active' AND feedback_id = '$Feedid' ";
$query_run = mysqli_query($conn, $query); 

if($query_run){
    $_SESSION['message'] = "User deleted Successfully";
    header("Location: admin.php?email=$EMAIL");
    exit(0);
  }
  else{
    $_SESSION['message'] = "User Not deleted";
    header("Location: admin.php");
    exit(0);
  }
}
?>