<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']?>">
        <input type="text" name="name">
        <input type="submit">
    </form>

    <?php 
    if ($_SERVER["REQUEST_METHOD"] == 'POST'){
        $name = $_POST["name"];

        echo $name;
    }
    ?>
</body>
</html>