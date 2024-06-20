<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = htmlspecialchars($_POST['username']);
    $email = htmlspecialchars($_POST['email']);
    $age = htmlspecialchars($_POST['age']);
    if (empty($username and $email and $age)) {
        echo ('Je hebt niks ingevuld.');
    } else {
        echo ('<h1> Forum registratie </h1>');
        echo ('<p> jouw username is ' . $username . '</p>');
        echo ('<p> jouw email is ' . $email . '</p>');
        echo ('<p> jouw age is ' . $age . '</p>');
    }
} else {
    echo ('vull eerst het formulier in :)');
}
