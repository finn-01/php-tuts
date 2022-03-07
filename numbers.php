<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Numbers</title>
</head>
<body>
<?php
//Integer
// PHP_INT_MAX - The largest integer supported
// PHP_INT_MIN - The smallest integer supported
// PHP_INT_SIZE -  The size of an integer in bytes

$x = 5985;
var_dump(is_int($x));
echo "<br>";

$x = 59.85;
var_dump(is_int($x));
echo "<br>";

//Float
// is_float()
// is_double() - alias of is_float()
// PHP_FLOAT_MAX - The largest representable floating point number
// PHP_FLOAT_MIN - The smallest representable positive floating point number
// - PHP_FLOAT_MAX - The smallest representable negative floating point number
// PHP_FLOAT_DIG - The number of decimal digits that can be rounded into a float and back without precision loss
// PHP_FLOAT_EPSILON - The smallest representable positive number x, so that x + 1.0 != 1.0

$x = 10.365;
var_dump(is_float($x));

?>
</body>
</html>