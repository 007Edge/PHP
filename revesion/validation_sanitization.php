<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        UserName:<input type="text" name="user" placeholder="UserName">
        PassWord:<input type="password" name="pass" placeholder="PassWord">

        <input type="submit" value="Submit" name="btn">

    </form>
</body>
</html>


<?php 
    // In PHP, validation is the process of checking if the data meets certain criteria 
    // (e.g., is an email, a number, within length limits), and 
    // sanitization is the process of cleaning the data to remove unwanted characters 
    // or make it safe (e.g., for output or storage).


    // filter_var()   is a built function used to validate and sanitize the data;

    // sanitization
    // filter_var($data, FILTER_SANITIZE_STRING) – Removes tags and encodes special characters.
    // filter_var($email, FILTER_SANITIZE_EMAIL) – Removes all illegal characters from an email.
    // htmlspecialchars($data) – Converts special characters to HTML entities.
    // strip_tags($data) – Removes HTML and PHP tags.


    // Validation
    // filter_var($email, FILTER_VALIDATE_EMAIL) – Checks if it's a valid email.
    // filter_var($int, FILTER_VALIDATE_INT) – Checks if it's a valid integer.
    // filter_var($url, FILTER_VALIDATE_URL) – Checks if it's a valid URL.
    
    $un = $_POST["user"];
    $ps = $_POST["pass"];


    $n = filter_var($un, FILTER_SANITIZE_NUMBER_INT);
    echo $n;
    


?>