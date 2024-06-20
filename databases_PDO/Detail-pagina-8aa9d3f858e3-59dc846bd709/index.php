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
        //gebruikt connect.php om in de database te komen
        include 'connect.php';

        //pakt info van database
        $moviesstmt = $comn->query("SELECT * FROM movies");
        $seriesstmt = $comn->query("SELECT * FROM series");
        $moviesresults = $moviesstmt->fetchall();
        $seriesresults = $seriesstmt->fetchall();

        //eerste table
        echo '<H2> Series </H2>';
        echo '<table method="get" class="table1">';
        echo '<tr><th>titles</th><th>ratings</th></tr>';
        //foreach loop voor het printen van de table, value = title series
        foreach ($seriesresults as $rowS) {
            $ids = htmlentities($rowS[0]);
            $titleseries = htmlentities($rowS[1]);
            $ratingsseries = htmlentities($rowS[2]);
            echo "<tr><td>{$titleseries}</td><td>{$ratingsseries}</td>
              <td><a href=\"detail_serie.php?id={$ids}\">bekijk details</a></td></tr>";
        }
        echo '</table>';

        
        //tweede table
        echo '<H2> Films </H2>';
        echo '<table method="get" class="table2">';
        echo '<tr><th>titles</th><th>duur</th></tr>';
        //foreach loop voor het printen van de table, value = title films
        foreach ($moviesresults as $rowM) {
            $idm = htmlentities($rowM[0]);
            $titlemovies = htmlentities($rowM[1]);
            $ratingsmovies = htmlentities($rowM[2]);
            echo "<tr><td>{$titlemovies}</td><td>{$ratingsmovies}</td>
                 <td><a href=\"detail_film.php?id={$idm}\">bekijk details</a></td></tr>";
        }
        echo '</table>';


        ?>

    </main>

</body>

</html>
