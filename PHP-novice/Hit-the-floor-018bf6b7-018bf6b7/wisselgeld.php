<?php

$input = $argv[1];
$euro = array(10, 5, 2, 1);

if (empty($input) or $input === 0) {
    echo ('Geen wisselgeld');
    exit;
} 

foreach ($euro as $value) {
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
