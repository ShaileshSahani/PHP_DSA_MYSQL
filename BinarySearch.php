<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        if($_SERVER["REQUEST_METHOD"] == "POST"){
            $num = $_POST["element"];

            //Function to check the number
            function Binary($num, $low, $high, $arr){
                while ($low <= $high) {
                    $mid = floor(($low + $high) / 2);
                    if($arr[$mid] == $num){
                        return $mid;
                    }
                    else if($arr[$mid] < $num){
                        $low = $mid + 1;
                    }
                    else{
                        $high = $mid - 1;
                    } 
            }
            return -1;
        }    
    }
    ?>
    <form action="BinarySearch.php" method="post">
        <label for="element">Enter A Number: </label>
        <input type="number" name="element"><br>
        <input type="submit" value="submit">
    </form>
    <?php
    //Driver Code//
    $arr = array(1, 2, 4, 3, 8, 12, 11, 45, 22, 11, 4);
    sort($arr);
    $s = sizeof($arr);
    if(empty($num)){
        echo "<h3 style='color:#ff9f7c'>Please Enter a valid input</h3>";
    }
    else{
        foreach($arr as $values){
            print "$values ";
        }
        echo "<br>The Number You Entered is $num <br>";
        $val = Binary($num, 0, $s, $arr);
        if ($val == -1){
            echo "The Element Is Not Present";
        }
        else{
            echo "The Element was Found on Index : $val";
        }
    }
    ?>
</body>
</html>