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
$tran_number=$_POST['tran_number'] ;  
$tran_date=$_POST['tran_date'] ;   
$tran_type=$_POST['tran_type'] ;   
$client_name=$_POST['client_name'] ;   
$cont_number=$_POST['cont_number'];  
$balance=$_POST['balance'];  
 

$sql="INSERT INTO accounts(tran_number,tran_date,tran_type,client_name,cont_number,balance) VALUES ('$tran_number','$tran_date','$tran_type','$client_name','$cont_number','$balance')";

// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
