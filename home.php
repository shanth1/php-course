<?php
include("database.php");
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
    <form action="<?php htmlspecialchars($_SERVER["PHP_SELF"]) ?>" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
    <hr>
</body>

</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    header("location: index.php");
}
$sql_query = "SELECT username FROM users";

try {
    $result = mysqli_query($connection, $sql_query);
    while ($row = mysqli_fetch_assoc($result)) {
        echo $row["username"] . "<br>";
    }
} catch (mysqli_sql_exception) {
    echo "could not get the data";
}
