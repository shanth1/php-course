<?php
function greeting(string $name)
{
    echo "Hello, $name";
}

function sum(int $a, int $b)
{
    return $a + $b;
}

greeting("Denis");
echo "<br>";
echo sum(10, 20);
