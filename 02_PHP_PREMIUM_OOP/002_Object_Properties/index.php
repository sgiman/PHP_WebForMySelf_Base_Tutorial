<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Object Properties</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">Object Properties</h1>
<hr>

<?php
error_reporting(-1);
require_once 'classes\Car.php';

function debug ($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car();
$car2 = new Car();

debug($car1);
var_dump($car1);            // вывод свойств в классе

$car1->color = 'чёрный';
$car1->brand = 'volvo';
$car1->year = 2018;         // дабавить свойство динамически (год)
$car1->colour = 'красный';  // не корректно
debug($car1);               // вывод свойств вне класса

$car2->color = 'белый';
$car2->brand = 'bmw';
$car2->speed = 200;
$car2->year = 2017;
debug($car2);

echo "<h3 class='tblue'>О моём авто</h3>
<b>Марка: </b> {$car1->brand} <br>
<b>Цвет: </b> {$car1->color} <br>
<b>Кол-во колес: </b> {$car1->wheels} <br>
<b>Год выпуска: </b> {$car1->year} <br>
<b>Скорость: </b> {$car1->speed} <br>"

?>


</body>
</html>
