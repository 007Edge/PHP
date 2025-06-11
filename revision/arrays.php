
<?php 
    // NOTE: Enumerated arrays are also known as indexed arrays

    
    // $arr = array("shivam", "edge", "jodd");
    // for ($i = 0; $i<count($arr); $i++) {
    //     echo $arr[$i]."<br>";
    // }

    // foreach ($arr as $i) {
    //     echo $i." ";
    // }

    $arr = array("shivam" => "1", "edge" => "2", "Aryan" => "3");

    foreach ($arr as $i => $p) {
        echo "Player: ".$p.", Name: ".$i."<br>";
    }


    // associative array & foreach loop
    // $arr = []        this is an empty array

    $cars = array("Volvo", "BMW", "Toyota");
    array_splice($cars, 1, 2);   // remove two items from 1st idx

    // $cars = array("Volvo", "BMW", "Toyota");
    // unset($cars[0], $cars[1]);      remove 1st and second items from array third item will reamin in 2nd idx 
     
    // sort() - sort arrays in ascending order
    // rsort() - sort arrays in descending order
    // asort() - sort associative arrays in ascending order, according to the value
    // ksort() - sort associative arrays in ascending order, according to the key
    // arsort() - sort associative arrays in descending order, according to the value
    // krsort() - sort associative arrays in descending order, according to the key

    // syntax sort($arr);   same for all other sort function

    


    


?>