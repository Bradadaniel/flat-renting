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
        <h1>Üdvözöllek az oldalamon!</h1>
        <h2>A nevem Brada Dániel.</h2>
        <a href="biography.php">Önéletrajz</a>
    </div>
    <div class="kep">
        <img src="img/en.jpg" alt="">
    </div>
</div>

<div class="hatter2">
    <div class="card">
        <h1>Rólam</h1>
        <p>Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nesciunt, totam!</p><br><br>
        <a href="lakhely.php">Lakhely és kapcsolat</a>
    </div>

    <div class="card">
        <h1>Órarend</h1>
        <p>Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nesciunt, totam!</p><br><br>
        <a href="Orarend.php">Órarend</a>
    </div>

    <div class="card">
        <h1>Hobby</h1>
        <p>Lorem ipsum dolor sit amet, consectetur
            adipisicing elit. Nesciunt, totam!</p><br><br>
        <a href="hobby.php">Hobby</a>
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
                    <a href="https://www.facebook.com/dani.brada"> <i class='bx bxl-facebook'></i></a>
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