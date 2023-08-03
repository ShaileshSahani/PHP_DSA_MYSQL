<!Doctype html>
<html>
    <head>
</head>
<body>
    <?php 

session_start();
if($_SERVER["REQUEST_METHOD"] == "POST") {
    $a = $_POST["name"];
    $b = $_POST["email"];
    $c = $_POST["password"];

    $serverName = "localhost";
    $userName = "root";
    $password = "root";

    $db = new mysqli($serverName, $userName, $password);
    if($db -> connect_error){
        die("Connection Failed".$db->connect_error);
    }
    else{
        $query = "CREATE DATABASE IF NOT  EXISTS newForm";
        if($db->query($query) === TRUE){}
        else{
            echo"Failed";
        }
        $db->select_db("newForm");

        $query = "CREATE Table IF NOT  EXISTS myData(Name varchar(20), G_Mail varchar(20), Password varchar(20))";
        $db->query($query);

        $query = "INSERT INTO myData values('$a', '$b', '$b')";
        $db->query($query);

        $query = "SELECT * FROM myData";
        $res = $db->query($query);
        if($res -> num_rows > 0){
            $n = 0;
            while($i = $res -> fetch_assoc()){
                echo $i["Name"], " ", $i["G_Mail"], " ", $i["Password"], "<br>";
                $n++;
            }
        }
    }
}

    ?>
</body>
</html>