<!DOCTYPE html>
<html>
<head>
    <title>Select Size Page</title>
</head>
<body>
    <form action="selectcolour.php" method="post">
        <?php
            if(isset($_POST['selqty'])) {
                $qty = $_POST['selqty'];
                echo "You are ordering $qty widgets. <br>";
            } else {
                echo "Order details not provided. <br>";
            }
        ?>
        Select the size for the widgets:
        <select name="selsize">
            <option value="15.75">Small (£15.75)</option>
            <option value="16.75">Medium (£16.75)</option>
            <option value="17.75">Large (£17.75)</option>
            <option value="18.75">Extra large (£18.75)</option>
        </select>
        <input type="hidden" name="selqty" value="<?php echo $qty; ?>">
        <br/><br/>
        <input type="submit" value="Next"/>
    </form>
</body>
</html>

