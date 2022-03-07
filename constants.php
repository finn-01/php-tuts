<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constants</title>
</head>
<body>

<?php 

//create: define(name, value, case-insensitive)
//case-insensitive: Chỉ định xem tên hằng có nên phân biệt chữ hoa chữ thường hay không. Mặc định là sai
define("GREETING", "Welcome to W3Schools.com!");
echo GREETING;
echo "<br>";

//Constant Array
define("cars", [
  "Alfa Romeo",
  "BMW",
  "Toyota"
]);
echo cars[0];
?>

</body>
</html>