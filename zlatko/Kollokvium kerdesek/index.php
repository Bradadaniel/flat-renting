<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        *{
            padding: 2px;
        }
    </style>
</head>
<body>
<script src="script.js"></script>
<?php
$conn=null;
include("db_config.php");
?>

<?php

$sql2 = "SELECT title,price FROM menus";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$menus = $stmt2->fetchAll();

//csak a jovo idoket irja ki
$sql2 = "SELECT delivery_date FROM delivery_dates WHERE delivery_date> CURRENT_DATE ";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$dates2 = $stmt2->fetchAll();

?>


<form id="form" onsubmit="check()" method="post"></form>

<span class="error" id="errSelect"></span>
<select name="menu_item" id="menu_item" >
    <option selected value="- Choose one of our delicious plate -">- Choose one of our delicious plate -</option>
    <?php foreach($menus as $menu): ?>
    <option value="<?= $menu['title']; ?>"><?= $menu['title'] . "-" . $menu['price'] ?></option>
    <?php endforeach; ?>
</select><br><br>

<span class="error" id="errSelect1"></span><br><br>
<select id="delivery_dates" name="delivery_dates">
    <option selected value="- Please choose one delivery date -">- Please choose one delivery date -</option>
    <?php foreach($dates2 as $date): ?>
        <option value="<?= $date['delivery_date']; ?>"><?= $date['delivery_date']; ?></option>
    <?php endforeach; ?>
</select><br>


<textarea name="notes" id="notes"></textarea><br>

<input type="submit" value="send" name="gomb" id="gomb"><br>

<br>
<!--<a href="add_ad.php">Show all ads</a>-->


<?php
require_once 'db_config.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'restaurant');

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if(isset($_POST['menu_item']) && isset($_POST['delivery_dates'])) {
    $menu_item = $_POST['menu_item'];
    $delivery_dates = $_POST['delivery_dates'];
    $notes = $_POST['txt'];

    if ($menu_item != 'choose' && delivery_dates != 'choose') {
        $sql = "INSERT INTO orders (customer_note, id_delivery_date, insert_time) VALUES (:customer_note, :id_delivery_date, :insert_time)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':type', $menu_item, PDO::PARAM_STR);
        $query->bindParam(':date', $delivery_dates, PDO::PARAM_STR);
        $query->bindParam(':text', $notes, PDO::PARAM_STR);
        if ($query->execute()) {
            header("Location: index.php?s=1");
        } else {
            header("Location: index.php?s=0");
        }
    }
}
?>

</body>
</html>