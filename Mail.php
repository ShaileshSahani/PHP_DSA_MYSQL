<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $txt = "I am Hello";
    $msg = wordwrap($txt, 75);
    mail("shaileshsahani445@gmail.com","my subject", $msg);
    ?>
</body>
</html>