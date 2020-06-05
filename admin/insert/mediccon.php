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
$Slip_no=$_POST['Slip_no'] ;  
$P_name=$_POST['P_name'] ;   
$P_age=$_POST['P_age'] ;   
$P_Type=$_POST['P_Type'] ;   
$Pcell_number=$_POST['Pcell_number'];  
$Doc_name= $_POST['Doc_name'];
$Dcell_num=$_POST['Dcell_num'];  
$Treat_type=$_POST['Treat_type'];  
$TOF=$_POST['TOF'];  
$Total_cost=$_POST['Total_cost'];  

 

$sql="INSERT INTO medic(Slip_no, P_name, P_age, P_Type, Pcell_number, Doc_name, Dcell_num, Treat_type, TOF, Total_cost) VALUES ('$Slip_no', '$P_name', '$P_age', '$P_Type', '$Pcell_number', '$Doc_name', '$Dcell_num', '$Treat_type', '$TOF', '$Total_cost')";

// $dept, $subject, $contact, $email
if ($conn->query($sql) === TRUE) {
    echo "Your Information Saved successfully";
}
    else {
         echo "Error: " . $sql . "<br>" . $conn->error;
    }

?>
