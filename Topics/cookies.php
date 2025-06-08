<?php 
    setcookie("fav_food", "pizza", time() + 86400, "/");
    setcookie("fav_drink", "tea", time() + 86400, "/"); 
    // first parameter is key , second one is value , 3rd is time and 4th is path, '/' is for current folder.
    // cookie is just info about a user stored in a user's web-browser
    // applications to view cookies inside inspect 
    
    foreach($_COOKIE as $key => $value) {
        echo"{$key} = {$value} <br>";
    }
    
    if (isset($_COOKIE["fav_food"])) {
        echo "BUY some {$_COOKIE["fav_food"]} !!!";
    }
    else {
        echo "I don't kno your favorite food";
    }

?>
