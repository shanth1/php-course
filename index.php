<?php
/*
    ? isset() - returns TRUE if a variable is declared and not null
    ? empty() - returns TRUE if a variable is not declared, false, null, ""
*/

$username = null;

echo isset($username) ? "isset returns true" : "isset returns false";
echo "<br>";
echo empty($username) ? "empty returns true" : "empty returns false";
