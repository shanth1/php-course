
<?php
$dictionary = array(
    'academy' => 'академия',
    'board' => 'доска',
    'suspect' => 'подозревать',
);
echo "original associative array:" . "<br>";
foreach ($dictionary as $key => $value) {
    echo "$key = $value" . "<br>";
}

$keys = array_keys($dictionary);
$values = array_values($dictionary);
$flipped_array = array_flip($dictionary);

echo "<br><br>";
echo "only keys:" . "<br>";
foreach ($keys as $key) {
    echo $key . "<br>";
}

echo "<br><br>";
echo "only values:" . "<br>";
foreach ($values as $value) {
    echo $value . "<br>";
}

echo "<br><br>";
echo "flipped array:" . "<br>";
foreach ($flipped_array as $key => $value) {
    echo "$key = $value" . "<br>";
}
