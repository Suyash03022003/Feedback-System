<?php
session_start();
include('connect.php');
$stake = 'Student';
include('check.php');
$id = $_GET['id'];
$sql = "SELECT * FROM feedbacks WHERE feedback_id = '$id'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);
$type = $row['feedback_type'];
$subject = $row['subject'];
$query = "SELECT question_id FROM feedback WHERE feedback_id = '$id'";
$result1 = mysqli_query($conn, $query);
?>
<html lang="en">        

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student</title>
    <link rel="icon" href="images/bitlogo.jpg">
    <link rel="stylesheet" href="css/ces.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
</head>

<body>
    <div class="nav">
        <div class="img">
            <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
        </div>
        <h2 id="heading">Bajaj Institute of Technology</h2>
        <div class="links" id="links">
            <!-- <p class="para">X_Y_Z</p> -->
            <div class="account_div">
                <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
                <div id="account" class="account">
                    <a href="studentProfile.php">Profile</a><br>
                    <a href="index.php">Log out</a>
                </div>
            </div>
        </div>
    </div>
    <div class="spaces"></div>
    <div class="full">
        <div class="left">
            <h1>STUDENT</h1>
            <ul>
                <li><a href="CES.php">Course Exit Survey</a></li>
                <li><a href="#">Faculty</a></li>
                <li><a href="#">Workshop/Seminar</a></li>
                <li><a href="#">Value Added Program</a></li>
            </ul>
        </div>
        <div class="right">
            <h1>WELCOME</h1>
            <br>
            <p class="s1">Dashboard/ <span class="head">Course Exit Survey</span></p>
            <br>
            <br>
            <form action="give_feedback.php?id=<?php echo $id;?>" method="POST" class="ces">
                <h3><?php echo $id, ". Feedback Form: ", $type, " ", $subject;?></h3><br /><br />
                <div class="questions">
                <?php
                $i = 0;
                while ($row1 = mysqli_fetch_assoc($result1)) {
                    $question_id = $row1['question_id'];
                    $query2 = "SELECT * FROM questions WHERE questionid = '$question_id'";
                    $result2 = mysqli_query($conn, $query2);
                    $row2 = mysqli_fetch_assoc($result2);
                ?>
                    <?php echo $row2['questionid'] % 10, "."; ?>
                    <?php echo $row2['question']; ?><br><br>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="<?php echo $row2['option1']; ?>"><?php echo $row2['option1']; ?>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="<?php echo $row2['option2']; ?>"><?php echo $row2['option2']; ?>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="<?php echo $row2['option3']; ?>"><?php echo $row2['option3']; ?>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="<?php echo $row2['option4']; ?>"><?php echo $row2['option4']; ?>
                    <input type="radio" name="<?php echo 'option', $i ?>" value="<?php echo $row2['option5']; ?>"><?php echo $row2['option5']; ?>
                    <br><br>
                <?php
                    $i++;
                }
                ?>
                </div>
                <button type="submit" name="submit1">Submit</button>
            </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>