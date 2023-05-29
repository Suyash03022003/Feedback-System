<?php
session_start();
include('connect.php');
$stake = 'Parent';
include('check.php');
$sql = "SELECT * 
        FROM feedbacks 
        WHERE status = 'Active' AND feedback_type = 'PTM' ";

$result = mysqli_query($conn, $sql);
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Welcome</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/ces.css?v=<?php echo time(); ?>">
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
      <p class="input"><?php echo $fname, " ", $lname; ?></p>
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="Parentprofile.php">Profile</a><br>
          <a onclick="openPopup()" class="pointer">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>PARENTS</h1>
      <ul>
        <li><a href="Giveptm.php">Give Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p class="s1">Dashboard/ <span class="head">Course Exit Survey</span></p>
      <br>
      <br>
      <h3>Feedbacks Available</h3>
      <?php
      $i = 0;
      while ($row = mysqli_fetch_assoc($result)) {
        $feed = $row['feedback_id'];
      ?>
        <a href="ParentFeedback.php?id=<?php echo $feed; ?>"><?php echo $row['feedback_id']; ?> <span>Feedback: </span><?php echo $row['feedback_type']; ?>
          <span>(<?php echo $row['subject']; ?>)</span><br /></a>
      <?php
        $i++;
      }
      ?>
    </div>
  </div>
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
    function openPopup(){
        popup.classList.add("open-popup");       
    }
    
    function closePopup(){
        popup.classList.remove("open-popup");
        window.location.href = "logout.php";
    }
    function cancelPopup(){
        popup.classList.remove("open-popup");  
    }
  </script>
</body>
</html>