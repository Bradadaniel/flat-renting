<!--az a feladata hogy egy formot letesit ami tartalmaz texteket submit
es a php oldalon ellenorzi el e lett kuldve-->
<form method="post">
    <label>Title:</label>
    <input type="text" name="title"><br><br>
    <label>Text:</label>
    <textarea rows="5" cols="20" name="text"></textarea>
    <br><br>
    <input type="submit" value="insert message">
</form>
<?php
require "db_config.php";
$title = $text = "";

if (isset($_POST['title'])) {
    $title = trim(mysqli_real_escape_string($connection, $_POST['title']));
}

if (isset($_POST['text'])) {
    $text = trim(mysqli_real_escape_string($connection, $_POST['text']));
}

if (!empty($title) AND !empty($text)) { //ha nem ures a title beirja a message adatokat
    $sql = "INSERT INTO message (title,text,date) VALUES ('$title','$text',now())";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    if (mysqli_affected_rows($connection) > 0) {
        echo "ok";
    } else {
        echo "no";
    }
}


