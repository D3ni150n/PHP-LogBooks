<?php
function html_header($pageTitle)
{
    echo "<html><head><title>$pageTitle</title></head>";
    echo "<body>";
}

function html_h1($text)
{
    echo "<h1>$text</h1>";
}

function html_h2($text)
{
    echo "<h2>$text</h2>";
}

function html_footer()
{
    echo "</body>";
    echo "</html>";
}

function calculatetax($salary, $rate = 40, $allowance = 0)
{
    // Subtract tax allowance from salary
    $taxableSalary = $salary - $allowance;
    
    // Calculate tax
    $tax = ($taxableSalary * ($rate / 100));
    
    return $tax;
}




 