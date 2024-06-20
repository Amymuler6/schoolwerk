<?php

function checkInput($argv)
{
    if (empty($argv[1]) || $argv[1] === '0') {
        echo 'Geen wisselgeld';
        exit;
    } else {
        $afronding = round($argv[1] / 5, 2);
        $herrekening = $afronding * 5;

        return $herrekening;
    }
}

function naarcenten($input)
{
    return $input * 100;
}

function berekening($centen)
{
    define('CENTEN', [
        5000,
        2000,
        1000,
        500,
        200,
        100,
        50,
        20,
        10,
        5,
        2
    ]);

    $result = '';

    foreach (CENTEN as $value) {
        $over = floor($centen / $value);
        if ($over >= 1) {
            $centen -= $value * $over;
            if ($value >= 100) {
                $valueInEuro = $value / 100;
                $result .= "$over x $valueInEuro euro" . PHP_EOL;
            } else {
                $valueInCent = $value;
                $result .= "$over x $valueInCent cent" . PHP_EOL;
            }
        }
    }

    return $result;
}

$input = checkInput($argv);
$centen = naarcenten($input);
$resultaat = berekening($centen);

echo $resultaat;
?>