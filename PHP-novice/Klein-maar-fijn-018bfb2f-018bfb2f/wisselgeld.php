<?php

$input = $argv[1];
define('CENTEN', [
    5000, 
    2000, 
    1000, 
    500, 
    200, 
    100,
    50,
    20,
    10,
    5,
    2]);

if (empty($input[0]) or $input[0] === 0) {
    echo ('Geen wisselgeld');
    exit;
} 

$inputnaarcenten = $input * 100;

foreach (CENTEN as $value) {
    $over = floor($inputnaarcenten / $value);
    if ($over >= 1) {
        $inputnaarcenten = $inputnaarcenten - ($value * $over);
        if ($value >= 100) {
            $inputnaareuro = $value / 100;
            echo "$over x $inputnaareuro euro" . PHP_EOL;
        } else {
            $valueInCent = $value;
            echo "$over x $valueInCent cent" . PHP_EOL;
        }
    }
}
?>
