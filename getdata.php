<?php 
$messages_json = file_get_contents('./messages.json');

$messages = json_decode($messages_json, true);

$response= [
    'success' => true,
    'results' => $messages
];

header('Content-Type: application/json');
echo json_encode($response);

?>