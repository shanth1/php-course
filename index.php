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
        username: <input type="text" name="username"><br>
        password: <input type="password" name="password"><br>
        <input type="submit" name="login" value="Log in">
        <input type="submit" name="register" value="Register">
    </form>
</body>

</html>
<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST["register"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username) || empty($password)) {
            echo "Missing username or password<br>";
        } else {
            $hashed_password = password_hash($password, PASSWORD_DEFAULT);
            $sql_query = "INSERT INTO users (username, password) 
                            VALUES ('$username', '$hashed_password')";
            try {
                mysqli_query($connection, $sql_query);
                echo "Registration was successful!<br>";
            } catch (mysqli_sql_exception) {
                echo "Registration failed<br>";
            }
        }
    }
    if (isset($_POST["login"])) {
        $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_SPECIAL_CHARS);
        $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);
        if (empty($username) || empty($password)) {
            echo "Missing username or password<br>";
        } else {
            $sql_query = "SELECT username, password FROM users WHERE username = '$username'";
            try {
                $result = mysqli_query($connection, $sql_query);
                if (mysqli_num_rows($result) == 1) {
                    if (password_verify($password, mysqli_fetch_assoc($result)["password"])) {
                        header("location: home.php");
                    } else {
                        echo 'incorrect password';
                    }
                } else {
                    echo "No such user";
                }
            } catch (mysqli_sql_exception) {
                echo "Login failed<br>";
            }
        }
    }
}

mysqli_close($connection);
