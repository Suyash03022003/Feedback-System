<?php
session_start();
include('connect.php');
$query = "select * from login";
$query1 = "select * from faculty";
$result = mysqli_query($conn, $query);

if (isset($_POST["submit"])) {
  if ($_FILES['file']['name']) {
    $filename = explode(".", $_FILES['file']['name']);
    if ($filename[1] == 'csv') {
      $handle = fopen($_FILES['file']['tmp_name'], "r");
      while ($data = fgetcsv($handle)) {
        $item1 = mysqli_real_escape_string($conn, $data[0]);
        $item2 = mysqli_real_escape_string($conn, $data[1]);
        $item3 = mysqli_real_escape_string($conn, $data[2]);
        $item4 = mysqli_real_escape_string($conn, $data[3]);
        $item5 = mysqli_real_escape_string($conn, $data[4]);
        $item6 = mysqli_real_escape_string($conn, $data[5]);
        $query = "INSERT into login (fname, lname, username, category, email, password) values('$item1','$item2','$item3','$item4','$item5','$item6')";
        mysqli_query($conn, $query);
      }
      fclose($handle);
    }
  }
}

?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage User</title>
  <link rel="stylesheet" href="css/ManageUser.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>

<body>
  <div class="csv" id="log">
    <div class="form">
      <div class="frm animate">
        <button onclick="document.getElementById('log').style.display='none'">&times;</button>
        <h2>Select CSV File: </h2>
        <form method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <br>
          <input type="submit" name="submit" value="Import">
        </form>
      </div>
    </div>
  </div>
  <div class="add_faculty" id="fac">
    <div class="form">
      <div class="frm animate">
        <button onclick="document.getElementById('fac').style.display='none'">&times;</button>
        <h2>Add User: </h2>
        <form action="Action.php" method="POST">
          <div>
            <label>FIRST NAME</label>
            <input type="text" name="FNAME" required>
          </div>
          <div>
            <label>LAST NAME</label>
            <input type="text" name="LNAME" required>
          </div>
          <div>
            <label>CONTACT</label>
            <input type="text" name="CONTACT" required>
          </div>
          <div>
            <label>CATEGORY</label>
            <div>
              <select name="CATEGORY">
                <option value="Not Selected">SELECT</option>
                <option value="TEACHER">TEACHER</option>
                <option value="HOD">HOD</option>
                <option value="PRINCIPAL">PRINCIPAL</option>
              </select>
            </div>
          </div>
          <div>
            <label>EMAIL</label>
            <input type="text" name="EMAIL" required>
          </div>
          <div>
            <label>DEPARTMENT</label>
            <div>
              <select name="DEPARTMENT">
                <option value="Not Selected">SELECT</option>
                <option value="COMPUTER">COMPUTER</option>
                <option value="ELECTRICAL">ELECTRICAL</option>
                <option value="CIVIL">CIVIL</option>
                <option value="MECHANICAL">MECHANICAL</option>
              </select>
            </div>
          </div>
          <div>
            <label>USERNAME</label>
            <input type="text" name="USERNAME" required>
          </div>
          <div>
            <label>PASSWORD</label>
            <input type="text" name="PASSWORD" required>
          </div>
          <input type="submit" name="submit">
        </form>
      </div>
    </div>
  </div>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo.jpg" alt="BIT Logo">
    </div>
    <h2 id="heading">Student Feedback System</h2>
    <div class="links" id="links">
      <a href="index.html" class="link">Home</a>
      <a href="#" class="link">About Us</a>
      <a href="#" class="link">Contact Us</a>
      <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.html">Manage User</a></li>
        <li><a href="Subject.html">Subject</a></li>
        <li><a href="GFeedback.html">Generate Feedback</a></li>
        <li><a href="VFeedback.html">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>Manage User</h1>
      <br>
      <p class="s1">Dashboard/ <span>Manage User</span></p>
      <br>
      <div class="select">
        <div class="select_user">
          <p class="display_faculty active" id="faculty" onclick="display_faculty()">Faculty</p>
          <p class="display_student" id="student" onclick="display_student()">Student</p>
          <p class="display_parent" id="parent" onclick="display_parent()">Parent</p>
        </div>
        <input type="submit" class="add_user" onclick="display()" value="Add User">
      </div>

      <div class="User">

        <table class="tablecontent">
          <thead>
            <tr>
              <th>SR NO.</th>
              <th>FIRST NAME</th>
              <th>LAST NAME</th>
              <th>USERNAME</th>
              <th>EMAIL</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <?php
              while ($row = mysqli_fetch_assoc($result)) {
              ?>
                <td><?php echo $row['id']; ?></td>
                <td><?php echo $row['fname']; ?></td>
                <td><?php echo $row['lname']; ?></td>
                <td><?php echo $row['username']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><a href="edit.php?fname=<?= $row['fname']; ?>" name="edit"><img src=images/edit.png width="10" height="20"> </a></td>
                <td><button type="submit" name="delete" value="<?= $row['fname']; ?>">Delete</button></td>
                <!-- <td><img src= images/delete.png width="20" height="20"></td> -->
            </tr>
          </tbody>
        <?php
              }
        ?>
        </table>
      </div>
    </div>
    <script>
      var dropdown = document.getElementById("dropdown1");
      var dropdown = document.getElementById("dropdown2");
      var dropdown = document.getElementById("dropdown3");


      function clicked1(char) {
        dropdown1.innerHTML = char;
      }

      function clicked2(char) {
        dropdown2.innerHTML = char;
      }

      function clicked3(char) {
        dropdown3.innerHTML = char;
      }

      function login() {
        var log = document.getElementById('log');
        log.style.display = 'block';
      }

      var div = "fac";
      var user1 = document.getElementById("faculty");
      var user2 = document.getElementById("parent");
      var user3 = document.getElementById("student");
      function display_student() {
        user1.classList.remove("active");
        user2.classList.remove("active");
        user3.classList.add("active");
        div = "log";
      }

      function display_faculty() {
        user3.classList.remove("active");
        user2.classList.remove("active");
        user1.classList.add("active");
        div = "fac";
      }

      function display_parent() {
        user3.classList.remove("active");
        user1.classList.remove("active");
        user2.classList.add("active");
        div = "log";
      }

      function display() {
        document.getElementById(div).style.display = "block";
      }
    </script>
</body>

</html>