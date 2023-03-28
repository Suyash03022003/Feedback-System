<?php
include('connect.php');  
    $email = $_GET['email'];

    $loginfo = "SELECT * FROM login WHERE email = '$email';";
    $loginresult = mysqli_query($conn, $loginfo);
    $var=mysqli_fetch_array($loginresult);


    $f_name =$var['fname'];
    $l_name =$var['lname'];
    $cate =$var['category'];
    $e_mail =$var['email'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="css/profile.css?v=<?php echo time(); ?>">
    <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>profile</title>
</head>

<body>
    <form action="">
        <div>
            <img src="images/img_avatar.png" alt="user" class="pro_img">
            
            <div class="profile">
                <div class="text">
                    <label class="llabel" >First Name : <input type="text" value="<?php echo $f_name?>"> </label>
                    </label>
                    <label class="rlabel">Last Name: <input type="text" value="<?php echo $l_name?>"> </label><br>
                    <label class="llabel">Department: <input type="text"> </label>
                    <label class="rlabel">Email: <input type="text" value="<?php echo $e_mail?>"> </label><br>
                </div>
            </div>
        </div>
        <p></p><br>
        <p></p><br>
    </form>
</body>

</html>