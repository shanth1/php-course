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
        <label>Username:</label>
        <input type="text" name="username"><br>
        <label>Age:</label>
        <input type="text" name="age"><br>
        <label>Email:</label>
        <input type="text" name="email"><br>
        <input type="submit" name="login" value="Log in">
    </form>
</body>

</html>
<?php
if (isset($_POST['login'])) {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
    $age = filter_input(INPUT_POST, "age", FILTER_SANITIZE_NUMBER_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);

    $age = filter_input(INPUT_POST, "age", FILTER_VALIDATE_INT);
    $email = filter_input(INPUT_POST, "email", FILTER_VALIDATE_EMAIL);

    echo "Hi, $username" . "<br>";

    if (empty($age)) {
        echo "Age is not valid<br>";
    } else {
        echo "You are $age years old" . "<br>";
    }

    if (empty($email)) {
        echo "Email is not valid<br>";
    } else {
        echo "Email: $email" . "<br>";
    }
}
