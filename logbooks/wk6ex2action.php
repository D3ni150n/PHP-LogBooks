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

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if the "Delete" button is clicked
    if (isset($_POST['btndelete'])) {
        // Retrieve data from the form
        $name = $_POST['txtname'];

        // Delete the record from the database
        $sql = "DELETE FROM test WHERE name='$name'";

        if ($conn->query($sql) === TRUE) {
            echo "Record deleted successfully";
            // Redirect back to wk6ex2.php after deletion
            header("Location: wk6ex2.php");
            exit(); // Ensure no further code execution after redirect
        } else {
            echo "Error deleting record: " . $conn->error;
        }
    }
}

// Retrieve ID from the URL parameter
$id = $_GET['id'] ?? '';

// If 'id' is not empty, retrieve person's details from the database
if (!empty($id)) {
    // SQL statement to select record from the "test" table based on the provided ID
    $sql = "SELECT * FROM test WHERE name = '$id'";

    // Execute SQL statement
    $result = $conn->query($sql);

    // Fetch the record
    $row = $result->fetch_assoc();
} else {
    // If 'id' is empty, display a message
    echo "No person selected.";
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Delete Person Details</title>
</head>
<body>
    <?php if (!empty($row)) { ?>
    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
        <input type="hidden" name="txtname" value="<?php echo $row['name']; ?>" />
        <p>Are you sure you want to delete <?php echo $row['name']; ?>?</p>
        <input type="submit" name="btndelete" value="Delete" />
    </form>
    <?php } ?>
</body>
</html>

<?php
// Close connection
$conn->close();
?>
