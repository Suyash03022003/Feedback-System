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
?>