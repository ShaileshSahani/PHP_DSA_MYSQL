<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    $n = array(1, 2, 4 ,2, 5, 2, 1, 9, 3, 8);
    echo "Before Sorting: ";
    foreach($n as $val){
        echo "$val ";
    }
    echo "<br>";
    for ($i = 0; $i < sizeof($n); $i++){
        for ($j = $i+1; $j < sizeof($n); $j++){
            if($n[$i] > $n[$j]){
                $temp = $n[$i];
                $n[$i] = $n[$j];
                $n[$j] = $temp;
            }
        }
    }
    echo "After Sorting: ";
    foreach($n as $val){
        echo "$val ";
    }
    
    ?>
</body>
</html>