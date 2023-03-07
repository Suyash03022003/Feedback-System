<?php

include('connect.php');

if (isset($_POST["submit"])) {

    if ($_FILES['file']['name']) {
        $filename = explode(".", $_FILES['file']['name']);
        if ($filename[1] == 'csv') {
            $handle = fopen($_FILES['file']['tmp_name'], "r");
            while ($data = fgetcsv($handle)) 
            {
                $item1 = mysqli_real_escape_string($conn, $data[0]);
                $item2 = mysqli_real_escape_string($conn, $data[1]);
                $item3 = mysqli_real_escape_string($conn, $data[1]);
                $item4 = mysqli_real_escape_string($conn, $data[1]);
                $item5 = mysqli_real_escape_string($conn, $data[1]);
                $item6 = mysqli_real_escape_string($conn, $data[1]);
                $query = "INSERT into login (fname, lname, username, category, email, password) values('$item1','$item2','$item3','$item4','$item5','$item6')";
                mysqli_query($conn, $query);
            }
            fclose($handle);
            echo "File sucessfully imported";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<body>
    <form method="post" enctype="multipart/form-data">
        <label>Select CSV File:</label>
        <input type="file" name="file">
        <br>
        <input type="submit" name="submit" value="Import">
    </form>
</body>
</html>