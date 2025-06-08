<?php
    $pass = "edge123";
    $hash = password_hash($pass, PASSWORD_DEFAULT);
    

    if (password_verify($pass, $hash)) {
        echo "You are logged in";
    }
    else {
        echo "You have enterd wrong password";
    }

    
?> 