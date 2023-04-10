<?php
$arr = array("Hello", ",", "world", "!");
$text = "___Q W E r_t_y#";

echo strtolower($text) . "<br>";
echo strtoupper($text) . "<br>";
echo "trim: " . trim($text, "_") . "<br>";
echo "pad: " . str_pad($text, 21, "@", STR_PAD_BOTH) . "<br>";
echo "replace: " . str_replace("_", " ", $text) . "<br>";
echo "reverse: " . strrev($text) . "<br>";
echo "shuffle: " . str_shuffle($text) . "<br>";
echo strcmp($text, "___Q W E r_t_sy#") ? "different string" : "same string";
echo "<br>";
echo "length: " . strlen($text) . "<br>";
echo "position of E: " . strpos($text, "E") . "<br>";
echo "substring: " . substr($text, 0, 7) . "<br>";

echo "<br>";
echo "string to array: <br>";
foreach (explode(' ', $text) as $word) {
    echo $word . "<br>";
}
echo "<br>";

echo "array to string: " . implode(" ", $arr) . "<br>";
