<?php

// экранировать спец-символы
function clear() {
    global $db;
    foreach ($_POST as $key => $value){
        $_POST[$key] = mysqli_real_escape_string($db, $value);
    }
}

// сохранить сообщение
function save_mess() {
    global $db;
    clear(); // экранировать спец-символы
    extract($_POST); // получить переменные из массива POST
    //$name = mysqli_real_escape_string($db, $_POST['name']); // экранировать спец-символы
    //$text = mysqli_real_escape_string($db, $_POST['text']);
    $query = "INSERT INTO db (name, text) VALUES ('$name', '$text')"; // запрос - вставить
    mysqli_query($db, $query); // выполнить запрос
    echo mysqli_error($db);
}

// получить сообщения
function get_mess() {
    global $db;
    $query = "SELECT * FROM db ORDER BY id DESC"; // выбрать все сообщения
    $res = mysqli_query($db, $query); // выполнить запрос
    return mysqli_fetch_all($res, MYSQLI_ASSOC); // вернуть все сообщения в ассоциативном массиве
}

// вывести форматированный массив
function print_arr($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';     // вывод с буферизацией
}
