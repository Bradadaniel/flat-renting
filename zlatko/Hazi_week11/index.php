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
            margin: 0;
            padding: 2px;
        }
    </style>
</head>
<body>

<?php
$conn=null;
require_once ('db_config.php')
?>

<?php
//category kivalasztas
$sql="SELECT * from category";
$stmt=$conn->prepare($sql);
$stmt->execute();
$name=$stmt->fetchAll();


?>

<!--javascript hozzaadas-->
<script src="script.js"></script>

<form id="form1" method="post"  action="index.php">

    <h3>First name:</h3>
    <input type="text" id="name" name="name">
    <span id="errName"></span>

    <h3>Last name:</h3>
    <input type="text" id="last_name" name="last_name">

    <h3>E-mail:</h3>
    <input type="text" id="email" name="email">

    <h3>City:</h3>
    <input type="text" id="city" name="city">

    <h3>Address:</h3>
    <input type="text" id="address" name="address">

    <h3>Phone:</h3>
    <input type="text" id="phone" name="phone">

    <h3>Caregory of ad:</h3>
    <select id="category" name="category">
        <option selected value="choose">-choose-</option>
        <?php foreach ($name as $nam): ?>
        <option value="<?= $nam['id_category']; ?>"><?= $nam['name']; ?></option>
        <?php endforeach; ?>
    </select>

    <h3>Ad:</h3><br>
    <textarea name="text" id="text"></textarea><br>
    <h3>Price:</h3>
    <input type="text" id="price" name="price"><br><br>

    <input type="submit" value="send" name="gomb" id="gomb">

    <input type="reset" value="cancel" name="gomb1" id="gomb1">
    <br><br>
    <a href="add_ad.php">Show all ads</a>

</form>


<?php
require_once 'db_config.php';

define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'week11');

try {
    $dbh = new PDO("mysql:host=" . DB_HOST . ";dbname=" . DB_NAME,
        DB_USER, DB_PASS,
        [PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"]);
} catch (PDOException $e) {
    exit("Error: " . $e->getMessage());
}

if(isset($_POST['name']) && isset($_POST['last_name'])) {
    $name = $_POST['name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $city = $_POST['city'];
    $address = $_POST['address'];
    $phone = $_POST['phone'];
    $category = $_POST['category'];
    $text = $_POST['text'];
    $price = $_POST['price'];

    if ($name != 'choose' && $last_name != 'choose') {
        $sql = "INSERT INTO ad (name, last_name, email,city,address, phone, id_category, text, price) VALUES ( :name, :last_name, :email, :city, :address, :phone, :id_category, :text, :price)";
        $query = $dbh->prepare($sql);
        $query->bindParam(':name', $name, PDO::PARAM_STR);
        $query->bindParam(':last_name', $last_name, PDO::PARAM_STR);
        $query->bindParam(':email', $email, PDO::PARAM_STR);
        $query->bindParam(':city', $city, PDO::PARAM_STR);
        $query->bindParam(':address', $address, PDO::PARAM_STR);
        $query->bindParam(':phone', $phone, PDO::PARAM_INT);
        $query->bindParam(':id_category', $category, PDO::PARAM_STR);
        $query->bindParam(':text', $text, PDO::PARAM_STR);
        $query->bindParam(':price', $price, PDO::PARAM_INT);
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

