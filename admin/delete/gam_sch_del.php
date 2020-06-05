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

<form method="POST" style="text-align:center">
<h1>Game Schedule Information Delete</h1>
Delete By Schedule No:<br>
<input name="sch_no" value="" type="number"><br>
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
if(isset($_POST["sch_no"])){
$id=$_POST["sch_no"];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM game_schedule WHERE sch_no='$id'";
$result = mysqli_query($conn, $sql);
mysqli_close($conn);
?>
<?php include "footer.php" ?>
</body>
</html>