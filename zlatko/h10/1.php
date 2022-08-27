<?php
/*
PDO (PHP Data Objects) is a PHP extension through which we can access and work with databases.
Though PDO is similar in many aspects to mySQLi, it is better to work with for the following
reasons:
• It is better protected against hackers.
• It is consistent across databases, so it can work with MySQL as well as other types of databases
(SQLite, Oracle, PostgreSQL, etc.)
• It is object oriented at its core.
*/

require_once 'config.php';

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}


$sql = "SELECT * FROM users WHERE username=:username AND email=:email";

//$sql = "SELECT * FROM user WHERE username=? AND email=?";

$query = $dbh->prepare($sql);
$query->bindParam(':username', $username, PDO::PARAM_STR);
$query->bindParam(':email', $email, PDO::PARAM_STR);
//$query->bindParam(1, $username, PDO::PARAM_STR);
//$query->bindParam(2, $email, PDO::PARAM_STR);

/*
• PDO::PARAM_STR is used for strings.
• PDO::PARAM_INT is used for integers.
• PDO::PARAM_BOOL allows only boolean (true/false) values.
• PDO::PARAM_NULL allows only NULL datatype.
*/

$username = "vts";
$email = "vts@gmail.com";

$query->execute();
$results = $query->fetchAll(PDO::FETCH_OBJ); // PDO::FETCH_ASSOC

echo "<pre>";
var_dump($results);
echo "</pre>";

if ($query->rowCount() > 0) {
    foreach ($results as $result) {
        echo $result->username . ", ";
        echo $result->email . ", ";
        echo $result->firstname . ", ";
        echo $result->lastname;

        /*
        echo $result['username'];
        echo $result['email'];
        echo $result['firstname'];
        echo $result['lastname'];
        */

    }
}
?>