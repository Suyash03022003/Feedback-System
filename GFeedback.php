<!DOCTYPE html>
<html lang="en">
<?php 
  session_start();
  $stake = 'Admin';
  include('check.php');
  $email = $_SESSION['email'];
  $fname = $_SESSION['fname'];
  $lname = $_SESSION['lname'];
?>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/generate.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/pop.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
  <title>Welcome!</title>
</head>
<body>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Bajaj Institute of Technology</h2>
    <div class="links" id="links">
    <p class="input"><?php echo $fname, " ", $lname; ?></p>
    <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
    </div>
  </div>
  <div class="spaces"></div>
  <div class="main">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.php">Manage User</a></li>
        <li><a href="Subject.php">Subject</a></li>
        <li><a href="GFeedback.php">Generate Feedback</a></li>
        <li><a href="VFeedback.php">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>Generate Feedback</h1>
      <p>Dashboard/<span> Generate Feedback</span></p>
      <form action="create_feedback.php" method="POST">
                <div class="options">
                    <div class="option" id="option1">
                        <input type="text" class="content" id="dropdown1" name="dept" value="Select Department">
                        <div class="drop">
                            <p onclick="clicked1('Computer')">Computer</p>
                            <p onclick="clicked1('Electrical')">Electrical</p>
                            <p onclick="clicked1('Mechanical')">Mechanical</p>
                            <p onclick="clicked1('Civil')">Civil</p>
                        </div>
                    </div>
                    <div class="option" id="option2">
                        <input type="text" class="content" id="dropdown2" name="year" value="Select Year">
                        <div class="drop">
                            <p onclick="clicked2('I')">I</p>
                            <p onclick="clicked2('II')">II</p>
                            <p onclick="clicked2('III')">III</p>
                            <p onclick="clicked2('IV')">IV</p>
                        </div>
                    </div>
                    <div class="option" id="option3">
                        <input type="text" class="content" id="dropdown3" name="sem" value="Select Semester">
                        <div class="drop">
                            <div class="I" id="I">
                                <p onclick="clicked3('I')">I</p>
                                <p onclick="clicked3('II')">II</p>
                            </div>
                            <div class="II" id="II">
                                <p onclick="clicked3('III')">III</p>
                                <p onclick="clicked3('IV')">IV</p>
                            </div>
                            <div class="III" id="III">
                                <p onclick="clicked3('V')">V</p>
                                <p onclick="clicked3('VI')">VI</p>
                            </div>
                            <div class="IV" id="IV">
                                <p onclick="clicked3('VII')">VII</p>
                                <p onclick="clicked3('VIII')">VIII</p>
                            </div>
                        </div>
                    </div>
                    <div class="option" id="option4">
                        <input type="text" class="content" id="dropdown4" name="section" value="Select Section">
                        <div class="drop">
                            <p onclick="clicked4('A')">A</p>
                            <p onclick="clicked4('B')">B</p>
                        </div>
                    </div>
                </div>
                <div class="subject_div">
                    <p class="author">Author: <input type="text" class="auth" name="author" value="<?php echo $_SESSION['fname']?>"></p>
                    <p class="subject">Subject: <input type="text" class="sub" name="sub"></p>
                </div>
                <input type="submit" value="Submit" name="submit_next">
            </form>
    </div>
  </div>
  <script>
    var dropdown1 = document.getElementById("dropdown1");
        var dropdown2 = document.getElementById("dropdown2");
        var dropdown3 = document.getElementById("dropdown3");
        var dropdown4 = document.getElementById("dropdown4");
        var option1 = document.getElementById("option1");
        var option2 = document.getElementById("option2");
        var option3 = document.getElementById("option3");
        var option4 = document.getElementById("option4");
        var questions = document.getElementById("questions");
        var firstyr = document.getElementById("I");
        var secondyr = document.getElementById("II");
        var thirdyr = document.getElementById("III");
        var fourthyr = document.getElementById("IV");

        function clicked1(char) {
            dropdown1.value = char;
            option2.style.opacity = 1;
        }

        function clicked2(char) {
            dropdown2.value = char;
            if (char == 'I') {
                firstyr.style.display = "block";
                secondyr.style.display = "none";
                thirdyr.style.display = "none";
                fourthyr.style.display = "none";
            }
            if (char == 'II') {
                firstyr.style.display = "none";
                secondyr.style.display = "block";
                thirdyr.style.display = "none";
                fourthyr.style.display = "none";
            }
            if (char == 'III') {
                firstyr.style.display = "none";
                secondyr.style.display = "none";
                thirdyr.style.display = "block";
                fourthyr.style.display = "none";
            }
            if (char == 'IV') {
                firstyr.style.display = "none";
                secondyr.style.display = "none";
                thirdyr.style.display = "none";
                fourthyr.style.display = "block";
            }
            option3.style.opacity = 1;
        }

        function clicked3(char) {
            dropdown3.value = char;
            option4.style.opacity = 1;
        }

        function clicked4(char) {
            dropdown4.value = char;
            questions.style.display = "block";
        }

        function img(number) {
            var ques = document.getElementsByClassName("span");
            var text = ques[number - 1].innerHTML;
            ques[number - 1].innerHTML = "<input type='text' value='" + text + "''>";
        }

        function login() {
            var log = document.getElementById('log');
            log.style.display = 'block';
        }
    
  function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }

  </script>
</body>

</html>