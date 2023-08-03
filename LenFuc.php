<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    function add(...$new){
        $sum = 0;
        foreach($new as $r){
            $sum += $r;
        }
        return $sum;
    }
    echo "Sum of numbers: ".add(1, 2, 3, 4, 5, 6, 3, 2, 3, 2, 1, 2);
    ?>
</body>
</html>