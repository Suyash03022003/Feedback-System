<?php      
    include('connect.php');  
    session_start();
    $email = $_POST['user'];  
    $password = $_POST['pass']; 
      
        $sql = "select * from login where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
        $active = $row['category'];

        if($count == 1){  
            header("location: $active.php");
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     
?>  