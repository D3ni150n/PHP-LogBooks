<?php

$marks[0] = 65;

$marks[3] = 55;

$marks[] = 76;

echo "Index 0 = " . $marks[0] . "<br/>";

echo "Index 1 = " . (isset($marks[1]) ? $marks[1] : "Not set") . "<br/>";

echo "Index 2 = " . (isset($marks[2]) ? $marks[2] : "Not set") . "<br/>";

echo "Index 3 = " . $marks[3] . "<br/>";

echo "Index 4 = " . $marks[4] . "<br/>";

echo "Index 5 = " . (isset($marks[5]) ? $marks[5] : "Not set") . "<br/>";

?>


