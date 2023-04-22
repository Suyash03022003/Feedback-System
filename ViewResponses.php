<?php 
session_start();
include('connect.php');

if(isset($_GET['id'])){
$Feedid = $_GET['id'];

$query1 = "SELECT COUNT(answer) as count
          FROM responses
          WHERE answer = 'Excellent' AND feedbackid = '$Feedid'";
$result1 = mysqli_query($conn, $query1);

$query2 = "SELECT COUNT(answer) as count
          FROM responses
          WHERE answer = 'Agree' AND feedbackid = '$Feedid'";
$result2 = mysqli_query($conn, $query2);

$query3 = "SELECT COUNT(answer) as count
          FROM responses
          WHERE answer = 'Neutral' AND feedbackid = '$Feedid'";
$result3 = mysqli_query($conn, $query3);

$query4 = "SELECT COUNT(answer) as count
          FROM responses
          WHERE answer = 'Very Good' AND feedbackid = '$Feedid'";
$result4 = mysqli_query($conn, $query4);

$query5 = "SELECT COUNT(answer) as count
          FROM responses
          WHERE answer = 'Good' AND feedbackid = '$Feedid' ";
$result5 = mysqli_query($conn, $query5);
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
      <?php $row = mysqli_fetch_assoc($result1); ?>
      <?php echo "Excellent  ".$row['count']; ?> <br>
      <?php $row = mysqli_fetch_assoc($result2); ?>
      <?php echo "Agree  ".$row['count']; ?> <br>
      <?php $row = mysqli_fetch_assoc($result3); ?>
      <?php echo "Neutral  ".$row['count']; ?> <br>
      <?php $row = mysqli_fetch_assoc($result4); ?>
      <?php echo "Very Good  ".$row['count']; ?> <br>
      <?php $row = mysqli_fetch_assoc($result5); ?>
      <?php echo "Good  ".$row['count']; ?> <br>

</body>
</html>