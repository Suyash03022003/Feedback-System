<?php
    session_start();
    require 'connect.php';

    if(isset($_POST['submit1'])){
      $option = $_POST['option'];
      $query = "INSERT INTO responses (answer) values('$option')";
      $result = mysqli_query($conn, $query);
    }

    if(isset($_POST['delete'])){
        $FNAME = $_POST['FNAME '];
        $query = "DELETE FROM faculty WHERE FNAME = '$FNAME' "; 
        $query_run = mysqli_query($conn, $query);

    if($query_run){
        $_SESSION['message'] = "User deleted Successfully";
        header("Location: ManageUser.php");
        exit(0);
      }
      else{
        $_SESSION['message'] = "User Not deleted";
        header("Location: ManageUser.php");
        exit(0);
      }
    }

    

    if(isset($_POST['Update'])){
      $fname = $_POST['fname'];
      $FNAME = $_POST['FNAME'];
      $LNAME = $_POST['LNAME'];
      $CONTACT = $_POST['CONTACT'];
      $CATEGORY = $_POST['CATEGORY'];
      $EMAIL = $_POST['EMAIL'];
      $DEPARTMENT = $_POST['DEPARTMENT'];
      $USERNAME = $_POST['USERNAME'];
      $PASSWORD = $_POST['PASSWORD'];

      $query ="UPDATE faculty SET FNAME = '$FNAME', LNAME = '$LNAME', CONTACT = '$CONTACT', CATEGORY = '$CATEGORY', EMAIL = '$EMAIL', DEPARTMENT = '$DEPARTMENT', USERNAME = '$USERNAME', PASSWORD='$PASSWORD' WHERE FNAME ='$fname' ";
      $query_run = mysqli_query($conn,$query);

      if($query_run){
        $_SESSION['message'] = "User Added Successfully";
        header("Location: ManageUser.php");
        exit(0);
      }
      else{
        $_SESSION['message'] = "User Not Added";
        header("Location: ManageUser.php");
        exit(0);
      }
    }

    if(isset($_POST['submit'])){
        $FNAME = $_POST['FNAME'];
        $LNAME = $_POST['LNAME'];
        $CONTACT = $_POST['CONTACT'];
        $CATEGORY = $_POST['CATEGORY'];
        $EMAIL = $_POST['EMAIL'];
        $DEPARTMENT = $_POST['DEPARTMENT'];
        $USERNAME = $_POST['USERNAME'];
        $PASSWORD = $_POST['PASSWORD'];
        $query = "INSERT INTO faculty (FNAME, LNAME, CONTACT,CATEGORY, EMAIL, DEPARTMENT, USERNAME, PASSWORD) values('$FNAME','$LNAME', '$CONTACT','$CATEGORY','$EMAIL','$DEPARTMENT','$USERNAME','$PASSWORD')";
        $result = mysqli_query($conn, $query);
     
        if($result){
         $ans1 = "INSERT INTO login (fname, lname, username,category, email, password) values('$FNAME','$LNAME', '$USERNAME','$CATEGORY','$EMAIL','$PASSWORD')";
         $data1 = mysqli_query($conn, $ans1);

          $_SESSION['message'] = "User Added Successfully";
          header("Location: ManageUser.php");
          exit(0);
        }
        else{
          $_SESSION['message'] = "User Not Added";
          header("Location: ManageUser.php");
          exit(0);
        }

    }
?>