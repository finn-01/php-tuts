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
echo "Fav color is " . $_SESSION['favcolor'] . "<br>";
echo "Fav animal is " . $_SESSION['favanimal'] . "<br>";
print_r($_SESSION)
?>
</body>
</html>