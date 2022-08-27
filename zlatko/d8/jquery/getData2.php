<?php
$name = "VTS";
$hill = "Subotica";

if (isset($_POST['name']) AND isset($_POST['hill'])) {

    if (!empty(trim($_POST['name']))) {
        $name = $_POST['name'];
    }

    if (!empty(trim($_POST['hill']))) {
        $hill = $_POST['hill'];
    }

    echo $name . " is the KING OF THE HILL - " . $hill;
} else {
    echo "Hello VTS";
    echo '<p id="p1">Subotica Tech</p>';
}
?>