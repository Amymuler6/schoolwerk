<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = htmlspecialchars($_POST['email']);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL) and !empty($email)) {
        echo ($email . ' is geen geldige email address');
    } elseif (empty($email)) {
        echo ('Je hebt niks ingevuld');
    } else {
        echo (' Email address is geldig!');
    }
}

?>