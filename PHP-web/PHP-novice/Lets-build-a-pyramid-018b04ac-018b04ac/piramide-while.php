<?php

$hoeveelheid_stapels = readline("Hoeveel stapels wil je hebben?");

$a = 0;

while (true) {
    $b = 0;
    while ($b <= $a) {
        echo('*');
        $b++;
    }
    echo(PHP_EOL);
    $a++;

    if ($a >= $hoeveelheid_stapels) {
        break;
    }
}

// ik deed het samen met een while true, break loop.

?>