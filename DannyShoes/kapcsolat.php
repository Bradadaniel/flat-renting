<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="kapcsolat.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.1.1/css/fontawesome.min.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=League+Spartan:wght@100;200;300;400;500;600;700;800;900&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <title>DannyShoes</title>
</head>
<body>

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

<div class="contact-in">
    <div class="contact-map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d9565.539885694594!2d19.574170496647028!3d45.77291673227249!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4744ab9b8c52cda7%3A0xa55f9bcc265b800a!2sBazen!5e0!3m2!1ssr!2srs!4v1656342328560!5m2!1ssr!2srs" width="100%" height="auto" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="contact-form">
        <h1>Kapcsolat</h1>
        <form action="">
            <input type="text" placeholder="Neve:" class="contact-form-txt" />
            <input type="text" placeholder="Neve:" class="contact-form-txt"/>
            <textarea placeholder="Üzenet..." class="contact-form-textarea"></textarea>
            <input type="submit" name="Submit" class="contact-form-btn"/>
        </form>
    </div>
</div>


</body>
