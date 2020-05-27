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
    include_once "dbconnection.php";

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
