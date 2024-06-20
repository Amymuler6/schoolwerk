<!DOCTYPE html>

<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        //gebruikt connect.php om in de database te komen
        include 'connect.php';
        $detailsid = $_GET['id'];

        $detailsfilm = $comn->query("SELECT * FROM movies WHERE id = $detailsid;");
        $detailsf = $detailsfilm->fetchAll();

        echo '<h2>' . $detailsf[0]['title'] . '</h2>';
        echo '<table><tr><th> information</th><th> information</th></tr>';
        echo "<tr> <td> Datum van uitkomst </td> <td>{$detailsf[0]['released_at']}</td> </tr>
        <tr> <td> Land van uitkomst </td> <td>{$detailsf[0]['country_of_origin']}</td> </tr>
        <tr> <td> Duur </td> <td>{$detailsf[0]['length_in_minutes']}</td> </tr>";
        echo '</table>';
        echo '<h2> Beschrijving </h2>';
        echo '<p class="beschrijving">' . $detailsf[0]['summary'] . '</p>';
        ?>
    </main>
</body>



</html>