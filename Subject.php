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
  <title>Subject</title>
  <link rel="stylesheet" href="css/Subject.css?v=<?php echo time(); ?>">
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
      <h1>Subject</h1>
      <br>
      <p>Dashboard/<span>Add Subject</span></p>
      <br>
      <div>
        <form>
          Branch <br>
          </select>
          <select name="User" id="User">
            <option value="Principal">Select Branch</option>
            <option value="Principal">CE</option>
            <option value="Teacher">EE</option>
            <option value="Student">ME</option>
            <option value="Student">Civil</option>
          </select>
          <br>
          New Subject <br>
          <input type="text">
          <br>
          <br>
          <button>Add Subject</button>
        </form>
      </div>
      <br>
      <h2>Available Subjects</h2>
      <br>
      <table>
        <tr>
          <th>S.No</th>
          <th>Branch</th>
          <th>Subject</th>
          <th colspan="2">Action</th>
        </tr>

        <tr>
          <td>01</td>
          <td>CE</td>
          <td>DS</td>
          <td>Edit</td>
          <td>Delete</td>

        </tr>
        <tr>
          <td>02</td>
          <td>CE</td>
          <td>Java</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        <tr>
          <td>03</td>
          <td>CE</td>
          <td>Python</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        <tr>
          <td>04</td>
          <td>CE</td>
          <td>OS</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        <tr>
          <td>05</td>
          <td>CE</td>
          <td>DBMS</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
        <tr>
          <td>06</td>
          <td>CE</td>
          <td>HCI</td>
          <td>Edit</td>
          <td>Delete</td>
        </tr>
      </table>
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