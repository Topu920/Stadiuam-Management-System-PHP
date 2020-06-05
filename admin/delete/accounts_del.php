<html>
<head>
<title>Accounts</title>
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
<h1>Accounts Information Delete</h1>
Delete By Transaction number:<br>
<input name="tran_number" value="" type="number"><br>
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
if(isset($_POST["tran_number"])){
$id=$_POST["tran_number"];
}

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "DELETE FROM accounts WHERE tran_number='$id'";

mysqli_close($conn);
?>
<?php include "footer.php" ?>
</body>
</html>