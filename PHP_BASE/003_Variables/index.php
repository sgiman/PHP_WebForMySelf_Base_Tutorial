<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HELLO WORLD</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">VARIABLES</h1>

<?php
$Var = 123;
$var = 'Hello';
$head_h1 = "Hello World!";
$title = "page title";
$fruit = 'apple';

// $винни_пух = "Hello, I'm Winnie";
$winnie_pooh = "Hello, I'm Winnie. I have 2 {$fruit}s";         // предпочитается в PHP и операторные скобки
//$winnieThePooh = "Hello, I'm Winnie";                         // Верблюжья нотация (CAMEL CASE)

define("PAGE", "new page");                                     // Константы - старый вариант php 5.3 - предпочтительно
const PAGE2 = 'new const';                                      // Константы -  новый вариант - только в начале кода
echo $var;

?>

<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link href="style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 class="tred">ПЕРЕМЕННЫЕ</h1>
<h1 class="tblue"><?php echo $head_h1; ?></h1>
<h3><?php echo $winnie_pooh; ?></h3>
<p><?php echo $Var; ?></p>
<h1><?php echo PAGE; ?></h1>
<h1><?php echo PAGE2; ?></h1>

</body>
</html>
