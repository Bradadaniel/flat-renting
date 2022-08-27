<?php
$school = "VTS";
$city = "Subotica";

if (isset($_POST['school']) AND isset($_POST['city'])) {

    if (!empty(trim($_POST['school']))) {
        $school = $_POST['school'];
    }

    if (!empty(trim($_POST['city']))) {
        $city = $_POST['city'];
    }

    echo "$school is in $city";
} else {
    echo "Hello VTS";
    echo '<p id="p1">Subotica Tech</p>';
}
?>