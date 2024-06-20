<?php

$faculteit = readline("Van welk getal wil je de faculteit van weten? ");

$resultaat = 1;

for ($i = 1; $i <= $faculteit; $i++) {
    $resultaat *= $i;
}

echo('De faculteit van ' . $faculteit  . ' is ' . $resultaat . PHP_EOL);

?>