<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>php data</title>
</head>
<body>
<?php
var_dump($_POST);

$user = "";

if(isset($_POST['user'])) {
    $user = $_POST['user'];
}

if(!empty($user)) {
    echo "your username is $user";
}
else {
    echo "Username is empty!";
}

?></body>
</html>