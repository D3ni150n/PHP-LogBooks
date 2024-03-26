<!DOCTYPE html>
<html>
<head>
    <title>Display Monsters</title>
</head>
<body>

<?php
$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT id, name FROM monster";

$result = mysqli_query($conn, $sql);

echo "<table align='center' border='1'>";
echo "<tr><th width='200' align='left'>ID</th><th width='200' align='left'>Name</th><th>Audio</th><th>Image</th></tr>";

while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>";
    echo "<td>" . $row['id'] . "</td>";
    echo "<td>" . $row['name'] . "</td>";
    // Link to getwav.php to play audio
    echo "<td><a href='getwav.php?id=" . $row['id'] . "'>Click to play</a></td>";
    // Display image using getjpg.php
    echo "<td><img src='getjpg.php?id=" . $row['id'] . "' height='100' width='100'></td>";
    echo "</tr>";
}

echo "</table>";

mysqli_close($conn);
?>
</body>
</html>

