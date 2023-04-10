<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php" method="get">
        <label>Enter start value</label>
        <input type="text" value="1" name="start">
        <br>
        <label>Enter end value</label>
        <input type="text" value="10" name="end">
        <br>
        <input type="submit" value="Go!">
    </form>
</body>

</html>

<?php
$start = $_GET['start'];
$end = $_GET['end'];

for ($number = $start; $number <= $end; $number++) {
    $square = $number ** 2;
    echo "$number ** 2 = {$square}" . "<br>";
}
