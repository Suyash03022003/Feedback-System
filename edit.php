<?php
session_start();
include('connect.php');
$query1 = "select * from login";
$stake = 'Admin';
include('check.php');
?>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Edit User</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/edit.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/form.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>

  <?php
  if (isset($_GET['fname'])) {
    $fname = mysqli_real_escape_string($conn, $_GET['fname']);
    $query = "SELECT * FROM login WHERE fname= '$fname' ";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
      $user = mysqli_fetch_array($query_run);
  ?>

      <form action="Action.php" method="POST">
        <input type="hidden" name="fname" value="<?= $fname ?>">

        <div>
          <label>FIRST NAME&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="FNAME" value="<?= $user['fname'] ?>" required>
        </div>
        <div>
          <label>LAST NAME&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="LNAME" value="<?= $user['lname'] ?>" required>
        </div>
        <div>
          <label>CATEGORY&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;</label>

          <select name="CATEGORY">
            <!-- <option value="Not Selected">Select</option> -->
            <option value="Teacher" selected>Teacher</option>
            <option value="HOD">HOD</option>
            <option value="Student">Student</option>
            <option value="Parent">Parent</option>
          </select>


        </div>
        <div class="email">
          <label>EMAIL &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; :&nbsp;&nbsp;&nbsp;&nbsp;</label>
          <input type="text" name="EMAIL" value="<?= $user['email'] ?>" required>
        </div>
        <div>
          <label>DEPARTMENT&nbsp; :&nbsp;&nbsp;&nbsp;</label>

          <select name="DEPARTMENT">
            <!-- <option value="Not Selected">SELECT</option> -->
            <option value="COMPUTER" selected>COMPUTER</option>
            <option value="ELECTRICAL">ELECTRICAL</option>
            <option value="CIVIL">CIVIL</option>
            <option value="MECHANICAL">MECHANICAL</option>
          </select>

        </div>
        <div>
          <label>PASSWORD&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;&nbsp;&nbsp</label>
          <input type="text" name="PASSWORD" value="<?= $user['password'] ?>" required>
        </div>
        <button classtype="submit" name="Update">Update</button>
      </form>

  <?php
    } else {
      echo "No such record found";
    }
  }
  ?>
</body>

</html>