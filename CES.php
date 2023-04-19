<?php
session_start();
include('connect.php');
$userid  = $_SESSION['email'];
if($userid == true){

}
else{
  header('location:index.php');
}
$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];

$sql = "SELECT * 
        FROM feedbacks 
        JOIN students ON feedbacks.sem = students.sem
        WHERE students.email = '$userid' ";

$result = mysqli_query($conn, $sql);

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
      <h3>Feedbacks Available</h3>
        <?php
          $i = 0;
          while ($row = mysqli_fetch_assoc($result)) {
            $feed = $row['feedback_id'];
        ?>
        <a href="feedback.php?id=<?php echo $feed;?>"><?php echo $row['feedback_id']; ?> <span>Feedback: </span><?php echo $row['feedback_type']; ?>
        <span>(<?php echo $row['subject'];?>)</span><br /></a>
        <?php
          $i++;
          }
        ?>
    </div>
  </div>
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