<?php

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
echo "<br>Concatenation of two arrays" . "<br>";
print_r($concatenation);


echo "<p> ★ Functions <p>";

echo "<p>• Create a function that prints on console and screen all the numbers of an array in a list </p>";
$arrayNumbers = array(1, 2, 3, 4, 5); // This is an indenumed array, where the first item has the key 0, the second has the key 1, and so on.
echo "List of the elements of my array: " . "<br>";
function recorrerArray($arrayNumbers) {
    foreach ($arrayNumbers as $value) { // $value --> the value of the current array element
        echo "- " . $value . "<br>";
    }
};
recorrerArray($arrayNumbers);


echo "<p>• Create a function that adds a number to the array </p>";
function addNumber($arrayNumbers) {
    $arrayNumbers[]= 6;
    print_r($arrayNumbers);
};
addNumber($arrayNumbers);


echo "<p>• Create a function that removes even numbers from that array </p>";
echo "There are no more even numbers left in my array, the remaining numbers are: " . "<br>";
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


echo "<p>• Create a function that converts all letters in a text to lowercase. </p>";
$myText = "tHe TEXT sTorEd in THIS variAble has bEen MoDifieD";
function convertsLowercase($array) {
    return strtolower($array);
}; 
print_r(convertsLowercase($myText));


echo "<p>• Create a function that converts all the letters in a text to uppercase </p>";
function convertsUppercase($array) {
    return strtoupper($array);
}; 
print_r(convertsUppercase($myText));

?>