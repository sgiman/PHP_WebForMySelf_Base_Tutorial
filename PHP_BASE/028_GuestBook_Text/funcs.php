<?php

function save_mess() {
    $str = $_POST['name'] . '|' . $_POST['text'] . '|' . date('Y-m-d H:i:s') . "\n***\n"; // строка сообщений
    file_put_contents(FILE, $str, FILE_APPEND); // записать строку в файл (с добавлением)
}

function get_mess() {
    return file_get_contents(FILE);
}

function array_mess($messages) {
    $messages = explode("\n***\n", $messages);
    array_pop($messages);                             // удалить последний элемент массива
    return array_reverse($messages);                         // ревертировать массив
}

function get_format_message($message) {
    return explode('|', $message);                   // разбить строку массива "Автор | Дата"
}

function print_arr($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';     // вывод с буферизацией
}
