<!DOCTYPE html>
<html>

<head>
    <title>kiezen woord galgje</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        session_start();
        // Als er is geklikt op "zelfinvoeren" in galgjeopties.php
        echo '<form method="post" action="galgje.php" onsubmit="return valideerForm()">';
        if (isset($_POST['zelfinvoeren'])) {
            echo '<title>invoeren woord</title>';
            echo '<h1>Zelf invoeren</h1>';
            //onsubmit om de functie van de javasecript uit te voeren.
            echo '<p>Je hebt gekozen om zelf een woord in te voeren.</p>';
            // Verborgen invoerveld
            echo '<input type="hidden" name="zelfinvoeren" id="zelfinvoeren" value="zelfinvoeren">';
            echo '<input type="text" name="ingevoegd" id="ingevoegd">';
            echo '<input type="submit" name="ingevoegdsubmit" id="ingevoegdsubmit">';
        } elseif (isset($_POST['willekeurig'])) {
            echo '<title>willekeurig woord</title>';
            echo '<h1>Willekeurig</h1>';
            echo '<p>Je hebt gekozen voor een willekeurig woord.</p>';
            echo '<p>Klik op de volgende knop om het spel te spelen.</p>';
            // Verborgen invoerveld
            echo '<input type="hidden" name="willekeurig" id="willekeurig" value="willekeurig">';
            echo '<input type="submit" name="willekeurigbutton" id="willekeurigbutton">';
            $woorden = array(
                "appel",
                "stoel",
                "fiets",
                "tafel",
                "hond",
                "kat",
                "boom",
                "scherm",
                "klok",
                "vogel"
            );
            // random nummer voor het pakken van een random woord. Dit wordt op deze pagina gegenereerd zodat er niet steeds een nieuwe woord komt bij het refreshen van de volgende pagina.
            $randomwoord = $woorden[array_rand($woorden)];
            $_SESSION['woord'] = $randomwoord;
        } else {
            header('Location: galgje_home.php');
        }
        echo '</form>';
        ?>
        <!-- javascript voor als er geen woord is ingevoerd/controleren karakters. -->
        <script>
            function valideerForm() {
                var inputVeld = document.getElementById("ingevoegd").value; 
                if (inputVeld.trim() == "") { //is het leeg
                    alert("Voer een woord in.");
                    return false;
                } else {
                    //kijkt of er alleen letters zijn. Geen cijfers of speciale karakters.
                    var letters = /^[a-zA-Z]+$/; 

                    if (!letters.test(inputVeld)) {
                        alert("Geen cijfers of speciale karakters gebruiken!");
                        return false;
                    }
                }
                return true;
            }
        </script>
    </main>
</body>

</html>