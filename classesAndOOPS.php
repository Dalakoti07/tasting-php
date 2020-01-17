<?php
class Shape{
  public $sides = 0; // first property
  public $name= " "; // second property 
  
  public function description(){ //first method
    echo "A $this->name with $this->sides sides.";
  }
}

$myShape1 = new Shape; //creating an object called myShape1
$myShape1->sides = 3; //setting the "sides" property to 3
$myShape1->name = "triangle"; //setting the "name" property to triangle
$myShape1->description(); //"A triangle with 3 sides"
echo "\n";

$myShape1->sides = 4; //setting the "sides" property to 4
$myShape1->name = "square"; //setting the "name" property to square
$myShape1->description(); //"A square with 4 sides"
echo "\n";

$myShape1->sides = 6; //setting the "sides" property to 6
$myShape1->name = "hexagon"; //setting the "name" property to hexagon
$myShape1->description(); //"A hexagon with 6 sides"

class Circle
{
    // properties
    public $radius= 0; //declaring public member
    public static $pi=3.14;  //declaring a public static member
    
    // Method to get the Circumference
    public function getCircumference(){
        return (2 * self::$pi * $this->radius );
    }
    
    // Method to get the area
    public function getArea(){
        return ($this->radius * $this->radius*self::$pi);
    }
  
    // Method to get the diameter
    public function getDiameter(){
        return ($this->radius * 2);
    }
}

// Create a new Circle class object
$obj = new Circle;

 
// Set object properties values
$obj->radius = 4;

 
// Read the object properties values again to show the change
echo "Radius is ". $obj->radius . "\n"; 
echo "Diamater is ". $obj->getDiameter() . "\n"; 
 
 
// Call the object methods
echo "Circumference is ". $obj->getCircumference(),"\n";
echo "Area is " .$obj->getArea()."\n"; 
echo "Value of pi is " .$obj::$pi;

// constructor and destructor
class Shape
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.";
    }

}

$myShape = new Shape("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides

// destructor
class Shape
{

    public $sides = 0;

    public $name = " ";

    public function __construct($name, $sides)
    { //defining a constructor
        $this->sides = $sides; //initializing $this->sides to $sides
        $this->name = $name; //initializing $this->name to $name
        
    }

    public function __destruct()
    { //destructor for Shape gets called at the end
        echo "Destructor Called!\n";
    }

    public function description()
    { //method to display name and sides of a shape
        echo "A $this->name with $this->sides sides.\n";
    }

}

$myShape = new Shape("hexagon", 6); //making an object and passing values to the constructor
$myShape->description(); // A shape with 6 sides

// method and property visibility
// public
class Car
{

    public $name = " ";

    public function display()
    {
        echo "Name: $this->name" . "\n";
    }

    public function __construct($name)
    {
        $this->name = $name;

    }
}

$obj1 = new Car("BMW"); //creating an object of car and setting its name as BMW
echo "Name: " . $obj1->name; //accessing the "name" property of obj1 directly outside of class
echo "\n";

$obj2 = new Car("Mercedes"); //creating an object of car and setting its name as Mercedes
echo $obj2->display(); //accessing the "display" method of obj1 directly outside of class


// private
class Car
{

    public $name = " ";
    private $plateNumber;

    public function display()
    {
        echo "Name: $this->name" . "\n";
    }

    public function setPlateNumber($number)
    { //sets value of property plateNumber
        $this->plateNumber = $number;
    }

    public function getPlateNumber()
    { //returns the property "plateNumber"
        return $this->plateNumber;
    }

    public function __construct($name, $number)
    {
        $this->name = $name;
        $this->plateNumber = $number;

    }
}

$obj1 = new Car("BMW", 68775); //making a car object with values of name and platenumber set
echo $obj1->display(); //displaying name of car
echo "Plate number: " . $obj1->getPlateNumber(); //accessing plateNumber by calling getPlateNumber method
echo "\n";
$obj1->setPlateNumber(47798); //changing PlateNumber value using setPlateNumber
echo "Plate number: " . $obj1->getPlateNumber(); //accessing plateNumber by calling getPlateNumber method
echo "\n";

$obj2 = new Car("Mercedes", 89976);
//uncomment the line below and try running the code
//you will get an error as you cannot directly access a private member outside of the class it is declared in
//echo $obj2->$plateNumber;


// protected
class Car
{

    public $name = " ";
    protected $power = 2500;

    public function display()
    {
        echo "Name: $this->name" . "\n";
    }

    public function __construct($name)
    {
        $this->name = $name;

    }
}

$obj = new Car("Blue");
echo $obj->display();
echo $obj->power; //comment out this line to prevent an error


// an overall example for this
class Test
{
	private $privateM=1;
	protected $protectedM=2;
	
	public function increase(Test $test)
	{
		$test-> privateM *= 10;
		$test-> protectedM *= 10;
	}
  
	public function __toString()
	{
		return "privateMember = ".$this->privateM.", protectedMember = ".$this->protectedM;
	}
}
 
$test1 = new Test();
$test2 = new Test();
 
echo "before test1: $test1\n";
 
// call $test2 method on another instance of the Test class - $test1
$test2->increase($test1);
 
echo "after test1: $test1\n";



?>