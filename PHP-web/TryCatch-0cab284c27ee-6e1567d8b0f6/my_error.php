<!DOCTYPE html>
<html>

<head>
    <title>Weberror </title>
</head>

<body>
    <H1>Hallo!</H1>
    <?php

    function countdown($getal)
    {
        if ($getal <= 10 and $getal > 0) {
            return true;
        } else {
            throw new Exception($getal . ' zit niet tussen de 1 en 10');
        }
    }

    try {
        countdown(11);
        echo ('De nummer is tussen de 1 en 10');
    } catch (Exception $e) {
        echo $e->getMessage();
        error_log('nummer niet tussen 1 en 10', 1);
    }

    ?>
</body>

</html>