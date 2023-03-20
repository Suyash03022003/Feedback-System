<?php
  session_start();
  require 'connect.php';
  if (isset($_POST['submit_next'])) {
    $sql = "SELECT * FROM feedbacks";
    $result = mysqli_query($conn, $sql);
    $count = mysqli_num_rows($result);
    if($count == 0)
    $id = 101;
    else {
      $sql = "SELECT MAX(feedback_id) FROM feedbacks";
      $result1 = mysqli_query($conn, $sql);
      $row = mysqli_fetch_assoc($result1);
      $id = $row['MAX(feedback_id)'] + 1;
    }
    $dept = $_POST['dept'];
    $year = $_POST['year'];
    $sem = $_POST['sem'];
    $section = $_POST['section'];
    $sub = $_POST['sub'];
    $author = $_POST['author'];
    $query = "INSERT INTO feedbacks (feedback_id, feedback_type, author, subject, dept, year, sem, section, status) values($id, 'CES', '$author', '$sub', '$dept', '$year', '$sem', '$section', 'Active')";
    $result = mysqli_query($conn, $query);

    if ($result) {
      $user = $id;
    header("Location:next.php?id=".$user);
      exit(0);
    } else {
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
    if ($query_run) {
    header("Location:next.php");
      exit(0);
    } else {
      header("Location: next.php");
      exit(0);
    }
  }
  if (isset($_POST['submit1'])) {
    $query = "select * from questions";
    $result = mysqli_query($conn, $query);
    $feed = $_POST['feed'];
    while ($row1 = mysqli_fetch_assoc($result)) {
    $question_id = $row1['questionid'];
    $sql = "INSERT INTO feedback (feedback_id, question_id) values($feed, $question_id)";
    $query_run = mysqli_query($conn, $sql);
    if ($query_run) {
      $flag = 1;
    }
    else {
      $flag = 0;
    }
    }
    if ($flag) {
      header("Location: successful.php");
    } else {
      header("Location: next.php");
    }
  }
?>