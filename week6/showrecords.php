<?php
$server = "kil9uzd3tgem3naa.cbetxkdyhwsb.us-east-1.rds.amazonaws.com";
$user = "eihuxghz1d16wln9";
$pwd = "rm6ssod1ra1y6iho";
$database = "xuc77vapd06kjxop";

$connection = new mysqli($server, $user, $pwd, $database); //create database connection
if ($connection->connect_error){
    echo $connection->connect_error;
}else{
    echo "Connection Created";
}

$sql = "select * from Users"; // create query
$result = $connection->query($sql); //run the query on this connection

if ($result->num_rows > 0){ //check if there is record in the result
    while ($row = $result->fetch_assoc()){ //show each associated row
        echo $row['id']." ".$row['username']." ".$row['password']." ".$row['name']."<br>"; // in each row, we have columns.
    }
}else{
    echo "no result in the table";
}
$connection->close();

