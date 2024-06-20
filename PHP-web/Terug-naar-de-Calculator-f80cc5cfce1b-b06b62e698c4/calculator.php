<!DOCTYPE html>
<html lang="en">

<head>
    <title>Calculator</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>

<body>
    <h1>Calculator</h1>
    <form action="calculator.php" method="get">
        <label for="number1">Number 1:</label>
        <input type="text" name="number1" class="number1" value="<?php echo isset($_GET['number1']) ? htmlspecialchars($_GET['number1']) : ''; ?>">
        <label for="number2">Number 2:</label>
        <input type="text" name="number2" class="number2" value="<?php echo isset($_GET['number2']) ? htmlspecialchars($_GET['number2']) : ''; ?>">
        <label>Operation:</label>
        <input type="radio" name="operation" class="operation" value="+" checked> <label>+</label>
        <input type="radio" name="operation" class="operation" value="-"> <label>-</label>
        <input type="radio" name="operation" class="operation" value="*"> <label>x</label>
        <input type="radio" name="operation" class="operation" value="/"> <label>:</label>
        <input type="radio" name="operation" class="operation" value="%"> <label>%</label>
        <input type="submit" name="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'GET' and isset($_GET['submit'])) {
        $number1 = htmlspecialchars($_GET['number1']);
        $number2 = htmlspecialchars($_GET['number2']);
        $operation = htmlspecialchars($_GET['operation']);

        if (($operation == '/' or $operation == '%') and ($number1 == 0 or $number2 == 0)) {
            echo '<p>Division by zero is not allowed!</p>';
            exit;
        } elseif (empty($number1 and $number2)) {
            echo ('<p>enter two numbers');
            exit;
        } elseif (!is_numeric($number1)) {
            echo '<p> geen geldige nummer ingevuld </p>';
            exit;
        } elseif (!is_numeric($number2)) {
            echo '<p> geen geldige nummer ingevuld </p>';
            exit;
        } else {
            switch ($operation) {
                case '+':
                    $result = $number1 + $number2;
                    echo ('<p>' . $result . '</p>');
                    break;
                case '-':
                    $result = $number1 - $number2;
                    echo ('<p>' . $result . '</p>');
                    break;
                case '*':
                    $result = $number1 * $number2;
                    echo ('<p>' . $result . '</p>');
                    break;
                case '/':
                    $result = $number1 / $number2;
                    echo ('<p>' . $result . '</p>');
                    break;
                case '%':
                    $result = $number1 % $number2;
                    echo ('<p>' . $result . '</p>');
                    break;
                default:
                    echo '<p>geen geldige operatie</p>';
            }
        }
    }
    ?>
</body>

</html>