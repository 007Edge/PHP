
<?php 
    
    $s = "shivam is op";
    echo strlen($s)."<br>";
    echo strpos($s, "is")."<br>";
    echo str_word_count($s)."<br>";
    echo strtoupper($s)."<br>";
    echo strtolower($s)."<br>";
    echo str_replace("op", "jod",$s)."<br>";
    echo strrev($s)."<br>";
    echo trim($s)."<br>";   // remove white space from start & end

    $arr = explode(" ", $s);

    print_r($arr); // concatinate with . operator
    echo "<br>";

    echo substr($s, 10,2)."<br>";
    echo substr($s, 6)."<br>";
    echo substr($s, -7,4)."<br>";



    


?>