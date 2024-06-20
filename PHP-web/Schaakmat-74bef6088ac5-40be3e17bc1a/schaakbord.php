<!DOCTYPE html>

<html>

<head>
    <title> schaakbord </title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table>
        <?php
        echo '<table>';
        for ($r = 1; $r <= 8; $r++) {
            echo '<tr>';
            for ($c = 1; $c <= 8; $c++) {
                $class = ($r + $c) % 2 == 0 ? 'black' : '';
                echo '<td class="' . $class . '"></td>';
            }
            echo '</tr>';
        }
        echo '</table>';
        ?>
    </table>
</body>

</html>