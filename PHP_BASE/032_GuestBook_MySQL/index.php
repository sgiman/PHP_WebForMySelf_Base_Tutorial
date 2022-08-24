<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

require_once 'connect.php';
require_once 'funcs.php';

if(!empty($_POST)) {
    save_mess(); // записать сообщение
    header("Location: {$_SERVER['PHP_SELF']}"); // редирект на текущую страницу для автообновленияи и очиcтки $_POST
    exit;
}

$messages = get_mess();                                 // получить массив сообщений
//print_arr($messages);                                 // вывести массив сообщений

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GUEST BOOK</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">

</head>

<body>

<h1 class="tred">Гостевая книга</h1>

<form action= <? echo $_SERVER['PHP_SELF'] ?> method="post">

    <p>
        <label for="name">Имя</label><br>
        <input type="text" name="name" id="name">
    </p>

    <p>
        <label for="text">Текст:</label><br>
        <textarea name="text" id="text"></textarea>
    </p>

    <button type="submit">Написать</button>

</form>

<hr>

<?php if(!empty($messages)): ?>
    <?php foreach ($messages as $message): ?>
        <div class="message">
            <p><b>Автор: </b><?=$message['name']?> | <b>Дата</b>: <?=$message['date']?></p>
            <div class="tblue"><?=nl2br(htmlspecialchars($message['text']))?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>