<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>DateTime</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">DateTime</h1>

<?php
/*----------------------------------------------------------------------------------------------------------------------
http://php.net/manual/ru/ref.datetime.php
------------------------------------------------------------------------------------------------------------------------
 П Р О Ц Е Д У Р Ы
Форматирует вывод системной даты/времени
string date ( string $format [, int $timestamp = time() ] )

Возвращает текущую метку системного времени Unix
int time ( void )

Возвращает временную зону, используемой по умолчанию всеми функциями даты/времени в скрипте
string date_default_timezone_get ( void )

Устанавливает временную зону по умолчанию для всех функций даты/времени в скрипте
bool date_default_timezone_set ( string $timezone_identifier )

Возвращает информацию о дате/времени
array getdate ([ int $timestamp = time() ] )

Преобразует текстовое представление даты на английском языке в метку времени Unix
int strtotime ( string $time [, int $now = time() ] )

Возвращает метку времени Unix для заданной даты
int mktime ([ int $hour = date("H") [, int $minute = date("i") [, int $second = date("s") [, int $month = date("n") [, int $day = date("j") [, int $year = date("Y") [, int $is_dst = -1 ]]]]]]] )

microtime — Возвращает текущую метку времени Unix с микросекундами

------------------------------------------------------------------------------------------------------------------------
 D A T E  T I M E  (ООП)
Псевдоним DateTime::__construct
DateTime date_create ([ string $time = "now" [, DateTimeZone $timezone = NULL ]] )

Псевдоним DateTime::add
DateTime date_add ( DateTime $object , DateInterval $interval )

Псевдоним DateTime::format
string date_format ( DateTimeInterface $object , string $format )

Псевдоним DateInterval::createFromDateString
date_interval_create_from_date_string()

Псевдоним DateTime::diff
DateInterval date_diff ( DateTimeInterface $datetime1 , DateTimeInterface $datetime2 [, bool $absolute = false ] )

----------------------------------------------------------------------------------------------------------------------*/

/* Установка локали */
setlocale(LC_ALL, 'ru_RU');
echo strftime("%A %e %B %Y", mktime(0, 0, 0, 12, 22, 1978));
echo '<br>';
$today = date("F j, Y, g:i a");                 // March 10, 2001, 5:16 pm
$today = date("m.d.y");                         // 03.10.01
$today = date("j, n, Y");                       // 10, 3, 2001
$today = date("Ymd");                           // 20010310
$today = date('h-i-s, j-m-y, it is w Day');     // 05-16-18, 10-03-01, 1631 1618 6 Satpm01
$today = date('\i\t \i\s \t\h\e jS \d\a\y.');   // it is the 10th day.
echo $today = date("D M j G:i:s T Y");               // Sat Mar 10 17:16:18 MST 2001
$today = date('H:m:s \m \i\s\ \m\o\n\t\h');     // 17:03:18 m is month
$today = date("H:i:s");                         // 17:16:18
$today = date("Y-m-d H:i:s");                   // 2001-03-10 17:16:18 (формат MySQL DATETIME)

// date - Форматирует вывод системной даты/времени
// time  - Возвращает текущую метку системного времени Unix
// date_default_timezone_get - Возвращает временную зону, используемой по умолчанию всеми функциями даты/времени в скрипте
// date_default_timezone_set - Устанавливает временную зону по умолчанию для всех функций даты/времени в скрипте
echo '<h2 class="tblue">date</h2>';

echo date_default_timezone_get() .'<br>'; // Europe/Moscow
date_default_timezone_set('Europe/Kiev');
echo date_default_timezone_get() .'<br>'; // Europe/Kiev

echo date('d-m-Y H:i:s') . '<br>'; // 01-07-2020 00:35:27
echo date('d-M-Y H:i:s') . '<br>'; // 01-Jul-2020 00:35:27

