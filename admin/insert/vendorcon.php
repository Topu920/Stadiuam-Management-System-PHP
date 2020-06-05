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
$SReg_num=$_POST['SReg_num'] ;  
$Org_name=$_POST['Org_name'] ;   
$Org_Reg_num=$_POST['Org_Reg_num'] ;   
$Contact_num=$_POST['Contact_num'] ;   
$Email=$_POST['Email'];  
$Service_type=$_POST['Service_type'];
$Ser_commment=$_POST['Ser_commment'];  
$Contact_duration=$_POST['Contact_duration'];
 

$sql="INSERT INTO vendor(SReg_num, Org_name, Org_Reg_num, Contact_num, Email, Service_type, Ser_commment, Contact_duration) VALUES ('$SReg_num', '$Org_name', '$Org_Reg_num', '$Contact_num', '$Email', '$Service_type','$Ser_commment', '$Contact_duration')";

// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>