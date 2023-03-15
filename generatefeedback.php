<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
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
            <p class="para">X_Y_Z</p>

            <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        </div>
    </div>
    <div class="spaces"></div>
    <div class="main">
        <div class="left">
            <h1>TEACHER</h1>
            <ul>
                <li class="active"><a href="generatefeedback.php">Generate CES</a></li>
                <li><a href="viewfeedback.php">View Feedback</a></li>
            </ul>
        </div>
        <div class="right">
            <h1>Generate Course Exit Survey</h1>
            <p>Dashboard/<span> Generate Course Exit Survey</span></p>
            <form action="create_feedback.php" method="POST">
                <div class="options">
                    <div class="option" id="option1">
                        <input type="text" class="content" id="dropdown1" name="dept" value="Select Department">
                        <div class="drop" id="drop">
                            <p onclick="clicked1('Computer')">Computer</p>
                            <p onclick="clicked1('Electrical')">Electrical</p>
                            <p onclick="clicked1('Mechanical')">Mechanical</p>
                            <p onclick="clicked1('Civil')">Civil</p>
                        </div>
                    </div>
                    <div class="option" id="option2">
                    <input type="text" class="content" id="dropdown2" name="year" value="Select Year">
                        <div class="drop" id="drop">
                            <p onclick="clicked2('I')">I</p>
                            <p onclick="clicked2('II')">II</p>
                            <p onclick="clicked2('III')">III</p>
                            <p onclick="clicked2('IV')">IV</p>
                        </div>
                    </div>
                    <div class="option" id="option3">
                    <input type="text" class="content" id="dropdown3" name="sem" value="Select Semester">
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
                    <div class="option" id="option4">
                    <input type="text" class="content" id="dropdown4" name="section" value="Select Section">
                        <div class="drop" id="drop">
                            <p onclick="clicked4('A')">A</p>
                            <p onclick="clicked4('B')">B</p>
                        </div>
                    </div>
                </div>
                <a href="AddQuestion.php"><div class="add">+</div></a>
                <div class="subject_div">
                    <p class="author">Author: <input type="text" class="auth" name="author" value="XYZ"></p>
                    <p class="subject">Subject: <input type="text" class="sub" name="sub" value="DBMS"></p>
                </div>
                <div class="questions" id="questions">
                    <div class="question">
                        <img onclick="img(1)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher explain the principle/theory of experiment?</span><br>
                        <input type="radio" class="radio"name="question1"><span>Excellent</span>
                        <input type="radio" class="radio"name="question1"><span>Very Good</span>
                        <input type="radio" class="radio"name="question1"><span>Good</span>
                        <input type="radio" class="radio"name="question1"><span>Average</span>
                        <input type="radio" class="radio"name="question1"><span>Poor</span>
                    </div>
                    <div class="question">
                        <img onclick="img(2)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher demonstrate the experiment to be performed ?</span><br>
                        <input type="radio" class="radio"name="question2"><span>Excellent</span>
                        <input type="radio" class="radio"name="question2"><span>Very Good</span>
                        <input type="radio" class="radio"name="question2"><span>Good</span>
                        <input type="radio" class="radio"name="question2"><span>Average</span>
                        <input type="radio" class="radio"name="question2"><span>Poor</span>

                    </div>
                    <div class="question">
                        <img onclick="img()" src="images/editques.png" width="25px" height="auto"><span class="span">Is the teacher available in the lab all the time during practical ?</span><br>
                        <input type="radio" class="radio"name="question3"><span>Excellent</span>
                        <input type="radio" class="radio"name="question3"><span>Very Good</span>
                        <input type="radio" class="radio"name="question3"><span>Good</span>
                        <input type="radio" class="radio"name="question3"><span>Average</span>
                        <input type="radio" class="radio"name="question3"><span>Poor</span>
                    </div>
                    <div class="question">
                        <img onclick="img(4)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher observe continuously how all the groups are performing and suggest corrections ?</span><br>
                        <input type="radio" class="radio"name="question4"><span>Excellent</span>
                        <input type="radio" class="radio"name="question4"><span>Very Good</span>
                        <input type="radio" class="radio"name="question4"><span>Good</span>
                        <input type="radio" class="radio"name="question4"><span>Average</span>
                        <input type="radio" class="radio"name="question4"><span>Poor</span>

                    </div>
                    <div class="question">
                        <img onclick="img(5)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher Scrupoutously check your results and ananlysis ?</span><br>
                        <input type="radio" class="radio"name="question5"><span>Excellent</span>
                        <input type="radio" class="radio"name="question5"><span>Very Good</span>
                        <input type="radio" class="radio"name="question5"><span>Good</span>
                        <input type="radio" class="radio"name="question5"><span>Average</span>
                        <input type="radio" class="radio"name="question5"><span>Poor</span>

                    </div>
                    <div class="question">
                        <img onclick="img(6)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher evaluate your lab work and award grade/marks ?</span><br>
                        <input type="radio" class="radio"name="question6"><span>Excellent</span>
                        <input type="radio" class="radio"name="question6"><span>Very Good</span>
                        <input type="radio" class="radio"name="question6"><span>Good</span>
                        <input type="radio" class="radio"name="question6"><span>Average</span>
                        <input type="radio" class="radio"name="question6"><span>Poor</span>

                    </div>
                    <div class="question">
                        <img onclick="img(7)" src="images/editques.png" width="25px" height="auto"><span class="span">Does the teacher tells the applicability of practicals in Industires ?</span><br>
                        <input type="radio" class="radio"name="question7"><span>Excellent</span>
                        <input type="radio" class="radio"name="question7"><span>Very Good</span>
                        <input type="radio" class="radio"name="question7"><span>Good</span>
                        <input type="radio" class="radio"name="question7"><span>Average</span>
                        <input type="radio" class="radio"name="question7"><span>Poor</span>
                    </div>
                    <div class="question">
                        <img onclick="img(8)" src="images/editques.png" width="25px" height="auto"><span class="span">Overall rating of teacher</span><br>
                        <input type="radio" class="radio"name="question8"><span>Outstanding</span>
                        <input type="radio" class="radio"name="question8"><span>Very Good</span>
                        <input type="radio" class="radio"name="question8"><span>Good</span>
                        <input type="radio" class="radio"name="question8"><span>Average</span>
                        <input type="radio" class="radio"name="question8"><span>Satisfactory</span>
                    </div>
                </div>
                <input type="submit" value="Submit" name="submit1">
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

        function clicked1(char) {
            dropdown1.value = char;
            option2.style.opacity = 1;
        }

        function clicked2(char) {
            dropdown2.value = char;
            option3.style.opacity = 1;
        }

        function clicked3(char) {
            dropdown3.value = char;
            option4.style.opacity = 1;
        }

        function clicked4(char) {
            dropdown4.value = char;
            questions.style.opacity = 1;
        }

        function img(number) {
            var ques = document.getElementsByClassName("span");
            var text = ques[number - 1].innerHTML;
            ques[number - 1].innerHTML = "<input type='text' value='" + text + "''>";
        }
    </script>
</body>

</html>