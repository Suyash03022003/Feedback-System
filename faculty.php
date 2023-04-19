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
  <title>Faculty</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/faculty.css?v=<?php echo time(); ?>">
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
  <div class="main">
    <div class="left">
      <h1>PRINCIPAL</h1>
      <ul>
        <li class="active"><a href="faculty.php">Manage Faculty</a></li>
        <li><a href="viewfeedback.php">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>Manage Faculty</h1>
      <br>
      <p>Dashboard/<span>Manage Faculty</span></p>
      <br>
      <div class="User">
        <div class="options">
          <div class="option" id="option">
            <p class="head">YEAR:</p>
            <p class="dropdown" id="dropdown1">Select</p>
            <div class="drop" id="drop">
              <p onclick="clicked1('I')">I</p>
              <p onclick="clicked1('II')">II</p>
              <p onclick="clicked1('III')">III</p>
              <p onclick="clicked1('IV')">IV</p>
            </div>
          </div>
          <div class="option" id="option">
            <p class="head">Branch:</p>
            <p class="dropdown" id="dropdown2">Select</p>
            <div class="drop" id="drop">
              <p onclick="clicked2('Computer')">Computer</p>
              <p onclick="clicked2('Electrical')">Electrical</p>
              <p onclick="clicked2('Mechanical')">Mechanical</p>
              <p onclick="clicked2('Civil')">Civil</p>
            </div>
          </div>
        </div>
        <br>
        <br>
        <h1>Computer Engineering</h1>
        <table>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th colspan="2">Action</th>
          </tr>
          <tr>
            <td>ABC</td>
            <td>abc@gmail.com</td>
            <td>7559475990</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>DEF</td>
            <td>def@gmail.com</td>
            <td>7741856385</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>GHI</td>
            <td>ghi@gmail.com</td>
            <td>9850432251</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>HIJ</td>
            <td>hij@gmail.com</td>
            <td>8483024851</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>KLM</td>
            <td>klm@gmail.com</td>
            <td>9852432251</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>XYZ</td>
            <td>xyz@gmail.com</td>
            <td>8486024852</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </table>
        <button>Add User</button>
      </div>
    </div>
    <script>
      var dropdown = document.getElementById("dropdown1");
      var dropdown = document.getElementById("dropdown2");
      function clicked1(char) {
        dropdown1.innerHTML = char;
      }
      function clicked2(char) {
        dropdown2.innerHTML = char;
      }

      function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
    </script>
</body>

</html>