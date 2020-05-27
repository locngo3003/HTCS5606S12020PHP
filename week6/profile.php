<?php
include_once "dbconnection.php";

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