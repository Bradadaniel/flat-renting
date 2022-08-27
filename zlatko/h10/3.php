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


$users = [
    ['username' => 'vts1', 'firstname' => 'vts1fn', 'lastname' => 'vts1ln', 'email' => 'vts1@vts.com', 'registration_expires' => date('Y-m-d H:i:s'), 'active' => 1],
    ['username' => 'vts2', 'firstname' => 'vts2fn', 'lastname' => 'vts2ln', 'email' => 'vts2@vts.com', 'registration_expires' => '2021-04-27 11:00:00', 'active' => 1],
    ['username' => 'vts3', 'firstname' => 'vts3fn', 'lastname' => 'vts3ln', 'email' => 'vts3@vts.com', 'registration_expires' => '2021-04-30 12:00:00', 'active' => 1]
];



foreach($users as $key=>$value) {

    $username = $value['username'];
    $firstname = $value['firstname'];
    $lastname = $value['lastname'];
    $email = $value['email'];
    $registrationExpires = $value['registration_expires'];
    $active = $value['active'];

    $query->execute();

    $lastInsertId = $dbh->lastInsertId();

    if ($lastInsertId > 0) {
        echo "OK";
    } else {
        echo "not OK";
    }
}
?>