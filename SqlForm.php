<?php 
if($_SERVER['REQUEST_METHOD']=='POST'){
    $name = $_POST["name"];
    $age = $_POST["age"];
    $gender = $_POST["gender"];
    $mail = $_POST["email"];

    $server = "localhost";
    $username="root";
    $password="root";

    $db = new mysqli($server, $username, $password);
    if ($db->connect_error) {
        die("Connection failed: ". $conn->connect_error);
        }
    $sql = "CREATE DATABASE IF NOT EXISTs newPhp";
    if($db->query($sql) === TRUE){}
    else{
        echo"Error creating database:". $conn->error;
    }
    $db->select_db("newPhp");
    // Create table
    $tableSql ="CREATE TABLE if not exists users (Name varchar(30) not null, Age Int, Gender varchar(10), E_mail varchar(30))";
    if($db->query($tableSql) === TRUE){}
    else{echo'Table creation error'.mysqli_error();}

    //validation
    if(empty($name)){
        echo "The Name Column Is Empty";
    }
    else if (empty($mail)){
        echo "Please Enter Mail";
    }
    else{
        $insert = "Insert into users values('$name', '$age', '$gender', '$mail')";
        if($db->query($insert) === TRUE){}
        else{
            echo 'Insertion Error '.mysqli_error();
        }
        $show = "SELECT * FROM users";
        $result=$db->query($show);
        if($result->num_rows > 0){
            while($i = $result->fetch_assoc()){
                echo $i["Name"], " ", $i["Age"]," ", $i["Gender"], " ", $i["E_mail"], "<br>";
            }
        }
    }
}
?>