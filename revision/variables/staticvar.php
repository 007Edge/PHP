<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

    <h1>Hello</h1>


</body>
</html>

<?php 
    
    function myFucn() {
        static $n = 0;
        $n++;
        echo $n,"<br>";
    }
    myFucn();
    myFucn();
    myFucn();
    


?>

<!-- Note: the value of the static variable will be retained between function calls -->