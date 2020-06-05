<html>
<head>
<title>Galler</title>
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
<h1>Gallery Information Search</h1>
Search By Gallery Name:<br>
<input name="Gal_name" value="" type="text"><br>
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
if(isset($_POST["Gal_name"])){
$id=$_POST["Gal_name"];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM gallery WHERE Gal_name='$id'";
$result = mysqli_query($conn, $sql);

if ($result->num_rows > 0) {
    echo "<table align=center border=1>
    <tr>
    <th>Gallery Name</th>
    <th>Gallery Type</th>
    <th>Gallery Capacity</th>
    <th>Gallery Tramway</th>
    </tr>";
    // output data of each row
    while($row = $result->fetch_assoc()) 
    
    {
        echo "<tr>
        <td>" . $row["Gal_name"]. "</td>
        <td>" . $row["Gal_type"]."</td>
        <td>".$row["Gal_capacity"]."</td>
        <td>".$row["Gal_tramway"]."</td>
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