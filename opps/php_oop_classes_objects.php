<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>oops</title>
</head>
<body>
<?php
class Fruit {
	public $name;
	public $color;

	//Method
	function set_name($name){
		$this->name = $name;
	}
	function get_name(){
		return $this->name;
	}
}

$apple = new Fruit();
$banana = new Fruit();
$apple->set_name("Apple");
$banana->set_name("Banana");

echo $apple->get_name();
echo "<br>";
echo $banana->get_name();
?>
<h1>Hello World</h1>
</body>
</html>