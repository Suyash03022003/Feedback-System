<?php
$userid  = $_SESSION['email'];
if($userid == true){
    if($_SESSION['category'] != $stake)
        header('location: index.php');
}
else{
  header('location: logout.php');
}
  
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

?>