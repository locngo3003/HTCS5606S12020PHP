<?php
include_once "dbconnection.php";

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