date_default_timezone_set('GMT'); // 'UTC'
echo date('Y-m-d H:i:s', 0) . '<br>'; // 1970-01-01 00:00:01 - начало эпохи UNIX
echo date('Y-m-d H:i:s', time()) . '<br>'; // текущая дата
echo date('Y-m-d H:i:s', time() + 60) . '<br>'; // текущая дата + 1 мин
echo date('Y-m-d H:i:s', time() + 60*60) . '<br>'; // текущая дата + 1 час
echo date('Y-m-d H:i:s', time() + 60*60*24) . '<br>'; // текущая дата + 1 сутки
echo '2010 - ' . date('Y'); // FOOTER

//phpinfo();

echo '<hr>';

// Возвращает информацию о дате/времени
// getdate
echo '<h2 class="tblue">getdate</h2>';
$date = getdate();
print_r($date); // [seconds]=>37 [minutes]=>38 [hours]=>22 [mday]=>30 [wday]=>2 [mon]=>6 [year]=>2020 [yday]=>181 [weekday]=>Tuesday [month]=>June [0]=>1593556717
echo '<br>';
echo $date['year'];
echo '<hr>';

// Преобразует текстовое представление даты на английском языке в метку времени Unix
// strtotime
echo '<h2 class="tblue">strtotime</h2>';

//----------------------------------------------------------------------
echo strtotime("now"), "\n";
echo strtotime("10 September 2000"), "\n";
echo strtotime("+1 day"), "\n";
echo strtotime("+1 week"), "\n";
echo strtotime("+1 week 2 days 4 hours 2 seconds"), "\n";
echo strtotime("next Thursday"), "\n";
echo strtotime("last Monday"), "\n";
//----------------------------------------------------------------------
echo '<br>';
echo strtotime("+1 day") . '<br>';
echo date('d-M-Y H:i:s') . '<br>'; // текущая дата
echo date('d-M-Y H:i:s', strtotime("+1 day 2 hours")) . '<br>'; // дата + 1 день + 2 часа
echo '<hr>';

// Возвращает метку времени Unix для заданной даты
// mktime
echo '<h2 class="tblue">mktime</h2>';

echo time();
echo '<br>';
echo mktime(date('H'), date('i')+1, date('s')+1, date('m'), date('d'), date('Y')); // добавить 1 мин и 1 сек
$t = mktime(date('H'), date('i'), date('s'), date('m'), date('d'), date('Y')+1); // добавить 1 год
echo '<br>';
echo date('d-M-Y H:i:s', $t) . '<br>'; // вывести установленную дату

echo '<hr>';

/*---------------------- DateTime ----------------------*/
// Псевдоним DateTime::__construct
// date_create
// Псевдоним DateTime::format
// date_format
// Псевдоним DateTime::add
// date_add
// Псевдоним DateInterval::createFromDateString
// date_interval_create_from_date_string()
echo '<h2 class="tred">date_create, date_format, date_add, date_interval_create_from_date_string</h2>';

//$date = date_create('2020-07-01');
$date = date_create(date('Y-m-d H:i:s')); // Объект даты
//var_dump($date);
//echo '<br>';
//print_r($date);
//echo '<br>';
echo date_format($date,'Y-m-d H:i:s');
echo '<br>';
date_add($date, date_interval_create_from_date_string('2 days + 2 hours + 10 minutes + 5 seconds')); // добавить
echo '<br>';
echo date_format($date,'Y-m-d H:i:s'); //  вывести дату в удобном формате

echo '<hr>';

// microtime — Возвращает текущую метку времени Unix с микросекундами
// используется для измерения времени загрузки сайта
echo '<h2 class="tred">microtime</h2>';

echo time() . '<br>';
echo microtime()  . '<br>'; // string
echo microtime()  . '<br>'; // flaat

$start = microtime(true);
//usleep(1000000);

$n = 10000000;
for($i = 1; $i <= $n; $i++){
    if($i == $n) echo '<p>Отчет завершён!</p>';
}

$end = microtime(true);
echo $end - $start;

echo '<hr>';


// Псевдоним DateTime::diff
// date_diff
echo '<h2 class="tblue">date_diff</h2>';
echo '<hr>';

?>

</body>
</html>

