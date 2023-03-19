<?php
session_start();
include('connect.php');
$query = "select * from questions";
$result = mysqli_query($conn, $query);
$query2 = "select * from questions";
$result = mysqli_query($conn, $query);
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
      <p class="s1">Dashboard/ <span>Course Exit Survey</span></p>
      <br>
      <br>
      <form action="Action.php" method="POST" class="ces">
                
                <?php
                $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <?php echo $row['questionid']; ?>
                    <?php echo $row['question']; ?><br>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="option1"><?php echo $row['option1']; ?><br>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="option1"><?php echo $row['option2']; ?><br>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="option1"><?php echo $row['option3']; ?><br>
                    <br>
                <?php
                    $i++;
                }
                ?>
                <button type="submit" name="submit1">Submit</button>

            </form>
    </div>
  </div>
  </div>
  </div>
</body>

</html>