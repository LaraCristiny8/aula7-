<?php
header("Content-Type:application/json");

$data = ['status' => 'ok', 'hora' => date('H:i:s'), 'servidor' => 'local + nuvem'];

echo json_encode($data);