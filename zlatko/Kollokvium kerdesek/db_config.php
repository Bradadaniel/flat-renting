<?php
$servername = "localhost";
$username = "root";
$password = "";

//kapcsolat az adatbazissal
try {
    $conn = new PDO("mysql:host=$servername;dbname=restaurant", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
?>