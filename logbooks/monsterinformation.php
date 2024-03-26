<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }

    // Process form data
    $name = $_POST['txtname'];

    // Process image file
    $image_tmp = $_FILES['monsterimage']['tmp_name'];
    $image_data = addslashes(file_get_contents($image_tmp));

    // Process audio file
    $audio_tmp = $_FILES['monsteraudio']['tmp_name'];
    $audio_data = addslashes(file_get_contents($audio_tmp));

    // Prepare and execute SQL query to insert data into the monster table
    $sql = "INSERT INTO monster (Name, Image, Audio) VALUES ('$name', '$image_data', '$audio_data')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }

    // Close the database connection
    mysqli_close($conn);
} else {
    // Display the HTML form
?>
<!DOCTYPE html>
<html>
<head>
    <title>Monster Form</title>
</head>
<body>
    <h2>Monster information</h2>
    <form enctype="multipart/form-data" method="post">
        Monster name :
        <input type="text" name="txtname" size="15" class="form-control" /><br><br>
        Monster image :
        <input type="file" name="monsterimage" accept="image/jpeg" class="form-control" /><br><br>
        Monster Sound :
        <input type="file" name="monsteraudio" accept="audio/basic" class="form-control"  /><br><br>
        <input type="submit" class="btn btn-default" value="Save" />
    </form>
</body>
</html>
<?php
}
?>

