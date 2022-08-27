<!DOCTYPE html>
<html lang="en">
<head>
    <title>php 4</title>
</head>
<body>

    <form method="post" action="4.php">
        name: <input type="text" name="name" />
        <input type="submit" name="sd" value="send" />
        <input type="reset" name="rd" value="cancel" />
    </form>

<?php

     $p = $_GET['p'];
     if($p=="1")
     echo "Fill the label!";

?>


</body>
</html>
