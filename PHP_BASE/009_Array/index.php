<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Массивы</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
    /head>
<body>
<h1 class="tred">НУМЕРОВАННЫЕ МАССИВЫ</h1>

<?php

$arr = array('Ivanov','Petrov','Sidorov'); // старый вариант объявления массива до php5.4

//$var="Ivanov";
//echo $var;
//echo $arr;

var_dump($arr);
echo '<br>';
echo '<pre>';   // форматированный вывод
print_r($arr);  // распечатать массив
echo '</pre>';

echo $arr[0] . '<br>';    // вывод элемента массива [],{}
echo $arr[1] . '<br>';
echo $arr{2} . '<br>';

$arr2 = [
     1,
     2,
     [
       'banana',
       'orange',
       'apple'
     ],
    4,
    'cat',
    6,
    7,
    8,
    9,
]; // новый сокращённый вариант объявления массива

echo '<pre>';
print_r($arr2);
echo '</pre>';

echo $arr2 [2][0] . '<br>'; // вывод элемента многомерного массива
echo $arr2 [2][1] . '<br>';
echo $arr2 [2][2] . '<br>';

// $arr3 = [2 => 'Ivanov', 3 => 'Petrov', 4 => 'Sidorov']; // короткая запись c индексами-ключами
$arr3 = [
     2 => 'Ivanov',
     4 => 'Petrov',
    10 => 'Sidorov',
          'Pupkin'
];

echo '<pre>';
print_r($arr3);
echo '</pre>';

echo $arr3[2]  . '<br>';
echo $arr3[4]  . '<br>';
echo $arr3[10] . '<br>';

?>

<br>
<hr>
<h1 class="tred">АССОЦИАТИВНЫЕ МАССИВЫ</h1>

<?php
$goods = [ // ассоциативный массив товаров
    [
        'title' => 'Nokia',
        'price' => 100,
        'decription' => 'Description1'
    ],
    [
        'title' => 'iPad',
        'price' => 200,
        'decription' => 'Description2'
    ]
];
echo '<pre>';
print_r($goods);
echo '</pre>';

?>


</body>
</html>
