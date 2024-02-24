<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>First Steps PHP</title>
</head>
<header>
    <h1>First Steps PHP</h1>
</header>

<body>
    <main>
        <button>
            <a href="firstPart.php">First Part</a>
        </button>

        <ul>
            <li>Create variables of different data types: number, string, boolean and print their value to the browser screen and console.</li>
            <li>Display the value of that variable in console and on screen. Find out how to print the value of a boolean value (printing true or false), an array and a null value (printing NULL).</li>
            <li>What type of data are the following variables?:</br></br>
            $nombre = "Luna";</br>
            $apellido = "Lovegood";</br>
            $edad = 42;</br>
            $Ravenclaw = true;</br></br>

            $promedio = (8 + 9.5 + 9 + 10 + 8) / 5;</br>
            $nombre_completo = $nombre . " " . $apellido;</br>
            $presento_examen = (bool) 1;</br></br>

            $numero_preguntas = 5 + "5";</br>
            $numero_respuestas = "5" + 5;</br>
            $promedio_maximo = $numero_respuestas / 1.0;</br>
            $nargles = 3 + "5 nargles"
            </li>
        </ul>
        <hr>

        <button>
            <a href="secondPart.php">Second Part</a>
        </button>

        <ul>
            <h4>Operator Truth Tables</h4>
            <li>Given the following variables:</br></br>
                $es_un_michi_grande = true;</br>
                $le_gusta_comer = true;</br>
                $sabe_volar = false;</br>
                $tiene_2_patas = false;</br></br>

                What is the result according to the truth tables?</br></br>

                $es_un_michi_grande && $le_gusta_comer;</br>
                $es_un_michi_grande || $sabe_volar;</br>
                $sabe_volar || $tiene_2_patas;</br>
                !$le_gusta_comer;</br>
                !$le_gusta_comer || $es_un_michi_grande;</br>
            </li>
        </ul>
        <hr>

        <button>
            <a href="thirdPart.php">Third Part</a>
        </button>

        <ul>
            <li>Convert all characters of the string to uppercase and print on the screen, without modifying the original variable..</li>
            <li>Prints the length of the string variable on the screen.</li>
            <li>Prints the number of words of the string variable on the screen.</li>
            <li>Changes the characters of the string variable to inverse order and prints on the screen without modifying the original variable.</li>
            <li>Replace the word 'gato' in your original variable to 'michi' and print to the screen.</li>
            <li>Declare two variables and give them an integer value, print both on the screen.</li>
            <li>Sums both integer variables and prints the result on screen.</li>
            <li>Declare two variables and give them a value of 1 and 0 of type integer and print the data type on the screen and console.</li>
            <li>Change the data type of the above variables to Boolean and print the new data type on the screen and console.</li>
            <li>Create a function that receives two numbers as parameters and returns the sum of them. Print the result on screen and by console.</li>
            <li>Create a function that determines whether a number is odd or even. Print to console and screen.</li>
        </ul>
        <hr>

        <button>
            <a href="fourthPart.php">Fourth Part</a>
        </button>

        <ul>
            <li>Create an array of 10 numbers.</li>
            <li>Get the length of the array and print on screen and console.</li>
            <li>Adds a string value to the array you created earlier and prints to screen.</li>
            <li>Add 2 more elements to your array and print to screen.</li>
            <li>Create a new array and concatenate it with the previous one and print it on the screen.</li>
            <li>Create a function that prints on console and screen all the numbers of an array in a list.</li>
            <li>Create a function that adds a number to the array.</li>
            <li>Create a function that removes even numbers from that array.</li>
            <li>Create a function that returns the largest number in an array.</li>
            <li>Create a function that returns the smallest number in an array.</li>
            <li>Create a function that converts all letters in a text to lowercase.</li>
            <li>Create a function that converts all the letters in a text to uppercase.</li>
            <li>Create a function that receives an array of names and converts the first letter of each name to uppercase.</li>
            <li>Create a car class with its attributes, where one of the attributes can be an array type.</br>
            <li>Create a function that returns the car mark</li>
            <li> Create a function that returns the number of doors the car has</li>
            <li>Create a function that returns an attribute of the array</li>
        </ul>
        <hr>
    </main>
</body>

</html>