<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <title>Операторы (1)</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">ОПЕРАТОРЫ (2)</h1>

<?php
error_reporting(-1);

/*
Арифметически операторы
"+" сложение $a + $b
"-" вычитание $a - $b
"*" умножение $a * $b
"/" деление $a / $b
"-$a" отрицание (смена знака $a)
"$a % $b" деление по модулю (остаток от деления)
"$a ** $b" возведение в степень
"=" присваивание (установка значения)
"&" присваивание по ссылке
============================
"++$a" префиксный инкремент
"$a++" постфиксный инкремент
"--$a" префиксный декремент
"$a--" постфиксный декремент
"." конкатенация (склеивание строк)
комбинированные операторы
*/

$a = 5;
// Постфиксный метод
var_dump($a++);
var_dump($a);
echo '<br><br>';
var_dump($a--);
var_dump($a);
echo '<br><br>';

// Префиксный метод
$a = 5;
var_dump(++$a);
var_dump($a);
echo '<br><br>';
$a = 5;
var_dump(--$a);
var_dump($a);
echo '<br><br>';

$a = 5;
$a = $a + 1; // $a++
var_dump($a);
echo '<br><br>';

// КОНКАТЕНАНЦИЯ СТРОК
$str1 = 'Hello, ';
$str2 = 'World!';
$str = $str1 . $str2;
echo $str;
echo '<br><br>';

$fruit = 'apple';
echo $winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";
echo '<br><br>';
echo $winnie_pooh = "Hello, I'm Winnie. I have 2 $fruit" . 's';
echo '<br><br>';
echo $winnie_pooh = 'Hello, I\'m Winnie. I have 2 ' . $fruit . 's';
echo '<br><br>';

// КОМБИНИРОВАННЕ ОПЕРАТОРЫ
$a = 5;
// $a = $a + 2;
$a += 2;
var_dump($a);
echo '<br>';
$str = 'Hello, ';
$str .= 'World!';
echo $str;
echo '<br><br>';

// NULL
var_dump($var);     // null
echo '<br><br>';

$var = '';
unset($var);        // удалить переменную
var_dump($var);     // NULL
echo '<br><br>';

$var = NULL;
var_dump($var);     // NULL
echo '<br><br>';

$var = NULL;
$var++;             // только для инкримента
var_dump($var);     // 1
echo '<br><br>';
?>

</body>
</html>
