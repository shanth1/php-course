<?php
$name = "Denis";
$productCount = 4;
$productPrice = 1.99;
$productName = "cookie";
$totalPrice = $productPrice * $productCount;

echo "Hello, {$name} <br>";
echo "You ordered {$productCount} {$productName}s <br>";
echo "Total price is {$productCount} x \${$productPrice} = \$$totalPrice<br>";
