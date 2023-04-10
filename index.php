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
        <label>Delivery info</label>
        <br>
        <input type="radio" name="delivery_time" value="hour">In one hour<br>
        <input type="radio" name="delivery_time" value="today">Today<br>
        <input type="radio" name="delivery_time" value="tomorrow">Tomorrow<br>
        <input type="radio" name="credit_card" value="visa">VISA<br>
        <input type="radio" name="credit_card" value="mastercard">MASTERCARD<br>
        <input type="submit" name="button" value="Send">
    </form>
</body>

</html>

<?php
$submit = $_POST["button"];
$delivery_time = $_POST["delivery_time"];
$credit_card = $_POST["credit_card"];


if (isset($submit)) {

    switch ($delivery_time) {
        case "hour":
            echo "Package will be delivered in one hour";
            break;
        case "today":
            echo "Package will be delivered today";
            break;
        case "tomorrow":
            echo "Package will be delivered today";
            break;
        default:
            echo "Please, select the delivery time";
            break;
    }

    echo "<br>";

    switch ($credit_card) {
        case "visa":
            echo "VISA selected as credit card";
            break;
        case "mastercard":
            echo "MASTERCARD selected as credit card";
            break;
        default:
            echo "Please, select the credit card";
            break;
    }
}
