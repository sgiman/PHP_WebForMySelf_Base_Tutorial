<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Функции массивов</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<?php
/*----------------------------------------------------------------------------------------------------------------------
count — Подсчитывает количество элементов массива или чего-либо в объекте
sizeof — Псевдоним count
------------------------------------------------------------------------------------------------------------------------
array_diff — Вычислить расхождение массивов
array_intersect — Вычисляет схождение массивов
array_key_exists — Проверяет, присутствует ли в массиве указанный ключ или индекс
array_keys — Возвращает все или некоторое подмножество ключей массива
array_values — Выбирает все значения массива
array_merge — Сливает один или большее количество массивов
array_rand — Выбирает один или несколько случайных ключей из массива
array_reverse — Возвращает массив с элементами в обратном порядке
compact — Создает массив, содержащий названия переменных и их значения
extract — Импортирует переменные из массива в текущую таблицу символов
key — Выбирает ключ из массива
------------------------------------------------------------------------------------------------------------------------
asort — Сортирует массив, сохраняя ключи
arsort — Сортирует массив в обратном порядке, сохраняя ключи
sort — Сортирует массив
rsort — Сортирует массив в обратном порядке
ksort — Сортирует массив по ключам
krsort — Сортирует массив по ключам в обратном порядке
------------------------------------------------------------------------------------------------------------------------
array_combine — Создает новый массив, используя один массив в качестве ключей, а другой для его значений
array_search — Осуществляет поиск данного значения в массиве и возвращает ключ первого найденного элемента в случае удачи
array_shift — Извлекает первый элемент массива
array_unique — Убирает повторяющиеся значения из массива
rray_unshift — Добавляет один или несколько элементов в начало массива
array_flip — Меняет местами ключи с их значениями в массиве
array_pop — Извлекает последний элемент массива
array_push — Добавляет один или несколько элементов в конец массива
in_array — Проверяет, присутствует ли в массиве значение
list — Присваивает переменным из списка значения подобно массиву
-----------------------------------------------------------------------------------------------------------------------*/
echo "<h1 class=\"tred\">МАССИВЫ</h1>";

// TODO add 1 element to array
$arr = array('Ivanov', 'Petrov', 'Sidorov');

$goods = [
    [
		'title' => 'Nokia',
		'price' => 100,
		'description' => 'Description1'
	],
	[
		'title' => 'iPad',
		'price' => 200,
		'description' => 'Description2'
	],
    [
        'title' => 'iphone',
        'price' => 500,
        'description' => 'Description3'
    ],
    [
        'title' => 'Sumsung',
        'price' => 400,
        'description' => 'Description4'
    ],
    [
        'title' => 'Xiaomi',
        'price' => 300,
        'description' => 'Description5'
    ],
];
//---------------------------------------------------------------------------------------------------------------------
echo "<pre>"; print_r($goods); echo "</pre>";
echo "<hr>";

/*echo $goods[0]['title'] . ' - ' . $goods[0]['price'];
echo '<br>';
echo $goods[1]['title'] . ' - ' . $goods[1]['price'];*/

echo "<h2 class='tblue'>Цикл вывода элементов массива</h2>";
$i = 0;
while($i < 3){
    echo $goods[$i]['title'] . ' - ' . '<span class="tred tbold">' . $goods[$i]['price'] . '</span>';
    echo '<br>';
    $i++;
}
echo "<hr>";

echo "<h2 class='tblue'>Добавление в массив</h2>";
$arr[] = 'Pupkin'; // Добавить в конец нумерованного массива
echo "<pre>"; print_r($arr); echo "</pre>";
echo "<hr>";
$arr[15] = 'Pupkin Vasia'; // Добавить для ключа/индекса=15
echo "<pre>"; print_r($arr); echo "</pre>";
echo "<hr>";
?>
//----------------------------------------------------------------------------------------------------------------------
<h1 class="tred"> Функции для работы с массивами</h1>
<?php

// count or sizeof
echo '<h2 class="tbold">count or sizeof</h2>';
echo count($arr);
echo '<br>';
echo sizeof($arr,1);
echo '<br>';
echo count($goods,1);
echo '<hr>';

// array_diff
echo '<h2 class="tbold">array_diff</h2>';
$array1 = array("a" => "green", "red", "blue", "red", 2);
$array2 = array("b" => "green", "yellow", "red");
$result = array_diff($array1, $array2);
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// array_intersect
echo '<h2 class="tbold">array_intersect</h2>';
$array1 = array("a" => "green", "red", "blue", "red", 2);
$array2 = array("b" => "green", "yellow", "red");
$result = array_intersect($array1, $array2);
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// array_key_exists
echo '<h2 class="tbold">array_key_exists</h2>';
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first', $search_array)) {
    echo "OK - Массив содержит элемент 'first'.";
}
$search_array = array('first' => 1, 'second' => 4);
if (array_key_exists('first2', $search_array)) {
    echo "OK - Массив содержит элемент 'first'.";
}else echo "<br>NO";
echo "<hr>";

// array_keys & array_values
echo '<h2 class="tbold">array_keys & array_values</h2>';

echo '<h4 class="tbold tred">KEY</h4>';
$result = array_keys($arr);
echo "<pre>"; print_r($result); echo "</pre>";
$result = array_keys($goods[0]);
echo "<pre>"; print_r($result); echo "</pre>";

echo '<h4 class="tbold tred">VALUE</h4>';
$result = array_values($arr);
echo "<pre>"; print_r($result); echo "</pre>";
$result = array_values($goods[0]);
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// array_merge
echo '<h2 class="tbold">array_merge</h2>';
$array1 = array("color" => "red", 2, 4);
$array2 = array("a", "b", "color" => "green", "shape" => "trapezoid", 4);
$result = array_merge($array1, $array2);
echo "<pre>"; print_r($result); echo "</pre>";

$result = $array1 + $array2;
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// array_rand
echo '<h2 class="tbold">array_rand</h2>';
$result = array_rand($arr);
echo "<pre>"; print_r($result); echo "</pre>";
echo '<br>';
$result = array_rand($arr,2);
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// array_reverse
echo '<h2 class="tbold">array_reverse</h2>';
$result = array_reverse($arr); // c переиндексацией
echo "<pre>"; print_r($result); echo "</pre>";
$result = array_reverse($arr, true); // c сохранёнными ключами без переиндексации
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// compact
echo '<h2 class="tbold">compact</h2>';
$city  = "San Francisco";
$state = "CA";
$event = "SIGGRAPH";
/*..........................................................
$result = [ // Именованный (сроковый, ассоциативный) массив
'city' => $city,
'state' => $state,
'event' => $event,
];
............................................................*/
$result = compact('city','state', 'event');
echo "<pre>"; print_r($result); echo "</pre>";
echo "<hr>";

// extract
echo '<h2 class="tbold">extract</h2>';
$result = [ // Именованный (сроковый, ассоциативный) массив
    'city' => 'San Francisco',
    'state' => 'CA',
    'event' => 'SIGGRAPH',
];
extract($result);
echo $city . '<br>';
echo $state . '<br>';
echo $event . '<br>';
echo "<hr><br>";

?>

</body>
</html>
