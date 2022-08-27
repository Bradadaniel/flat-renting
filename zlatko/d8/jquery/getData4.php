<?php

require("db_config.php");

$sql = "SELECT id_user,name,position,salary
        FROM users
        ORDER BY id_user ASC";

$result = mysqli_query($connection, $sql) or die(mysqli_error($connection));

if (mysqli_num_rows($result) > 0) {

    $data = array();

    while ($record = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
        $data[] = array('id_user' => (int)$record['id_user'], 'name' => $record['name'], 'position' => $record['position'], 'salary' => (int)$record['salary']);
    }

    header('Content-Type:application/json;charset=utf-8');
    echo json_encode($data);
} else
    echo "No data!";
?>