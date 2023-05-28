<?php
session_start();
include('connect.php');
$stake = 'HOD';
include('check.php');
$query = "SELECT * from questions WHERE feedbacktype = 'PTM' ";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/generate.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
    <link rel="icon" href="images/bitlogo.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/9dcdbf7660.js" crossorigin="anonymous"></script>
    <title>Welcome!</title>
</head>
<body>
    <div class="csv" id="log">
        <div class="form">
            <div class="frm animate">
                <button onclick="document.getElementById('log').style.display='none'">&times;</button>
                <h2>Add Question: </h2>
                <form action="create_hodfeedback.php" method="POST">
                    <div>
                        <label>Question Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="int" name="quesid" required>
                    </div>

                    <div>
                        <label>Question Type&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>

                        <select name="type">
                            <option value="Not Selected">Select Question Type</option>
                            <option value="CES">CES</option>
                            <option value="PTM">PTM</option>
                            <option value="Faculty Feedback">Faculty Feedback</option>
                        </select>
                    </div>

                    <div>
                        <label>Question :</label><br>
                        <textarea name="ques" rows="4" cols="50"></textarea>
                    </div>

                    <div>
                        <label>Option 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="op1">
                    </div>

                    <div>
                        <label>Option 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="op2">
                    </div>

                    <div>
                        <label>Option 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="op3">
                    </div>

                    <div>
                        <label>Option 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="op4">
                    </div>

                    <div>
                        <label>Option 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input type="text" name="op5">
                    </div>         

                    <input type="submit" value="Add" name="submit">
                </form>
            </div>
        </div>
    </div>
    <div class="nav">
        <div class="img">
            <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
        </div>
        <h2 id="heading">Bajaj Institute of Technology</h2>
        <div class="links" id="links">
        <p class="input"><?php echo $fname, " ", $lname; ?></p>
            <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        </div>
    </div>
    <div class="spaces"></div>
    <div class="main">
        <div class="left">
            <h1>HOD</h1>
            <ul>
        <li><a href="manageFaculty.php">Manage Faculty</a></li>
        <li><a href="generateptm.php">Generate PTM</a></li>
        <li><a href="hodviewfeedback.php">View Faculty Feedback</a></li>
            </ul>
        </div>
        <div class="right">
            <h1>Generate Parent Teacher Meeting Feedback</h1>
            <p>Dashboard/<span>Generate Parent Teacher Meeting Feedback</span></p>
            <div class="questions" id="questions">
               
                <form action="create_hodfeedback.php?id=<?php echo $_GET['id']; ?>" method="POST">
                    <input type="text" value="<?php echo $_GET['id'];?>" name="feed">
                    <?php
                        $feed = $_GET['id'];
                        echo '<input type="hidden" name="feed" value="'.$feed.'">';
                        ?>
                    <a class="add" onclick="login()">+</a>
                    <br>
                    <br>
                    <?php
                    while ($row = mysqli_fetch_assoc($result)) {
                        $i= 1 ;
                    ?>
                        <a href='EditQue.php?questionid=$row[questionid]' name='edit'><i class='fa-solid fa-pen-to-square edit'></i></a>
                        <?php echo $i, "."; ?> <?php echo $row['question']; ?><br>
                        <?php echo $row['option1']; ?><br>
                        <?php echo $row['option2']; ?><br>
                        <?php echo $row['option3']; ?><br>
                        <?php echo $row['option4']; ?><br>
                        <?php echo $row['option5']; ?> <br>
                        <!-- <a href='EditQue.php?id=$row[questionid]' name='edit'><i class='fa-solid fa-pen-to-square edit'></i></a> -->
                        <!-- <a href='DeleteQue.php?id=$row[questionid]' name='delete'><i class='fa-solid fa-trash delete'></i></a> -->
                        <br>
                        
                    <?php
                    $i++;
                    }
                    ?>
                    <input type="submit" value="Submit" name="submit1" class="submit">
                </form>
            </div>
        </div>
    </div>
    <script>
        function login() {
            var log = document.getElementById('log');
            log.style.display = 'block';
        }
    </script>
</body>
</html>