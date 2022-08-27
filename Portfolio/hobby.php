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
        <h1>Hobby</h1>
        <h2 style="font-size: 20px">Horgászat:</h2>
        <p style="margin: 0 100px">Már egészen kis korom óta körülbelül 7évesen az egyik nagy szenvedélyem közé tartozik a
        horgászat. Legtöbbet a Topolyai vízparton töltök el, nagyon szeretem ezt a tavat a szép környezet és
            a nagyon szép halálománya miatt. Igaz nem egy "könnyű" pálya amit már nem egyszer bizonyított is
            az évek folyamán. , de időnként a környező vizeket is meglátogatom.
        </p>
        <div class="szoveg-kepek">
        <img src="img/bg.jpg" alt="">
        <img src="img/bg.jpg" alt="">
        </div>
        <h2 style="font-size: 20px">Edzés:</h2>
        <p style="margin: 0 100px">Egy-egy ilyen edzés 90 perces. Azt gondolom, hogy ennyi idő szükséges ahhoz, hogy megfelelő terhelési szintet tudjunk nyújtani a testünknek, fejlesztő hatással lehessünk rá. Én a küzdősportokban szocializálódtam, ahol bonyolultabb sportmozgásokon keresztül történik az erőkifejtés és kifejezetten fontos az erő-állóképesség megléte, fejlesztése. Maga az erő-állóképesség nekem azt jelenti, hogy minél nagyobb erőt minél hosszabb ideig tudjunk kifejteni.

            Nem kell megijedni, még ha ez soknak is tűnik elsőre. A 90 perc tartalmaz egy kb 15-20 perces bemelegítést, hogy a test felkészüljön az előtte álló terhelésre. Fokozzuk azokat az életfunkciókat, amelyek szükségesek ahhoz, hogy az edzés fejlesztő hatással legyen és minimálissá váljon a sérülés veszélye. Gondolok itt többek között az izületek átmozgatására, felkészítésére, a keringés fokozására, a légzésfunkció javítására. Ezt követi a tényleges meló, az edzés igazi terheléses része, az aktív erőkifejtést igénylő mozgásos szakasz. A harmadik egység a nyújtás, lazítás, amelyet szeretek pár perces relaxációval kezdeni, hogy az idegrendszeren keresztül a test is megnyugodjon. Ezalatt van időnk eltárolni azokat a pozitív érzeteket, amelyek segítenek majd újra és újra csatlakozni az edzéshez.
        </p>
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