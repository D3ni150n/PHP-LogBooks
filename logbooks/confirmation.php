<?php
    if(isset($_POST['selqty']) && isset($_POST['selsize']) && isset($_POST['selcolour'])) {
        $qty = $_POST['selqty'];
        $size = $_POST['selsize'];
        $colour = $_POST['selcolour'];

        // Calculate the total price based on size
        switch ($size) {
            case 15.75:
                $price = 15.75;
                break;
            case 16.75:
                $price = 16.75;
                break;
            case 17.75:
                $price = 17.75;
                break;
            case 18.75:
                $price = 18.75;
                break;
            default:
                $price = 0;
        }

        // Calculate total cost
        $total_price = $qty * $price;

        echo "<h2> Your order qty is $qty </h2></br>";
        echo "<h2> The selected size is £$size.</h2>";
        echo "<h2> The selected colour is $colour.</h2>";
        echo "<h2> The total price is £$total_price.</h2>";
    } else {
        echo "Order details not provided.";
    }
?>












