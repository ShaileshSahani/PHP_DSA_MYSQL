<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class myCar{
        function __construct($n,$c){
            echo "Creating a new car...";
            echo "Car name is: ",$n," .Color is: ",$c;
            }
    }
    // create an object of the Car Class with values for Name and Color properties
    $myCarObj = new myCar("BMW","Red");
    ?>
</body>
</html>