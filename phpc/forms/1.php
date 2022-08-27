<!DOCTYPE html>
<html lang="en">
<head>
    <title>php 1</title>
</head>
<body>
<form method="get" action="1.php">
    <input type="text" name="age">
    <br>   <br>
    <input type="text" name="name">
    <br>   <br>
    <input type="text" name="job">
    <br>

    <br>
    <input type="submit" value="send">
</form>
<?php

var_dump($_GET); //kiirja a tipust erteket meg a hosszusagot
if (isset($_GET['name']) )
echo "<p>Hello " . $_GET['name'] . "!</p>";

?>

</body>
</html>
