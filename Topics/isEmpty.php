<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <style>
        #user {
            border: 1px solid black;
            background: cyan;
        }
        #pass {
            border: 1px solid black;
            background: cyan;
        }

        .div1 {
            background: yellow;
            padding: 20px 20px 5px 20px ;
        }
        .div2 {
            background: yellow;
            padding: 5px 20px 20px 20px ;
        }
        .btn1 {
            background: grey;
            padding: 10px;
            text-align: center;
        }
        #btn{
            border: 1px solid black;
            border-radius: 2px;
            padding: 3px;
            background: DodgerBlue;

        }
    </style>
</head>
<body>
    <form action="index.php" method="post">
        
        <div class="div1">
            <label for="user">USER: </label>
            <input type="text" name = "user" id="user" placeholder ="Enter you User name">
        </div>
        
        <div class="div2">
            <label for="pass">PASS: </label>
            <input type="password" name="pass" id="pass" placeholder="Enter your password">
        </div>
        <div class="btn1">
            <input id="btn" type="submit" value="Submit" name="btn">
        </div>
        
    </form>
</body>
</html>

<?php 
    $user = $_POST["user"];
    $pass = $_POST["pass"];
    $btn = $_POST["btn"];

    if (empty($user) && empty($pass)) {
        echo "Please enter :    'Username and Password'";
    }
    elseif (empty($user)) {
        echo "please enter your :    'Username'";
    }
    elseif (empty($pass)) {
        echo "Please enter your :    'Password'";
    }
    else {
        echo "Welcome back {$user}<br>";
        echo "Login Success.. <br>";
    }
    echo "Password: {$pass} <br>";
    echo "BTN: {$btn}";
    
    
?>