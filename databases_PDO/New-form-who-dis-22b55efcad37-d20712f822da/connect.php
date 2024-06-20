<?php

//inloggegevens database
$dbhost = "localhost";
$dbname = "netland";
$dbuser = "bit_academy";
$dbpass = "bit_academy";

//connect met database
try {
    $comn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOexception $err) {
    echo "Database connection problem found, " . $err->getmessage();
    exit();
}
?>