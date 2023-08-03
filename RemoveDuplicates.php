<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $s = array(1, 2, 3, 4, 5, 2, 1, 2, 3, 4 ,5);
    $n = count($s);
    sort($s);
    $r = 0;
    $s1 = array($n);
    for($i = 0; $i < $n - 1; $i++){
        if ($s[$i] != $s[($i + 1)]){
            $s1[$r++] = $s[$i];
    }
}
    $s1[$r++] = $s[$n - 1];
    foreach($s1 as $val){
        echo "$val ";
    }
    echo "<br>$r";
    ?>
</body>
</html>