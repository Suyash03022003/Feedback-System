<html lang="en">
<?php 
  $email = $_GET['email'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
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
    <p class="input"><?php echo $_GET['user'], " ", $_GET['lname']; ?></p>
      <div class="account_div">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="profile.php?email=<?php echo $email?>">Profile</a><br>
          <a>Help</a><br>
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
        <li><a href="ManageUser.php?email=<?php echo $email?>">Manage User</a></li>
        <li><a href="Subject.php?email=<?php echo $email?>">Subject</a></li>
        <li><a href="GFeedback.php?email=<?php echo $email?>">Generate Feedback</a></li>
        <li><a href="VFeedback.php?email=<?php echo $email?>">View Feedback</a></li>
      </ul>
    </div>

    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p>Dashboard</p>
      <br>
      <br>
      <div class="cards">
        <div class="row1">
          <div class="card">
            <div class="up-card">
              <img src="images/ManageUser.png" alt="Manage User">
              <h3>Manage Users</h3>
              <a href="ManageUser.php?email=<?php echo $email?>">
                <div class="view">
                  <button>View</button>
                </div>
              </a>
            </div>
          </div>

          <div class="card">
            <div class="up-card">
              <img src="images/Subject.png" alt="Manage User">
              <h3>Add Subject</h3>
              <a href="Subject.php?email=<?php echo $email?>">
                <div class="view">
                  <button>View</button>
                </div>
              </a>
            </div>
          </div>
        </div>
        <div class="row2">
          <div class="card">
            <div class="down-card">
              <img src="images/gfeedback.jpg" alt="Manage User">
              <h3>Generate Feedback</h3>
              <a href="gfeedback.php?email=<?php echo $email?>">
                <div class="view">
                  <button>View</button>
                </div>
              </a>
            </div>
          </div>

          <div class="card">
            <div class="down-card">
              <img src="images/vfeedback.jpg" alt="Manage User">
              <h3>View Feedback</h3>
              <a href="VFeedback.php?email=<?php echo $email?>">
                <div class="view">
                  <button>View</button>
                </div>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
  <script>
  </script>
</body>

</html>