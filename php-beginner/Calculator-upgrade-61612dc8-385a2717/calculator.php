<?php

$operatie = readline('Welke operatie wil je uitvoeren? (+,-,%)' . " ");
$mogelijke_operaties = ['+', '-' , '%'];

$check = false;

if (in_array($operatie , $mogelijke_operaties)) {
    $check = true;
} elseif ($check == false) {
    echo $operatie . ' is geen geldige operatie.';
    exit;
}

$eerste_getal = readline('Eerste getal?') ;
if (is_numeric($eerste_getal) == false) {
    echo $eerste_getal . ' is geen getal';
    exit;
}

$tweede_getal = readline('Tweede getal?') ;
if (is_numeric($tweede_getal) == false) {
    echo $tweede_getal . ' is geen getal';
    exit;
}

if ($operatie == ("-")) {
    $resultaat = $eerste_getal - $tweede_getal;
    echo 'Uw resultaat is' . " " . $resultaat;
} elseif ($operatie == ("+")) {
    $resultaat2 = $eerste_getal + $tweede_getal;
    echo 'Uw resultaat is' . " " . $resultaat2;
} elseif ($operatie3 == "%") {
    $resultaat3 = $eerste_getal % $tweede_getal;
    echo 'Uw resultaat is' . " " . $resultaat3;
} 

?>