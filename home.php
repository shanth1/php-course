<?php
session_start();
echo "username from session: {$_SESSION["username"]}" . "<br>";
echo "password from session: {$_SESSION["password"]}" . "<br>";
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
    <form action="home.php" method="post">
        <input type="submit" name="logout" value="Log out">
    </form>
</body>

</html>
<?php
if (isset($_POST["logout"])) {
    session_unset();
    header("location: index.php");
}
