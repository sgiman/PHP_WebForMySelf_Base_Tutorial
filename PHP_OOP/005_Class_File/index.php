<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLASS-FILE</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">CLASS-FILE</h1>
<hr>

<?php
// https://www.php.net/manual/ru/function.fwrite.php#refsect1-function.fwrite-examples
require_once 'classes\File.php';

// создать объект файл
$file = new File(__DIR__ . '/file.txt' );
// записать строку в файл
$file->write('Строка 1');
$file->write('Строка 2');
$file->write('Строка 3');
$file->write('Строка 4');
$file->write('Строка 5');


?>


</body>
</html>
