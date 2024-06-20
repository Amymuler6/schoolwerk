<!DOCTYPE html>
<html>

<head>
    <title>Netland login</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
</head>

<body>
    <form method="POST" action="">
        <h1>Netland Admin Panel:</h1>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username">
        <label for="wachtwoord">wachtwoord:</label>
        <input type="password" id="wachtwoord" name="wachtwoord">
        <input type="submit" value="Login">
        <?php
        //maakt een sessie
        session_start();
        //connect.php
        include "connect.php";
        //als de submit button is gepressed wordt het geredirect naar de zelfde pagina. Als dit gebeurt...
        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            //checkt of username en wachtwoord is ingevuld.
            if (isset($_POST['username']) && isset($_POST['wachtwoord'])) {
                $username = $_POST['username'];
                $wachtwoord = $_POST['wachtwoord'];
                try {
                    //statement kijkt of het in de database is.
                    $stmt = $comn->prepare("SELECT * FROM gebruikers WHERE `username` = ? AND `wachtwoord` = ?");
                    //voert de statement uit
                    $stmt->execute([$username, $wachtwoord]);
                    //pakt de resultaat met gebruik van fetch
                    $result = $stmt->fetch(PDO::FETCH_ASSOC);
                    if ($result) {
                        // als de login succesvol is
                        $_SESSION['username'] = $username;
                        header('Location: index.php');
                        exit();
                    } else {
                        //anders
                        echo 'Username of wachtwoord klopt niet.';
                    }
                } catch (PDOException $err1) {
                    echo 'er is een error.';
                }
            } else {
                echo 'Vull een username en wachtwoord in.';
            }
        }
        ?>
    </form>
</body>

</html>