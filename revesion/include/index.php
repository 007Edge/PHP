<?php 
    include("header.php");
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <h1>this is a body</h1>
    </div>
</body>
</html>


<?php 
    include("footer.php");
?>

<!-- 
    Difference between include and require
    include continues execution on errors, used for optional files
    require stops the script execution on error, used for critical files(like DB config)
 
-->