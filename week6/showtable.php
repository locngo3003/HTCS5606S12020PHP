<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Show my records</title>
</head>
<body>
<table>
    <tr>
        <th>ID</th>
        <th>Username</th>
        <th>Password</th>
        <th>Name</th>
    </tr>
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
            echo "<tr>";
            echo "<td>".$row['id']."</td>";
            echo "<td>".$row['username']."</td>";
            echo "<td>".$row['password']."</td>";
            echo "<td>".$row['name']."</td>";
            echo "</tr>";
        }
    }else{
        echo "no result in the table";
    }
    $connection->close();
    ?>
</table>
</body>
</html>
