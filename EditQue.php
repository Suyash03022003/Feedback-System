<?php
session_start();
include('connect.php');
$stake = 'HOD';
include('check.php');
$query = "select * from questions";
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
            <br>
            <br>
            <?php
            if (isset($_GET['questionid'])) {
            $questionid = mysqli_real_escape_string($conn, $_GET['questionid']);
            $query = "SELECT * FROM questions WHERE questionid = '$questionid' ";
            $query_run = mysqli_query($conn, $query);

            if (mysqli_num_rows($query_run) > 0) {
            $user = mysqli_fetch_array($query_run);
            ?>

            <form action="Action.php" method="POST">
                    <div>
                        <label>Question Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
                        <input class="l1" type="int" name="quesid" value="<?= $user['questionid'] ?>" required>
                    </div>

                    <!-- <div>
                        <label>Question Type&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>

                        <select name="type">
                            <option value="Not Selected">Select Question Type</option>
                            <option value="Text">Text</option>
                            <option value="Radio">Radio</option>
                            <option value="Check box">Check box</option>
                        </select>
                    </div> -->

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

                    <div class="bt">
                    <button classtype="submit" name="Updateque"><b>Update</b></button>
                    </div>
                </form>
                <?php
    } else {
      echo "No such record found";
    }
  }
  ?>
    </div>
    <script>
        function login() {
            var log = document.getElementById('log');
            log.style.display = 'block';
        }
    </script>
</body>
</html>