<?php

function sum($n1, $n2) {  // formal parameters
    $sum = $n1 + $n2;
    return $sum;          // return type is integer
}

$val = sum(4,5);       // Arguments (or parameters) are values passed into a function
echo $val."<br>";

// NOTE: orignal variables are not affected by changes inside the function.
// that is to say pass by value is default.

// now below is the example of pass by reference

function update(&$num) {
    $num+=10;
    return $num;
}

$n = 5;
$value = update($n);
echo $value."<br>";

// Scope of variable: local, global, static
// to use global varible inside a function use global key word inside the function
// using static key word for a variable will make variable retain it value between mulitple function calls

?>