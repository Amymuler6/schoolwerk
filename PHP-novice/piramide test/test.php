<?php

$hoeveelheid_stapels = readline("Hoeveel stapels wil je hebben? ");

for ($a = 0; $a <= $hoeveelheid_stapels; $a++) {
    $b = str_repeat('*', $a);
    echo($b . PHP_EOL);
}

?>