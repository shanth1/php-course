<?php
$hostname = "localhost";
$username = "root";
$password = "";
$database = "test";

try {
    $connection = mysqli_connect($hostname, $username, $password, $database);
} catch (mysqli_sql_exception) {
    echo "Could not connect <br>";
}

if ($connection) {
    echo "You are connected <br>";
}
