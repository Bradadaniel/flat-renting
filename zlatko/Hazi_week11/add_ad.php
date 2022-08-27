<?php
$conn=null;
require_once 'db_config.php';

$sql2 = "SELECT * FROM ad";
$stmt2 = $conn->prepare($sql2);
$stmt2->execute();
$dates2 = $stmt2->fetchAll();

?>
    <hr>
<?php foreach($dates2 as $dates): ?>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['name']; ?>"><?= $dates['name']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['last_name']; ?>"><?= $dates['last_name']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['email']; ?>"><?= $dates['email']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['city']; ?>"><?= $dates['city']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['address']; ?>"><?= $dates['address']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['phone']; ?>"><?= $dates['phone']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['id_category']; ?>"><?= $dates['id_category']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['text']; ?>"><?= $dates['text']; ?></option>
    <option selected disabled hidden>- Choose the problem type -</option>
    <option value="<?= $dates['price']; ?>"><?= $dates['price']; ?></option>

    <hr>
    <br>
<?php endforeach; ?>