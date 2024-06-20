<!DOCTYPE html>
<html>

<head>
    <title>Add Media</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <h2>Add Media</h2>
        <form method="POST" action="">
            <table>
                <tr>
                    <td><label for="title">Title:</label></td>
                    <td><input type="text" id="title" name="title"></td>
                </tr>
                <tr>
                    <td><label for="rating">Rating:</label></td>
                    <td><input type="text" id="rating" name="rating"></td>
                </tr>
                <tr>
                    <td><label for="summary">Summary:</label></td>
                    <td><input type="text" id="summary" name="summary"></td>
                </tr>
                <tr>
                    <td><label for="awards">Aantal awards:</label></td>
                    <td><input type="text" id="awards" name="awards"></td>
                </tr>
                <tr>
                    <td><label for="length">length in minutes:</label></td>
                    <td><input type="text" id="length" name="length"></td>
                </tr>
                <tr>
                    <td><label for="release">releasedatum (dd-mm-yy):</label></td>
                    <td><input type="date" id="release" name="release"></td>
                </tr>
                <tr>
                    <td><label for="seasons">seizoenen:</label></td>
                    <td><input type="text" id="seasons" name="seasons"></td>
                </tr>
                <tr>
                    <td><label for="country">land:</label></td>
                    <td><input type="text" id="country" name="country"></td>
                </tr>
                <tr>
                    <td><label for="youtubeID">youtube trailer ID:</label></td>
                    <td><input type="text" id="youtubeID" name="youtubeID"></td>
                </tr>
                <tr>
                    <td><label for="type">Type:</label></td>
                    <td>
                        <select id="type" name="type">
                            <option value="film">Film</option>
                            <option value="series">Series</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" name='submit' value="Opslaan"></td>
                </tr>
            </table>
        </form>
    </main>

    <?php
    include 'connect.php';

    if (isset($_POST['submit'])) {
        $title = $_POST['title'];
        $type = $_POST['type'];
        $rating = $_POST['rating'];
        $summary = $_POST['summary'];
        $country = $_POST['country'];

        try {
            if ($type === 'film') {
                $length = $_POST['length'];
                $release = $_POST['release'];
                $youtubeID = $_POST['youtubeID'];

                $stmt = $comn->prepare(
                    "INSERT INTO movies (`title`,`length_in_minutes`,`released_at`,`country_of_origin`,`summary`,`youtube_trailer_id`)
                VALUES (?, ?, ?, ?, ?, ?)"
                );

                $stmt->execute([$title, $length, $release, $country, $summary, $youtubeID]);
            } elseif ($type === 'series') {
                $awards = $_POST['awards'];
                $seasons = $_POST['seasons'];

                $stmt = $comn->prepare(
                    "INSERT INTO series (`title`,`rating`,`summary`,`has_won_awards`,`seasons`,`country`)
                VALUES (?, ?, ?, ?, ?, ?)"
                );

                $stmt->execute([$title, $rating, $summary, $awards, $seasons, $country]);
            }

            header("Location: index.php?update_status=success");
        } catch (PDOException $err2) {
            echo "Er is iets misgegaan";
        }
    }
    ?>
</body>

</html>