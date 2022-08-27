<?php

$movies[0] = ['name' => 'Spiderman', 'genre' => 'sci-fi', 'year' => 2000];
$movies[1] = ['name' => 'Commando', 'genre' => 'action', 'year' => 1990];

foreach ($movies as $movie) {
    foreach ($movie as $key => $value) {
        echo "<br><span style=\"color:#f00;\"> $key = $value</span>";
    }
    echo '<hr>';
}

