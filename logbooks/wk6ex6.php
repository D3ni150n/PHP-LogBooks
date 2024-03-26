<?php
include("myfunctions.inc");

$allowance = 5000;

html_header("My second function demo");
echo "I pay £" . calculatetax(15000, 40, $allowance) . " tax";
html_footer();
?>


