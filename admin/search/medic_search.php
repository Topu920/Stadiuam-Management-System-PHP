<html>
<head>
<title>Medical Information</title>
<style>
    table {}
    th{color: white; background-color: #2ecc71}
    tr{background-color:#d35400; color: white;}
</style>
<link rel="stylesheet" href="../css/bootstrap.min.css">
<link rel="stylesheet" href="../css/font-awesome.min.css">.
<link rel="stylesheet" href="../style.css">
<script src="../js/jquery-3.2.1.min.js"></script>
<script src="../js/bootstrap.min.js"></script>
</head>
<body>
<?php include "header.php"?>

<form method="POST" style="text-align:center">
<h1>Medic Information Search</h1>
Search By Slip no.:<br>
<input name="Slip_no" value="" type="number"><br>
<br>
<br><br>
<input value="Go" type="submit">
</form>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stadium";
$id="";
if(isset($_POST["Slip_no"])){
$id=$_POST["Slip_no"];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM medic WHERE Slip_no='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Slip no.</th>
    <th>Patient Name</th>
    <th>Patient age</th>
    <th>Patient type</th>
    <th>Patient Cell number</th>
    <th>Doctor Name</th>
    
    <th>Doctor cell number</th>
     <th>Treatment Type</th>
     <th>Type of Facilities</th>
     <th>Total Cost</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["Slip_no"]. "</td>
        <td>" . $row["P_name"]."</td>
        <td>".$row["P_age"]."</td>
        <td>".$row["P_Type"]."</td>
        <td>".$row["Pcell_number"]."</td>
        <td>".$row["Doc_name"]."</td>
        <td>".$row["Dcell_num"]."</td>
        <td>".$row["Treat_type"]."</td>
        <td>".$row["TOF"]."</td>
        <td>".$row["Total_cost"]."</td>
        </tr>";
    }
    echo "</table>";
}
else {
    echo "0 results";
}

mysqli_close($conn);
?>
<?php include "footer.php" ?>
</body>
</html>