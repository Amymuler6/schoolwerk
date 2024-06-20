<!DOCTYPE html>
<html>
<head>
    <title>Web visit counter </title>
</head>

<body>
    <H1>Hallo!</H1>

<?php
if (isset($_COOKIE['bezoekjes'])) {
    $aantal_bezoekjes = $_COOKIE['bezoekjes'] + 1;
    echo ('Je hebt deze pagina ' . $aantal_bezoekjes . ' keer bezocht');
    setcookie('bezoekjes', $aantal_bezoekjes, time() + 30 * 24 * 3600);
} else {
    $aantal_bezoekjes = 1;
    echo ('Je hebt deze pagina ' . $aantal_bezoekjes . ' keer bezocht.');
}

?>

</body>

</html>