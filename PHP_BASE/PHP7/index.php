<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP7</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">PHP7</h1>
<hr>

<!--===========================================================================================-->

<?php

// --- тернарнарный оператор ---
// php5
//echo $user = isset($_GET['user']) ? $_GET['user'] : 'guest';
// php7
echo $user = $_GET['user'] ?? $_GET['user2'] ?? 'guest';
echo '<hr>';

// --- Оператор "spaceship" ---
// php7
$a = 1;
$b = 2;
echo $a <=> $b;
echo '<br>';
if(($a <=> $b) === 1) {
    echo '$a < $b';
}elseif(($a <=> $b) === -1){
    echo '$a < $b';
}else
    echo '$a = $b';
echo '<hr>';

// --- Массив констант ---
// php5
define('DBUSER', 'login');
define('DBPASS', 'password');
define('DBBASE', 'datebase');
define('DBHOST', 'localhost');

// php7

/*
//нумерованный масиив констант
define('DB', [
    'localhost',
    'login',
    'password',
    'datebase',
]);
echo '<pre>';
print_r(DB);
echo '</pre>';
echo DB[1];
*/

// ассоциативный массив констант
define('DB', [
    'DBUSER' => 'localhost',
    'DBPASS' => 'login',
    'DBBASE' => 'password',
    'DBHOST' => 'datebase'
]);
echo '<pre>';
print_r(DB);
echo '</pre>';
echo DB['DBPASS'];

echo '<hr>';

// --- ОБЯВЛЕНИЕ ПРОСТРАНСТВА ИМЕН ---
// php5 (классы по отдельности)
//use classes\controllers\Controller;
//use classes\controllers\PageController;
//use classes\models\Model;
//use classes\models\PageModel;

// php7 (клосссы с группировкой)
use classes\controllers\{Controller, PageController};
use classes\models\{Model, PageModel};

// пространство имён классов - use
// стандартный загрузчик
spl_autoload_register(function ($class) {
    $file = str_replace('\\','/', $class) . '.php'; // модифиуировать пути для имени файла
    if(is_file($file)) { // найти и подключить
        require_once $file;
    }
});

new Controller();
new PageController();
new Model();
new PageModel();

echo '<hr>';

// --- ДЕКЛАРАЦИЯ ПРИНИМАЕМЫХ СКАЛЯРНЫХ ТИПОВ ---
//declare(strict_types=1); // строгое объявление int

function sum(int...$ints) {  // неограниченное кол-во параметров php5-7 c приведением к int
    return array_sum($ints); // сумма всех элементов числовго массива
}
//var_dump(sum(2, 3.5, 5));
var_dump(sum(2, 3, 5));
echo '<hr>';

// --- ДЕКЛАРАЦИЯ ПЕРЕДАВАЕМЫХ ТИПОВ ---
function suma($a, $b) : int { // привести возвращаеме значение к типу int
    return $a + $b;
}
var_dump(suma(2.4, 3));
echo '<hr>';

// --- ФУНКЦИЯ ЦЕЛОЧИСЛЕННОГО ДЕЛЕНИЯ - indiv() ---
// php5
var_dump( (int) (10 / 3)  );
echo '<br>';

// php7
var_dump(intdiv (10, 3));


?>

<!--===========================================================================================-->

</body>
</html>
