<?php
session_start();
include('connect.php'); 
$query = "SELECT * FROM responses";
$result = mysqli_query($conn, $query);
$excel = '<table><tr><td>questionid</td><td>answer</td><td>res_id</td></tr>';
while($row = mysqli_fetch_assoc($result)){
    $excel.= '<tr><td>'.$row['questionid'].'</td><td>'.$row['answer'].'</td><td>'.$row['res_id'].'</td></tr>';
}
$excel.='</table>';
header('Content-Type:application/xls');
header('Content-Disposition:attachment;filename=report.xls');

echo $excel;
?>