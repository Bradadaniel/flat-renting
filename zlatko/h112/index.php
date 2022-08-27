<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Poll</title>
</head>
<body>

<?php

require "db_config.php";

$sql = "SELECT * FROM poll ORDER BY id_poll";
$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));
while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
    echo "<b>$record[question]</b><br>";
    $id_poll = $record['id_poll'];

    $sql = "SELECT id_answer,text FROM answer WHERE id_poll='$id_poll'";
    $result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        echo '<input type="radio" id="a' . $record['id_answer'] . '" name="answer' . $id_poll . '" data-id-poll="' . $id_poll . '" data-id-answer="' . $record['id_answer'] . '">';
        echo '<label for="a' . $record['id_answer'] . '">' . $record['text'] . '</label><br>';
    }
}

?>
<hr>
<div id="results"></div>
<script type="text/javascript">

    var $ = function (id) {
        return document.getElementById(id);
    }

    window.addEventListener('load', init);

    function init() {

        var radioButtons = document.querySelectorAll("input[type=radio]");

        for (let i = 0; i < radioButtons.length; i++) {
            radioButtons[i].addEventListener('click', function (e) {
                sendVote(e);
            });
        }

    }

//fontos!!
    function sendVote(e) {
        console.log(e.target);
        var xmlhttp;
        if (window.XMLHttpRequest) {
            xmlhttp = new XMLHttpRequest();
        }

        xmlhttp.onreadystatechange = function () {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                $("results").innerHTML = xmlhttp.responseText;
            }
        };

        let id_poll = e.target.getAttribute('data-id-poll');
        let id_answer = e.target.getAttribute('data-id-answer');

        xmlhttp.open("POST", "vote.php", true);
        xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("id_poll=" + id_poll + "&id_answer=" + id_answer);
    }

</script>
</body>
</html>