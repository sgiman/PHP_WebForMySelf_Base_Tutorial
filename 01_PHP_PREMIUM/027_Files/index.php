<?php
header("Content-type: text/html; charset=utf-8");
error_reporting(-1);
/*----------------------------------------------------------------------------------------------------------------------
copy — Копирует файл
bool copy ( string $source , string $dest [, resource $context ] )

file_exists — Проверяет существование указанного файла или каталога
bool file_exists ( string $filename )

file_get_contents — Читает содержимое файла в строку
string file_get_contents ( string $filename [, bool $use_include_path = false [, resource $context [, int $offset = -1 [, int $maxlen ]]]] )

file_put_contents — Пишет данные в файл
int file_put_contents ( string $filename , mixed $data [, int $flags = 0 [, resource $context ]] )

file — Читает содержимое файла и помещает его в массив
array file ( string $filename [, int $flags = 0 [, resource $context ]] )

is_dir — Определяет, является ли имя файла директорией
bool is_dir ( string $filename )

is_file — Определяет, является ли файл обычным файлом
bool is_file ( string $filename )

move_uploaded_file — Перемещает загруженный файл в новое место
bool move_uploaded_file ( string $filename , string $destination )

rename — Переименовывает файл или директорию
bool rename ( string $oldname , string $newname [, resource $context ] )

mkdir — Создаёт директорию
bool mkdir ( string $pathname [, int $mode = 0777 [, bool $recursive = false [, resource $context ]]] )

rmdir — Удаляет директорию
bool rmdir ( string $dirname [, resource $context ] )

touch — Устанавливает время доступа и модификации файла
bool touch ( string $filename [, int $time = time() [, int $atime ]] )

unlink — Удаляет файл
bool unlink ( string $filename [, resource $context ] )

------------------------------------------------------------------------------------------------------------------------
ADD C-ANSI:
fopen
fclose
fgets
feof
filesize
filetype
fputs
fread
fwrite
fscanf
fseek
------------------------------------------------------------------------------------------------------------------------
FOR EXEL-CSV:
fgetcsv — Читает строку из файла и производит разбор данных CSV
fputcsv — Форматирует строку в виде CSV и записывает её в файловый указатель
----------------------------------------------------------------------------------------------------------------------*/
?>

<?php

// copy — Копирует файл
//copy('text.txt', 'folder/text.txt');

// file_exists — Проверяет существование указанного файла или каталога
if(file_exists('folder/text.txt')) echo '<b>file_exists: </b>Файл существует';
else echo '<b>file_exists: </b>Такого файла нет';
echo '<br>';
if(file_exists('folder')) echo '<b>file_exists: </b>Каталог существует';
else echo '<b>file_exists: </b> Такого каталога нет';
echo '<br>';

// file_get_contents — Читает содержимое файла в строку
echo nl2br($file = '<b>file_get_contents: </b>' . file_get_contents('text.txt')); // вывод с переносами строк
//$file = file_get_contents('http://php.net');
//echo htmlspecialchars($file);


// file_put_contents — Пишет данные в файл
//$file = file_get_contents('http://php.net'); // прочитать
//$file2 = file_get_contents('https://www.php.net/manual/ru/function.file-put-contents.php'); // прочитать
//file_put_contents('folder/text.txt', $file);                         // записать в файл 1
//file_put_contents('folder/text.txt', $file2, FILE_APPEND);     // дописать в файл 2

// file — Читает содержимое файла и помещает его в массив
$file = file('text.txt', FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES); // пропустить '\n' и пустые строки
echo '<pre>';
print_r($file);
echo '</pre>';

//is_dir — Определяет, является ли имя файла директорией
//is_file — Определяет, является ли файл обычным файлом
if(is_dir('folder')) echo 'Это каталог';
else echo 'Это не каталог';
echo '<br>';
if(is_file('text.txt')) echo 'Это файл';
else echo 'Это не файл';

//move_uploaded_file — Перемещает загруженный файл в новое место
//rename — Переименовывает файл или директорию
//rename('text.txt', 'folder/file2.txt')

//mkdir — Создаёт директорию (???)
//rmdir — Удаляет директорию
//mkdir('1'); // ???
//mkdir('1/2/3', 0777, true); // ???
//rmdir('1'); // ???

//touch — Устанавливает время доступа и модификации файла - ???
//touch('folder/text.txt', time()+3600*24); // ???

//unlink — Удаляет файл - ???
//unlink ('folder/text.txt'); // ???



?>
