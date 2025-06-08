<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="username">User Name:</label>
        <input type="text" id="username" placeholder="Enter Name" name="user">

        <label for="password">Password: </label>
        <input type="password" id="password" placeholder="Enter Pass" name="pass">
        <button type="submit">Submit</button>


    </form>
</body>
</html>

<?php 
    echo "{$_POST["user"]} <br>";
    echo "{$_POST["pass"]} <br>";

    // for get method use `get` in form tag inside method attribute
    // replace $_POST with $_GET
    
    
?>