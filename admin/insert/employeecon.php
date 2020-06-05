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
$E_ID=$_POST['E_ID'] ;  
$E_NAME=$_POST['E_NAME'] ;
$E_CELL_NUM=$_POST['E_CELL_NUM'] ;   
$E_MAIL=$_POST['E_MAIL'] ;   
$E_ADDRESS=$_POST['E_ADDRESS'] ;   
$E_DESIGNATION=$_POST['E_DESIGNATION'];  
$E_JOINING_DATE=$_POST['E_JOINING_DATE'];
$E_SALARY=$_POST['E_SALARY'];

 

$sql="INSERT INTO employee(E_ID, E_NAME, E_CELL_NUM, E_MAIL, E_ADDRESS, E_DESIGNATION, E_JOINING_DATE, E_SALARY) VALUES ('$E_ID', '$E_NAME', '$E_CELL_NUM', '$E_MAIL', '$E_ADDRESS', '$E_DESIGNATION', '$E_JOINING_DATE', '$E_SALARY')";

// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
