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
            $res_id = 1;
        else {
            $sql = "SELECT MAX(res_id) FROM responses";
            $run = mysqli_query($conn, $sql);
            $row = mysqli_fetch_assoc($run);
            $res_id = $row['MAX(res_id)'] + 1;
        }

        $i = 0;
        while ($row1 = mysqli_fetch_assoc($result1)) {
            $questionid = $row1['question_id'];
            $ans = $_POST['option'.$i];
            $query12 = "INSERT into responses (res_id, feedbackid, questionid, answer) values('$res_id','$id','$questionid','$ans')";
            echo $query12;
            $result2 = mysqli_query($conn, $query12);
            $i++;

        }
        if ($result2) {
            $user = $id;
            header("Location:Parent.php");
            exit(0);
        } 
        
        else {
            exit(0);
        }

    }
    
?>
