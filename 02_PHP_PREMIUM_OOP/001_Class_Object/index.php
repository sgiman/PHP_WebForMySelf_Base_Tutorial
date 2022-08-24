<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CLASS & OBJECT</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">CLASS & OBJECT</h1>
<hr>

<?php

require_once 'classes\FisrtClass.php';

// создать объект класса (экземпляр)
$o1 = new FisrtClass(); // объект1
$o2 = new FisrtClass(); // объект2
var_dump($o1);
var_dump($o2);


?>


</body>
</html>
