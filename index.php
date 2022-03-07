<html>
 <head>
  <title>PHP Test</title>
 </head>
 <body>
 <?php 

 echo '<p>Hello World1</p>';

 //String
 $x = "Hello W3S";
 echo $x;
 echo "<br>";

 //Integer
 $y = 10;
 echo $y;
 echo "<br>";
 echo var_dump($y);
  echo "<br>";

  //Float
  $z = 10.1;
  var_dump($z);
   echo "<br>";

   //Array
   $cars = array("Volvo","BMW","Toyota");

var_dump($cars);

//Obj
 class Car {
 	public $color;
 	public $model;

 	public function __construct($color, $model) {
    $this->color = $color;
    $this->model = $model;
  }

 	public function msg(){
 		return "My car is a " . $this->color . " " . $this->model . "!";
 	}
 }

 $myCar = new Car("black", "Volvo");
echo $myCar -> msg();
echo "<br>";
$myCar = new Car("red", "Toyota");
echo $myCar -> msg();


  ?> 
 </body>
</html>