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

        $keuzes = ["steen", "papier", "schaar"];
        $_SESSION['computerKeuze'] = $keuzes[rand(0, 2)];

        echo '<h2>Kies een spelmodus:</h2>';
        echo '<form method="get" action="">
            <input type="submit" name="spelkeuze" value="speler tegen speler">
            <input type="submit" name="spelkeuze" value="speler tegen computer">
            </form>';

        if (isset($_GET['spelkeuze'])) {
            //computer
            if ($_GET['spelkeuze'] == 'speler tegen computer') {
                header('Location: tegen_computer.php');
                exit;
                //speler
            } elseif ($_GET['spelkeuze'] == 'speler tegen speler') {
                header('Location: tegen_speler.php');
                exit;
            }
        }
        ?>
    </main>
</body>

</html>