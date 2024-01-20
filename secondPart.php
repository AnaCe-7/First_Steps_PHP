<?php

echo " <h4> ★ Truth tables: </h4>";

// Given the following variables
$es_un_michi_grande = true;
$le_gusta_comer = true;
$sabe_volar = false;
$tiene_2_patas = false;

// What is the result according to the truth tables?
$es_un_michi_grande && $le_gusta_comer; // true
$es_un_michi_grande || $sabe_volar; // true
$sabe_volar || $tiene_2_patas; // false
!$le_gusta_comer; // false
!$le_gusta_comer || $es_un_michi_grande; // true

?>