<?php
$link = mysqli_connect("localhost", "root", "", "feedback_system");
 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

$sql = "INSERT INTO login (fname, lname, username, category, email, password) VALUES ('Sunil', 'Patalbansi', 'Sunil@123', 'Parent', 'suyashshivani@gmail.com', '123')";
if(mysqli_query($link, $sql)){
    echo "Records inserted successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
mysqli_close($link);
?>