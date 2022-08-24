<?php

error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

function print_arr($arr) {
    echo '<pre>' . print_r($arr, true) . '</pre>';     // вывод с буферизацией для просмотра массивов
}

/*----------------------------------------------------------------------------------------------------------------------
mysqli_connect() - Открыть новое соединение с MySQL сервером.
Возвращает объект, представляющий подключение к серверу MySQL.
mysqli::__construct()

mysqli_connect_error() - Возвращает описание последней ошибки подключения.
Сообщение об ошибке. NULL, если ошибка отсутствует.

mysqli_set_charset() - Устанавливает кодировку

mysqli_query() - Выполняет запрос к базе данных. Возвращает FALSE в случае неудачи.
В случае успешного выполнения запросов SELECT mysqli_query() вернет объект mysqli_result.
Для остальных успешных запросов mysqli_query() вернет TRUE.

mysqli_fetch_all() - Выбирает все строки из результирующего набора
и помещает их в ассоциативный массив, обычный массив или в оба

mysqli_fetch_assoc() - Извлекает результирующий ряд в виде ассоциативного массива.
Возвращает ассоциативный массив, соответствующий результирующей выборке или NULL,
если других рядов не существует.

mysqli_num_rows() - Получает число рядов в результирующей выборке.

mysqli_affected_rows() - Получает число строк, затронутых предыдущей операцией MySQL.
Возвращает число строк, затронутых последним INSERT, UPDATE, REPLACE или DELETE запросом.
Целое число, большее нуля, означает количество затронутых или полученных строк.
Ноль означает, что запросом вида UPDATE не обновлено ни одной записи,
или что ни одна строка не соответствует условию WHERE в запросе,
или что запрос еще не был выполнен. Значение -1 указывает на то, что запрос вернул ошибку.

mysqli_error() - Возвращает строку с описанием последней ошибки.
----------------------------------------------------------------------------------------------------------------------*/

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>MySQL Fuctions</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1 class="tred">MySQL Functions</h1>

<?php
//----------------------------- (1) СОЕДИНЕНИЕ ---------------------------------
// --- ПОДКЛЮЧЕНИЕ MySQL ---
// @ - не выводить детализацию ошибок
$db = @mysqli_connect('localhost', 'root', 'root', 'gb') or die('Ощибка соединения с БД');

//echo '<h3 class="tblue">mysqli_connect: </h3>';
// --- ОШИБКИ ---
//echo '<h3 class="tblue">mysqli_connect_error: </h3>';
//echo var_dump(mysqli_connect_error());
// Диагностика
if(!$db) die(mysqli_connect_error()); // детализация ошибки подключения

// --- КОДИРОВКА ---
mysqli_set_charset($db,'utf8') or die('Не установлена кодировка');

//------------------------------- (2) ДАННЫЕ И ЗАПРОСЫ ---------------------------------
/*
echo '<h4>INSERT:</h4>';
//echo $insert = "INSERT INTO db (name, text) VALUE ('Оля', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit.')";
$insert = "INSERT INTO db (name, text) VALUE ('Оля', 'Ut aliquet posuere lacinia.')";
$res_insert = mysqli_query($db, $insert);   // INSERT
// Диагностика
if($res_insert) echo 'OK';
else echo '<h4>ERROR:</h4>';     // ошибка
echo mysqli_error($db);          // детализация ошибки запроса
*/

/*
echo '<h4>UPDATE:</h4>';
$update = "UPDATE db SET text = CONCAT(text, '|') WHERE id > 10";     // добавить 3 симовола
$res_update = mysqli_query($db, $update) or die(mysqli_error($db));   // UPDATE
*/

/*
echo '<h4>DELETE:</h4>';
$delete = "DELETE FROM db WHERE id > 10";
$res_delete = mysqli_query($db, $delete) or die(mysqli_error($db));  // DELETE
echo mysqli_affected_rows($db); // кол-во изменённых записей
*/

//----------------------------------------------------------------------------------------------------------------------
// Экранирование спец. символов
$str = "d'Artanian";
$str = mysqli_real_escape_string($db, $str); // экранировать спец-символ (')
$query = "INSERT INTO db (`name`, `text`) VALUE ('$str', 'Имя с апострофом')"; // INSERT - d'Artanian
mysqli_query($db, $query) or die(mysqli_error($db)); // ЗАПРОС и ОШИБКА
//----------------------------------------------------------------------------------------------------------------------

echo '<h4>SELECT:</h4>';
//$res = mysqli_query($db,"SELECT * FROM db");
//$res = mysqli_query($db,"SELECT name,text,date FROM db ORDER BY id DESC");
$res = mysqli_query($db,"SELECT id,name,text,date FROM db ORDER BY id DESC LIMIT 3");
echo '<br>';
echo  mysqli_num_rows($res);    // кол-во полученных записей
$data = mysqli_fetch_all($res, MYSQLI_ASSOC);   // массив ассоциативных записей
//print_arr($data); // вывести массив
echo '<hr><br>';

$data2 = [];
while($row = mysqli_fetch_assoc($res)){ // массив для одной строки записи
    $data2[row['id']]= $row;
    print_arr($row); // вывести все строки записей с ключами
}

foreach ($data as $item) { // вывести массив элемнетов записей
    echo "<b class='tred'>Name: </b> {$item['name']} <br>";
    echo "<b class='tblue'>Text: </b> {$item['text']} <br>";
    echo "<b class='tgreen'>Date: </b> {$item['date']} <br>";
    echo '<hr>';
}


?>

<h2>END</h2>
<hr>

</body>
</html>

