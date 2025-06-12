<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UNIT 3</title>
</head>
<body>
    <form action="index.php" method="POST">

        
        Enter your User ID: <input type="text" name="user">
        <br>
        <input type="submit" value="Click!" name="btn">

    </form>
</body>
</html>


<?php
    if (isset($_POST["user"])) {
        $user = $_POST["user"];
        echo $user."<br>";
    }
    
?>