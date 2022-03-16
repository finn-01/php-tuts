<!DOCTYPE html>
<html>
<head>
<style>
table {
  width: 100%;
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
  padding: 5px;
}

th {text-align: left;}
</style>
</head>
<body>

<?php
$q = intval($_GET['q']);
$servername = "127.0.0.1:3306";
$username = "root";
$password = "123456789";
$dbname="myDB";

$con = mysqli_connect($servername, $username, $password, $dbname);
if (!$con) {
  die('Could not connect: ' . mysqli_error($con));
}

mysqli_select_db($con,"mydb");
$sql="SELECT * FROM myguests WHERE id = '".$q."'";
$result = mysqli_query($con,$sql);

echo "<table>
<tr>
<th>Firstname</th>
<th>Lastname</th>
<th>Email</th>
<th>Time</th>
<th>ID</th>
</tr>";
while($row = mysqli_fetch_array($result)) {
  echo "<tr>";
  echo "<td>" . $row['firstname'] . "</td>";
  echo "<td>" . $row['lastname'] . "</td>";
  echo "<td>" . $row['email'] . "</td>";
  echo "<td>" . $row['reg_date'] . "</td>";
  echo "<td>" . $row['id'] . "</td>";
  echo "</tr>";
}
echo "</table>";
mysqli_close($con);
?>
</body>
</html>