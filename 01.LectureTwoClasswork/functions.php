<?php

function sumTwoNumbers($numOne, $numTwo)
{
    return $numOne + $numTwo;
}

// Може да слагаме стойност по подразбиране

function helloStudent($name = 'unknown student')
{
    echo 'Hello, ' . $name . '</br>';
}


helloStudent();
helloStudent('Stenly');