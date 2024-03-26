<?php
$mymarks["year 1"] = 55;
$mymarks["year 2"] = 65;
$mymarks["year 3"] = 75;

foreach ($mymarks as $index => $value) {
    echo "For $index my grade was $value <br/>";
}
echo "<br/> My best year was Year 3 when I averaged " . $mymarks["year 3"];
?>

<!DOCTYPE html>
<html>
<head>
<title>Marks Table</title>
</head>
<body>
<table border="1" align="center">
<tr><th>Module year</th><th>Mark</th></tr>
<?php
// Display the marks for each module in a table
foreach ($mymarks as $module => $mark) {
    echo "<tr><td>$module</td><td>$mark</td></tr>";
}
?>
</table>
</body>
</html>