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
        session_start();

        if (!isset($_GET['speler1Keuze'])) {
            echo '<h2>Tegen computer:</h2>';
            echo '<h2>Speler 1: Kies een optie</h2>';
            echo '<form id="speler1Form" method="get" action="">
            <label for="speler1Keuze">Speler 1:</label>
            <select name="speler1Keuze">
                <option value="steen">Steen</option>
                <option value="papier">Papier</option>
                <option value="schaar">Schaar</option>
            </select>
            <input type="submit" value="Keuze opslaan">
          </form>';
        } else {
            // Bereken resultaat
            $speler1Keuze = $_GET['speler1Keuze'];

            echo "<h2>Speler koos: $speler1Keuze</h2>";
            echo "<h2>Computer koos:" . $_SESSION['computerKeuze'] . "</h2>";

            if ($speler1Keuze == $_SESSION['computerKeuze']) {
                echo '<h2">Gelijkspel!</h2>';
            } elseif (
                ($speler1Keuze == "steen" && $_SESSION['computerKeuze'] == "schaar") ||
                ($speler1Keuze == "papier" && $_SESSION['computerKeuze'] == "steen") ||
                ($speler1Keuze == "schaar" && $_SESSION['computerKeuze'] == "papier")
            ) {
                echo '<h2>Jij wint!</h2>';
            } else {
                echo '<h2>Jij verliest</h2>';
            }

            echo '<form id="opnieuwSpelenForm" method="get" action="game.php">
            <input type="submit" name="opnieuw_spelen" value="opnieuw spelen">
          </form>';
        }
        ?>


    </main>
</body>

</html>