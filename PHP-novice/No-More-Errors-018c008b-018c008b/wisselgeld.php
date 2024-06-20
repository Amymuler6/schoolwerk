<?php

function validateInput($input)
{
    if (empty($input)) {
        throw new Exception('Geen wisselgeld');
    }

    if ($input < 0 || !is_numeric($input)) {
        throw new Exception('Input moet een positief getal zijn.');
    }

    return true;
}

function afronden($amount)
{
    return round($amount * 20) / 20;
}

function checkInput($argv)
{
    try {
        $input = $argv[1] ?? null;

        if (!is_numeric($input)) {
            throw new Exception('Geen wisselgeld');
        }

        validateInput($input);
        $input = afronden($input);
        return $input;
    } catch (Exception $e) {
        echo $e->getMessage() . PHP_EOL;
        exit;
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
        5
    ]);

    $result = '';

    foreach (CENTEN as $value) {
        $over = floor($centen / $value);
        if ($over >= 1) {
            $centen -= $value * $over;
            $unit = $value >= 100 ? ($value / 100) . ' euro' : $value . ' cent';
            $result .= "$over x $unit" . PHP_EOL;
        }
    }

    return $result;
}

try {
    $input = checkInput($argv);
    $centen = naarcenten($input);
    $resultaat = berekening($centen);

    echo $resultaat;
} catch (Exception $e) {
    echo $e->getMessage() . PHP_EOL;
}
?>