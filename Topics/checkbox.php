<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <input type="checkbox" name="pizza[]" value="pizza">
        pizza<br>
        <input type="checkbox" name="pizza[]" value="burger">
        burger<br>
        <input type="checkbox" name="pizza[]" value="chai">
        chai<br>
        <input type="submit" value="submit">

        
        
    </form>
</body>
</html>
    
<?php 
    
    $foods = $_POST["pizza"];
     

    foreach($foods as $food) {
        echo "{$food} <br>";
    }
    
    //  if you set '[]' after the value of the name attribute $food will become an array 
?>