<?php

$user = "";
$sb = "";
if(isset($_GET['user']))
    $user = $_GET['user'];
if(isset($_GET['sb']))
    $sb = $_GET['sb'];
echo $user;
echo $sb;

?>