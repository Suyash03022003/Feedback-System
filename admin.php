<html lang="en">
<?php 
  session_start();
  $userid  = $_SESSION['email'];
if($userid == true){

}
else{
  header('location:index.php');
}
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
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
    <p class="input"><?php echo $fname, " ", $lname; ?></p>
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="profile.php">Profile</a><br>
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
      <p>Dashboard</p>
      <br>
      <br>
      <div class="cards">
        <div class="row1">
          <div class="card">
            <div class="up-card">
              <img src="images/ManageUser.png" alt="Manage User">
              <h3>Manage Users</h3>
              <a href="ManageUser.php">
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
              <a href="Subject.php">
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
              <a href="gfeedback.php">
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
              <a href="VFeedback.php">
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
    function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
  </script>
</body>

</html>