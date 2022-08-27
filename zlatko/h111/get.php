<!--osszekoti az adatbazisokat-->
<?php
require "db_config.php";
$number = 0;
$sql = "SELECT COUNT(*) FROM message WHERE status ='unread'";
//adott kriteriumok sorainak szamat adja vissza -- sorok szama ahol a status unread azt adja vissza eredmenynek

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
$record = mysqli_fetch_row($result);

$number = $record[0];

if ($number == 1) {
    echo "You have $number unread message.";
} else {
    echo "You have $number unread messages.";
}
