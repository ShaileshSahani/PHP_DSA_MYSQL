<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $cookie_name = "user";
    $cookie_value = "your_UserName";
    setcookie($cookie_name, $cookie_value, time() + (86400 * 30)) //86400s = 24h = 1 day = 1 * 30 = 30 days
    ?>
    <?php 
    if (!isset($_COOKIE[$cookie_name])){
        echo "<p>Cookie named '". $cookie_name. "' is not set!</p>";
    }
    else{
        echo "Cookie '" . $cookie_name . "' is set!<br>";
        echo "Value is: " . $_COOKIE[$cookie_name];
    }
    ?>
</body>
</html>