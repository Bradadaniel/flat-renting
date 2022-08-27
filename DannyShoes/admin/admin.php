<!DOCTYPE html>
<html lang="en">
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="admin.css">
    <meta charset="UTF-8">
    <title>Admin</title>
</head>


<?php
require_once '../db_config.php';


$connect = new mysqli(HOST,USER,PASS,DATABASE);
if($connect -> connect_errno) {
    echo $connect -> connect__error;
}

// Oprations -> Add new, Update, Delete
if (isset($_GET['operation'])) {
    if (isset($_GET['submit'])) {
        $exceptions = array('submit','operation');
        foreach ($_GET as $key => $value) {
            if (!in_array($key, $exceptions)) {
                $sql_array[] = "`{$key}` = '" . $value . "'";
            }
        }
    }
    $operation = $_GET['operation'];
    switch (key($operation)) {
        case 'add_new':
            if (isset($_GET['submit'])) {
                $sql = "INSERT INTO products SET ";
                $sql .= implode(', ', $sql_array);
            }
            else {
                $add_new = true;
            }
            break;
        case 'update':
            if (isset($_GET['submit'])) {
                $sql = "UPDATE products SET ";
                $sql .= implode(', ', $sql_array);
                $sql .= " WHERE id = '". $operation['update'] ."'";
            }
            else {
                $sql ="SELECT id, category, name, price, photo, availability FROM products WHERE id = " . $operation['update'];
                if ($result = $connect -> query($sql)) {
                    $update = $result -> fetch_assoc();
                }
            }
            break;
        case 'delete':
            $sql = "DELETE FROM products WHERE id = '". $operation['delete'] ."'";
            break;
    }
    // Send sql to server
    if (isset($_GET['submit']) || key($operation) == 'delete') {
        if ($connect->query($sql) == true) {
            echo "Siker!";
        }
    }
}
// Get data from database
$sql = "SELECT id, city_id, user_id, bedroom, bathroom, availability FROM products ";
if ($result = $connect -> query($sql)) {
    while ($row = $result -> fetch_assoc()) {
        $dannyshoes[] = $row;
    }
}
?>
<div class="header">
    <nav>
        <input type="checkbox" id="check">
        <label for="check" class="checkbtn">
            <i class=" fas fa-bars"></i>
        </label>
        <label class="logo">DannyShoes</label>
        <ul>
            <li><a class="active" href="../index.php">Kezdőoldal</a></li>
            <li><a href="../rolunk.php">Rólunk</a></li>
            <li><a href="../products.php">Bolt</a></li>
            <li><a href="../kapcsolat.php">Kapcsolat</a></li>
            <li><a href="admin/admin.php">Admin</a></li>
        </ul>
    </nav>
</div>

<section class="main-cover main-cover-admin">
    <div class="page-wrapper">
    </div>
</section>

<section class="block">
    <div class="page-wrapper">
        <form method="GET">
            <table class="admin__table">
                <tr class="first">
                    <td>id</td>
                    <td>kep</td>
                    <td>marka</td>
                    <td>nev</td>
                    <td>ar</td>
                    <td>elerheto</td>
                    <td colspan="2">muvelet</td>
                </tr>
                <?php
                foreach ($dannyshoes as $key => $value) {
                    echo '<tr>
                                    <td>' . $value['id'] . '</td>
                                    <td><img width="80px" height="80px" src ="../' . $value['photo'] . '"></td>
                                    <td>' . $value['category'] . '</td>
                                    <td>' . $value['name'] . '</td>
                                    <td>' . $value['price'] . ' $.</td>
                                    <td>' . $value['availability'] . '</td>
                                    <td><button class="admin__table-button" type="submit" name="operation[update]" value="' . $value['id'] . '">Update</button></td>
                                    <td><button class="admin__table-button" type="submit" name="operation[delete]" value="' . $value['id'] . '">Delete</button></td>
                                </tr>';
                }
                ?>
            </table>
            <button class="admin__table-new" type="submit" name="operation[add_new]" value="true">Add new</button>
        </form>
    </div>
</section>

<?php if (isset($update) || isset($add_new)) { ?>
    <section class="block">
        <div class="page-wrapper">
            <h1>Enter the data</h1>
            <form class="admin__update" method="GET">
                <input type="hidden" name="operation[<?php echo key($operation) ?>]" value="<?php echo $operation[key($operation)] ?>">
                <div class="update__item"><input placeholder="Category" type="text" name="category" value="<?php if(isset($update)) {echo $update['category'];} ?>"></div>
                <div class="update__item"><input placeholder="Name" type="text" name="name" value="<?php if(isset($update)){echo $update['name'];} ?>"></div>
                <div class="update__item"><input placeholder="Price" type="text" name="price" value="<?php if(isset($update)){echo $update['price'];} ?>"></div>
                <div class="update__item"><input placeholder="Photo" type="text" name="photo" value="<?php if(isset($update)){echo $update['photo'];} ?>"></div>
                <div class="update__item"><input placeholder="Availability" type="text" name="availability" value="<?php if(isset($update)){echo $update['availability'];} ?>"></div>
                <button class="admin__table-new" type="submit" name="submit" value="true">Send</button>
            </form>
        </div>
    </section>
<?php } ?>

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
