<?php

$hoeveelheid_stapels = readline("Hoeveel stapels wil je hebben?");


for ($a = 0; $a < $hoeveelheid_stapels; $a++) {
    for ($b = 0; $b <= $a; $b++) {
        echo('*');
    }
    echo(PHP_EOL);
}

?>
