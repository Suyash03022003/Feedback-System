<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="css/edit.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Add Question</h2>
<form action="create_feedback.php" method="POST">
<div>
            <label>Question Id&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="int" name="quesid" required>
          </div>

            <div>
            <label>Question Type&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            
              <select name="type">
                <option value="Not Selected">Select Question Type</option>
                <option value="Text">Text</option>
                <option value="Radio">Radio</option>
                <option value="Check box">Check box</option>
              </select>
            
          </div>

          <div>
            <label>Question :</label><br>
            <textarea name="ques" rows="4" cols="50"></textarea>
          </div>

          <div>
            <label>Option 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="op1" required>
          </div>

          <div>
            <label>Option 2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="op2" required>
          </div>
          
          <div>
            <label>Option 3&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="op3" required>
          </div>
          
          <div>
            <label>Option 4&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="op4" required>
          </div>

          <div>
            <label>Option 5&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; : &nbsp;&nbsp;&nbsp;</label>
            <input type="text" name="op5" required>
          </div>

          <input  type="submit" value="Add" name="submit">
        </form>
</body>
</html>