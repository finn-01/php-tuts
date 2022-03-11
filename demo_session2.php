<?php 
session_start();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Session</title>
</head>
<body>
<?php 
//change session
$_SESSION['favcolor'] = 'red';

echo "Fav color is " . $_SESSION['favcolor'] . "<br>";
echo "Fav animal is " . $_SESSION['favanimal'] . "<br>";

//print all session
print_r($_SESSION)
?>
</body>
</html>