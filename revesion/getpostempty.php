<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="getpostempty.php" method="post">
        UserName:<input type="text" name="user" placeholder="UserName">
        PassWord:<input type="password" name="pass" placeholder="PassWord">

        <button>Click me</button>

    </form>
</body>
</html>


<?php 
    
    $un = $_POST["user"];
    $ps = $_POST["pass"];
    
    if (!empty($un && $ps)) {
        echo "hi $un";
    }
    else {
        echo "please fill your password !";
    }

?>