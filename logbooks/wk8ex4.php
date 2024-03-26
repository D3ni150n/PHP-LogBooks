<?php
session_start();

$conn = mysqli_connect("localhost", "root", "", "db1_gwalke01;");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_POST['selweek'])) {
    $week = $_POST['selweek'];
    $sql = "SELECT * FROM lotto WHERE wk = $week";
    $result = mysqli_query($conn, $sql);

    if (mysqli_num_rows($result) > 0) {
        $row = mysqli_fetch_assoc($result);
        echo "Number 1 is {$row['number1']}<br/>";
        echo "Number 2 is {$row['number2']}<br/>";
        echo "Number 3 is {$row['number3']}<br/>";
        echo "Number 4 is {$row['number4']}<br/>";
        echo "Number 5 is {$row['number5']}<br/>";
        echo "Number 6 is {$row['number6']}<br/>";
    } else {
        echo "No lottery numbers found for selected week";
    }
} else {
    $sql = "SELECT * FROM lotto";
    $result = mysqli_query($conn, $sql);

    echo "<form action='" . $_SERVER['PHP_SELF'] . "' method='post'>";
    echo "<br/>Select the lottery week ";
    echo "<select name='selweek'>";
    while ($row = mysqli_fetch_array($result)) {
        echo "<option value='" . $row['wk'] . "'>" . $row['lottodate'] . "</option>";
    }
    echo "</select><br/>";
    echo "<input type='submit' value='Select' />";
    echo "</form>";
}

mysqli_close($conn);
?>
