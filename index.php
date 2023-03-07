<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <script src="js/index.js"></script>
    <title>Welcome!</title>
</head>

<body onload="load()" onscroll="loaded()">
    <div class="login" id="log">
        <div class="form">
            <div class="frm animate">
                <button onclick="document.getElementById('log').style.display='none'">&times;</button>
                <h2>LOG IN</h2>
                <form name="f1" action="authentication.php" onsubmit="return validation()" method="POST">
                    <input type="text" placeholder="Email" name="user" required>
                    <input type="password" placeholder="Enter Password" name="pass" required>
                    <br>
                    <a href="#">Forgot password? </a>
                    <input type="submit" id="btn" value="Login" />
                </form>
            </div>
        </div>
    </div>
    <div class="header">
        <div class="nav" id="nav">
            <div class="img">
                <img id="img" src="images/bitlogo.jpg" alt="BIT Logo">
            </div>
            <h2 id="heading">Student Feedback System</h2>
            <div class="links" id="links">
                <a href="index.html" class="active link">Home</a>
                <a href="#" class="link">About Us</a>
                <a href="#" class="link">Contact Us</a>
            </div>
        </div>
        <div class="spaces"></div>
        <div class="image">
            <img src="images/bg.png" id="image" width="100%" height="100%" alt="">
        </div>
        <p class="heading" id="head">SELECT USER...</p>
        <div class="main">
            <div class="cards" id="card1" onclick="login()">
                <img src="images/admin.png" id="imgcard1" width="40%" alt="Admin">
                <p>Admin</p>
            </div>
            <div class="cards" id="card2" onclick="login()">
                <img src="images/principal.png" width="40%" alt="Principal">
                <p>Principal</p>
            </div><br>
            <div class="cards" id="card3" onclick="login()">
                <img src="images/teacher.png" width="40%" alt="Teacher">
                <p>Teacher</p>
            </div>
            <div class="cards" id="card4" onclick="login()">
                <img src="images/student.png" id="imgcard4" width="40%" alt="Student">
                <p>Student</p>
            </div><br>
            <div class="cards" id="card5" onclick="login()">
                <img src="images/parent.png" width="40%" alt="Parent">
                <p>Parent</p>
            </div>
        </div>
    </div>
    <div class="footer">
        <p>&copy;Copyright 2022 | Bajaj Institute of Technology, Wardha</p>
    </div>
</body>

</html>