<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
<?php

if (isset($_SESSION["user"]))
    echo "User:" . $_SESSION["user"] . "<br>";

if (isset($_SESSION["password"]))
    echo "Password:" . $_SESSION["password"];

if (isset($_SESSION["user"]) AND isset($_SESSION["password"]))
    echo "<br>status: Member<br>";
else
    echo "<br>status: Guest<br><br>";

echo "<br>";



//$_SESSION = array();
$_SESSION = [];
unset($_SESSION["user"]);

//session_destroy();

/*
session_unset(); // Only use session_unset() for older deprecated code that does not use $_SESSION.
session_destroy();
$_SESSION = array();
*/

echo "<p>After delete</p>";

if (isset($_SESSION["user"]))
    echo "User:" . $_SESSION["user"] . "<br>";
else
    echo "User is deleted<br>";

if (isset($_SESSION["password"]))
    echo "Password:" . $_SESSION["password"];
else
    echo "Password is deleted<br>";

if (isset($_SESSION["user"]) AND isset($_SESSION["password"]))
    echo "<br>status: Member<br>";
else
    echo "<br>status: Guest<br>";

?>
</body>
</html>