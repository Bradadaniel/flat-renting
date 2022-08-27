<?php

require_once 'config.php';

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


$sql = "INSERT INTO users
        (username, firstname, lastname, email, registration_expires, active)
         VALUES
        (:username,:firstname,:lastname,:email,:registration_expires,:active)";


$query = $dbh->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':firstname', $firstname, PDO::PARAM_STR);
$query->bindParam(':lastname', $lastname, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
$query->bindParam(':registration_expires', $registrationExpires, PDO::PARAM_STR);
$query->bindParam(':active', $active, PDO::PARAM_INT);

$username = "vts";
$firstname = "vts";
$lastname = "vtsss";
$email = "vts@vtsss.com";
$registrationExpires = date('Y-m-d H:i:s');
$active = 1;

$query->execute();

$lastInsertId = $dbh->lastInsertId();

echo $lastInsertId;
?>