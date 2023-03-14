<?php 
session_start();
include('connect.php');

if(isset($_GET['FNAME'])){
$FNAME = $_GET['FNAME'];

$query = "DELETE FROM faculty WHERE FNAME = $FNAME";
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