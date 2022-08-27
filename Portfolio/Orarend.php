<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet"
          href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
</head>
<body>

<nav>
    <ul>
        <li><a href="index.php">Kezdőoldal</a></li>
        <li><a href="Orarend.php">Orarend</a></li>
        <li><a href="hobby.php">Hobby</a></li>
    </ul>

</nav>

<div class="hatter">
    <div class="szoveg">
        <table border="1px solid white">
            <tr>
            <th>Hétfő</th>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
            <tr>
                <td>
                    Számitógépes hálózatok
                </td>
            </tr>
            <tr>
                <td>
                    Számitógépes hálózatok
                </td>
            </tr>
            <tr>
                <td>
                    Számitógépes hálózatok
                </td>
            </tr>
            <tr>
                <td>
                    Számitógépes hálózatok
                </td>
            </tr>
            <tr>
                <td>
                    Számitógépes hálózatok
                </td>
            </tr>
        </table>
        <table border="1px solid white">
            <tr>
                <th>Kedd</th>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
            <tr>
                <td>
                    Mobil eszközök programozása
                </td>
            </tr>
            <tr>
                <td>
                    Mobil eszközök programozása
                </td>
            </tr>
            <tr>
                <td>
                   Multimédia
                </td>
            </tr>
            <tr>
                <td>
                    Multimédia
                </td>
            </tr>
        </table>

        <table border="1px solid white">
            <tr>
                <th>Szerda</th>
            </tr>
            <tr>
                <td>
                    Mobil eszközök
                </td>
            </tr>
            <tr>
                <td>
                    Mobil eszközök
                </td>
            </tr>
            <tr>
                <td>
                    Gazdaságtan alapjai
                </td>
            </tr>
            <tr>
                <td>
                    Gazdaságtan alapjai
                </td>
            </tr>
            <tr>
                <td>
                    Gazdaságtan alapjai
                </td>
            </tr>
            <tr>
                <td>
                    Gazdaságtan alapjai
                </td>
            </tr>
        </table>

        <table border="1px solid white">
            <tr>
                <th>Csütörtök</th>
            </tr>
            <tr>
                <td>
                    Multimédia rendszerek
                </td>
            </tr>
            <tr>
                <td>
                    Multimédia rendszerek
                </td>
            </tr>
        </table>

        <table border="1px solid white">
            <tr>
                <th>Péntek</th>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
            <tr>
                <td>
                    Web programozás
                </td>
            </tr>
        </table>
    </div>
</div>


<div class="container-fluid" id="Footer-fluid">
    <div class="container" id="Footer">
        <div class="Footer-text">
            <div class="footer-box">
                <h2>Brada Dániel</h2>
            </div>
            <div class="footer-box">
                <h3>Gyors linkek</h3>
                <a href="">valami</a>
                <a href="">valami</a>
                <a href="">valami</a>
            </div>
            <div class="footer-box">
                <h3>Kedvenc helyek</h3>
                <a href="">valami</a>
                <a href="">valami</a>
                <a href="">valami</a>
            </div>
            <div class="footer-box">
                <h3>Elérhetőség</h3>
                <a href="">danibrada29@gmail.com</a>
                <div class="footer-icons">
                    <a href=""> <i class='bx bxl-facebook'></i></a>
                    <a href=""><i class='bx bxl-instagram-alt' ></i></a>
                </div>
            </div>
        </div>
        <div class="copyright">
            <?php
            $date = date('d-m-y');
            echo '<p>&copy; Copyright '.$date.' DanielBrada</p>'

            ?>
        </div>
    </div>
</div>

</body>
</html>