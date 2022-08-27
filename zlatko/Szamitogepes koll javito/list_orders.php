<?php

$conn = null;
require_once 'db_config.php';

$sql2 = "SELECT * FROM orders";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$dates2 = $stmt2->fetchAll();

?>
    <hr>
<?php foreach($dates2 as $dates): ?>
    <option value="<?= $dates['id']; ?>"><?= $dates['id']; ?></option>
    <option value="<?= $dates['id_menu']; ?>"><?= $dates['id_menu']; ?></option>
    <option value="<?= $dates['customer_note']; ?>"><?= $dates['customer_note']; ?></option>
    <option value="<?= $dates['id_delivery_date']; ?>"><?= $dates['id_delivery_date']; ?></option>
    <option value="<?= $dates['insert_time']; ?>"><?= $dates['insert_time']; ?></option>
    <hr>
    <br>
<?php endforeach; ?>