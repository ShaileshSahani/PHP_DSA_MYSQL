<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<style>
    table, th, td{
        border: 1px solid black;
        border-collapse: collapse;

    }
</style>
</head>
<body>
    <?php

    abstract class New1{
        abstract function n1();
        abstract function n2();
    }

    class abs1 extends New1{
        function n1(){
            echo "n1";
        }
        function n2(){
            echo "n2";
        }
    }
    
    $obj = new abs1();
    $obj->n1();
    $obj->n2();


    ?>
</body>
</html>