<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>FUNCTIONS</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>

<h1 class="tred">FUNCTIONS</h1>

<?php

require_once 'funcs.php';

echo '<hr>';

$nums = [1,2,3];
$names = ['Ivanov', 'Petrov'];  // нумерованный массив
$names2 = ['Ivan'=>'Ivanov', 'Petr'=>'Petrov']; // ассоциативный массив
$test = []; // пустой массив

echo count($nums) . '<br>';
echo count($names) . '<br>';

$keys = array_keys($nums);  // ориг. ф-я
print_r($keys);

echo '<br>';

$keys2 = my_array_keys($nums); // my function
print_r($keys2);

echo '<br>';

$keys3 = my_array_keys($names2);
print_r($keys3);

echo '<br>';

$keys4 = my_array_keys($test);
print_r($keys4);

//----------------------------------------------------------------------------------------------------------------------

echo '<hr>';
echo '<h2 class="tblue tbold">SUM</h2>';

//$a =200;
$x = 100;
$y = 10;

sum(5,7);
sum(10, 5);
sum(5,10);
sum($x, $y);
sum();          // с параметроми по умолчанию
sum(100);    // c одним параметром

echo '<hr>';
echo '<h2 class="tblue tbold">SUMА</h2>';

$a = 5;
$b = 10;

echo $a . '<br>';            // до фукции с сылкой на эту переменную $a = 5
suma($a, $b);            // сумма = 15
echo $a . '<br>';           // после фукцции с сылкой на переменную $a = 100

$res= sumr(5, 3);      // c return
echo $res;
echo '<hr>';

?>

</body>
</html>

