<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STRINGS</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">STRINGS</h1>

<?php
/*----------------------------------------------------------------------------------------------------------------------
http://php.net/manual/ru/ref.strings.php
http://php.net/manual/ru/ref.mbstring.php

......................................................... PART 1 .......................................................

explode - Разбивает строку с помощью разделителя
array explode ( string $delimiter , string $string [, int $limit ] )

implode - Объединяет элементы массива в строку
string implode ( string $glue , array $pieces ) || join()

trim - Удаляет пробелы (или другие символы) из начала и конца строки
string trim ( string $str [, string $character_mask = " \t\n\r\0\x0B" ] )

rtrim - Удаляет пробелы (или другие символы) из конца строки
string rtrim ( string $str [, string $character_mask ] )

ltrim — Удаляет пробелы (или другие символы) из начала строки
string ltrim ( string $str [, string $character_mask ] )

md5 — Возвращает MD5-хеш строки
string md5 ( string $str [, bool $raw_output = false ] )

sha1 — Возвращает SHA1-хеш строки
string sha1 ( string $str [, bool $raw_output = false ] )

nl2br — Вставляет HTML-код разрыва строки перед каждым переводом строки
string nl2br ( string $string [, bool $is_xhtml = true ] )

......................................................... PART 2 .......................................................

str_replace — Заменяет все вхождения строки поиска на строку замены
mixed str_replace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

str_ireplace — Регистронезависимый вариант функции str_replace()
mixed str_ireplace ( mixed $search , mixed $replace , mixed $subject [, int &$count ] )

strip_tags — Удаляет теги HTML и PHP из строки
string strip_tags ( string $str [, string $allowable_tags ] )

strlen — Возвращает длину строки
int strlen ( string $string )

mb_strlen — Получает длину строки
mixed mb_strlen ( string $str [, string $encoding = mb_internal_encoding() ] )

......................................................... PART 3 .......................................................

mb_strpos — Поиск позиции первого вхождения одной строки в другую
int mb_strpos ( string $haystack , string $needle [, int $offset = 0 [, string $encoding = mb_internal_encoding() ]] )

mb_strtolower — Приведение строки к нижнему регистру
string mb_strtolower ( string $str [, string $encoding = mb_internal_encoding() ] )

mb_strtoupper — Приведение строки к верхнему регистру
string mb_strtoupper ( string $str [, string $encoding = mb_internal_encoding() ] )

mb_substr — Возвращает часть строки
string mb_substr ( string $str , int $start [, int $length = NULL [, string $encoding = mb_internal_encoding() ]] )

htmlspecialchars — Преобразует специальные символы в HTML-сущности
string htmlspecialchars ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы
string htmlspecialchars_decode ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 ] )

htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности
string htmlentities ( string $string [, int $flags = ENT_COMPAT | ENT_HTML401 [, string $encoding = ini_get("default_charset") [, bool $double_encode = true ]]] )

ini_get — Получает значение настройки конфигурации
string ini_get ( string $varname )

----------------------------------------------------------------------------------------------------------------------*/

// explode - Разбивает строку с помощью разделителя
echo '<h2 class="tblue">EXPLODE</h2>';
$str = "Иванов Иван Иванович";
$data = explode(' ', $str);
print_r($data);
echo '<br>';
echo $data[0] . '<br>';
echo $data[1] . '<br>';
echo $data[2] . '<br>';
echo '<hr>';

// implode (join) - Объединяет элементы массива в строку
echo '<h2 class="tblue">IMPLODE</h2>';
$data = ['Иванов','Иван','Иванович'];
echo $str = implode(' ', $data);
echo "<hr>\n\n";

// trim, ltrim, rtrim - Удаляет пробелы (или другие символы) в строке или из начала и конца строки
echo "<h2 class='tblue'>TRIM, LTRIM, RTRIM</h2>\n\n";
$str = "   \n<p>Hello</p>\n";
$str .="          \n<p>world!</p>\n\t";
//echo $str;
echo trim($str);
echo trim($str, "\t");

$str =",......test,";
echo $str . '<br>';
echo trim($str, ',') . '<br>';
echo ltrim($str, ',') . '<br>';
echo rtrim($str, ',') . '<br>';
echo "<hr>\n";

// md5,sha1 -хеширование (шифрование строк)
echo "<h2 class='tblue'>MD5, SHA1</h2>\n\n";
$str = 'password';
echo md5($str);         // 5f4dcc3b5aa765d61d8327deb882cf99
echo '<br>';
echo md5(md5($str));    // 696d29e0940a4957748fe3fc9efd22a3
echo "<hr>\n";

// nl2br - Вставляет HTML-код разрыва строки перед каждым переводом строки
echo "<h2 class='tblue'>nl2br</h2>\n\n";
$str = "Hello\nworld\n";
echo $str . '<br><br>';
echo nl2br($str);
echo "<hr>\n";

