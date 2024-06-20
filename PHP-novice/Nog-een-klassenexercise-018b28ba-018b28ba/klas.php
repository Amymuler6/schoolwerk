<?php

$studenten = readline('Wie zit er in de klas? ');

$klass = (
    explode(' ' , $studenten)
);



echo ('De studenten in de klas zijn:' . PHP_EOL);
foreach ($klass as $value) {
    echo $value . PHP_EOL;
}
?>