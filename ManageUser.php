<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Manage User</title>
  <link rel="stylesheet" href="/css/ManageUser.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Jost&display=swap" rel="stylesheet">
</head>

<body>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo.jpg" alt="BIT Logo">
    </div>
    <h2 id="heading">Student Feedback System</h2>
    <div class="links" id="links">
      <a href="index.html" class="link">Home</a>
      <a href="#" class="link">About Us</a>
      <a href="#" class="link">Contact Us</a>
      <img src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.html">Manage User</a></li>
        <li><a href="Subject.html">Subject</a></li>
        <li><a href="GFeedback.html">Generate Feedback</a></li>
        <li><a href="VFeedback.html">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>Manage User</h1>
      <br>
      <p class="s1">Dashboard/<span>Manage User</span></p>
      <br>
      <div class="User">
        <!-- <div class="Filter">
          <div>
            <label for="User">Select User:</label>
            <select name="User" id="User">
              <option value="Principal">Principal</option>
              <option value="Teacher">Teacher</option>
              <option value="Student">Student</option>
            </select>
            <label for="Branch" id="Branch">Select Branch:</label>
            <select name="User" id="User">
              <option value="Principal">CE</option>
              <option value="Teacher">EE</option>
              <option value="Student">ME</option>
              <option value="Student">Civil</option>
            </select>
          </div>
        </div> -->

        <div class="options">
          <div class="option" id="option">
              <p class="head">Year:</p>
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
        </div>

        <table>
          <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Contact</th>
            <th colspan="2">Action</th>
          </tr>
          <tr>
            <td>ABC</td>
            <td>abc@gmail.com</td>
            <td>7559475990</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>DEF</td>
            <td>def@gmail.com</td>
            <td>7741856385</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>GHI</td>
            <td>ghi@gmail.com</td>
            <td>9850432251</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>HIJ</td>
            <td>hij@gmail.com</td>
            <td>8483024851</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>KLM</td>
            <td>klm@gmail.com</td>
            <td>9852432251</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
          <tr>
            <td>XYZ</td>
            <td>xyz@gmail.com</td>
            <td>8486024852</td>
            <td>Edit</td>
            <td>Delete</td>
          </tr>
        </table>
        <button>Add User</button>
      </div>
    </div>
    <script>
      var dropdown = document.getElementById("dropdown1");
      var dropdown = document.getElementById("dropdown2");
      function clicked1(char) {
          dropdown1.innerHTML = char;
      }
      function clicked2(char) {
          dropdown2.innerHTML = char;
      }
  </script>
</body>

</html>