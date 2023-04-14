<?php
$db_hostname = "localhost";
$db_username = "root";
$db_password = "";
$db_name = "test";

try {
    $connection = mysqli_connect($db_hostname, $db_username, $db_password, $db_name);
} catch (mysqli_sql_exception) {
    echo "Could not connect <br>";
}

if ($connection) {
    echo "You are connected <br>";
}
