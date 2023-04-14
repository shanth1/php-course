<?php
include("database.php");
$username = "Oleg";
$password = "blem";
$hashed_password = password_hash($password, PASSWORD_DEFAULT);
$age = 30;
$sql_query = "INSERT INTO users (username, password, age) 
                VALUES ('$username', '$hashed_password', $age)";
try {
    mysqli_query($connection, $sql_query);
    echo "User is added";
} catch (mysqli_sql_exception) {
    echo "Could not added a user";
}

mysqli_close($connection)
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    Hello
</body>

</html>