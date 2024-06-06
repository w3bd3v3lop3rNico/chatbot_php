<?php 

$message = isset($_POST['text']) ? $_POST['text'] : '';

echo $message;
var_dump($message);

if ($message) {
    echo "Hai un messaggio";

    $array = [
        'text' => $message,
        'done' => false
    ];
    // $array['text'] = $message;
    // $array['done'] = false;
    $file_path = './messages.json';
    
    $messages_json =file_get_contents($file_path);
    // $mex_for_php = json_decode($messages_json, true);
    $mex_for_php[] = $array;

    $messages_json = json_encode($mex_for_php, JSON_PRETTY_PRINT);
    header('Content-Type: application/json');
    file_put_contents($file_path, $messages_json);

} else {
    echo "Nessun messaggio";
};

?>