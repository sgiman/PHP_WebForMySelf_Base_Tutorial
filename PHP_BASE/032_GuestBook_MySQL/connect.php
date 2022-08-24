<?php

$db = @mysqli_connect('localhost', 'root', 'root', 'gb') or die('Ошибка соединения с БД');
//if(!$db) die(mysqli_connect_error()); // детализация ошибки подключения
mysqli_set_charset($db,'utf8') or die('Не установлена кодировка'); // кодировка


