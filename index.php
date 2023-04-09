<?php
$age = 19;
$name = "Denis";
$isLogged = true;
$isBaned = false;

if ($age == 100 || $name == "Bob") {
    echo "Wow";
} else if ($age < 0) {
    echo "impossible";
} else if ($age >= 18 && $isLogged && !$isBaned) {
    echo "Yes";
} else {
    echo "Ho-ho-ho, No";
}
