<?php

$hoeveel = readline("Hoeveel activiteiten wil je toevoegen? ") ;

$bucketlist = array();

if (!is_numeric($hoeveel)) {
    echo ($hoeveel . " is geen getal. Probeer het opnieuw.") ;
    exit;
} else {
    for ($a = 0; $a < $hoeveel; $a++) {
        $toevoegen = readline("What wil je toevoegen aan je bucketlist? ") ;
        array_push($bucketlist, "$toevoegen") ;

        if ($a == $hoeveel) {
            continue;
        }
    }
}
echo ("In jouw bucket list staat" . PHP_EOL);
for ($b = 0; $b < $hoeveel; $b++) {
    echo ($bucketlist[$b]) . PHP_EOL;
}
