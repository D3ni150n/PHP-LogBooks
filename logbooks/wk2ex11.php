<?php
// Define an array $mymarks with module codes as keys and marks as values
$mymarks = [
    "CS101" => 85,
    "CS102" => 78,
    "CS103" => 90,
    "CS104" => 70,
    "CS105" => 82,
    "CS106" => 88
];

// Display the marks for each module
foreach ($mymarks as $module => $mark) {
    echo "Module $module: $mark <br/>";
}

// Calculate the average mark
$total = 0;
foreach ($mymarks as $mark) {
    $total = $total + $mark;
}
$average = $total / 6;

// Output the average mark
echo "Average mark: $average";
?>
