<?php 
    function is_even($n) {
        if ($n % 2 == 0) {
            echo "{$n} is even<br>";
        }
        else {
            echo "{$n} is odd<br>";
        }

        return "Yahh Hooo!!<br>";
    }
    
    echo (is_even(3));
 
?>
