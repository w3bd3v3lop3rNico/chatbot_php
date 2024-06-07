<?php
$index = $_POST['id'] ?? null;

if ($index !== null && is_numeric($index)) {
    $index = intval($index);
    $msg_json = file_get_contents('./messages.json');
    $msg_converted = json_decode($msg_json, true);
    $removed = array_splice($msg_converted, $index, 1);
    $response = [
        'success' => true,
        'results' => $msg_converted
    ];

    $msg_json = json_encode($msg_converted);
    file_put_contents('./messages.json', $msg_json);
    header('Content-Type: application/json');
    echo json_encode($response)
}


?>
