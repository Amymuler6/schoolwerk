<?php

$a = array (
    "Japan" => "Tokyo",
    "Mexico" => "Mexico-Stad",
    "USA" => "Washington D.C.",
    "India" => "New Delhi",
    "Zuid-Korea" => "Seoul",
    "China" => "Peking",
    "Nigeria" => "Abuja",
    "Argentinië" => "Buenos Aires",
    "Egypte" => "Cairo",
    "Engeland" => "London"
);

$gegeven_antwoorden = array();

$score = 0;

foreach ($a as $land => $hoofdstad) {
    $antwoord = readline('Welke hoofdstad heeft ' . $land . '? ');
    array_push($gegeven_antwoorden , $antwoord);

    if ($antwoord !== $hoofdstad) {
        print ('helaas,' . $antwoord . ' is niet de hoofdstad van ' . $land . PHP_EOL .
        'De correcte antwoord is: ' . $hoofdstad . PHP_EOL);
    } else {
        print ('correct!' . PHP_EOL);
        $score++;
    }
}

print('je hebt ' . $score . ' van de 10 goed geraden!');


?>