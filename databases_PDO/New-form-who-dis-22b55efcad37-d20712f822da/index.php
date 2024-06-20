<?php
session_start();

// Check if the user is not logged in and redirect to the login page
if (!isset($_SESSION['username'])) {
    header('Location: login.php');
    exit();
}
?>


<!DOCTYPE html>
<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h1>Welkom op het Netland beheerders paneel</h1>

        <?php
        include 'connect.php';

        // Function to toggle the sort order
        function toggleSortOrder($currentOrder)
        {
            return ($currentOrder === 'asc') ? 'desc' : 'asc';
        }

        // Default sorting order for series
        $seriesSortColumn = isset($_GET['series_sort']) ? $_GET['series_sort'] : 'title';
        $seriesSortOrder = isset($_GET['series_order']) ? $_GET['series_order'] : 'asc';
        $seriesSortOrder = toggleSortOrder($seriesSortOrder);

        // Default sorting order for films
        $filmsSortColumn = isset($_GET['movies_sort']) ? $_GET['movies_sort'] : 'title';
        $filmsSortOrder = isset($_GET['movies_order']) ? $_GET['movies_order'] : 'asc';
        $filmsSortOrder = toggleSortOrder($filmsSortOrder);

        // Series table
        echo '<H2> Series </H2>';
        echo '<table class="table1">';
        echo '<tr>
                <th><a href="?series_sort=title&series_order=' . $seriesSortOrder . '">titels</a></th>
                <th><a href="?series_sort=rating&series_order=' . $seriesSortOrder . '">beoordelingen</a></th>
              </tr>';
        // Fetch series data and display it
        $seriesStmt = $comn->query("SELECT * FROM series ORDER BY $seriesSortColumn $seriesSortOrder");
        $seriesResults = $seriesStmt->fetchAll();
        foreach ($seriesResults as $rowS) {
            $idS = htmlentities($rowS[0]);
            $titleS = htmlentities($rowS[1]);
            $ratingS = htmlentities($rowS[2]);
            echo "<tr><td>{$titleS}</td><td>{$ratingS}</td>
              <td><a href=\"detail.php?type=series&id={$idS}\">bekijk details</a></td>
              </tr>";
        }
        echo '</table>';

        // Films table
        echo '<H2> Films </H2>';
        echo '<table class="table2">';
        echo '<tr>
                <th><a href="?movies_sort=title&movies_order=' . $filmsSortOrder . '">titels</a></th>
                <th><a href="?movies_sort=length_in_minutes&movies_order=' . $filmsSortOrder . '">duur</a></th>
              </tr>';
        // Fetch films data and display it
        $filmsStmt = $comn->query("SELECT * FROM movies ORDER BY $filmsSortColumn $filmsSortOrder");
        $filmsResults = $filmsStmt->fetchAll();
        foreach ($filmsResults as $rowM) {
            $idM = htmlentities($rowM[0]);
            $titleM = htmlentities($rowM[1]);
            $durationM = htmlentities($rowM[2]);
            echo "<tr><td>{$titleM}</td><td>{$durationM}</td>
                 <td><a href=\"detail.php?type=film&id={$idM}\">bekijk details</a></td>
                 </tr>";
        }
        echo '</table>';

        // Check if update was successful or not
        if (isset($_GET['update_status'])) {
            if ($_GET['update_status'] === 'success') {
                echo "<p style='color: green;'>de database is geupdate</p>";
            } elseif ($_GET['update_status'] === 'unsuccessful') {
                echo "<p style='color: red;'>Er is iets mis gegaan.</p>";
            }
        }
        echo '<p><a href="add.php">add Media</a></p>';
        ?>

    </main>
</body>

</html>
