<html>
<body>
<?php
    $hourlyrate = 5.75;
    $hoursperweek = 40;
    $gross = $hourlyrate * $hoursperweek;
    $taxRate = 0.22; // 22% tax rate
    $taxAmount = $gross * $taxRate;
    $net = $gross - $taxAmount;
    echo $net;
?>
</body>
</html>
