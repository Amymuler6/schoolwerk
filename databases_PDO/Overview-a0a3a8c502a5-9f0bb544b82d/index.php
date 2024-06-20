<!DOCTYPE html>
<html>

<head>
    <title>Netland</title>
    <link rel="stylesheet" href="style.css">
</head>


<body>
    <!-- <h1>Netland</h1> -->
</body>

</html>

<?php
$dbhost = "localhost";
$dbname = "netland";
$dbuser = "bit_academy";
$dbpass = "bit_academy";



try {
    $comn = new PDO("mysql:host=$dbhost;dbname=$dbname", $dbuser, $dbpass);
} catch (PDOexception $err) {
    echo "Database connection problem found, " . $err->getmessage();
    exit();
}
echo "<p>If you see this then the database connected.</p>"


?>