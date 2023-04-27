<html lang="en">
<?php
session_start();
include('connect.php');
$stake = 'Parent';
include('check.php');
$loginfo = "SELECT * FROM login WHERE email = '$email';";
$loginresult = mysqli_query($conn, $loginfo);
$var = mysqli_fetch_array($loginresult);
$f_name = $var['fname'];
$l_name = $var['lname'];
$cate = $var['category'];
$e_mail = $var['email'];
?>


<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
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
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="Parentprofile.php">Profile</a><br>
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
      <h1>WELCOME</h1>
      <br>
      <p>Dashboard/ <span>My Profile</span></p>
      <br>
      <br>
      <form action="">
        <div class="common">
          <div class="linfo">
            <img src="images/img_avatar.png" alt="user" class="pro_img">
            <div class="linfo_content">
              <p class="pa"><?php echo $f_name ?> <?php echo $l_name ?></p>
              <p class="pa" id="p1"><?php echo $e_mail ?></p>
              <button class="btn">Edit</button>
            </div>
          </div>
          <div class="rinfo">
            <div class="text">
              <h1>Personal Details</h1>
              <label class="llabel">First Name : <br>
                <p><?php echo $f_name ?> </p>
              </label><br>
              <label class="rlabel">Last Name : <br>
                <p><?php echo $l_name ?> </p>
              </label><br>
              <!-- <label class="llabel">Department: <input type="text"> </label> -->
              <label class="rlabel">Email : <br> <?php echo $e_mail ?></label><br>
            </div>
          </div>
        </div>
  
      </form>
    </div>
  </div>
  </div>
  </div>
</body>

</html>