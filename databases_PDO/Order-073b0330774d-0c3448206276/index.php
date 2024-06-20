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

        // Functie om de sorteervolgorde om te schakelen
        function toggleSortOrder($huidigeVolgorde)
        {
            return ($huidigeVolgorde === 'asc') ? 'desc' : 'asc';
        }

        // Standaard sorteervolgorde voor series
        $seriesSorteerKolom = isset($_GET['series_sort']) ? $_GET['series_sort'] : 'title';
        $seriesSorteerVolgorde = isset($_GET['series_order']) ? $_GET['series_order'] : 'asc';

        // Schakel sorteervolgorde voor series
        $seriesSorteerVolgorde = toggleSortOrder($seriesSorteerVolgorde);

        // Standaard sorteervolgorde voor films
        $filmsSorteerKolom = isset($_GET['movies_sort']) ? $_GET['movies_sort'] : 'title';
        $filmsSorteerVolgorde = isset($_GET['movies_order']) ? $_GET['movies_order'] : 'asc';

        // Schakel sorteervolgorde voor films
        $filmsSorteerVolgorde = toggleSortOrder($filmsSorteerVolgorde);

        // Series tabel
        echo '<H2> Series </H2>';
        echo '<table method="get" class="table1">';
        echo '<tr>
                <th><a href="?series_sort=title&series_order=' . $seriesSorteerVolgorde . '">titels</a></th>
                <th><a href="?series_sort=rating&series_order=' . $seriesSorteerVolgorde . '">beoordelingen</a></th>
              </tr>';
        // Haal series data op en toont het
        $seriesstmt = $comn->query("SELECT * FROM series ORDER BY $seriesSorteerKolom $seriesSorteerVolgorde");
        $seriesresultaten = $seriesstmt->fetchall();
        foreach ($seriesresultaten as $rijS) {
            $ids = htmlentities($rijS[0]);
            $titelSeries = htmlentities($rijS[1]);
            $beoordelingSeries = htmlentities($rijS[2]);
            echo "<tr><td>{$titelSeries}</td><td>{$beoordelingSeries}</td>
              <td><a href=\"detail_serie.php?id={$ids}\">bekijk details</a></td></tr>";
        }
        echo '</table>';

        // Films tabel
        echo '<H2> Films </H2>';
        echo '<table method="get" class="table2">';
        echo '<tr>
                <th><a href="?movies_sort=title&movies_order=' . $filmsSorteerVolgorde . '">titels</a></th>
                <th><a href="?movies_sort=length_in_minutes&movies_order=' . $filmsSorteerVolgorde . '">duur</a></th>
              </tr>';
        // Haal films data op en toont het
        $filmsstmt = $comn->query("SELECT * FROM movies ORDER BY $filmsSorteerKolom $filmsSorteerVolgorde");
        $filmsresultaten = $filmsstmt->fetchall();
        foreach ($filmsresultaten as $rijM) {
            $idm = htmlentities($rijM[0]);
            $titelFilms = htmlentities($rijM[1]);
            $duurFilms = htmlentities($rijM[2]);
            echo "<tr><td>{$titelFilms}</td><td>{$duurFilms}</td>
                 <td><a href=\"detail_film.php?id={$idm}\">bekijk details</a></td></tr>";
        }
        echo '</table>';
        ?>
        
    </main>
</body>

</html>