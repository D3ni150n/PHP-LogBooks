<?php
echo "User Agent: " . $_SERVER["HTTP_USER_AGENT"] . "<br>";

if (isset($_SERVER["SERVER_NAME"])) {
    echo "Server Name: " . $_SERVER["SERVER_NAME"] . "<br>";
} else {
    echo "Server Name is not set <br>";
}

if (isset($_SERVER["SERVER_PROTOCOL"])) {
    echo "Server Protocol: " . $_SERVER["SERVER_PROTOCOL"] . "<br>";
} else {
    echo "Server Protocol is not set <br>";
}
?>

