<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>View & Edit Feedback</title>
    <style>
        * {
            margin: 0%;
            box-sizing: border-box;
        }

        body {
            font-size: 20px;
            overflow-x: hidden;
            background-color: #E4EDF9;
        }

        .s2 {
            margin: 0% 0% 0% 20%;
            padding-top: 3%;
            color: black;
            background-color: #E4EDF9;
        }

        .s1 {
            height: 100%;
            width: 200px;
            background-color: #111;
            padding-top: 22px;
            position: fixed;
            top: 0;
            left: 0;
            overflow-x: hidden;
            width: 20%;
        }

        .s1 a {
            padding: 20px 8px 8px 30px;
            text-decoration: none;
            font-size: 25px;
            color: white;
            display: block;
        }

        .s1 a:hover {
            color: #f1f1f19c;
            display: block;
        }

        h1 {
            color: white;
            padding-left: 7%;
            padding-bottom: 18%;
            padding-top: 7%;
            font-size: 35px;
        }

        .div1 {
            padding-bottom: 7%;
        }

        .l1 {
            float: right;
            padding: 2.9%;
        }

        .opt {
            padding: 0px;
            width: 166px;
            border: 2px solid black;
            border-radius: 5px;
        }

        .p {
            padding-top: 4%;

        }

        .p1 {
            padding-top: 4%;

        }

        .divv {
            float: left;
            padding-left: 6%;
        }

        .div4 {
            text-align: center;
            font-size: 22px;
        }

        .di {
            padding: 48% 17% 5% 17%;
        }

        /*  */
        #btn2 {
            text-align: center;
            color: #fff;
            padding: 10px;
            width: 300px;
            background-color: #76a5f1;
            border-radius: 7px;
        }

        #btn2:hover {
            background-color: black;
        }

        #btn2:active {
            background-color: #75ff79;
            color: #111;
            box-shadow: 0 5px #666;
            transform: translateY(4px);
        }

        .div5 {
            padding-left: 7%;
            padding-bottom: 3%;
        }
    </style>
</head>

<body>

    <div class="s1">
        <h1>View & Edit Feedback</h1>
        <a href="http://127.0.0.1:5500/faculty.html">Faculty</a>
        <a href="#">View & Edit Feedback</a>
        <a href="#">Comparative Results</a>
        <a href="#">Add Question</a>
        <a href="#"></a>
    </div>

    <div class="s2">
        <div class="div1">
            <div class="l1">
                <label>Section</label><br>
                <select class="opt" required>
                    <option></option>
                    <option>A Section</option>
                    <option>B Section</option>
                </select>
            </div>
            <div class="l1">
                <label>Semester</label><br>
                <select class="opt" required>
                    <option></option>
                    <option>1st Semister</option>
                    <option>2nd Semister</option>
                    <option>3rd Semister</option>
                    <option>4th Semister</option>
                    <option>5th Semister</option>
                    <option>6th Semister</option>
                    <option>7th Semister</option>
                    <option>8th Semister</option>
                </select>
            </div>
            <div class="l1">
                <label>Year</label><br>
                <select class="opt" required>
                    <option></option>
                    <option>1st Year</option>
                    <option>2nd Year</option>
                    <option>3rd Year</option>
                    <option>4th Year</option>
                </select>
            </div>
            <div class="l1">
                <label>Branch</label><br>
                <select class="opt" required>
                    <option></option>
                    <option>Computer Engineering</option>
                    <option>Electrial Engineering</option>
                    <option>Civil Engineering</option>
                    <option>Mechanical Engineering</option>
                </select>
            </div>
            <div class="l1">
                <label>Discipline</label><br>
                <select class="opt" required>
                    <option></option>
                    <option>B.tech</option>
                    <option>B.E</option>
                </select>
            </div>
        </div>
        <div class="div2">
            <div class="divv">
                <p class="p">1. Teacher comes to class on time :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p">2. Teacher Speak clear and Audible :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p">3. Teacher Writes and Draw Legibly :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p">4. Teacher courteous and impartial in dealing with students :<br><br><input type="radio"
                        name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>
                <p class="p">5. Teacher is promot in valuing and returning the <br> answer scripts providing feedback on
                    performance :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>
            </div>
            <div class="divv">
                <p class="p1">6. Teacher comes well planned and prepared :<br><br><input type="radio"
                        name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p1">7. Teacher provide Example of the concepts/principles, <br> explanation are done
                    effectively :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p1">8. Teacher encourages Qestioning/raising doubts <br> by students and answer them well
                    :<br><br><input type="radio" name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>

                <p class="p1">9. Teacher engages classes reguraly and maintain discipline:<br><br><input type="radio"
                        name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>
                <p class="p1">10. Teacher covers syllabus completely at appropriate space :<br><br><input type="radio"
                        name="section">Excellent
                    &nbsp; &nbsp;<input type="radio" name="section">Very good &nbsp; &nbsp;<input type="radio"
                        name="section">Good &nbsp; &nbsp;<input type="radio" name="section">Average &nbsp; &nbsp;<input
                        type="radio" name="section"> poor &nbsp;&nbsp;
                </p>
            </div>
        </div>


        <div class="div4">
            <p class="di"><b>Suggestion :</b> <br><textarea placeholder="Suggestion here" rows="8" cols="92"></textarea>
            </p>
        </div>
        <div class="div5">
            <input type="submit" name="submit" a id="btn2" value="Edit Feedback">
        </div>
    </div>

</body>

</html>