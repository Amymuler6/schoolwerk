<!DOCTYPE html>
<html>

<head>
    <title>Edit Media</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <main>
        <?php
        include 'connect.php';

        $detailsid = $_GET['id'];
        $type = $_GET['type'];

        if ($type === 'film') {
            $detailsMedia = $comn->query("SELECT * FROM movies WHERE id = $detailsid;");
            $details = $detailsMedia->fetchAll();

            $id = htmlentities($details[0]['id']);
            $title = htmlentities($details[0]['title']);
            $rating = htmlentities($details[0]['rating']);
            $summary = htmlentities($details[0]['summary']);
            $awards = '';
            $length = htmlentities($details[0]['length_in_minutes']);
            $release = htmlentities($details[0]['released_at']);
            $seasons = '';
            $country = htmlentities($details[0]['country_of_origin']);
            $spoken = '';
            $youtubeID = htmlentities($details[0]['youtube_trailer_id']);
        } elseif ($type === 'series') {
            $detailsMedia = $comn->query("SELECT * FROM series WHERE id = $detailsid;");
            $details = $detailsMedia->fetchAll();

            $id = htmlentities($details[0]['id']);
            $title = htmlentities($details[0]['title']);
            $rating = htmlentities($details[0]['rating']);
            $summary = htmlentities($details[0]['summary']);
            $awards = htmlentities($details[0]['has_won_awards']);
            $length = '';
            $release = '';
            $seasons = htmlentities($details[0]['seasons']);
            $country = htmlentities($details[0]['country']);
            $spoken = htmlentities($details[0]['spoken_in_language']);
            $youtubeID = '';
        }
        ?>

        <h2>Edit Media</h2>
        <form action="insert.php" method="POST">
            <input type="hidden" name="type" value="<?php echo $type; ?>">
            <input type="hidden" name="id" value="<?php echo $id; ?>">
            <table>
                <tr>
                    <td><label for="title">Title:</label></td>
                    <td><input type="text" id="title" name="title" value="<?php echo $title; ?>"></td>
                </tr>
                <tr>
                    <td><label for="rating">Rating:</label></td>
                    <td><input type="text" id="rating" name="rating" value="<?php echo $rating; ?>"></td>
                </tr>
                <tr>
                    <td><label for="summary">Summary:</label></td>
                    <td><input type="text" id="summary" name="summary" value="<?php echo $summary; ?>"></td>
                </tr>
                <?php if ($type === 'film') { ?>
                    <tr>
                        <td><label for="length">Length:</label></td>
                        <td><input type="text" id="length" name="length" value="<?php echo $length; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="release">Release Date:</label></td>
                        <td><input type="date" id="release" name="release" value="<?php echo $release; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="country">Country:</label></td>
                        <td><input type="text" id="country" name="country" value="<?php echo $country; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="youtubeID">Youtube ID:</label></td>
                        <td><input type="text" id="youtubeID" name="youtubeID" value="<?php echo $youtubeID; ?>"></td>
                    </tr>
                <?php } elseif ($type === 'series') { ?>
                    <tr>
                        <td><label for="awards">Awards:</label></td>
                        <td><input type="text" id="awards" name="awards" value="<?php echo $awards; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="seasons">Seasons:</label></td>
                        <td><input type="text" id="seasons" name="seasons" value="<?php echo $seasons; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="country">Country:</label></td>
                        <td><input type="text" id="country" name="country" value="<?php echo $country; ?>"></td>
                    </tr>
                    <tr>
                        <td><label for="spoken">Spoken Language:</label></td>
                        <td><input type="text" id="spoken" name="spoken" value="<?php echo $spoken; ?>"></td>
                    </tr>
                <?php } ?>
                <tr>
                    <td colspan="2"><input type="submit" value="Save"></td>
                </tr>
            </table>
        </form>
    </main>
</body>

</html>

