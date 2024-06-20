<?php

$overzicht = array(
    'Citizen og Glass' => 4.5,
    'Night' => 9,
    'New Eyes' => 5,
    'Strange Trails' => 10
);

print ('Het albumoverzicht: ' . PHP_EOL);

foreach ($overzicht as $album => $prijs) {
    print ($album . ' kost €' . $prijs . PHP_EOL);
}

$totaal_bedrag = 28.5;
print('Het totaalbedrag van alle albums is ' . $totaal_bedrag . PHP_EOL);

$gemiddelde = $totaal_bedrag / count($overzicht);
print('Het gemiddelde prijs van alle albums is €' . $gemiddelde);


?>