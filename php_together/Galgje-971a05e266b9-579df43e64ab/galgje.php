<!DOCTYPE html>
<html>

<head>
    <title>Galgjespel</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>

        <?php
        session_start();

        function initialiseerSessie()
        {
            if (!isset($_SESSION['foutgegokte_letters'])) {
                $_SESSION['foutgegokte_letters'] = array();
            }
        }

        function toonAfbeelding()
        {
            //maakt gebruik van de fouten count om de bijbehorende afbeelding te tonen.
            $fouten = count($_SESSION['foutgegokte_letters']);
            $afbeeldingBron = "galgjeplaatjes/galgje" . $fouten . ".png";
            echo '<img src="' . $afbeeldingBron . '">';
        }

        function controleerWoordSelectie()
        {
            if (isset($_POST['zelfinvoeren'])) {
                //verandert woord naar kleine letters met strtolower
                $woordspel = strtolower(htmlspecialchars($_POST['ingevoegd']));
                $_SESSION["woord"] = $woordspel;
                $_SESSION['display_word'] = str_repeat('_', strlen($woordspel));
            } elseif (isset($_SESSION['woord'])) {
                $woordspel = $_SESSION['woord'];
                if (!isset($_SESSION['display_word'])) {
                    $_SESSION['display_word'] = str_repeat('_', strlen($woordspel));
                }
            } else {
                header('Location: galgje_home.php');
            }
        }
        function verwerkGok()
        {
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitIngevuld'])) {
                $ingevuld = strtolower(htmlspecialchars($_POST['ingevuld']));
                $woordspel = $_SESSION['woord'];
                $correcte_gok = false;
        
                // Controleert of de ingevulde letter al eerder is geraden met gebruik van in_array. strpos voor of de letter in het woord zit
                if (!in_array($ingevuld, $_SESSION['foutgegokte_letters']) && strpos($_SESSION['display_word'], $ingevuld) === false) {
                    for ($i = 0; $i < strlen($woordspel); $i++) {
                        if ($woordspel[$i] === $ingevuld) {
                            $_SESSION['display_word'][$i] = $ingevuld;
                            $correcte_gok = true;
                        }
                    }
        
                    if (!$correcte_gok) {
                        $_SESSION['foutgegokte_letters'][] = $ingevuld;
                    }
                } elseif ($_SESSION['display_word'] == $woordspel or in_array($ingevuld, $_SESSION['foutgegokte_letters']) or strpos($_SESSION['display_word'], $ingevuld) !== false) {
                    echo "Je hebt dit woord al eerder geraden.";
                }
            }
        }
        
        

        function controleerEindeSpel()
        {
            $fouten = count($_SESSION['foutgegokte_letters']);


            if ($fouten >= 12) {
                echo '<img src= "galgjeplaatjes/galgje12.png">';
                echo "Spel Voorbij. Je hebt het maximale aantal fouten overschreden." . PHP_EOL;
                echo "Het woord was " . $_SESSION['woord'] . '.';
                echo '<form action="galgje_home.php"> 
            <input type="submit" value="Opnieuw spelen">
        </form>';
                session_unset();
                exit;
            }

            if ($_SESSION['display_word'] == $_SESSION['woord']) {
                echo "Gefeliciteerd! Je hebt het woord " . $_SESSION['woord'] . " correct geraden.";
                echo '<form action="galgje_home.php"> 
            <input type="submit" value="Opnieuw spelen">
        </form>';
                session_unset();
                exit;
            }
        }

        function toonWoordEnGokFormulier()
        {
            echo '<p>' . implode(' ', str_split($_SESSION['display_word'])) . '</p>';

            if (!empty($_SESSION['foutgegokte_letters'])) {
                echo "<p>Fout gegokte letters: " . implode(', ', $_SESSION['foutgegokte_letters']) . "</p>";
            }
            $fouten = count($_SESSION['foutgegokte_letters']);
            $resterendePogingen = 12 - $fouten;

            echo "Je mag nog " . $resterendePogingen . " keer fout gokken.";
            echo '<form action="galgje.php" method="post" onsubmit="return valideerForm()">
        <input type="text" id="ingevuld" name="ingevuld" maxlength="1">
        <input type="submit" id="submitIngevuld" name="submitIngevuld" value="Invoeren">
    </form>';
        }

        initialiseerSessie();
        controleerWoordSelectie();
        verwerkGok();
        controleerEindeSpel();
        toonAfbeelding();
        toonWoordEnGokFormulier();

        ?>
        <!-- javascript voor als er geen woord is ingevoerd/controleren karakters. -->
        <script>
            function valideerForm() {
                var inputVeld = document.getElementById("ingevuld").value;
                var letters = /^[a-zA-Z]+$/; //aleen letters
                if (inputVeld.trim() == "") { //is het leeg
                    alert("Voer een woord in.");
                    return false;
                } else if (!letters.test(inputVeld)) {
                    alert("Geen cijfers of speciale karakters gebruiken!");
                    return false;
                }
                return true;
            }
        </script>
    </main>
</body>

</html>