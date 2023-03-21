<?php
session_start();
include('connect.php');
$sql="SELECT * FROM feedbacks";
$result=mysqli_query($conn, $sql);

$sem = "select sem from feedbacks";
$stu_sem = "select semester from students";

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="css/ces.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Bajaj Institute of Technology</h2>
    <div class="links" id="links">
      <!-- <p class="para">X_Y_Z</p> -->
      <div class="account_div">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a >Profile</a><br>
          <a >Help</a><br>
          <a href="index.php">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>STUDENT</h1>
      <ul>
        <li><a href="CES.php">Course Exit Survey</a></li>
        <li><a href="#">Faculty</a></li>
        <li><a href="#">Workshop/Seminar</a></li>
        <li><a href="#">Value Added Program</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p class="s1">Dashboard/ <span class="head">Course Exit Survey</span></p>
      <br>
      <br>
        <h3>Feedbacks Available</h3><br>
        <?php
        if( $sem == $stu_sem ){
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {

            $feed = $row['feedback_id'];
        ?>
        <a href="feedback.php?id=<?php echo $feed;?>"><?php echo $row['feedback_id']; ?> <span>Feedback: </span><?php echo $row['feedback_type']; ?>
        <span>(<?php echo $row['subject'];?>)</span><br /></a>
        <?php
          $i++;
          }
        }
        ?>
    </div>
  </div>
  </div>
  </div>
</body>

</html>