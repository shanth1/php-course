<?php
$grade = "A";

switch ($grade) {
    case 'A':
        echo "Great!";
        break;
    case 'B':
    case 'C':
    case 'D':
        echo "Ok!";
        break;
    case 'F':
        echo "Bad!";
        break;
    default:
        echo "{$grade} is not a grade!";
        break;
}
