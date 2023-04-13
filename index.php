<?php
setcookie("favorite_food", "burger", time() + (60 * 60 * 24), "/");
setcookie("favorite_drink", "water", time() - 0, "/");

foreach ($_COOKIE as $key => $value) {
    echo "$key = $value" . "<br>";
}

echo "<br>";
if (isset($_COOKIE["favorite_drink"])) {
    echo "Your favorite drink is {$_COOKIE["favorite_drink"]}";
} else {
    echo "I don't know your favorite drink";
}
