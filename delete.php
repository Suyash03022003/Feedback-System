<?php 
session_start();
include('connect.php');

if(isset($_GET['EMAIL'])){
$EMAIL = $_GET['EMAIL'];

$query = "DELETE FROM faculty WHERE EMAIL = '$EMAIL'";
$query_run = mysqli_query($conn, $query); 

if($query_run){
    $_SESSION['message'] = "User deleted Successfully";
    header("Location: ManageUser.php");
    exit(0);
  }
  else{
    $_SESSION['message'] = "User Not deleted";
    header("Location: ManageUser.php");
    exit(0);
  }
}

?>