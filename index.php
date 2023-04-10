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
        <input type="checkbox" name="foods[]" value="pizza">Pizza<br>
        <input type="checkbox" name="foods[]" value="hotdog">Hotdog<br>
        <input type="checkbox" name="foods[]" value="hamburger">Hamburger<br>
        <input type="checkbox" name="foods[]" value="taco">Taco<br>
        <input type="submit" name="submit" value="I like it">
    </form>
</body>

</html>

<?php
$favorite_foods = $_POST['food'];
foreach ($favorite_foods as $food) {
    switch ($food) {
        case "pizza":
            echo "You like pizza!" . "<br>";
            break;
        case "hotdog":
            echo "You like hotdog!" . "<br>";
            break;
        case "hamburger":
            echo "You like hamburger!" . "<br>";
            break;
        case "taco":
            echo "You like taco!" . "<br>";
            break;
        default:
            echo "unknown food ({$food})" . "<br>";
            break;
    }
}
