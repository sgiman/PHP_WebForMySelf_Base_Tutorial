<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STATIC</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">STATIC</h1>
<hr>

<?php
error_reporting(-1);
require_once 'classes\Car.php';

function debug ($data) {
    echo '<pre>' . print_r($data, true) . '</pre>';
}

$car1 = new Car('чёрный', 4, 180, 'volvo');
$car2 = new Car('белый', 4, 200, 'bmw');

echo $car1->getCarInfo();
echo $car2->getCarInfo();

//$car1->getLorem();

?>


</body>
</html>
