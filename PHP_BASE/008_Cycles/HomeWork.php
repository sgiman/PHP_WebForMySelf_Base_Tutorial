<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Таблица Умножения</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<h1 class="tblue">ТАБЛИЦА УМНОЖЕНИЯ</h1>

<?php
/*--------------------------------------------------------------------
 * Атрибуты таблицы

align
    Определяет выравнивание таблицы.
background
    Задает фоновый рисунок в таблице.
bgcolor
    Цвет фона таблицы.
border
    Толщина рамки в пикселах.
bordercolor
    Цвет рамки.
cellpadding
    Отступ от рамки до содержимого ячейки.
cellspacing
    Расстояние между ячейками.
cols
    Число колонок в таблице.
frame
    Сообщает браузеру, как отображать границы вокруг таблицы.
height
    Высота таблицы.
rules
    Сообщает браузеру, где отображать границы между ячейками.
summary
    Краткое описание таблицы.
width
    Ширина таблицы.
 ------------------------------------------------------------------------*/

$x = 1;
echo "<table border='1' cellpadding='5' cellspacing='5' bgcolor='#e4eef7' bordercolor='#65b5fc'>\n";
while($x < 10){
    echo "\t<tr>\n"; // Строки
    $y = 1;
    while($y < 10){ // Столбцы умножения
        echo "\t\t<td>$x * $y = ". $x * $y . "</td>\n";
        $y++;
    }
    echo "\t</tr>\n";
    $x++;
}
echo "</table>";
?>

</body>
</html>

