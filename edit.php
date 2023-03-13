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
  <title>Edit User</title>
  <link rel="stylesheet" href="css/edit.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>

<body>
    <?php
    if(isset($_GET['fname'])){
       $fname = mysqli_real_escape_string($conn, $_GET['fname']);
       $query = "SELECT * FROM faculty WHERE fname= '$fname' ";
       $query_run = mysqli_query($conn, $query);

       if(mysqli_num_rows($query_run)>0){
            $user = mysqli_fetch_array($query_run);
            ?>
 
      <form action="Action.php" method="POST">
        <input type="hidden" name="fname" value= "<?=$fname?>"
          <div>
            <label>FIRST NAME</label>
            <input type="text" name="FNAME" value = "<?= $user['FNAME']?>" required>
          </div>
          <div>
            <label>LAST NAME</label>
            <input type="text" name="LNAME" value = "<?= $user['LNAME']?>" required>
          </div>
          <div>
            <label>CONTACT</label>
            <input type="text" name="CONTACT" value = "<?= $user['CONTACT']?>"required>
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
            <label >EMAIL</label>
            <input type="text" name="EMAIL" value = "<?= $user['EMAIL']?>"required>
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
            <label >USERNAME</label>
            <input type="text" name="USERNAME" value = "<?= $user['USERNAME']?>"required>
          </div>
          <div>
            <label>PASSWORD</label>
            <input type="text" name="PASSWORD" value = "<?= $user['PASSWORD']?>" required>
          </div>  
           <button type="submit" name="Update">Update</button>
          </form> 
          
          <?php
       }
       else{
        echo "No such record found";
       }
    }
    ?>
</body>
</html>
