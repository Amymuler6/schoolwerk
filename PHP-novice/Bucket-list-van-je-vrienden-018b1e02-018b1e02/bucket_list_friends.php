<?php

$hoeveel = readline("Hoeveel vrienden zal ik vragen naar hun droom? ");

if (!is_numeric($hoeveel)) {
    echo ($hoeveel . " is geen getal. Probeer het opnieuw.");
    exit;
}

$frienden = array(); 

for ($a = 0; $a < $hoeveel; $a++) {
    $toevoegen_naam = readline("Wat is jouw naam? ");
    $toevoegen_droom = readline("Wat is jouw droom? ");
    
    $friend = array(
        'naam' => $toevoegen_naam,
        'droom' => $toevoegen_droom
    );

    $frienden[] = $friend;
}

echo ("In jouw bucket list staat" . PHP_EOL);

foreach ($frienden as $friend) {
    echo "Naam: " . $friend['naam'] . ", Droom: " . $friend['droom'] . PHP_EOL;
}

?>