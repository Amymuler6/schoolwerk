<?php

$operatie = readline('Welke operatie wil je uitvoeren? (+,-). " "');

$eerste_getal = readline('Eerste getal?');

$tweede_getal = readline('Tweede getal?');

if ($operatie == ("-")) {
    $resultaat = $eerste_getal - $tweede_getal;
    echo 'Uw resultaat is' . " " . $resultaat;
} elseif ($operatie == ("+")) {
    $resultaat2 = $eerste_getal + $tweede_getal;
    echo 'Uw resultaat is' . " " . $resultaat2;
}

?>