// str_replace, str_ireplace - Заменяет все вхождения строки поиска на строку замены
echo "<h2 class='tblue'>str_replace, str_ireplace</h2>\n\n";
$str = "Привет! Меня зовут [b]Вася[/b]"; // c тегами мессенджера
echo $str . '<br>';
$str = str_replace('[b]', '<b>', $str);
$str = str_replace('[/b]', '</b>', $str);
echo $str . '<br><br>';

$str = "[i]Привет![/i] Меня зовут [b]Вася[/b]"; // c тегами мессенджера
$search = ['[b]', '[/b]', '[i]', '[/i]'];
$replace = ['<b>', '</b>', '<i>', '</i>'];
$str = str_replace($search, $replace, $str); // замена с учётом регистра
echo $str . '<br><br>';

$str = "[i]Привет![/I] Меня зовут [b]Вася[/B]"; // c тегами мессенджера
$str = str_ireplace($search, $replace, $str); // замена без учёта регистра
echo $str . '<br>';

echo "<hr>\n";

// strip_tags - Удаляет теги HTML и PHP из строки
echo "<h2 class='tblue'>strip_tags</h2>\n\n";
$str = '<i>Привет!</i> Меня зовут <b>Вася</b>! <script>alert("XSS")</script>'; // c тегами мессенджера и XSS atack
echo strip_tags($str,'<b><i>') . '<br>';

echo "<hr>\n";

// strlen, mb_strlen - Возвращает длину строки
echo "<h2 class='tblue'>strlen, mb_strlen</h2>\n\n";
echo $str = strlen('hello')."\n<br>";
echo $str = strlen('привет!')."\n<br>"; // кол-во байт
echo $str = mb_strlen('привет!','utf-8')."\n<br>"; // кол-во символов для мульти-байтной(mb) кодировки utf-8

echo "<hr>\n";

// mb_strpos - Поиск позиции первого вхождения одной строки в другую
echo "<h2 class='tblue'>mb_strpos</h2>\n\n";

$str = 'Привет, мир!';

echo mb_strpos($str, 'и', 0, 'utf-8').'<br>';

var_dump(mb_strpos($str, '.', 0, 'utf-8'));
echo '<br>';

if (mb_strpos($str, 'П', 0, 'utf-8') !== false) echo "<b>OK!</b>"; // строгое сравнение
else echo "<b>NO</b>";

echo "<hr>\n<br>\n";

// mb_strtolower, mb_strtoupper - Приведение строки к нижнему или верхнему регистру
echo "<h2 class='tblue'>mb_strtolower, mb_strtoupper</h2>\n\n";
echo $str = 'привет, мир'.'<br>';
echo $str2 = 'ПРИВЕТ, МИР'.'<br>';
echo '<span class="tred tbold">'. mb_strtoupper($str, 'utf-8') . '</span>';
echo '<span class="tred tbold">' . mb_strtolower($str2, 'utf-8') .'</span>';

echo "<hr>\n";

// mb_substr - Возвращает часть строки
echo "<h2 class='tblue'>mb_substr</h2>\n\n";
$str = 'Привет, мир!';
echo mb_substr($str,8, null,'utf-8').'<br>';
echo mb_substr($str,8, 3,'utf-8').'<br>';
echo mb_substr($str,0, 6,'utf-8').'<br>';
echo mb_substr($str,-4, 3,'utf-8').'<br>';

echo "<hr>\n";

// htmlspecialchars — Преобразует специальные символы в HTML-сущности
echo "<h2 class='tblue'>htmlspecialchars</h2>\n\n";

$str = '&amp; <h1><i>Привет</i>! Меня зовут <b>Вася</b>!</h1><iframe src="https://scsmed.com.ua" width="100%" height="100%"></iframe><script>alert(\'XSS\')</script>';
// echo $str . '<br>';

echo htmlspecialchars($str, ENT_QUOTES, 'utf-8',false);

echo "<hr>\n";

// htmlspecialchars_decode — Преобразует специальные HTML-сущности обратно в соответствующие символы
echo "<h2 class='tblue'>htmlspecialchars_decode</h2>\n\n";
$str = '&amp; &lt;h1&gt;&lt;i&gt;Привет&lt;/i&gt;! Меня зовут &lt;b&gt;Вася&lt;/b&gt;!&lt;/h1&gt;&lt;iframe src=&quot;https://scsmed.com.ua&quot; width=&quot;100%&quot; height=&quot;100%&quot;&gt;&lt;/iframe&gt;&lt;script&gt;alert(&#039;XSS&#039;)&lt;/script&gt;';
echo '<br>';
echo $str;
echo htmlspecialchars_decode($str);


echo "<hr>\n";


// htmlentities — Преобразует все возможные символы в соответствующие HTML-сущности

?>


</body>
</html>
