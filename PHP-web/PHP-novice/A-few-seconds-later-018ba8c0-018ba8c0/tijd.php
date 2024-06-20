<?php

$command = $argv;
$b = substr($command[1], 0 , -1) ;
$c = substr($command[1], -1);

if ($c == 'd') {
    $resultaat = $b * 86400;
    echo ((int) $resultaat . ' seconden');
} elseif ($c == 'u') {
    $resultaat = $b * 3600;
    echo ((int) $resultaat . ' seconden');
} elseif ($c == 'm') {
    $resultaat = $b * 60;
    echo ((int) $resultaat . ' seconden');
} elseif ($c == 's') {
    $resultaat = $b * 1;
    echo ((int) $resultaat . ' seconden');
} else {
    echo ('probeer het opnieuw');
}


?>