<?php
    session_start();
    require 'connect.php';
    if (isset($_POST['submit1'])) {
        $id = $_GET['id'];
        $query = "SELECT question_id FROM feedback WHERE feedback_id = '$id'";
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
            $sql = "INSERT INTO responses(responseid, feedbackid, questionid, answer) VALUES ('$res_id', '$id', '$question_id', '$ans');";
            $result2 = mysqli_query($conn, $sql);
            $i++;
        }
        if ($result2) {
            $user = $id;
            header("Location:CES.php");
            exit(0);
        } else {
            header("Location: feedback.php");
            exit(0);
        }
    }
?>