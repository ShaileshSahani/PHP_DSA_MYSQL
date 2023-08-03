<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    session_start();
    $_SESSION["Color"] = "blue";
    $_SESSION["number"] = 9619930484;
    echo "<h2>".$_SESSION['Color']." and ".$_SESSION['number']. "</h2>";
    echo "session is saved";
    ?>
</body>
</html>