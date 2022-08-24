<?php
require_once 'inc.php';

//header('Content-Type: text/html; charset=windows-1251');
//header('Content-Type: text/html; charset=utf-8'); // кодировка utf-8
//header('HTTP/1.0 404 Not Found'); // Заголовок с кодом HTTP 404
//header('HTTP/1.0 304 Not Modified'); // Заголовок с кодом HTTP 304
//header('location: inc.php'); // моментальный редирект
//header('refresh: 5; url=inc.php'); // редирект с задержкой в 5 сек.

header('Content-Type: text/plain; charset=utf-8'); // кодировка utf-8
header('Content-Disposition: attachment; filename: downloaded.txt'); // скачивание
readfile('text.txt'); // прочитать файл
die;

//exit; // выход - не вылпонтяь код ниже
//die; // аналог exit

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <!--<meta charset="windows-1251">-->
    <!--  <meta charset="utf-8"> -->
    <title>DOCUMENTS</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?=$test?>
Привет, мир!!!!!

</body>
</html>
