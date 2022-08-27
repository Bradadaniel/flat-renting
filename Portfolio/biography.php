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
        <h1>Önéletrajz</h1><br>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus ad aperiam architecto assumenda atque beatae blanditiis cupiditate dicta esse, est exercitationem expedita harum ipsa ipsam libero maiores natus numquam odio praesentium quae quisquam quo repellat reprehenderit suscipit tempora ut voluptate! Aliquam aliquid architecto blanditiis commodi cum ex, id, inventore ipsa ipsam iste labore mollitia, nihil nulla omnis perspiciatis quaerat quas quasi quia quidem quisquam ratione recusandae sequi temporibus unde veritatis vitae voluptatibus? A beatae consectetur eligendi explicabo itaque laboriosam laborum, maiores natus nisi perferendis perspiciatis saepe sint temporibus voluptatem voluptatum? Architecto distinctio expedita illum ipsam laborum nemo nulla veritatis voluptas!</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid facere laboriosam quasi velit. Atque, dolore eaque eveniet ex illum laboriosam libero nemo nisi quam ullam. Ab accusamus beatae ea illum libero necessitatibus numquam odit provident soluta tempora. A adipisci, aliquam, dolore laudantium nam odit perferendis perspiciatis reprehenderit sed suscipit totam!</p>
        <br><br>
        <a href="img/bg.jpg" download>Letölthető önéletrajz</a>
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
