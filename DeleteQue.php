<!-- <?php 

session_start();
include('connect.php');

$QueID = $_GET['id'];
$feed = $_GET['feed'];
$query1 = "SELECT * FROM questions WHERE questionid = '$QueID'";
$result = mysqli_query($conn, $query1);
// $row = mysqli_fetch_array($result);
// $CATEGORY = $row['category'];
$query = "DELETE FROM questions WHERE questionid = '$QueID'";
$query_run = mysqli_query($conn, $query); 

if($query_run){
    header("Location: hodnext.php". urlencode($feed));
    exit(0);
  }
  else{
    echo "Not Delete";
    // header("Location: index.php");
    exit(0);
  }
?> -->

<?php
session_start();
include('connect.php');

$QueID = $_GET['questionid'];
$feed = $_GET['feed']; // Fetch the feed value from the URL parameters

$query = "DELETE FROM questions WHERE questionid = '$QueID'";
$query_run = mysqli_query($conn, $query); 

if ($query_run) {
    // Redirect to hodnext.php and include the feed value in the URL
    header("Location: hodnext.php?id=" . urlencode($feed));
    exit(0);
} else {
    echo "Not Delete";
    // Redirect to an appropriate page
    exit(0);
}
?>
