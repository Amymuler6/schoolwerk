<?php

$hoeveelheid_stapels = readline("Hoeveel stapels wil je hebben?");

$a = 0;

while ($a < $hoeveelheid_stapels) {
    $a++;
    $b = str_repeat("*", $a);
    echo ($b . PHP_EOL);
}
