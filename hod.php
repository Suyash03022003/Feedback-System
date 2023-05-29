<?php
session_start();
include('connect.php');
$stake = 'HOD';
include('check.php');
$query = "SELECT * from feedbacks WHERE author = (SELECT FNAME from users WHERE EMAIL = '$email') ";
$result = mysqli_query($conn, $query);

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HOD</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/hod.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/pop.css?v=<?php echo time(); ?>">
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
      <p class="input">
        <?php echo $fname, " ", $lname; ?>
      </p>
      <!-- <p class="input"><?php echo $_GET['user'], " ", $_GET['lname']; ?></p> -->
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="HODProfile.php">Profile</a><br>
          <a onclick="openPopup()" class="pointer">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>HOD</h1>
      <ul>
        <li><a href="manageFaculty.php">Manage Faculty</a></li>
        <li><a href="generateptm.php">Generate PTM</a></li>
        <li><a href="hodviewfeedback.php?id=<?php echo $feed; ?>">View Faculty Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p>Dashboard</p>
      <br>
      <br>
      <h2>Active Feedback</h2>
       <?php

while ($row = mysqli_fetch_assoc($result)) {
  $id = $row['feedback_id'];
?>
<a href = "feedbackform.php?id=<?php echo $id;?>">
  <?php echo $row['feedback_id']; ?>
  <?php echo $row['feedback_type']; ?>
  <?php echo $row['subject']; ?><br>
  <a href="hodstopresponses.php?id=<?php echo $id;?>">Stop Responses</a>&nbsp;&nbsp;&nbsp;
  <a href="hodviewresponses.php?id=<?php echo $id;?>">View Responses</a><br>
</a><br>
<?php
}        
?>

    </div>
  </div>
  <div class="popup" id="popup">
    <img src="images/t1.png" alt="">
    <h3>Are you sure you want to LogOut?</h3>
    <button type="button" onclick="closePopup()" onclick="window.location.href = 'index.php'">LogOut</button>
    <button type="button" onclick="cancelPopup()">Cancel</button>
  </div>
  <script>
    function profileAccount() {
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
    let popup = document.getElementById("popup");
    function openPopup() {
      popup.classList.add("open-popup");
    }

    function closePopup() {
      popup.classList.remove("open-popup");
      window.location.href = "logout.php";
    }
    function cancelPopup() {
      popup.classList.remove("open-popup");
    }
  </script>
</body>

</html>