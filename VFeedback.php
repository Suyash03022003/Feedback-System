<html lang="en">
<?php 
  session_start();
 
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>View Feedback</title>
  <link rel="stylesheet" href="css/VFeedback.css?v=<?php echo time(); ?>">
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
    <h2>Bajaj Institute of Technology</h2>
    <div class="links" id="links">
    <p class="input"><?php echo $fname, " ", $lname; ?></p>
    <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="profile.php" >Profile</a><br>
         
          <a href="logout.php">Log out</a>
        </div>
      </div>
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.php">Manage User</a></li>
        <li><a href="Subject.php">Subject</a></li>
        <li><a href="GFeedback.php">Generate Feedback</a></li>
        <li><a href="VFeedback.php">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>Types Of Feedback</h1>
      <br>
      <p class="s1">Dashboard/<span>Types of Feedback</span></p>
      <br>
      <br>
      
    </div>
  </div>
  <script>
  function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
</script>
</body>

</html>