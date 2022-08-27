<?php

require_once 'config.php';

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


$sql = "DELETE FROM users WHERE username =:username";

$query = $dbh->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);

$username = "vts3";

$query->execute();

if ($query->rowCount() > 0) {
    $count = $query->rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}

?>