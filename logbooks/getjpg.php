<?php
// Set the content type header to indicate that the response contains an image
header("Content-type: image/jpeg");

// Replace 'mysqlusername', 'mysqlpassword', and 'databasename' with your MySQL credentials
$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

// Check if connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Get the ID of the monster from the URL parameter
$monster_id = $_GET['id'];

// Prepare SQL query to select the image data for the specified monster ID
$sql = "SELECT Image FROM monster WHERE id='$monster_id'";

// Execute the query
$result = mysqli_query($conn, $sql);

// Check if the query was successful
if ($result) {
    // Fetch the row containing the image data
    $row = mysqli_fetch_assoc($result);
    
    // Check if a row was found
    if ($row) {
        // Get the image data from the row
        $image_data = $row['Image'];
        
        // Output the image data
        echo $image_data;
    } else {
        echo "No image found for the specified monster ID";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>

