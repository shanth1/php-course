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
        <label>Enter a word</label>
        <input type="text" name="word">
        <input type="submit" value="push" name="button">
        <br>
        <input type="submit" value="pop" name="button">
        <input type="submit" value="shift" name="button">
        <input type="submit" value="reverse" name="button">
        <input type="submit" value="count" name="button">
    </form>
</body>

</html>

<?php
$button_type = $_GET['button'];
$words = array('greet', 'liver', 'dress', 'suit');
echo  "words array before:" . "<br>";
foreach ($words as $word) {
    echo $word . "<br>";
}
echo "<br>";

switch ($button_type) {
    case 'push':
        echo "pressed the push button" . "<br>";
        array_push($words, $_GET['word']);
        break;
    case 'pop':
        echo "pressed the pop button" . "<br>";
        array_pop($words);
        break;
    case 'shift':
        echo "pressed the shift button" . "<br>";
        array_shift($words);
        break;
    case 'reverse':
        echo "pressed the reverse button" . "<br>";
        $words = array_reverse($words);
        break;
    case 'count':
        echo "pressed the count button" . "<br>";
        echo count($words) . "<br>";
        break;
    default:
        echo "unknown button type" . "<br>";
        break;
}

echo '<br>';
echo  "words array after:" . "<br>";
foreach ($words as $word) {
    echo $word . "<br>";
}
