<html lang="en">
<?php 
  session_start();
  $stake = 'Admin';
  include('check.php');
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/admin.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/pop.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>
<body>
  <?php include('includes/navbar/navbar.php');?>
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
  <div class="popup" id="popup"> 
        <img src="images/t1.png" alt="">
        <h3>Are you sure you want to LogOut?</h3>
        <button type="button" onclick="closePopup()" onclick="window.location.href = 'index.php'">LogOut</button>
        <button type="button" onclick="cancelPopup()">Cancel</button>
  </div>
  <script>
    function profileAccount(){
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