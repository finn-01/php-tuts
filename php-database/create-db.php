<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Connect</title>
</head>
<body>
<?php 
$servername = "127.0.0.1:3306";
$username = "root";
$password = "123456789";

//create db
$conn = new mysqli($servername, $username, $password);

//check connection
if($conn->connect_error){
	die("Connection failed: " . $conn->connect_error);
}

//create database
$sql = "CREATE DATABASE myDB";
if($conn->query($sql) === true){
	echo "Database created successfully!";
}
else{
	echo "Error" . $conn->error;
}

$conn->close();
?>
</body>
</html>