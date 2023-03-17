<?php
session_start();
include('connect.php');
$query = "select * from questions";
$result = mysqli_query($conn, $query);
$query2 = "select * from questions";
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
    <form action="Action.php" method="POST">
    <?php
    $i = 0;
                while ($row = mysqli_fetch_assoc($result)) {
                ?>
                    <?php echo $row['questionid']; ?> 
                    <?php echo $row['question']; ?><br>                   
                    <input type="radio" name="<?php echo 'option', $i?>" value="option1"><?php echo $row['option1']; ?><br>
                    <input type="radio" name="<?php echo 'option', $i?>" value="option1"><?php echo $row['option2']; ?><br>
                    <input type="radio" name="<?php echo 'option', $i?>" value="option1"><?php echo $row['option3']; ?><br>                    
                    <br>
                <?php
                $i++;
                }
                ?>
                <button type="submit" name="submit1">Submit</button>

    </form>
</body>
</html>