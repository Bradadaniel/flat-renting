<html>
<head>
    <title>PDO adatbázis kezelés</title>
</head>
<body><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1,h3{
            margin: 4px 0;
        }
    </style>
    <title>Document</title>
</head>
<body>

<?php
include("db_config.php");
?>

<?php
$sql = "SELECT type FROM problem_types";
$stmt = $con->prepare($sql);
$stmt->execute();
$problems = $stmt->fetchAll();

$sql2 = "SELECT repair_date FROM repair_dates";
$stmt2 = $con->prepare($sql2);
$stmt2->execute();
$dates2 = $stmt2->fetchAll();
?>
<form onsubmit="check()" id="form1" method="post">
    <h1>Choose your issue</h1><br>
    <h3>Choose the computer problem type</h3><br>

    <select id="problem_type" name="problem_type">
        <?php foreach($problems as $problem): ?>
            <option selected disabled hidden>- Choose the problem type -</option>
            <option value="<?= $problem['type']; ?>"><?= $problem['type']; ?></option>
        <?php endforeach; ?>
    </select>
    <span class="error" id="errSelect"></span>
    <br><br>
    <h3>Choose a repair date</h3><br>
    <select id="repair_date" name="repair_date">
        <?php foreach($dates2 as $date): ?>
            <option selected disabled hidden>- Choose the date -</option>
            <option value="<?= $date['repair_date']; ?>"><?= $date['repair_date']; ?></option>
        <?php endforeach; ?>
    </select><br><br>
    <span class="error" id="errSelect1"></span>
    <h3>Notes</h3><br>
    <textarea style="resize: none; height:150px; width:250px;" id="txt" name="txt"></textarea><br><br>
    <input type="submit" value="send" name="gomb" id="gomb" >

    <a href="list_repairs.php">Megtekkintés</a>
</form>

<?php
require_once 'db_config.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'computer_service');

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if(isset($_POST['problem_type']) && isset($_POST['repair_date'])) {
    $problem_type = $_POST['problem_type'];
    $repair_date = $_POST['repair_date'];
    $notes = $_POST['txt'];
    if ($problem_type != 'choose' && $repair_date != 'choose') {
        $sql = "INSERT INTO adatok (type, date, text) VALUES (:type, :date, :text)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':type', $problem_type, PDO::PARAM_STR);
        $query->bindParam(':date', $repair_date, PDO::PARAM_STR);
        $query->bindParam(':text', $notes, PDO::PARAM_STR);
        if ($query->execute()) {
            header("Location: index.php?s=1");
        } else {
            header("Location: index.php?s=0");
        }
    }
}
?>
<script src="scripts.js"></script>

</body>
</html>