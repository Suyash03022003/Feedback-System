<?php
session_start();
include('connect.php');
$query = "select * from questions";
$result = mysqli_query($conn, $query);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CSE</title>
</head>
<body>
    <form action="">
    <?php
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <?php echo $row['questionid']; ?> <?php echo $row['question']; ?><br>
                    <?php echo $row['option1']; ?><br>
                    <?php echo $row['option2']; ?><br>
                    <?php echo $row['option3']; ?><br>
                    <?php echo $row['option4']; ?><br>
                    <?php echo $row['option5']; ?> <br>
                    <br>
                <?php
                }
                ?>

    </form>
</body>
</html>