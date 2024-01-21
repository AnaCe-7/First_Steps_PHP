<?php

echo " <h4> ★ Third Part: </h4>";
echo "<p>• Convert all characters of the string to uppercase and print on the screen, without modifying the original variable </p>";
$myString = "I can change all the letters of a string";
$myString = strtoupper($myString);
echo $myString;

echo "<p>• Prints the length of the string variable on the screen </p>";
echo "Length of the string: " . strlen($myString) . "<br>";

echo "<p>• Prints on the screen the number of words contained in the string variable </p>";
echo "Number of words in the string: " . str_word_count ($myString); 

echo "<p>• Change the characters of the string variable to reverse order and print them on the screen without modifying the original variable. </p>";
$myStringReverse = strrev($myString);
echo "Reverse character order: " . $myStringReverse;

echo "<p>• Replace the word 'gato' in your original variable to 'michi' and print to the screen </p>";
$phrase = "Mi gato se llama Thomas";
$newphrase = str_replace("gato", "michi", $phrase);
echo "Word replacement: $newphrase";

echo "<p>• Declare two variables and give them an integer value, print both on the screen </p>";
$num1 = 7;
$num2 = 20;
echo "Value of first variable: " . $num1 . "<br>" . "Value of sencond variable: " . $num2;

echo "<p>• Sums both integer variables and prints the result on screen </p>";
$sum = $num1 + $num2;
echo "The sum of the value of the variables is: $sum";

echo "<p>• Declare two variables and give them a value of 1 and 0 of type integer and print the data type on the screen and console </p>";
$num3 = 1;
$num4 = 0;
echo "Data type first variable " . "(" . $num3 . "): " . gettype($num3) . "<br>";
echo "Data type second variable " . "(" . $num4 . "): " . gettype($num4) . "<br>";

echo "<p>• Change the data type of the above variables to Boolean and print the new data type on the screen and console </p>";
$num3toBool = (bool)$num3;
$num4toBool = (bool)$num4;
echo "New data type of firt variable: " . gettype($num3toBool) . " → ";
var_dump($num3toBool);
echo "<br>";
echo "New data type of firt variable: " . gettype($num4toBool) . " → ";
var_dump($num4toBool);

echo "<p>• Create a function that receives two numbers as parameters and returns the sum of them. Print the result on screen and by console </p>";
function sumar($num1, $num2) {
    return $num1 + $num2;
};

$resultSum = sumar(35, 29);
echo "35 + 29" . "<br>";
echo "Result of the function that sums two numbers: " . $resultSum;

echo "<p>• Create a function that determines whether a number is odd or even. Print to console and screen </p>";
function oddOrEven ($num){
    if ($num %2 === 0){;
      return "The number is even";
    } else {
      return "The number is odd";
    }
};

$answer = oddOrEven(7);
echo "Given number (7) the function returns: " . "<br>";
echo $answer;

?>