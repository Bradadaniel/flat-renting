<?php

$data = [];
$data['name'] = "vts";
$data['position'] = "programmer";

header('Content-Type:application/json;charset=utf-8');
echo json_encode($data);
?>