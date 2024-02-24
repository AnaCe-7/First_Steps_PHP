<?php

echo '<button><a href="index.php">Home</a></button>';

echo " <h4> ★ Truth tables: </h4>";
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

echo "<p>Given the following variables:</p>";
echo "\$es_un_michi_grande = true;" . "<br>";
echo "\$le_gusta_comer = true;" . "<br>";
echo "\$sabe_volar = false;". "<br>";
echo "\$tiene_2_patas = false;";

$es_un_michi_grande && $le_gusta_comer; // true
$es_un_michi_grande || $sabe_volar; // true
$sabe_volar || $tiene_2_patas; // false
!$le_gusta_comer; // false
!$le_gusta_comer || $es_un_michi_grande; // true

echo "<p>What is the result according to the truth tables?</p>";

echo "\$es_un_michi_grande && \$le_gusta_comer;" . " ➜ ";
var_dump($es_un_michi_grande && $le_gusta_comer);
echo "<br>";

echo "\$es_un_michi_grande || \$sabe_volar;" . " ➜ ";
var_dump($es_un_michi_grande || $sabe_volar);
echo "<br>";

echo "\$sabe_volar || \$tiene_2_patas;" . " ➜ ";
var_dump($sabe_volar || $tiene_2_patas);
echo "<br>";

echo "!\$le_gusta_comer;" . " ➜ ";
var_dump(!$le_gusta_comer);
echo "<br>";

echo "!\$le_gusta_comer || \$es_un_michi_grande;" . " ➜ ";
var_dump(!$le_gusta_comer || $es_un_michi_grande);

?>