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
        // Use connect.php to connect to the database
        include 'connect.php';

        // Get the ID and type from the URL
        $detailsid = $_GET['id'];
        $type = $_GET['type'];

        // Fetch details based on the type of media
        if ($type === 'film') {
            $detailsMedia = $comn->query("SELECT * FROM movies WHERE id = $detailsid;");
        } elseif ($type === 'series') {
            $detailsMedia = $comn->query("SELECT * FROM series WHERE id = $detailsid;");
        }

        $details = $detailsMedia->fetchAll();

        // Display title
        echo '<h2>' . $details[0]['title'] . '</h2>';

        // Display table with information
        echo '<table><tr><th> Information</th><th> Information</th></tr>';

        if ($type === 'film') {
            echo "<tr> <td> Release Date </td> <td>{$details[0]['released_at']}</td> </tr>
            <tr> <td> Country of Origin </td> <td>{$details[0]['country_of_origin']}</td> </tr>
            <tr> <td> Duration </td> <td>{$details[0]['length_in_minutes']}</td> </tr>";
        } elseif ($type === 'series') {
            echo "<tr> <td> Awards </td> <td>{$details[0]['has_won_awards']}</td> </tr>
            <tr> <td> Seasons </td> <td>{$details[0]['seasons']}</td> </tr>
            <tr> <td> Country </td> <td>{$details[0]['country']}</td> </tr>
            <tr> <td> Spoken Language </td> <td>{$details[0]['spoken_in_language']}</td> </tr>
            <tr> <td> Rating </td> <td>{$details[0]['rating']}</td> </tr>";
        }

        echo '</table>';

        // Display description
        echo '<h2> Beschrijving </h2>';
        echo '<p class="beschrijving">' . $details[0]['summary'] . '</p>';

        // Display link to edit based on media type
        if ($type === 'film') {
            echo "<tr><td><a href=\"edit.php?type=film&id={$detailsid}\">edit film</a></td></tr>";
        } elseif ($type === 'series') {
            echo "<tr><td><a href=\"edit.php?type=series&id={$detailsid}\">edit serie</a></td></tr>";
        }
        ?>
    </main>
</body>

</html>