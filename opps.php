<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    class hello{
        public $name = NULL;
        function sayHello(){
            $this->name = "hello";
            echo "<h2>$this->name</h2>";
        }
    }
    // create object of the above created class and call its method to print greeting message on screen
    $obj_hello = new Hello();
    $obj_hello ->sayHello();
    ?>
</body>
</html>