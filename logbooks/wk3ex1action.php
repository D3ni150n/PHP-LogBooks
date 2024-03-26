<!DOCTYPE html>
<html>
<head>
    <title>Response to form</title>
</head>
<body>
<?php
    // Check if the keys exist in the $_POST array
    $name = isset($_POST['txtname']) ? $_POST['txtname'] : '';
    $gender = isset($_POST['radsex']) ? $_POST['radsex'] : '';
    $occupation = isset($_POST['seloccupation']) ? $_POST['seloccupation'] : '';

    // Display the values
    echo "Your name is $name<br/>";
    echo "Your gender is $gender<br/>";
    echo "Your occupation is $occupation<br/>";
?>
</body>
</html>

