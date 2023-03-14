<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="stylesheet" href="css/admin.css">
  <link rel="stylesheet" href="css/common.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>

<body>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Student Feedback System</h2>
    <div class="links" id="links">
      <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.php">Manage User</a></li>
        <li><a href="Subject.php">Subject</a></li>
        <li><a href="gfeedback.php">Generate Feedback</a></li>
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
</body>

</html>