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

    // SQL statement to insert data into the "test" table
    $sql = "INSERT INTO test (name, email, phone_number) ";
    $sql .= "VALUES ('" . $_POST['txtName'] . "','" . $_POST['txtEmail'] . "','" . $_POST['txtPhoneNumber'] . "')";

    // Execute SQL statement for insertion
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // SQL statement to select all records from the "test" table
    $sql = "SELECT * FROM test";

    // Execute SQL statement for selection
    $result = $conn->query($sql);

    // Display records
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            echo $row['name'] . " " . $row['email'] . " " . $row['phone_number'] . "<br>";
        }
    } else {
        echo "0 results";
    }

    // Close connection
    $conn->close();
?>
