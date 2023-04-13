<?php
echo "correct password: qwe123"
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
        Username : <input type="text" name="username" value="Blem">
        Password : <input type="password" name="password">
        <input type="submit" name="login" value="Log in">
    </form>
</body>

</html>
<?php
$correct_password = 'qwe123';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $password = $_POST["password"];
    $hash = password_hash($password, PASSWORD_DEFAULT);

    echo "password: $password" . "<br>";
    echo "hashed password: $hash" . "<br>";
    if (password_verify($correct_password, $hash)) {
        echo "status: correct password" . "<br>";
    } else {
        echo "status: incorrect password" . "<br>";
    }
}
