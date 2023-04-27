<?php
    session_start();
    require 'connect.php';
    if (isset($_POST['submit1'])) {
        $id = $_GET['id'];
        $query = "SELECT question_id FROM feedback WHERE feedback_id = $id";
        $result1 = mysqli_query($conn, $query);
        $sql = "SELECT * FROM responses";
        $result = mysqli_query($conn, $sql);
        $count = mysqli_num_rows($result);
        if ($count == 0)
            $res_id = 001;
        else {
            $sql = "SELECT MAX(responseid) FROM responses";
            $run = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($run);
            $res_id = $row['MAX(responseid)'] + 1;
        }
        $i = 0;
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $question_id = $row1['question_id'];
            $ans = $_POST['option'.$i];
            $query12 = "INSERT into responses (res_id, feedbackid, questionid, answer) values('$res_id','$id','$question_id','$ans')";
            echo $query12;
            $result2 = mysqli_query($conn, $query12);
            $i++;
        }
        if ($result2) {
            $user = $id;
            header("Location:CES.php");
            exit(0);
        } else {
            exit(0);
        }
    }
    
?>
