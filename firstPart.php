<?php

echo '<button><a href="index.php">Home </a></button>';

// A)
echo " <h4> ★ Variables </h4>";

$name = "Cecilia";
echo "• My second name is " . $name . "<br>";

$luckyNumber = 7;
echo "• My favorite number is " . $luckyNumber . "<br>";

$decimal = 6.25;
echo "• A decimal number: " . $decimal . "<br>";

$bool1 = true;
echo "• Boolean representing 1: " . ($bool1 ? 'true' : 'false') . "<br>";

$bool0 = false;
echo "• Boolean representing 0: " . ($bool0 ? 'true' : 'false') . "<br>" . "<br>";

echo "• Arrays:". "<br>" . "-This is an indexed array" . "<br>";
$fruitsArray = ["mango", "watermelon", "banana", "peach", "apple"];
print_r($fruitsArray);
echo "<br>" . "<br>";

$snacksArray = [
    "pistachios" => "70 grams",
    "almonds" => "60 grams",
    "cashews" => "20 grams",
    "cookies" => "6 packets",
    "sandwich" => 2,
];
echo "-This is an associative array" . "<br>";
print_r($snacksArray);
echo "<br>" . "<br>";

echo "• PHP Object:" . "<br>" . "Classes and objects are the two main aspects of object-oriented programming." . "<br>" . "A class is a template for objects, and an object is an instance of a class." ."<br>" ."<br>";

class MusicalInstrument {
    public $instrument;
    public $classification;
    public function __construct($instrument, $classification) {
        $this->instrument = $instrument;
        $this->classification = $classification;
    }
    public function message() {
        return "The " . $this->instrument . " is a " . $this->classification . " instrument.";
    }
};

$guitar = new MusicalInstrument("guitar", "string");
var_dump($guitar);
echo "<br>";

$drum = new MusicalInstrument("drum", "percussion");
var_dump($drum);
echo "<br>";

$trumpet = new MusicalInstrument("trumpet", "brass");
var_dump($trumpet);
echo "<br>" . "<br>";

echo $guitar->message() . "<br>";
echo $drum->message() . "<br>";
echo $trumpet->message() . "<br>" . "<br>";

define("PI", 3.1415);
echo "• I defined a constant named PI whose value is: " . PI . "<br>" . "<br>";

$nullValue = null;
echo "• "; var_dump($nullValue);
echo "is a special value that can be assigned to a variable to indicate that it has no value or does not point to anything. " . "<br>";

// B)
echo " <h4> ★ What type of data are the following variables? </h4>";
$nombre = "Luna";
echo "The value of the variable \$nombre is " . $nombre . "," . " and it is a → " . gettype($nombre) . " type of data" . "<br>";

$apellido = "Lovegood";
var_dump($apellido);
echo "<br>"; 

$edad = 42;
var_dump($edad);
echo "<br>"; 

$Ravenclaw = true;
var_dump($Ravenclaw);
echo "<br>" . "<br>";


$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
var_dump($promedio);
echo "<br>";  

$nombre_completo = $nombre . " " . $apellido; 
var_dump($nombre_completo);
echo "<br>";

$presento_examen = (bool) 1;
var_dump($presento_examen);
echo "<br>" . "<br>";


$numero_preguntas = 5 + "5";
var_dump($numero_preguntas);
echo "<br>";  

$numero_respuestas = "5" + 5;
var_dump($numero_respuestas);
echo "<br>";  

$promedio_maximo = $numero_respuestas / 1.0;
var_dump($promedio_maximo);

$nargles = 3 + "5 nargles"; 
var_dump($nargles); // integer - but alerts for non-numeric characters
echo "<br>"; 

?>