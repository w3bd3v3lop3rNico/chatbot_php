<?php

// $message = $_POST['text'];

// $user = $_POST['user'];

// $messages[] = $message;
// $messages[] = $user;

// var_dump($messages);

// foreach($messages as $n) {
//     echo $n;
// };
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chatbot</title>
    <link rel="stylesheet" href="./css/styles.css">
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
</head>
<body >
    <section id="app"> 
        <h4>D-One Chatbot</h4>
        <ul class="chat">
            <li class="message" v-for="(msg, idx) in messages" :key="idx">
                <span @click="deleteMessage(idx)"></span>
                
            </li>
        </ul>
        <input type="text" placeholder="Scrivi un messaggio" v-model="newMes" @keyup.enter="addMessage">


    </section>
    <script src="./js/app.js"></script>
</body>

</html>