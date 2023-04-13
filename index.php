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
    <form action="index.php" method="post">
        <label>username: </label>
        <input type="text" name="username">
        <label>password: </label>
        <input type="password" name="password">
        <hr>
        <input type="submit" name="login" value="Log in">
    </form>
</body>

</html>
<?php
if (isset($_POST["login"])) {
    if (!empty($_POST["username"]) && !empty($_POST["password"])) {
        $_SESSION["username"] = $_POST["username"];
        $_SESSION["password"] = $_POST["password"];

        echo "ok";
        header("loCation: home.php");
    }
}
