<?php

// A)
echo " <p> ★ VARIABLES </p>";

$name = "Cecilia";
echo "My second name is " . $name . "<br>";

$luckyNumber = 7;
echo "My favorite number is " . $luckyNumber . "<br>";

$decimal = 6.25;
echo "A decimal number: " . $decimal . "<br>";

$trueBool1 = true;
echo "Boolean representing 1: " . ($trueBool1 ? 'true' : 'false') . "<br>";

$trueBool0 = false;
echo "Boolean representing 0: " . ($trueBool0 ? 'true' : 'false') . "<br>";

$snacksArray = [
    "pistachios" => "70",
    "almonds" => "60",
    "cashews" => "20",
    "cookies" => "6",
    "sandwich" => "2",
];
print_r($snacksArray);
echo "<br>";

$fruitsArray = ["mango", "watermelon", "banana", "peach", "apple"];
print_r($fruitsArray);
echo "<br>";

$nullValue = null;
var_dump($nullValue);
echo "is a special value that can be assigned to a variable to indicate that it has no value or does not point to anything. " . "<br>";

?>