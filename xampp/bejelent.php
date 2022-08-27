<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="content-body">
    <div class="header">
        <div class="logo">
            <img src="images/logo.jpg" alt="logo-image">
            <div class="logo-content">
                <h1><span class="color-red title">P</span>remier <span class="color-red">H</span>ockey <span
                        class="color-red">S</span>chool</h1>
                <h4>Ultimate school for the best</h4>
            </div>
        </div>
        <div id="line"></div>
        <nav>
            <!--            <div class="head"></div>-->
            <img src="images/head.gif" alt="head">
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">History</a></li>
                <li><a href="#">Pictures</a></li>
                <li><a href="#">Contact</a></li>
                <li><a href="#">Trainers</a></li>
                <li><a href="#">Awards</a></li>
            </ul>
        </nav>
    </div>
    <div class="_body">
        <div class="col-left">
            <img src="images/mask.jpg" alt="liga-image" class="border-image">
            <a>Fill in the <span class="border-red">online</span><br>registration!</a>
            <form name="login" action="valami.php" method="post">
                <label for="usern">username:</label>
                <input type="text" name="usern" id="usern">
                <label for="passw">password:</label>
                <input type="text" name="passw" id="passw">
                <br>
                <label>you are:</label>
                <div class="gender">
                    <input type="radio" value="male" name="gender" id="male">
                    <label for="male">male</label>
                </div>
                <div class="gender">
                    <input type="radio" value="female" name="gender" id="female">
                    <label for="female">female</label>
                </div>
                <div>
                    <input type="submit" name="sb" value="REGISTER!" id="submit">
                    <input type="reset" name="rs" value="cancel" id="cancel">
                </div>
            </form>
        </div>
        <div class="col-right">
            <p>Our unique and exclusive approach to developing stickhandling skills.</p>
            <p>Having the best qualified and trained instructors in the hockey school business. Only instructors
                certified by Real Turcotte are eligible to teach our students.</p>
            <p>Having the best designed programs for the improvement of each individual student.</p>
            <div class="images">
                <img src="images/1.gif" alt="member-manager">
                <img src="images/2.gif" alt="mebmer-player">
            </div>
            <a>Set of 2 DVDS including 24 different moves!</a>
            <ol type="a" start="4">
                <li>Standing still</li>
                <li>Game situation in slow motion</li>
                <li>Demonstrated at game speed</li>
            </ol>
        </div>
    </div>
</div>
</body>
</html>