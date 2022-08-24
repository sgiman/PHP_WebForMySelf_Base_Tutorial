<?php

// c параметрами по умолчанию
function sum($a = 0 ,$b = 0){
    //$a = 100;
    echo $a + $b;
    echo '<br>';
}

// функция с параметром по ссылке
function suma(&$a, $b){
    echo $a + $b;
    echo '<br>';
    $a = 100;
}

// функция с return
function sumr($a, $b){
    //$c = $a + $b;
    return $a + $b;
}

// аналог count
function my_array_keys($arr){
    $data = []; // массив ключей
    foreach($arr as $k => $v){ // цикл по ключам
       $data[] = $k; // добавить кляч в массив
    }
    return $data;
}
