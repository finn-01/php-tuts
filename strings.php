<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Strings</title>
</head>
<body>
<?php
//strlen(): Hàm strlen () trong PHP trả về độ dài của một chuỗi.
echo strlen("Hello World!");
echo "<br>";

//str_word_count(): hàm đếm số từ trong một chuỗi.
echo str_word_count("Hello World! LOL");
echo "<br>";

//strrev() - Reverse a String
echo strrev("Hello world!"); // outputs !dlrow olleH
echo "<br>";

//strpos() tim kiem van ban
echo strpos("Hello world!", "world"); // outputs 6

//str_replace()
echo "<br>";
echo str_replace("world", "Dolly", "Hello world!"); // outputs Hello Dolly!

//hoc them: https://www.w3schools.com/php/php_ref_string.asp

?>
</body>
</html>