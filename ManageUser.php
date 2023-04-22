<?php
session_start();
include('connect.php');
$stake = 'Admin';
include('check.php');
$query = "select * from login";
$query1 = "select * from faculty";
$result = mysqli_query($conn, $query1);

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
        $item7 = mysqli_real_escape_string($conn, $data[6]);
        $item8 = mysqli_real_escape_string($conn, $data[7]);
        $query = "INSERT into students (prn, fname, lname, department, semester, email, password) values('$item1','$item2','$item3','$item4','$item5','$item6','$item7')";
        $query1 = "INSERT into login (fname, lname, category, email, password) values('$item2','$item3','$item8','$item6','$item7')";

        mysqli_query($conn, $query);
      }
      fclose($handle);
    }
  }
}

if (isset($_POST["submit1"])) {
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
        $query = "INSERT into parents (fname, lname, email, contact, password) values('$item1','$item2','$item3','$item4','$item5')";
        mysqli_query($conn, $query);
      }
      fclose($handle);
    }
  }
}


$email = $_SESSION['email'];
$fname = $_SESSION['fname'];
$lname = $_SESSION['lname'];
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage User</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/ManageUser.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/form.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
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
  <div class="csv" id="p">
    <div class="form">
      <div class="frm animate">
        <button onclick="document.getElementById('p').style.display='none'">&times;</button>
        <h2>Select CSV File: </h2>
        <form method="post" enctype="multipart/form-data">
          <input type="file" name="file">
          <br>
          <input type="submit" name="submit1" value="Import">
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
            <label>CONTACT </label>
            <input type="text" name="CONTACT" required>
          </div>
          <div class="category">
            <label>CATEGORY</label>

            <select name="CATEGORY">
              <option value="Not Selected">SELECT</option>
              <option value="Teacher">Teacher</option>
              <option value="HOD">HOD</option>
              <option value="Principal">Principal</option>
            </select>

          </div>
          <div>
            <label>EMAIL</label>
            <input type="text" name="EMAIL" required>
          </div>
          <div class="category">
            <label>DEPARTMENT</label>

            <select name="DEPARTMENT">
              <option value="Not Selected">SELECT</option>
              <option value="COMPUTER">Computer</option>
              <option value="ELECTRICAL">Electrical</option>
              <option value="CIVIL">Civil</option>
              <option value="MECHANICAL">Mechanical</option>
            </select>

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
      <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Bajaj Institute of Technology</h2>
    <div class="links" id="links">
      <p class="input"><?php echo $fname, " ", $lname; ?></p>
      <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="Adminprofile.php">Profile</a><br>
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
              <th>EMAIL</th>
              <th>EDIT</th>
              <th>DELETE</th>
            </tr>
          </thead>
          <tbody id="tbody">
            <?php
            $query1 = "select * from login WHERE category='Teacher'";
            $result = mysqli_query($conn, $query1);
            foreach ($result as $cols) {
              echo "<tr>";
              echo "<td>" . $cols['id'] . "</td>";
              echo "<td>" . $cols['fname'] . "</td>";
              echo "<td>" . $cols['lname'] . "</td>";
              echo "<td>" . $cols['email'] . "</td>";
              echo "<td><a href='edit.php?fname=$cols[fname]' name='edit'><img src= images/edit.png width='10' height='20'> </a></td>";
              echo "<td><a href='delete.php?email=$cols[email]' name='delete'><img src= images/delete.png width='20' height='20'> </a></td>";
              echo "</tr>";
            }
            ?>
          </tbody>
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

      var table = document.getElementById("table");

      function display() {
        document.getElementById(div).style.display = "block";
      }

      var tbody = document.getElementById("tbody");

      function display_student() {
        user1.classList.remove("active");
        user2.classList.remove("active");
        user3.classList.add("active");
        div = "log";
        tbody.innerHTML = "<?php
                            $query1 = "select * from login WHERE category='Student'";
                            $result = mysqli_query($conn, $query1);
                            foreach ($result as $cols) {
                              echo "<tr>";
                              echo "<td>$cols[id]</td>";
                              echo "<td>$cols[fname]</td>";
                              echo "<td>$cols[lname]</td>";
                              echo "<td>$cols[email]</td>";
                              echo "<td><a href=edit.php name=edit><img src= images/edit.png width=10 height=20> </a></td>";
                              echo "<td><a href=delete.php name=delete><img src= images/delete.png width=20 height=20> </a></td>";
                              echo '</tr>';
                            } ?>";
      }

      function display_faculty() {
        user3.classList.remove("active");
        user2.classList.remove("active");
        user1.classList.add("active");
        div = "fac";
        tbody.innerHTML = "<?php
                            $query1 = "select * from login WHERE category='Teacher'";
                            $result = mysqli_query($conn, $query1);
                            foreach ($result as $cols) {
                              echo "<tr>";
                              echo "<td>$cols[id]</td>";
                              echo "<td>$cols[fname]</td>";
                              echo "<td>$cols[lname]</td>";
                              echo "<td>$cols[email]</td>";
                              echo "<td><a href=edit.php name=edit><img src= images/edit.png width=10 height=20> </a></td>";
                              echo "<td><a href=delete.php name=delete><img src= images/delete.png width=20 height=20> </a></td>";
                              echo '</tr>';
                            } ?>";
      }
      function display_parent() {
        user3.classList.remove("active");
        user1.classList.remove("active");
        user2.classList.add("active");
        div = "p";
        tbody.innerHTML = "<?php
                            $query1 = "select * from login WHERE category='Parent'";
                            $result = mysqli_query($conn, $query1);
                            foreach ($result as $cols) {
                              echo "<tr>";
                              echo "<td>$cols[id]</td>";
                              echo "<td>$cols[fname]</td>";
                              echo "<td>$cols[lname]</td>";
                              echo "<td>$cols[email]</td>";
                              echo "<td><a href=edit.php name=edit><img src= images/edit.png width=10 height=20> </a></td>";
                              echo "<td><a href=delete.php name=delete><img src= images/delete.png width=20 height=20> </a></td>";
                              echo '</tr>';
                            } ?>";
      }
    function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }
  
    </script>
</body>

</html>