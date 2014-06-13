<?php

$myVar = 10;

echo $myVar.'</br>';

/* Ако искаме да коментираме с \n трябва да използваме двойни кавички!
echo 'Hello world!\n';      This WILL NOT work!
echo "Hello world!\n";      This WILL work!
*/

$myVar = 'Hello';
echo $myVar.'</br>';
var_dump($myVar);

//type casting

$myVarFlat = 1.56;
echo '</br>'.$myVarFlat.'</br>';
$myVarInt = (int)$myVarFlat;
echo $myVarInt.'</br>';
var_dump($myVarInt);


