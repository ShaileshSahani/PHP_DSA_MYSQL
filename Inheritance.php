<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class Parent1{
        function print_val(){
            $this->name = 10;
            echo "Parent"."<br>";
        }
    }
    class child1 extends Parent1{
        function print_val1(){
            echo "Child $this->name";
        }
    }

    $obj = new child1();
    $obj->print_val();
    $obj->print_val1();
    
    ?>
</body>
</html>