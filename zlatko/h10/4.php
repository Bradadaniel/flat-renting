<?php

require_once 'config.php';

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


$sql = "UPDATE users
        SET active=:active,password=:password
        WHERE username = :username";

/*$sql = "UPDATE users
        SET active=:active,password=:password
        WHERE username LIKE concat('%', :username, '%')";

// '%' replaces any number of characters
*/

$query = $dbh->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':password', $password, PDO::PARAM_STR);
$query->bindParam(':active', $active, PDO::PARAM_INT);

$username = "vts3";
$password = "vts3ln";
$active = 0;

$query->execute();

if ($query->rowCount() > 0) {
    $count = $query->rowCount();
    echo $count . " rows were affected.";
} else {
    echo "No affected rows.";
}
?>