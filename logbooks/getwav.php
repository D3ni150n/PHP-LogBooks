<?php
header("Content-type: audio/wav");

$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$monster_id = $_GET['id'];

$sql = "SELECT Audio FROM monster WHERE id='$monster_id'";

$result = mysqli_query($conn, $sql);

if ($result) {
    // Fetch the row containing the audio data
    $row = mysqli_fetch_assoc($result);
    
    // Check if a row was found
    if ($row) {
        // Get the audio data from the row
        $audio_data = $row['Audio'];
        
        // Output the audio data
        echo $audio_data;
    } else {
        echo "No audio found for the specified monster ID";
    }
} else {
    echo "Error: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
