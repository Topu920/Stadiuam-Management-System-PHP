<html>
<head>
<title>Game Schedule</title>
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
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "stadium";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM vendor";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Stadium Registration no.</th>
    <th>Organization Name</th>
    <th>Organization Registration no.</th>
    <th>Contact Number</th>
    <th>Email Address</th>
    <th>Service Type</th>
    
    <th>Service Comment</th>
     <th>Contract Duration</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["SReg_num"]. "</td>
        <td>" . $row["Org_name"]."</td>
        <td>".$row["Org_Reg_num"]."</td>
        <td>".$row["Contact_num"]."</td>
        <td>".$row["Email"]."</td>
        <td>".$row["Service_type"]."</td>
        <td>".$row["Ser_commment"]."</td>
        <td>".$row["Contact_duration"]."</td>
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