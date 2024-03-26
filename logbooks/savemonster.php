<?php
$db = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

if (!$db) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_FILES['monsterimage']) && isset($_FILES['monsteraudio'])) {
    $image = $_FILES['monsterimage']['tmp_name'];
    $audio = $_FILES['monsteraudio']['tmp_name'];

    if(!empty($image) && !empty($audio)) {
        $imagedata = addslashes(file_get_contents($image));
        $audiodata = addslashes(file_get_contents($audio));
        
        // Get the monster name from the form
        $name = $_POST['txtname'];

        $sql = "INSERT INTO monster (Name, Image, Audio) VALUES ('$name', '$imagedata', '$audiodata')";

        // Execute the query
        if (mysqli_query($db, $sql)) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $sql . "<br>" . mysqli_error($db);
        }
    } else {
        echo "Error: Uploaded files are empty";
    }
} else {
    echo "Error: Form data not received";
}

// Close the database connection
mysqli_close($db);
?>

