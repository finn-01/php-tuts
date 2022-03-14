<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Constructor</title>
</head>
<body>
<?php 
/**
 * 
 */
class Fruit
{
	public $name;
	public $color;
	
	function __construct($name, $color)
	{
		// code...
		$this->name = $name;
		$this->color = $color;
	}

	function get_name(){
		return $this->name;
	}
	function get_color(){
		return $this->color;
	}


}

$apple = new Fruit("Apple", "Red");
echo $apple->get_name();
echo "<br>";
echo $apple->get_color();
?>
</body>
</html>