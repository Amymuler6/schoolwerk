<?php

$input = $argv;

if (empty($input[1]) or $input[1] === 0) {
    echo 'Geen wisselgeld';
} else {
    echo intval($input[1]) . ' x 1 euro';
}

?>