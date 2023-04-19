<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/bitlogo.jpg" />
    <link rel="stylesheet" href="css/index.css?v=<?php echo time(); ?>">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="js/index.js"></script>
    <title>Welcome!</title>
</head>

<body>
    <div class="login">
        <div class="form">
            <div class="frm ">
                <img src="images/aside.jpg" alt="BITW">
                <div class="content">
                    <img src="images/bitlogo.jpg" alt="BIT Logo">
                    <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
                        <div class="user-input-wrp" style="margin-bottom: 5px;">
                            <br />
                            <input type="text" class="inputText" name="user" required />
                            <span class="floating-label">Enter Email</span>
                        </div>
                        <div class="user-input-wrp">
                            <br />
                            <input type="password" class="inputText" name="pass" required />
                            <span class="floating-label">Enter Password</span>
                        </div>
                        <br>
                        <a href="#">Forgot password? </a><br>
                        <input type="submit" id="btn" value="Login" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>