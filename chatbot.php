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
    <link rel="stylesheet" href="styles.css">
    <!-- <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script> -->
    <!-- <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script> -->
</head>
<body id="chatbot">
    <section class="container"> 
        <h4>D-One Chatbot</h4>
        <div class="chat">

        </div>
        <form action="write.php" method="POST">
            <input type="text" placeholder="Inserisci il testo" name="text">
            <input type="e-mail" placeholder="Utente" name="user">
            <button type="submit" class="submit-btn">Send</button>
        </form>
        <!-- <div><?php foreach($messages as $m) { ?> <p>
           <?php echo $m; ?></p> <?php
        }  ?> </div> -->


    </section>
    <script src="./app.js"></script>
</body>
</html>