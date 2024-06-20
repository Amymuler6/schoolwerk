<?php

$command = array_slice($argv, 1);
$eind_resultaat = 0;

for ($i = 0; $i < count($command); $i++) {
    $b = substr($command[$i], 0, -1);
    $c = substr($command[$i], -1);

    switch ($c) {
        case 'd':
            $resultaatd = $b * 86400;
            $eind_resultaat += $resultaatd;
            break;

        case 'u':
            $resultaatu = $b * 3600;
            $eind_resultaat += $resultaatu;
            break;

        case 'm':
            $resultaatm = $b * 60;
            $eind_resultaat += $resultaatm;
            break;

        case 's':
            $resultaats = $b * 1;
            $eind_resultaat += $resultaats;
            break;
    }
}

if (empty($command)) {
    echo 'Geen tijd is meegegeven';
    exit;
}

echo ((int) $eind_resultaat . ' seconden');
?>