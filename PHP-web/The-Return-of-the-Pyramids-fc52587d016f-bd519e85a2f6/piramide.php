<!DOCTYPE html>
<html>

<head>
    <title>Piramide</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <table>
        <?php
        for ($a = 0; $a < 10; $a++) {
            echo ('<tr>');
            $c = str_repeat("<td> </td>", $a);
            echo ($c . PHP_EOL);
            echo ('</tr>');
        }
        ?>
    </table>
</body>

</html>