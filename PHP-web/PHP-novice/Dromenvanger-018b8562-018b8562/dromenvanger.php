<?php

$hoeveelv = readline('Hoeveel vrienden zal ik vragen om hun droom?' . PHP_EOL);
if (!is_numeric($hoeveelv)) {
    echo ($hoeveelv . " is geen getal. Probeer het opnieuw.");
    exit;
}

$dromenvanger = array();


for ($a = 0; $a < $hoeveelv; $a++) {
    $naam = readline('Wat is jouw naam?' . PHP_EOL);
    $hoeveeld = readline('Hoeveel dromen ga je opgeven? ' . PHP_EOL);

    if (!is_numeric($hoeveeld)) {
        echo ($hoeveeld . " is geen getal. Probeer het opnieuw.");
        exit;
    }

    $droomlijst = array();

    for ($b = 0; $b < $hoeveeld; $b++) {
        $droom = readline('Wat is jouw droom? ' . PHP_EOL);
        $droomlijst[] = $droom; 
    }

    $toegevoegd = array(
        'naam' => $naam,
        'dromen' => $droomlijst //array
    );

    $dromenvanger[] = $toegevoegd;
}


foreach ($dromenvanger as $vriend) {
    foreach ($vriend['dromen'] as $droom) {
        echo  $vriend['naam'] . " heeft als droom " . $droom . PHP_EOL;
    }
}


?>