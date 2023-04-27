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
      <div class="options">
        <div class="option" id="option">
          <p class="head">YEAR:</p>
          <p class="dropdown" id="dropdown1">Select</p>
          <div class="drop" id="drop">
            <p onclick="clicked1('I')">I</p>
            <p onclick="clicked1('II')">II</p>
            <p onclick="clicked1('III')">III</p>
            <p onclick="clicked1('IV')">IV</p>
          </div>
        </div>
        <div class="option" id="option">
          <p class="head">Branch:</p>
          <p class="dropdown" id="dropdown2">Select</p>
          <div class="drop" id="drop">
            <p onclick="clicked2('Computer')">Computer</p>
            <p onclick="clicked2('Electrical')">Electrical</p>
            <p onclick="clicked2('Mechanical')">Mechanical</p>
            <p onclick="clicked2('Civil')">Civil</p>
          </div>
        </div>
        <div class="option" id="option">
          <p class="head">Semester:</p>
          <p class="dropdown" id="dropdown3">Select</p>
          <div class="drop" id="drop">
            <p onclick="clicked3('I')">I</p>
            <p onclick="clicked3('II')">II</p>
            <p onclick="clicked3('III')">III</p>
            <p onclick="clicked3('IV')">IV</p>
            <p onclick="clicked3('V')">V</p>
            <p onclick="clicked3('VI')">VI</p>
            <p onclick="clicked3('VII')">VII</p>
            <p onclick="clicked3('VIII')">VIII</p>
          </div>
        </div>
        <div class="option" id="option">
          <p class="head">Section:</p>
          <p class="dropdown" id="dropdown4">Select</p>
          <div class="drop" id="drop">
            <p onclick="clicked4('A')">A</p>
            <p onclick="clicked4('B')">B</p>
          </div>
        </div>
      </div>
      <div class="questions">
        <div class="question"><img onclick="img(1)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher explain the principle/theory of experiment?</span><br><input type="radio" name="question1">Excellent<input type="radio" name="question1">Very Good<input type="radio" name="question1">Good<input type="radio" name="question1">Average<input type="radio" name="question1">Poor</div>
        <div class="question"><img onclick="img(2)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher demonstrate the experiment to be performed ?</span><br><input type="radio" name="question2">Excellent<input type="radio" name="question2">Very Good<input type="radio" name="question2">Good<input type="radio" name="question2">Average<input type="radio" name="question2">Poor</div>
        <div class="question"><img onclick="img()" src="images/editques.png" width="25px" height="auto"><span class="span">Is the teacher available in the lab all the time during practical ?</span><br><input type="radio" name="question3">Excellent<input type="radio" name="question3">Very Good<input type="radio" name="question3">Good<input type="radio" name="question3">Average<input type="radio" name="question3">Poor</div>
        <div class="question"><img onclick="img(4)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher observe continuously how all the groups are performing and suggest corrections ?</span><br><input type="radio" name="question4">Excellent<input type="radio" name="question4">Very Good<input type="radio" name="question4">Good<input type="radio" name="question4">Average<input type="radio" name="question4">Poor</div>
        <div class="question"><img onclick="img(5)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher Scrupoutously check your results and ananlysis ?</span><br><input type="radio" name="question5">Excellent<input type="radio" name="question5">Very
          Good<input type="radio" name="question5">Good<input type="radio" name="question5">Average<input type="radio" name="question5">Poor</div>
        <div class="question"><img onclick="img(6)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher evaluate your lab work and award grade/marks ?</span><br><input type="radio" name="question6">Excellent<input type="radio" name="question6">Very Good<input type="radio" name="question6">Good<input type="radio" name="question6">Average<input type="radio" name="question6">Poor</div>
        <div class="question"><img onclick="img(7)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher tells the applicability of practicals in Industires ?</span><br><input type="radio" name="question7">Excellent<input type="radio" name="question7">Very Good<input type="radio" name="question7">Good<input type="radio" name="question7">Average<input type="radio" name="question7">Poor</div>
        <div class="question"><img onclick="img(8)" src="images/editques.png" width="25px" height="auto"><span class="span">Overall rating of teacher</span><br><input type="radio" name="question8">Outstanding<input type="radio" name="question8">Very Good<input type="radio" name="question8">Good<input type="radio" name="question8">Satisfactory
        </div>
      </div>
      <div class="add">+</div>
    </div>
  </div>
  <script>
    var dropdown = document.getElementById("dropdown1");
    var dropdown = document.getElementById("dropdown2");
    var dropdown = document.getElementById("dropdown3");
    var dropdown = document.getElementById("dropdown4");

    function clicked1(char) {
      dropdown1.innerHTML = char;
    }

    function clicked2(char) {
      dropdown2.innerHTML = char;
    }

    function clicked3(char) {
      dropdown3.innerHTML = char;
    }

    function clicked4(char) {
      dropdown4.innerHTML = char;
    }

    function img(number) {
      var ques = document.getElementsByClassName("span");
      var text = ques[number - 1].innerHTML;
      ques[number - 1].innerHTML = "<input type='text' value='" + text + "''>";
    }
    
  function profileAccount(){
      const list = document.querySelector('.account');
      list.classList.toggle('active')
    }

  </script>
</body>

</html>