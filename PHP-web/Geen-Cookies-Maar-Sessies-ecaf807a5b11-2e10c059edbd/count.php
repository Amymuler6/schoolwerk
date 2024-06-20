<!DOCTYPE html>
<html>

<head>
    <title>Web visit counter </title>
</head>

<body>
    <H1>Hallo!</H1>

<?php
if (isset($_SESSION['eerder'])) {
    $aantal_keer = $_SESSION['eerder'] + 1;
} else {
    $aantal_keer = 0;
}

echo ('Aantal bezoeken: ' . $aantal_keer);
$_SESSION['eerder'] = $aantal_keer;
?>

</body>

</html>