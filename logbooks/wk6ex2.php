<?php
    // Set database credentials
    $servername = "localhost";
    $username = "root"; 
    $password = ""; 
    $dbname = "db1_gwalke01;"; 

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // SQL statement to select all records from the "test" table
    $sql = "SELECT * FROM test";

    // Execute SQL statement for selection
    $result = $conn->query($sql);

    // Display list of people as links
?>
<!DOCTYPE html>
<html>
<head>
    <title>List of People</title>
</head>
<body>

<?php
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo "<a href=\"wk6ex2action.php?id=" . urlencode($row['name']) . "\">" . $row['name'] . "</a><br>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
?>

</body>
</html>

