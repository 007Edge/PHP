<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Session</title>
</head>
<body>
    <h1>Login Page</h1>
    <a href="home.php">HOME</a><br>
    <form action="index.php" method="post">
        <label for="user">USER: </label>
        <input type="text" id="user" name="user" placeholder="username">
        <br>
        <label for="pass">PASS:</label>
        <input type="password" id="pass" name="pass" placeholder="password">
        <input type="submit" name="sub">
    </form>
    
</body>
</html>

<?php
    
    if (isset($_POST["sub"])) {
        $_SESSION["user"] = $_POST["user"];
        $_SESSION["pass"] = $_POST["pass"];
        header("Location: home.php");  // to redirect to another page
    }
?>