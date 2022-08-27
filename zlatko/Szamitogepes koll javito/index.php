<!doctype html>
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

<script src="script.js"></script>
<form onsubmit="check()" id="form1" method="post">

    <h1>Choose your issue</h1><br>

    <?php
    $sql2 = "SELECT id,title,price FROM menus";
    $stmt2 = $conn->prepare($sql2);
    $stmt2->execute();
    $menus = $stmt2->fetchAll();
    ?>

    <h3>Choose the computer problem type</h3><br>
    <span style="color: red" class="error" id="errSelect"></span><br>
    <select id="menus" name="menus">
        <option selected>- Choose a plate -</option>
        <?php foreach($menus as $menu): ?>
            <option value="<?= $menu['id']; ?>"><?= $menu['title'] .' '. $menu['price']; ?></option>
        <?php endforeach; ?>
    </select>

    <br><br>

    <?php
    $sql = "SELECT id,delivery_date FROM delivery_dates WHERE delivery_date > CURRENT_DATE ";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $dates = $stmt->fetchAll();
    ?>
    <h3>Choose a repair date</h3><br>
    <span style="color: red" class="error" id="errSelect1"></span><br>
    <select id="delivery_date" name="delivery_date">
        <option selected>- Choose a delivery date -</option>
        <?php foreach($dates as $date): ?>
            <option value="<?= $date['id']; ?>"><?= $date['delivery_date']; ?></option>
        <?php endforeach; ?>
    </select><br><br>


    <h3>Notes</h3><br>
    <span style="color: red" class="error" id="errSelect2"></span><br>
    <textarea style="resize: none; height:150px; width:250px;" id="txt" name="txt"></textarea><br><br>
    <input type="submit" value="send order" name="gomb" id="gomb" >
    <a href="list_orders.php">Kilistazas</a>

    <!--    <a href="list_repairs.php">Megtekkintés</a>-->
</form>

<?php



if(isset($_POST['menus']) && isset($_POST['delivery_date'])) {
    $id_menu = $_POST['menus'];
    $id_delivery_date = $_POST['delivery_date'];
    $customer_note = $_POST['txt'];

    if (strlen($customer_note) >= 50) {
        echo '<script>alert("Maximum length for notes field is 50 characters!")</script>';
    } else {

        if ($id_menu != 'choose' && $id_delivery_date != 'choose') {
            $sql = "INSERT INTO orders (id_menu, id_delivery_date, customer_note) VALUES (:id_menu, :id_delivery_date, :customer_note)";
            $query = $conn->prepare($sql);
            $query->bindParam(':id_menu', $id_menu, PDO::PARAM_STR);
            $query->bindParam(':id_delivery_date', $id_delivery_date, PDO::PARAM_STR);
            $query->bindParam(':customer_note', $customer_note, PDO::PARAM_STR);
            if ($query->execute()) {
                echo '<script>alert("Your order is received!")</script>';
                header("Refresh: 2");
            } else {
                header("Location: index.php?s=0");
            }
        }
    }
}
?>


</body>
</html>
