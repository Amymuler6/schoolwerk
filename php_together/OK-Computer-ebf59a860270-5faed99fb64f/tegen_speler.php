<!DOCTYPE html>
<html>

<head>
    <title>Steen, Papier, Schaar</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Steen, Papier, Schaar</h1>
        <?php

        // Speler tegen speler
        if (!isset($_GET['speler1Keuze'])) {
            // Speler 1 keuze
            echo '<h2>Speler tegen speler:</h2>';
            echo '<h2>Speler 1: Kies een optie</h2>';
            echo '<form method="get" action="">
                <label for="speler1Keuze">Speler 1:</label>
                <select name="speler1Keuze">
                    <option value="steen">Steen</option>
                    <option value="papier">Papier</option>
                    <option value="schaar">Schaar</option>
                </select>
                <input type="submit" value="Keuze opslaan">
                </form>';
        } elseif (isset($_GET['speler1Keuze']) && !isset($_GET['speler2Keuze'])) {
            // Als speler 1 een keuze heeft gemaakt, zet keuze.
            $speler1Keuze = $_GET['speler1Keuze'];
            // Speler 2 keuze
            echo '<h2>Speler tegen speler:</h2>';
            echo '<h2>Speler 2: Kies een optie</h2>';
            echo '<form method="get" action="">
                <label for="speler2Keuze">Speler 2:</label>
                <select name="speler2Keuze">
                    <option value="steen">Steen</option>
                    <option value="papier">Papier</option>
                    <option value="schaar">Schaar</option>
                </select>
                <input type="hidden" name="speler1Keuze" value="' . $speler1Keuze . '">
                <input type="submit" value="Keuze opslaan">
                </form>';
        } elseif (isset($_GET['speler2Keuze'])) {
            // Bereken resultaat
            $speler1Keuze = $_GET['speler1Keuze'];
            $speler2Keuze = $_GET['speler2Keuze'];

            echo "<h2>Speler 1 koos: $speler1Keuze</h2>";
            echo "<h2>Speler 2 koos: $speler2Keuze</h2>";

            if ($speler1Keuze == $speler2Keuze) {
                echo "<h2>Gelijkspel!</h2>";
            } elseif (
                ($speler1Keuze == "steen" && $speler2Keuze == "schaar") ||
                ($speler1Keuze == "papier" && $speler2Keuze == "steen") ||
                ($speler1Keuze == "schaar" && $speler2Keuze == "papier")
            ) {
                echo "<h2>Speler 1 wint!</h2>";
            } else {
                echo "<h2>Speler 2 wint!</h2>";
            }
            //id:opnieuw spelen voor javascript
            echo '<form id="opnieuwSpelenForm" method="get" action="game.php">
                <input type="submit" name="opnieuw spelen" value="opnieuw spelen">
                </form>';
            if (isset($_GET['opnieuw spelen'])) {
                header('Location: game.php');
                exit;
            }
        }
        ?>
    </main>
</body>

</html>
