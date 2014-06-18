<?php

for($i = 0; $i < 10; $i++) {

    echo $i.'</br>';
}

$myArr = array('Ivan', 'Blagoi', 'Stenly');

for($j = 0; $j < count($myArr); $j++) {
    echo 'Student name is: ' . $myArr[$j] . '</br>';
}


while(true) {

    echo 'hello'.'</br>';
    break;
}


foreach($myArr as $name) {
    echo $name.'</br>';
}