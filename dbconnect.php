<?php
$server = "localhost";
$user = "root";
$password = "";

$connect = mysqli_connect($server, $user, $password);



if ($connect) {
    // echo "Connected  <br>";
}

$database = "animeworld_user";
$sql = "CREATE DATABASE IF NOT EXISTS $database";
$dbres = mysqli_query($connect, $sql);

if ($dbres) {
    // echo "<br>Database created";
}
$connect = mysqli_connect($server, $user, $password, $database);



$table = "user_details";

$create = "CREATE TABLE IF NOT EXISTS user_details (
id int(255) AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(100),
mobile int(10),
password VARCHAR(20)
)";
$tbque = mysqli_query($connect, $create);

if ($tbque) {
    // echo "<br>Table created";
}


?>