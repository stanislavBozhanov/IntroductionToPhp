<?php


$myArr = array('Ivan', 'Petko', 'Telerik');

echo $myArr[0].'</br>';

// Array can contain mixed types

$myMixedArr = array('Sten', True, 1.56);

echo $myMixedArr[2].'</br>';

// if we want to visualize the whole array we use funciton print_r()

print_r($myMixedArr);