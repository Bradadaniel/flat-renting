<?php
$filmek ["asd"] = ['name'=>'david', 'genre'=>'allat', 'year'=>20];
$filmek ["asd1"] = ['name'=>'david', 'genre'=>'allat', 'year'=>20];
foreach ($filmek as $film)
{
    foreach ($film as $key=>$value ) {
        echo "<br><span style=\"color:#f00;\"> $key = $value</span>";
    }
}