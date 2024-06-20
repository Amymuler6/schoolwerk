<!DOCTYPE html>

<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer> </script>
</head>

<body>
    <main>
        <?php
        //gebruikt connect.php om in de database te komen
        include 'connect.php';
        $detailsid = $_GET['id'];

        $detailsseries = $comn->query("SELECT * FROM series WHERE id = $detailsid;");
        $detailss = $detailsseries->fetchAll();

        echo '<h2>' . $detailss[0]['title'] . '</h2>';
        echo '<table><tr><th> information</th><th> information</th></tr>';
        echo "<tr> <td> awards </td> <td>{$detailss[0]['has_won_awards']}</td> </tr>
        <tr> <td> seasons </td> <td>{$detailss[0]['seasons']}</td> </tr>
        <tr> <td> country </td> <td>{$detailss[0]['country']}</td> </tr>
        <tr> <td> language </td> <td>{$detailss[0]['spoken_in_language']}</td> </tr>
        <tr> <td> rating </td> <td>{$detailss[0]['rating']}</td> </tr>";
        echo '</table>';
        echo '<h2> Beschrijving </h2>';
        echo '<p class="beschrijving">' . $detailss[0]['summary'] . '</p>';
        ?>
    </main>
</body>



</html>