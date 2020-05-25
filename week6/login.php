<?php
if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["pwd"];


    $server = "kil9uzd3tgem3naa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
    $user = "eihuxghz1d16wln9";
    $pwd = "rm6ssod1ra1y6iho";
    $database = "xuc77vapd06kjxop";

    $connection = new mysqli($server, $user, $pwd, $database); //create database connection
    if ($connection->connect_error) {
        echo $connection->connect_error;
    } else {
        echo "Connection Created";
    }
//is the username in my table
    $sql = "select +from Users where  usename = '$username' ";
    $result = $connection->query($sql);
    if ($result->num_rows == 1) {
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) {
                echo 'access granted';
            } else {
                echo 'wrong password';
            }
        }
    } else {
        echo "wrong username";
    }
}
//https://htcs5606phplocngo.herokuapp.com/