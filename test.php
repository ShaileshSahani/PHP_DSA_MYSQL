<!DOCTYPE html>
<html lang="en">
<head>
    <title>Document</title>
</head>
<body>
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $name = $_POST["name"];
        $pass = $_POST["pass"];
      
        // Validate form data
        $serverName = "localhost";
        $username = "root";
        $password = "root";
        $conn = new mysqli($serverName, $username, $password);
        if ($conn -> connect_error) {
            echo "Error occur".$conn->error;
        }
        $sql = "CREATE DATABASE IF NOT EXISTS hello123";
        if ($conn -> query($sql) === TRUE) {}
        else{
            echo "Error".$conn->error;
        }
        $conn -> select_db("hello123");
        $sql = "CREATE TABLE IF NOT EXISTS hell1(Name varchar(20), Password varchar(20))";
        if ($conn -> query($sql) === TRUE) {}
        else{
            echo "Error".$conn->error;
        }
        $sql = "INSERT INTO hell1 VALUES ('$name', '$pass')";
        if ($conn -> query($sql) === TRUE) {}
        else{
            echo "Error".$conn->error;
        }
        $sql = "SELECT * FROM hell1";
        $res = $conn -> query($sql);
        echo "<table>";
        echo "<tr><th>Name</th><th>Password</th></tr>";
        if ($res -> num_rows > 0){
            $n = 1;
            while ($i = $res->fetch_assoc()){
                echo "<tr><td>$i[Name]</td><td>$i[Password]</td></tr>";
                $n++;
            }
        }
        echo "</table>";
    }
    ?>
</body>
</html>
