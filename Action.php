<?php
    session_start();
    require 'connect.php';

    if(isset($_POST['submit1']))
    {
      $option = $_POST['option'];
      $query = "INSERT INTO responses (answer) values('$option')";
      $result = mysqli_query($conn, $query);
    }

    if(isset($_POST['delete']))
    {
        $FNAME = $_POST['FNAME '];
        $query = "DELETE FROM faculty WHERE FNAME = '$FNAME' "; 
        $query_run = mysqli_query($conn, $query);

    if($query_run)
     {
        $_SESSION['message'] = "User deleted Successfully";
        header("Location: ManageUser.php");
        exit(0);
      }

      else
      {
        $_SESSION['message'] = "User Not deleted";
        header("Location: ManageUser.php");
        exit(0);
      }

    }   

    if(isset($_POST['Update']))
    {
      $fname = $_POST['fname'];
      $FNAME = $_POST['FNAME'];
      $LNAME = $_POST['LNAME'];
      $CONTACT = $_POST['CONTACT'];
      $CATEGORY = $_POST['CATEGORY'];
      $EMAIL = $_POST['EMAIL'];
      $DEPARTMENT = $_POST['DEPARTMENT'];
      $USERNAME = $_POST['USERNAME'];
      $PASSWORD = $_POST['PASSWORD'];

      $query ="UPDATE users SET fname = '$FNAME', lname = '$LNAME', email = '$EMAIL', contact = '$CONTACT', category = '$CATEGORY', dept = '$DEPARTMENT', password ='$PASSWORD' WHERE fname ='$fname' ";
      $query_run = mysqli_query($conn,$query);

      if($query_run){
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: ManageUser.php?active=$CATEGORY");
        exit(0);
      }
      else{
        $_SESSION['message'] = "User Not Added";
        header("Location: ManageUser.php");
        exit(0);
      }
    }

    if(isset($_POST['submit'])){
        $ID = $_POST['ID'];
        $FNAME = $_POST['FNAME'];
        $LNAME = $_POST['LNAME'];
        $EMAIL = $_POST['EMAIL'];
        $DEPARTMENT = $_POST['DEPARTMENT'];
        $PASSWORD = $_POST['PASSWORD'];
        $CATEGORY = $_POST['CATEGORY'];
        $CONTACT = $_POST['CONTACT'];
        $query = "INSERT into users (userid, fname, lname, email, dept, password, category, contact)
                  values('$ID','$FNAME','$LNAME','$EMAIL','$DEPARTMENT','$PASSWORD','$CATEGORY','$CONTACT')";
        $result = mysqli_query($conn, $query);
        
    }
    if($result){
      header("Location: ManageUser.php?active=$CATEGORY");
    }


    if(isset($_POST['Updateque']))
    {
      $questionid = $_POST['questionid'];
      $quesid = $_POST['quesid'];
      $ques = $_POST['ques'];
      $op1 = $_POST['op1'];
      $op2 = $_POST['op2'];
      $op3 = $_POST['op3'];
      $op4 = $_POST['op4'];
      $op5 = $_POST['op5'];

      $query ="UPDATE questions SET quesid = '$quesid', ques = '$ques', op1 = '$op1', op2 = '$op2', op3 = '$op3', op4 = '$op4', op5 = '$op5' WHERE fname ='$fname' ";
      $query_run = mysqli_query($conn,$query);

      if($query_run){
        $_SESSION['message'] = "User Updated Successfully";
        header("Location: hodnext.php?active=$CATEGORY");
        exit(0);
      }
      else{
        $_SESSION['message'] = "User Not Added";
        header("Location: hodnext.php");
        exit(0);
      }
    }

?>

