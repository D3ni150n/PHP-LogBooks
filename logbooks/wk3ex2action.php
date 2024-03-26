<?php
if (isset($_POST["txtage"])) {
    if ($_POST["txtage"] < 21) {
        echo "You are under 21 years old<br/>";
    } else {
        echo "You are 21 years old or over<br/>";
    }
} else {
    echo "Age not provided<br/>";
}

if (isset($_POST["txtgender"])) {
    if ($_POST["txtgender"] == "Male") {
        echo "You are a Male<br/>";
    } elseif ($_POST["txtgender"] == "Female") {
        echo "You are a Female<br/>";
    }
} else {
    echo "Gender not provided<br/>";
}
?>
