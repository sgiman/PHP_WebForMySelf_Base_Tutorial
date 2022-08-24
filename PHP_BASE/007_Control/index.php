<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>УПРАВЛЯЮЩИЕ КОНСТРУКЦИИ</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">УПРАВЛЯЮЩИЕ КОНСТРУКЦИИ</h1>

<?php

/* > - больше
 * < - меньше
 * >= - больше или равно
 * <= - меньше или равно
 * != - не ровно
 * == - равно
 */

$var = false;
var_dump($var);
echo '<br>';

var_dump((bool) 0); // явное приведение false к bool
echo '<br>';

var_dump((bool) ''); // явное приведение false к bool пустрой строки
echo '<br>';

//$light = 'green';
$light = 'red';
if ($light == 'green') {
    echo 'We may go';
}
echo '<br><br>';

var_dump(5 > 3);
if (5 > 3) {
    echo 'OK';
}
echo '<br><br>';

if (5 != 3) echo 'OK'; // без скобок для одной инструкции
echo '<br><br>';

if (5 != 2) {
    echo 'OK'; // для блока инструкций
    echo '<p>TEST TEXT</p>';
}
echo '<br><br>';

//$light = 'red';
$light = 'green';
//$light = 'yellow';
if ($light == 'green') {
    if (5 > 3 ) {
        echo '5 > 3';
        echo '<br>';
    }
    echo 'We may go';
} elseif ($light == 'yellow') {
    echo 'We may ready';
} else {
    echo 'We must stop';
}

?>

</body>
</html>