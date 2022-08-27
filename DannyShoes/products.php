<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="products.css">
    <meta charset="UTF-8">
    <title>Termékek</title>
</head>
<div class="header">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class=" fas fa-bars"></i>
            </label>
            <label class="logo">DannyShoes</label>
            <ul>
                <li><a class="active" href="index.php">Kezdőoldal</a></li>
                <li><a href="rolunk.php">Rólunk</a></li>
                <li><a href="products.php">Bolt</a></li>
                <li><a href="kapcsolat.php">Kapcsolat</a></li>
                <li><a href="admin/admin.php">Admin</a></li>
            </ul>
        </nav>
</div>
<?php

require_once 'db_config.php';

$connect = new mysqli(HOST,USER,PASS,DATABASE);
if($connect -> connect_errno) {
    echo $connect -> connect__error;
}

$sql_str = "";

/*--SEARCH--*/
if (isset($_GET['search']) && !empty($_GET['search'])) {
    $search = $connect->real_escape_string($_GET['search']);
    $search_arr = explode(' ', $search); // explode search string to "words"
    foreach ($search_arr as $key => $value) {
        if(mb_strlen($value) <= 2) {
            unset($search_arr[$key]); // unset "words" which have less then 3 letter
        }
    }
    if (isset($search_arr) && !empty($search_arr)) {
        $where = array();
        foreach ($search_arr as $key => $value) {
            $where[] = "WHERE category LIKE '%$value%' OR name LIKE '%$value%' OR price LIKE '%$value%'";
        }
        $sql_str .= implode(' OR ', $where);
    }
}

if (isset($sql_str)) {
    $sql = "SELECT id, category, name, price, photo, availability FROM products " . $sql_str;
    if ($result = $connect -> query($sql)) {
        while ($row = $result -> fetch_assoc()) {
            $dannyshoes [] = $row;
        }
    }
}
?>

<section class="main-cover main-cover-products">
    <div class="page-wrapper">
        <div class="block-title block-title--white" style="color: white"></div>
    </div>
</section>

<section class="product-list block">
    <div class="page-wrapper">
        <form class="product-search" method="get">
            <input style="width: 50%" placeholder="Kereső" name="search" type="text">
            <button type="submit">Keresés</button>
        </form>
        <h3 style="width: 100%; text-align: center"><b><u style="font-size: 30px" >Termékek</u></b></h3>
        <div class="product-list__content">
            <?php
            if (!empty($dannyshoes)) {
                foreach ($dannyshoes as $key => $value) {
                    echo '<div class="product-list__item">
                                <img src="'.$value['photo'].'" class="product-list__picture" alt="">
                                <div class="product-list__title">'.$value['category'].'</div>
                                <div class="product-list__subtitle">'.$value['name'].'</div>
                                <div class="product-list__price">'.$value['price'].' $</div>
                                <button class="button"><b><a>Vásárlás</a></b></button>
                            </div>';
                }
            }
            else {
                echo '<p class="products-error"> A termék nem található </p>';
            }
            ?>
        </div>
    </div>
</section>

<div class="container-fluid" id="Footer-fluid">
    <div class="container" id="Footer">
        <div class="Footer-text">
            <div class="footer-box">
                <h2>DannyShoes</h2>
            </div>
            <div class="footer-box">
                <h3>Gyors linkek</h3>
                <a href="">Ügynökség</a>
                <a href="">Épületek</a>
                <a href="">Értékelések</a>
            </div>
            <div class="footer-box">
                <h3>Irodáink</h3>
                <a href="">Szabadka</a>
                <a href="">Topolya</a>
                <a href="">Újvidék</a>
            </div>
            <div class="footer-box">
                <h3>Elérhetőség</h3>
                <a href="">+381612766605</a>
                <a href="">danibrada29@gmail.com</a>
                <div class="footer-icons">
                    <a href=""> <i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                    <a href=""><i class='bx bxl-twitter' ></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <span>© DannyShoes</span>
        </div>
    </div>


