<?php
$hostname = "localhost";
$username = "root";
$password = "";
$dbname = "stadium";

$conn = new mysqli($hostname,$username,$password,$dbname);

if($conn->connect_error) {
    die("Connection Fail".$conn->connect_error);
}
//conncetion code for passenger table
$aud_seat_no=$_POST['aud_seat_no'];
$aud_name=$_POST['aud_name'];
$aud_gender=$_POST['aud_gender'];
$aud_types=$_POST['aud_types'];
$aud_cell_num=$_POST['aud_cell_num'];

$sql="INSERT INTO audience(aud_seat_no, aud_name, aud_gender, aud_types, aud_cell_num) VALUES ('$aud_seat_no', '$aud_name', '$aud_gender', '$aud_types','$aud_cell_num')";

if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>