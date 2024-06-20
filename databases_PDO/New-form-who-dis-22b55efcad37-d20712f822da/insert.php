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

        if ($_SERVER['REQUEST_METHOD'] == "POST") {
            $type = isset($_POST['type']) ? $_POST['type'] : null;

            if ($type == 'film') {
                try {
                    // Check if the fields are set
                    $id = isset($_POST['id']) ? $_POST['id'] : null;
                    $title = isset($_POST['title']) ? $_POST['title'] : null;
                    $rating = isset($_POST['rating']) ? $_POST['rating'] : null;
                    $summary = isset($_POST['summary']) ? $_POST['summary'] : null;
                    $length = isset($_POST['length']) ? $_POST['length'] : null;
                    $release = isset($_POST['release']) ? $_POST['release'] : null;
                    $country = isset($_POST['country']) ? $_POST['country'] : null;
                    $youtubeID = isset($_POST['youtubeID']) ? $_POST['youtubeID'] : null;

                    // Update the movies table
                    $updateQuery = "UPDATE movies SET 
                    title = :title,
                    rating = :rating,
                    summary = :summary,
                    length_in_minutes = :length,
                    released_at = :release,
                    country_of_origin = :country,
                    youtube_trailer_id = :youtubeID
                    WHERE id = :id";

                    $stmt = $comn->prepare($updateQuery);
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':rating', $rating);
                    $stmt->bindParam(':summary', $summary);
                    $stmt->bindParam(':length', $length);
                    $stmt->bindParam(':release', $release);
                    $stmt->bindParam(':country', $country);
                    $stmt->bindParam(':youtubeID', $youtubeID);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();

                    // Redirect to index.php
                    header("Location: index.php?id=$id&update_status=success");
                } catch (PDOException $err2) {
                    // Log the error
                    error_log("Error updating movie: " . $err2->getMessage(), 0);

                    // Redirect to index.php with error message
                    header("Location: index.php?id=$id&update_status=unsuccessful&error_message=" . urlencode($err2->getMessage()));
                }
            } elseif ($type == 'series') {
                try {
                    $id = isset($_POST['id']) ? $_POST['id'] : null;
                    $title = isset($_POST['title']) ? $_POST['title'] : null;
                    $rating = isset($_POST['rating']) ? $_POST['rating'] : null;
                    $summary = isset($_POST['summary']) ? $_POST['summary'] : null;
                    $awards = isset($_POST['awards']) ? $_POST['awards'] : null;
                    $seasons = isset($_POST['seasons']) ? $_POST['seasons'] : null;
                    $country = isset($_POST['country']) ? $_POST['country'] : null;
                    $language = isset($_POST['spoken']) ? $_POST['spoken'] : null;

                    // Update the series table
                    $updateQuery = "UPDATE series SET 
                                title = :title,
                                rating = :rating,
                                summary = :summary,
                                has_won_awards = :awards,
                                seasons = :seasons,
                                country = :country,
                                spoken_in_language = :language
                                WHERE id = :id";

                    $stmt = $comn->prepare($updateQuery);
                    $stmt->bindParam(':title', $title);
                    $stmt->bindParam(':rating', $rating);
                    $stmt->bindParam(':summary', $summary);
                    $stmt->bindParam(':awards', $awards);
                    $stmt->bindParam(':seasons', $seasons);
                    $stmt->bindParam(':country', $country);
                    $stmt->bindParam(':language', $language);
                    $stmt->bindParam(':id', $id);
                    $stmt->execute();

                    // Redirect to index.php
                    header("Location: index.php?id=$id&update_status=success");
                } catch (PDOException $err2) {
                    // Log the error
                    error_log("Error updating series: " . $err2->getMessage(), 0);

                    // Redirect to index.php with error message
                    header("Location: index.php?id=$id&update_status=unsuccessful&error_message=" . urlencode($err2->getMessage()));
                }
            }
        }

        // Fetching details for display
        $detailsid = $_GET['id'];
        $type = $_GET['type'];

        if ($type === 'film') {
            $detailsMedia = $comn->query("SELECT * FROM movies WHERE id = $detailsid;");
            $details = $detailsMedia->fetchAll();

            $id = htmlentities($details[0]['id']);
            $title = htmlentities($details[0]['title']);
            $rating = htmlentities($details[0]['rating']);
            $summary = htmlentities($details[0]['summary']);
            $length = htmlentities($details[0]['length_in_minutes']);
            $release = htmlentities($details[0]['released_at']);
            $country = htmlentities($details[0]['country_of_origin']);
            $youtubeID = htmlentities($details[0]['youtube_trailer_id']);
        } elseif ($type === 'series') {
            $detailsMedia = $comn->query("SELECT * FROM series WHERE id = $detailsid;");
            $details = $detailsMedia->fetchAll();

            $id = htmlentities($details[0]['id']);
            $title = htmlentities($details[0]['title']);
            $rating = htmlentities($details[0]['rating']);
            $summary = htmlentities($details[0]['summary']);
            $awards = htmlentities($details[0]['has_won_awards']);
            $seasons = htmlentities($details[0]['seasons']);
            $country = htmlentities($details[0]['country']);
            $spoken = htmlentities($details[0]['spoken_in_language']);
        }
        ?>

        <h2>Edit Media</h2>
        <form action="" method="POST">
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