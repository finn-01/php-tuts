<?php 
$cookie_name = "user";
$cookie_value = "Finn Nguyen";
setcookie($cookie_name, $cookie_value, time() + (86400 * 30), "/"); // 86400 = 1 day
// set the expiration date to one hour ago
//setcookie("user", "", time() - 3600);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cookie</title>
</head>
<body>
<?php 
if(!isset($_COOKIE[$cookie_name])){
	echo "Cookie name '" . $cookie_name . "' is not set!";
}else{
	echo "Cookie '" . $cookie_name . "' is set <br>";
	echo "value '" . $cookie_value . "' !!!";
}
?>
</body>
</html>