<!DOCTYPE html>
<html>

<head>
    <title>steen, papier, schaar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Steen, Papier, schaar</h1>
        <?php
        if (!isset($_GET['speler1keuze'])) {
            // Speler 1 keuze
            echo 'Speler 1: kies een optie:';
            echo '<form method="get" action="">
        <label for="speler1keuze">Speler 1:</label>
        <select name="speler1keuze">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select>
        <input type="submit" value="Keuze opslaan">
        </form>';
        } elseif (!isset($_GET['speler2keuze'])) {
            // Als speler 1 een keuze heeft gemaakt, zet keuze.
            $speler1keuze = $_GET['speler1keuze'];
            // Speler 2 keuze
            echo 'Speler 2: kies een optie:';
            echo '<form method="get" action="">
        <label for="speler2keuze">Speler 2:</label>
        <select name="speler2keuze">
            <option value="steen">Steen</option>
            <option value="papier">Papier</option>
            <option value="schaar">Schaar</option>
        </select>
        <input type="hidden" name="speler1keuze" value="' . $speler1keuze . '">
        <input type="submit" value="Keuze opslaan">
        </form>';
        } elseif (isset($_GET['speler2keuze'])) {
            // Bereken resultaat
            $speler1keuze = $_GET['speler1keuze'];
            $speler2keuze = $_GET['speler2keuze'];

            echo "Speler 1 koos: " . $speler1keuze . "<br>";
            echo "Speler 2 koos: " . $speler2keuze . "<br>";

            if ($speler1keuze == $speler2keuze) {
                echo "Gelijkspel!";
            } elseif (($speler1keuze == "steen" && $speler2keuze == "schaar") || ($speler1keuze == "papier" && $speler2keuze == "steen") || ($speler1keuze == "schaar" && $speler2keuze == "papier")) {
                echo "Speler 1 wint!";
            } else {
                echo "Speler 2 wint!";
            }
        }
        ?>
    </main>
</body>

</html>