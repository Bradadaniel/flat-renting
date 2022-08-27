<?php
$numbers = [1,33,9,21,40,81];
function getOddAvarage($numbers)
{
    $osszeg = 0;
    $count = 0;
    foreach($numbers as $i)
    {
        if($i%2) {
            $osszeg += $i;
            $count++;

        }
    }
    return $osszeg / $count;
}
$asd = getOddAvarage($numbers);
 echo "<span style=\"color:#00f\">$asd</span>";