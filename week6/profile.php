<?php
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

session_start();
$username = $_SESSION["username"];

$sql = "select * from Users where username= '$username' ";
$result = $connection->query($sql);
if ($result->num_rows == 1) {
    while (($row = $result->fetch_assoc())) {
        echo "<p>" . $row["id"] . "</p>";
        echo "<p>" . $row["username"] . "</p>";
        echo "<p>" . $row["password"] . "</p>";
        echo "<p>" . $row["name"] . "</p>";
    }
}