<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

const FILE = 'gb.txt';
require_once 'funcs.php';

if(!empty($_POST)) {
    save_mess(); // записать строку сообщения в файл
    header("Location: {$_SERVER['PHP_SELF']}"); // редирект на текущую страницу для автообновления и очиcтки $_POST
    exit;
}

$messages = get_mess();                                 // прочитать файл сообщений
$messages = array_mess($messages);                      // разбить строку в моссив для раделителя ***
// print_arr($messages);                                   // вывести массив сообщений

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
        <?php $message = get_format_message($message); ?>
        <div class="message">
            <p><b>Автор: </b><?=$message[0]?> | <b>Дата</b>: <?=$message[2]?></p>
            <div class="tblue"><?=nl2br(htmlspecialchars($message[1]))?></div>
        </div>
    <?php endforeach; ?>
<?php endif; ?>


</body>
</html>