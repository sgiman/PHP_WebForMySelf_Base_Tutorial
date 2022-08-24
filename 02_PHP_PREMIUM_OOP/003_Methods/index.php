<?php
error_reporting(-1);
require_once 'classes/Car.php';

function debug($data){
    echo '<pre>' . print_r($data,1) . '</pre>';
}

$car1 = new Car();
$car1->color = 'черный';
$car1->brand = 'volvo';

$car2 = new Car();
$car2->color = 'черный';
$car2->brand = 'bmw';

echo $car1->getCarInfo();
echo $car2->getCarInfo();
