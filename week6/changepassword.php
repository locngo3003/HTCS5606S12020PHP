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
$sql = "select password from Users where username ='something'";
$result = $connection->query($sql);
if ($result->num_rows ==1){
    while ($row = $result->fetch_assoc()){
        $oldPwdInDb = $row["password"];
    }
}

if (isset($_POST['oldpwd'])){ //issest check variable exist or not
   if ($_POST["oldpwd"] == $oldPwdInDb){
       $sql = "update Users set password";
       $sql .=$_POST["newpwd"];
       $sql .= "'where username ='something'";
       $result = $connection->query($sql);
       echo "pass changed";
   }else{
       echo "go back";
   }
}
$connection->close();