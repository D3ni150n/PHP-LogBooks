<!DOCTYPE html>
<html>
<head>
    <title>Select Colour Page</title>
</head>
<body>
    <form action="confirmation.php" method="post">
        <?php
            if(isset($_POST['selqty']) && isset($_POST['selsize'])) {
                $qty = $_POST['selqty'];
                $size = $_POST['selsize'];
                echo "You are ordering $qty widgets of size £$size each. <br>";
                echo "<input type='hidden' name='selqty' value='$qty'>";
                echo "<input type='hidden' name='selsize' value='$size'>";
            } else {
                echo "Order details not provided. <br>";
            }
        ?>
        Select the colour for the widgets:
        <select name="selcolour">
            <option>white</option>
            <option>red</option>
            <option>yellow</option>
            <option>green</option>
            <option>blue</option>
        </select>
        <br/><br/>
        <input type="submit" value="Buy"/>
    </form>
</body>
</html>


















