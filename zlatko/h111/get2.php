<?php
require "db_config.php";
$number = 0;
$sql = "SELECT * FROM message ORDER BY date DESC";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {
    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo "<p><b>$record[title]</b> $record[date] <br> $record[text]<hr></p>"; //cimet boldoja, datum, tartalom ala es egy horizontalis vonal
    }
}

