<html>
<head>
<title>Employee Information</title>
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
<h1>Employee Information Search</h1>
Search By Employee ID:<br>
<input name="E_ID" value="" type="number"><br>
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
if(isset($_POST["E_ID"])){
$id=$_POST["E_ID"];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM employee WHERE E_ID='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Employee ID</th>
    <th>Employee Name</th>
    <th>Employee Cell Number</th>
    <th>Email Address</th>
    <th>Employee Designation</th>
    <th>Employee Joining Date</th>
     
     <th>Employee Salary</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["E_ID"]. "</td>
        <td>" . $row["E_NAME"]."</td>
        <td>".$row["E_CELL_NUM"]."</td>
        <td>".$row["E_MAIL"]."</td>
        <td>".$row["E_DESIGNATION"]."</td>
        <td>".$row["E_JOINING_DATE"]."</td>
        <td>".$row["E_SALARY"]."</td>
        
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