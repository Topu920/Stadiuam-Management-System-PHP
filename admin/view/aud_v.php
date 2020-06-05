<html>
<head>
<title>Audience</title>
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

$sql = "SELECT * FROM audience";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Seat No.</th>
    <th>Audience Name</th>
    <th>Audience Gender</th>
    <th>Audience Type</th>
    <th>Audience Cell Num.</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["aud_seat_no"]. "</td>
        <td>" . $row["aud_name"]."</td>
        <td>".$row["aud_gender"]."</td>
        <td>".$row["aud_types"]."</td>
        <td>".$row["aud_cell_num"]."</td>
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