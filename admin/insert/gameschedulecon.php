<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "stadium";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}

//conncetion code for airline table
$sch_no=$_POST['sch_no'];
$g_date=$_POST['g_date'];
$g_time=$_POST['g_time'];
$g_type=$_POST['g_type'];
$tour_name=$_POST['tour_name'];
$ft_name=$_POST['ft_name'];
$op_name=$_POST['op_name'];
$g_status = $_POST['g_status'];

$sql="INSERT INTO game_schedule(sch_no, g_date, g_time, tour_name, g_type, ft_name, op_name, g_status) VALUES ('$sch_no', '$g_date', '$g_time', '$tour_name', '$g_type', '$ft_name', '$op_name', '$g_status')";

if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>