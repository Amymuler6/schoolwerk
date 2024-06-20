<?php

$input = $argv[1];
define('EURO', [
    50, 
    20, 
    10, 
    5, 
    2, 
    1,
    0.50,
    0,20,
    0.10,
    0.5]);

if (empty($input) or $input === 0) {
    echo ('Geen wisselgeld');
    exit;
} 

foreach (EURO as $value) {
    $over = floor($input / $value);
    if ($over >= 1) {
        $input = $input - ($value * $over);
        if ($value >= 1) {
            echo "$over x $value euro";
        } else {
            echo "$over x $value cent";
        }
    }
}

?>
