<?php

$aantal = readline('Hoeveel landen ga je toevoegen? ');
$overzicht = array();

if (!is_numeric($aantal)) {
    echo ($aantal . " is geen getal. Probeer het opnieuw.");
    exit;
}

for ($a = 0; $a < $aantal; $a++) {
    $land = readline('welke land wil je toevoegen? ');
    $hoofdstad = readline('wat is de hoofdstad van ' . $land . " ");
    $toegevoegd = array(
        'land' => $land,
        'hoofdstad' => $hoofdstad
    );
    $overzicht[] = $toegevoegd;
}

echo ("Volgende landen en steden zitten in de database:" . PHP_EOL);

foreach ($overzicht as $toegevoegd) {
    echo $toegevoegd ['land'] . ", " . $toegevoegd ['hoofdstad'] . PHP_EOL;
}


?>