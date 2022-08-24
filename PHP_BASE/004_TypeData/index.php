<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ТИПЫ ДАННЫХ</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">ТИПЫ ДАННЫХ</h1>

<?php
/*
 * boolean: true | false
 * integer
 * float
 * string
*/
$var = true;
var_dump($var);
echo '<br>';
echo gettype($var);
echo '<br>';

$int = '-10' + 5;
var_dump($int);
echo '<br>';

$fl = 1.2;
var_dump($fl);
echo '<br><br>';

$var = '10';

$str1 = 'This is string1 $var'; // переменная не определяется
var_dump($str1);
echo '<br>';

$str2 = "This is string2 $var"; // сторка с переменной
var_dump($str2);
echo '<br>';

$str3 = "This is string3 {$var}"; // сторка с переменной в скобках
var_dump($str3);
echo '<br><br>';

$str = "This is 'string' $var"; // без экаранирования символов с переменной
var_dump($str);
echo '<br>';

$str = "This is 'string' \$var"; // безэкаранирования символов, но с экранировнием переменной
var_dump($str);
echo '<br>';

$str = "This is \"string\" \$var"; // с двойнми кавычками
var_dump($str);
echo '<br>';

$str = 'This is \'string\' $var'; // с экаранированием символов без переменной
var_dump($str);
echo '<br><br>';

// HEREDOC (текст без экранировния с кавычками - аналог двойных кавычек)
$str = <<<HERE
This "is" 'string' $var
HERE;
var_dump($str);
echo '<br><br>';

// NOWDOC (текст без экранировния с кавычками - аналог одиннарных кавычек, переменнная не обабатывается - php 5.3)
$str = <<<'HERE'
This 'is' "string" $var
HERE;
var_dump($str);
echo '<br><br>';

?>

</body>
</html>



