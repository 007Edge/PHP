<?php
    session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>This is home page</h1>
    <form action="home.php" method="post">
        <input type="submit" value="logout" name="logout">
    </form>
</body>
</html>


<?php
    echo $_SESSION["user"]."<br>";
    echo $_SESSION["pass"];

    if(isset($_POST["logout"])) {
        session_destroy();
        header("Location: index.php");   // to redirect to another page
    }
?>