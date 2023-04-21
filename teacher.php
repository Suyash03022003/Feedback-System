<?php
session_start();
include('connect.php');
$stake = 'Teacher';
include('check.php');
$query = "SELECT * from feedbacks WHERE author = (SELECT FNAME from login WHERE EMAIL = '$email') ";
$result = mysqli_query($conn, $query);


?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEACHER</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/teacher.css?v=<?php echo time(); ?>">
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
      <p class="input"><?php echo $fname, " ", $lname; ?></p>
      <!-- <p class="input"><?php echo $_GET['user'], " ", $_GET['lname']; ?></p> -->
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="Teacherprofile.php">Profile</a><br>

          <a href="logout.php">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>TEACHER</h1>
      <ul>
        <li><a href="generatefeedback.php">Generate CES</a></li>
        <li><a href="#">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p>Dashboard</p>
      <br></br>

      <h2>Active Feedback</h2>
      <?php

      while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['feedback_id'];
      ?>
      <a href = "feedbackform.php?id=<?php echo $id;?>">
        <?php echo $row['feedback_id']; ?>
        <?php echo $row['feedback_type']; ?>
        <?php echo $row['subject']; ?><br>
        <a href="StopResponses.php?id=<?php echo $id;?>">Stop Responses</a>&nbsp;&nbsp;&nbsp;
        <a href="ViewResponses.php?id=<?php echo $id;?>">View Responses</a><br>
      </a><br>
      <?php
      }
        
      ?>
      
    </div>
  </div>
  <script>
    function profileAccount() {
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
  </script>
</body>

</html>