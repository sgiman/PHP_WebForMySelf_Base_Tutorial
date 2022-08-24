<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>for</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">FOR</h1>

<?php
// TODO add 1 element to array
$arr = ['Ivanov', 'Petrov', 'Sidorov'];

// $arr[3] = 'Pupkin';
$arr[] = 'Pupkin';
$arr[] = 'Doe';
print_r($arr);

$names = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidor' => 'Sidorov',
];
// print_r($names);
/*$i = 1;
while( $i < 11 ){
	echo $i . "<br>";
	$i++;
}*/

/*for($i = 1; $i < 11; $i++){
	echo $i . "<br>";
}*/

for($i = 0; $i < count($arr); $i++ ){
	echo $arr[$i] . '<br>';
}
?>


</body>
</html>

