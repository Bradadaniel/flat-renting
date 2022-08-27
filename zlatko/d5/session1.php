<?php
session_start();


/*
https://shellcreeper.com/how-to-create-valid-ssl-in-localhost-for-xampp/
https://www.youtube.com/watch?v=Mig9YPNiUZI

https://www.php.net/manual/en/book.session.php

ini_set('session.use_cookies',0);
ini_set('session.use_only_cookies',0);
ini_set('session.use_trans_sid',1);

or in php.ini

session.use_trans_sid = 0
session.use_cookies = 1
session.use_only_cookies = 1

https://www.php.net/manual/en/function.session-set-cookie-params.php

https://web.dev/samesite-cookies-explained/
https://developer.mozilla.org/en-US/docs/Web/HTTP/Headers/Set-Cookie/SameSite

*/


/*
 * https://www.php.net/manual/en/function.session-regenerate-id.php
 *
if(!isset($_SESSION['generated']) OR $_SESSION['generated']< (time()-30))
{
	session_regenerate_id();
	$_SESSION['generated'] = time();
}
*/

$_SESSION["user"] = "student";
$_SESSION["password"] = "vts";

$_SESSION['cart'][124] = 12;
$_SESSION['cart'][456] = 14;

var_dump($_SESSION);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>session</title>
</head>
<body>
<?php
echo ">link1</a><br>";

echo "<a href=\"session2.php?" . session_name() . "=" . session_id() . "\">link1</a><br>";
echo "<a href=\"session2.php?sid=" . session_id() . "\">link1</a><br>";


echo '<p><a href="session2.php">link1</a></p>';
echo "Session ID:" . session_id();
echo "<p>Session name:" . session_name() . "</p>";
echo "User:" . $_SESSION["user"] . "<br>";
echo "Pass:" . $_SESSION["password"];


?>
</body>
</html>