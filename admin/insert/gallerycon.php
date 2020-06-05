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
$Gal_name=$_POST['Gal_name'] ;  
$Gal_type=$_POST['Gal_type'] ;   
$Gal_capacity=$_POST['Gal_capacity'] ;   
$Gal_tramway=$_POST['Gal_tramway'] ;   


$sql="INSERT INTO gallery(Gal_name, Gal_type, Gal_capacity, Gal_tramway) VALUES ('$Gal_name','$Gal_type','$Gal_capacity','$Gal_tramway')";

// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
