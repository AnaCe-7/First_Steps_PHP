<?php
echo '<button><a href="index.php">Home </a></button>';

echo "<p> ★ Arrays <p>";

echo "<p>• Create an array of 10 numbers </p>";
$myArray = array(7, 4, 22, 29, 2, 218, 5, 19, 99, 6);
print_r($myArray);

echo "<p>• Get the length of the array and print on screen and console </p>";
$myArrayLengh = count($myArray);
echo "The length of the array I created above is → " . $myArrayLengh;
  
echo "<p>• Adds a string value to the array you created earlier and prints to screen </p>";
$myArray[] = "orange";
print_r($myArray);
echo "<br>" . "<br>";
echo "Note: to add a single element to the array, it's better to use \$array[] = theNewElement. " . "In this way there is no overhead of calling a function.";

echo "<p>• Now add 2 more elements to your array and print to screen </p>";
array_push($myArray, "raspberry", "banana");
print_r($myArray);
echo "<br>" . "<br>";
echo "Note: array_push() will generate a warning if the first argument is not an array. This differs from the behavior of \$var[] where a new array will be created.";

echo "<p>• Create a new array and concatenate it with the previous one and print it on the screen </p>";
$otherArray = array("butterfly", "dragonfly", "ladybug");
$concatenation = array_merge($myArray, $otherArray);
print_r($concatenation);


echo "<p> ★ Functions <p>";

echo "<p>• Create a function that prints on console and screen all the numbers of an array in a list </p>";
$arrayNumbers = array(1, 2, 3, 4, 5);
echo "List of the elements of my array: " . "<br>";
function showArray($arrayNumbers) {
    foreach ($arrayNumbers as $value) { 
        echo "- " . $value . "<br>";
    }
};
showArray($arrayNumbers);


echo "<p>• Create a function that adds a number to the array </p>";
function addNumber($arrayNumbers) {
    $arrayNumbers[]= 6;
    print_r($arrayNumbers);
};
addNumber($arrayNumbers);


echo "<p>• Create a function that removes even numbers from that array </p>";
echo "There are no more even numbers left in my array, the remaining are odd numbers: " . "<br>";
function removeTheEven($arrayNumbers) {
    foreach ($arrayNumbers as $array) {
        if ($array % 2 ==0) continue;
        echo "- " . $array . "<br>";
      }
};
removeTheEven($arrayNumbers);


echo "<p>• Create a function that returns the largest number in an array </p>";
echo "I have found the highest value of my array with the max() function → ";
function findHighest($array) {
    return max($array);
}; 
print_r(findHighest($arrayNumbers));


echo "<p>• Create a function that returns the smallest number in an array </p>";
echo "I have found the lowest value of my array with the min() function → ";
function findLowest($array) {
    return min($array);
}; 
print_r(findLowest($arrayNumbers));


echo "<p>• Create a function that converts all letters in a text to lowercase. • Create a function that converts all the letters in a text to uppercase </p>";

$myText = "tHiS TEXT WiLL BE MoDifieD";
function convertsLowercase($array) {
    return strtolower($array);
};

function convertsUppercase($array) {
    return strtoupper($array);
}; 

echo "Original text: " . $myText . "<br>";
echo "Modified text to lowercase: " . convertsLowercase($myText) . "<br>";
echo "Modified text to uppercase: " . convertsUppercase($myText);


echo "<p>• Create a function that receives an array of names and converts the first letter of each name to uppercase </p>";
$namesArray = array("atefa", "cecilia", "sebastian", "elodie", "valentina");
function capitalizeFirstLetter($array) {
    return array_map('ucfirst', $array);
};

print_r(capitalizeFirstLetter($namesArray));


echo "<p>• Create a car class with its attributes, where one of the attributes can be an array type </p>";
class Car {
    public $brand;
    public $model;
    public $color;
    public $doors;
    public $system = [];

    public function __construct($brand, $model, $color, $doors, $system) {
        $this->brand = $brand;
        $this->color = $color;
        $this->doors = $doors;
        $this->model = $model;
        $this->system = $system;
    }

    public function get_brand() {
        return $this->brand;
    }

    public function get_number_doors() {
        return $this->doors;
    }

    public function get_attributes_array() {
        return $this->system;
    }
};

$myCar = new Car("Jeep", "Wrangler", "red", "2", ["gasoline", "manual transmission", "ABS brakes"]);


echo "<p>- Create a function that returns the car mark </p>";
echo "Brand of the car: " . $myCar->get_brand();

echo "<p>- Create a function that returns the number of doors the car has </p>";
echo "Number of doors: " .$myCar->get_number_doors();

echo "<p>- Create a function that returns an attribute of the array </p>";
echo "Gear shifting: " . $myCar->system[1];

?>