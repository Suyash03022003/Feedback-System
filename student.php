<html lang="en">
<?php
include('connect.php');
session_start();
$stake = 'Student';
include('check.php');
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Student</title>
  <link rel="stylesheet" href="css/student.css?v=<?php echo time(); ?>">
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
      <p>Dashboard</p>
      <br>
      <br>
      <div class="cards">
        <div class="card">
          <div class="up-card">
            <img src="images/ManageUser.png" alt="Manage User">
            <h3>Course Exit Survey</h3>
            <a href="CES.php?email=<?php echo $email ?>">
              <div class="view">
                <button>View</button>
              </div>
            </a>
          </div>
        </div>

        <div class="card">
          <div class="up-card">
            <img src="images/Subject.png" alt="Manage User">
            <h3>Faculty</h3>
            <a href="#">
              <div class="view">
                <button>View</button>
              </div>
            </a>
          </div>
        </div>

        <div class="card">
          <div class="down-card">
            <img src="images/gfeedback.jpg" alt="Manage User">
            <h3>Workshop/Seminar</h3>
            <a href="#">
              <div class="view">
                <button>View</button>
              </div>
            </a>
          </div>
        </div>

        <div class="card">
          <div class="down-card">
            <img src="images/vfeedback.jpg" alt="Manage User">
            <h3>Value Added Program</h3>
            <a href="#">
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
  <script>
    function profileAccount() {
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
  </script>
</body>

</html>