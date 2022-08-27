<?php

if(isset($_POST['submit']))
{
    $suma = $_POST['suma'];
    $curency = $_POST['curency'];

    echo "Value in dinar:" . $suma * $curency;
}
