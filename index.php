<?php
include("database.php");
$sql_query = "SELECT username, age FROM users WHERE age > 20";


try {
    $result = mysqli_query($connection, $sql_query);
    if (mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            echo $row["username"] . " " . $row["age"] . "<br>";
        }
    }
} catch (mysqli_sql_exception) {
    echo "No results found ";
}

mysqli_close($connection);
