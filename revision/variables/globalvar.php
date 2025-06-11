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
    $a = 10;
    function myFucn() {
        global $a;    // to access the global varible use global keyword
        echo $a;
    }
    myFucn();
    


?>