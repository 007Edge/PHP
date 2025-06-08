<?php 
    $str = "Shivam is also known as EDGE";
    $s = "123-456-789";
    // $str = strtolower($str);
    // $str = strtoupper($str);
    // $str = trim($str); // remove spaces from starting and ending
    // $str = str_pad($str, 20, "$");  will append 20 $ in the end of the string
    // $s = str_replace("-", " ", $s);  // '-' is replaced by ' ';
    $str = strrev($str);
    echo $str;

?>
