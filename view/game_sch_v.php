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

$sql = "SELECT * FROM game_schedule";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Schedule No</th>
    <th>Game Date</th>
    <th>Game Name</th>
    <th>Tournament Name</th>
    <th>Game Type</th>
    <th>Team-1</th>
    
    <th>Team-2</th>
     <th>Game status</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["sch_no"]. "</td>
        <td>" . $row["g_date"]."</td>
        <td>".$row["g_time"]."</td>
        <td>".$row["tour_name"]."</td>
        <td>".$row["g_type"]."</td>
        <td>".$row["ft_name"]."</td>
        <td>".$row["op_name"]."</td>
        <td>".$row["g_status"]."</td>
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