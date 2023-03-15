<?php
    session_start();
    require 'connect.php';
    if (isset($_POST['submit1'])) {
        $count = 101;
        $dept = $_POST['dept'];
        $year = $_POST['year'];
        $sem = $_POST['sem'];
        $section = $_POST['section'];
        $sub = $_POST['sub'];
        $author = $_POST['author'];
        $query = "INSERT INTO feedbacks (feedback_id, feedback_type, author, subject, dept, year, sem, section, status) values('$count', 'CES', '$author', '$sub', '$dept', '$year', '$sem', '$section', 'Active')";
        $result = mysqli_query($conn, $query);
        $count = $count + 1;

        if($result){
             header("Location: Teacher.php");
             exit(0);
           }
           else{
             header("Location: generatefeedback.php");
             exit(0);
           }
    }

    if (isset($_POST['submit'])) {
      $quesid = $_POST['quesid'];
      $questype = $_POST['type'];
      $ques = $_POST['ques'];
      $op1 = $_POST['op1'];
      $op2 = $_POST['op2'];
      $op3 = $_POST['op3'];
      $op4 = $_POST['op4'];
      $op5 = $_POST['op5'];
      $query = "INSERT INTO questions (questionid, questiontype , question , option1, option2, option3, option4, option5) values('$quesid', '$questype', '$ques', '$op1', '$op2', '$op3', '$op4', '$op5')";
      $query_run = mysqli_query($conn, $query);
      
      if($query_run){
           header("Location: generatefeedback.php");
           exit(0);
         }
         else{
           header("Location: generatefeedback.php");
           exit(0);
         }
  }
?>