<?php
session_start();
include('connect.php');

if (isset($_GET['id'])) {
    $Feedid = $_GET['id'];

    $query = "SELECT questionid 
              FROM responses
              WHERE feedbackid = '$Feedid' ";
    $result = mysqli_query($conn, $query);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TEACHER</title>
  <link rel="icon" href="images/bitlogo.jpg" />
  <link rel="stylesheet" href="css/teacher.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/common.css?v=<?php echo time(); ?>">
  <link rel="stylesheet" href="css/pop.css?v=<?php echo time(); ?>">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <style>
    .chart-container {
      display: flex;
      justify-content: space-between;
      flex-wrap: wrap;
    }

    .chart-item {
      width: 48%;
      height: 400px; 
      margin-bottom: 100px;
    }
  </style>
</head>

<body>
  <div class="nav">
    <div class="img">
      <img id="img" src="images/bitlogo_transparent.png" alt="BIT Logo">
    </div>
    <h2 id="heading">Bajaj Institute of Technology</h2>
    <div class="links" id="links">
      <!-- <p class="input"><?php echo $fname, " ", $lname; ?></p> -->
      <!-- <p class="input"><?php echo $_GET['user'], " ", $_GET['lname']; ?></p> -->
      <!-- <div class="account_div" onclick="profileAccount();">
        <img class="account_img" src="images/user.png" alt="User" width="7%" style="border-radius: 50%;">
        <div id="account" class="account">
          <a href="Teacherprofile.php">Profile</a><br>

          <a onclick="openPopup()" class="pointer">Log out</a>
        </div>
      </div> -->
    </div>
  </div>
  <div class="spaces"></div>
  <div class="full">
    <div class="left">
      <h1>ADMIN</h1>
      <ul>
        <li><a href="ManageUser.php">Manage User</a></li>
        <li><a href="GFeedback.php">Generate Feedback</a></li>
        <li><a href="VFeedback.php">View Feedback</a></li>
      </ul>
    </div>
    <div class="right">
      <h1>WELCOME</h1>
      <br>
      <p>Dashboard</p>
      <br></br>
      <a href="export.php"><button>Export</button></a><br>

      <div class="chart-container">
  <?php
  $distinctQuestionIds = array(); // Array to store distinct question IDs
  while ($row = mysqli_fetch_assoc($result)) {
    $id = $row['questionid'];
    if (!in_array($id, $distinctQuestionIds)) {
      $distinctQuestionIds[] = $id; // Add the distinct question ID to the array

      $query1 = "SELECT COUNT(answer) as count1
                 FROM responses
                 WHERE answer = 'Strongly Agree' AND questionid = '$id' AND feedbackid = '$Feedid'";
      $result1 = mysqli_query($conn, $query1);
      $row1 = mysqli_fetch_assoc($result1);

      $query2 = "SELECT COUNT(answer) as count2
                 FROM responses
                 WHERE answer = 'Agree' AND questionid = '$id' AND feedbackid = '$Feedid'";
      $result2 = mysqli_query($conn, $query2);
      $row2 = mysqli_fetch_assoc($result2);

      $query3 = "SELECT COUNT(answer) as count3
                 FROM responses
                 WHERE answer = 'Neutral' AND questionid = '$id' AND feedbackid = '$Feedid'";
      $result3 = mysqli_query($conn, $query3);
      $row3 = mysqli_fetch_assoc($result3);

      $query4 = "SELECT COUNT(answer) as count4
                 FROM responses
                 WHERE answer = 'Disagree' AND questionid = '$id' AND feedbackid = '$Feedid'";
      $result4 = mysqli_query($conn, $query4);
      $row4 = mysqli_fetch_assoc($result4);

      $query5 = "SELECT COUNT(answer) as count5
                 FROM responses
                 WHERE answer = 'Strongly Disagree' AND questionid = '$id' AND feedbackid = '$Feedid'";
      $result5 = mysqli_query($conn, $query5);
      $row5 = mysqli_fetch_assoc($result5);

      $data = array();
      $data[] = array(
        'label' => 'Strongly Agree',
        'count' => $row1['count1']
      );
      $data[] = array(
        'label' => 'Agree',
        'count' => $row2['count2']
      );
      $data[] = array(
        'label' => 'Neutral',
        'count' => $row3['count3']
      );
      $data[] = array(
        'label' => 'Disagree',
        'count' => $row4['count4']
      );
      $data[] = array(
        'label' => 'Strongly Disagree',
        'count' => $row5['count5']
      );
      ?>
      <div class="chart-item">
        <br>
        <h4>Question Id <?php echo $id; ?></h4>
        <canvas id="chart-<?php echo $id; ?>"></canvas>
      </div>
      <script>
        var ctx = document.getElementById('chart-<?php echo $id; ?>').getContext('2d');
        var chart = new Chart(ctx, {
          type: 'pie',
          data: {
            labels: <?php echo json_encode(array_column($data, 'label')); ?>,
            datasets: [{
              data: <?php echo json_encode(array_column($data, 'count')); ?>,
              backgroundColor: ['red', 'blue', 'green', 'yellow', 'orange'], // Customize colors as needed
            }]
          },
         
        });
      </script>
      <?php
    }
  }
  ?>
</div>
    </div>
  </div>
</body>

</html>