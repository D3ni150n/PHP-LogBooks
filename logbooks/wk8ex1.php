<?php
function generateLotteryNumbers($lottodate = null) {
    if ($lottodate === null) {
        $lottodate = date("Ymd");
    }

    echo "The lottery numbers for $lottodate are ";
    for ($n = 1; $n <= 6; $n++) {
        $number[$n] = rand(1, 49);
        echo "<br/> $number[$n]";
    }

}

// Check if a date parameter is provided in the URL
if (isset($_GET['date'])) {
    $lottodate = $_GET['date'];
    generateLotteryNumbers($lottodate);
} else {
    generateLotteryNumbers();
}
?>


