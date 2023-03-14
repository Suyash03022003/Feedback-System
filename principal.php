<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Principal</title>
  <link rel="stylesheet" href="css/principal.css?v=<?php echo time(); ?>">
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
    <p class="para">X_Y_Z</p>
      <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
    </div>
  </div>
  <div class="spaces"></div>
  <div class="main">
    <div class="left">
      <h1>PRINCIPAL</h1>
      <ul>
        <li><a href="faculty.php">Manage Faculty</a></li>
        <li><a href="viewfeedback.php">View Feedback</a></li>
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
            <h3>Manage Faculty</h3>
            <a href="faculty.php">
              <div class="view">
                <button>View</button>
              </div>
            </a>
          </div>
        </div>
        <div class="card">
          <div class="up-card">
            <img src="images/Subject.png" alt="Manage User">
            <h3>View Feedback</h3>
            <a href="viewfeedback.php">
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