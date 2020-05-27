<?php
/**
 * Author: LocNgo
 * Date: 26 May 2020
 * Version: 1.0
 * Purpose: for login
 */

if (isset($_POST["username"])) {
    $username = $_POST["username"];
    $password = $_POST["password"];

    include_once "dbconnection.php";

    // is the username in my table
    $sql = "select * from Users where username = '$username'"; //this is our query
    $result = $connection->query($sql); //run query on this connection through method query()
    if ($result->num_rows == 1) { // means user exist in our database
        while ($row = $result->fetch_assoc()) {
            if ($row["password"] == $password) { //check password
                echo "access granted";
                session_start();
                $_SESSION["username"] = $username;
                // if login, we allow user to do something

            } else {
                echo "wrong password";
                ?>
                <script>
                    setTimeout(function () {
                        window.open("loginform.php", "_self"); // go to login form
                    },30000)
                </script>
                <?php
            }
        }
    } else {
        echo "wrong username";
        ?>
        <script>
            setTimeout(function () {
                window.open("loginform.php", "_self"); // go to login form
            },30000)
        </script>
        <?php
    }
    $connection->close(); //close my connection

} else {

}
?>
