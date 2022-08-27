<?php

require_once 'db_config.php';

$sql2 = "SELECT * FROM adatok";
$stmt2 = $con->prepare($sql2);
$stmt2->execute();
$dates2 = $stmt2->fetchAll();

?>
<hr>
<?php foreach($dates2 as $dates): ?>
<!--    <option selected disabled hidden>- Choose the problem type -</option>-->
    <option value="<?= $dates['date']; ?>"><?= $dates['date']; ?></option>
<!--    <option selected disabled hidden>- Choose the problem type -</option>-->
    <option value="<?= $dates['type']; ?>"><?= $dates['type']; ?></option>
<!--    <option selected disabled hidden>- Choose the problem type -</option>-->
    <option value="<?= $dates['text']; ?>"><?= $dates['text']; ?></option>
    <hr>
    <br>
<?php endforeach; ?>


