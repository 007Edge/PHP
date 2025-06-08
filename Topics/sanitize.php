<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        
        <input type="text" name="user"> <br>
        <input type="text" name="age"> <br>
        <input type="text" name="email"> <br>
        <input type="submit" name="btn" value="submit"> <br>

    </form>
</body>
</html>



<?php 
    $name = filter_input(INPUT_POST, "user", FILTER_SANITIZE_SPECIAL_CHARS); // no js code will be executed
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);  // only the number will display
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    echo "Name : {$name}<br>Age: {$age}<br>Email: {$email}";

    // check for FILTER_VALIDATE_

?>
