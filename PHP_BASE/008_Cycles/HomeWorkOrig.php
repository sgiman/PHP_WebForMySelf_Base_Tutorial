<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
	
<?php

/*$i = 1;
while($i <= 10){
	echo $i . '<br>';
	$i++; // $i = $i + 1; $i += 1;
}*/

$i = 1;
echo "<table border=\"1\">\n";
while($i <= 15){
	echo "\t<tr>\n";
	$n = 1;
	while($n <= 5){
		echo "\t\t<td>Row $i | Col - $n</td>\n";
		$n++;
	}
	echo "\t</tr>\n";
	$i++;
}
echo '</table>';


/* $year = 1900;
echo '<select>' . "\n";
	while($year <= 2015){
		echo "\t<option value='$year'>$year</option>\n";
		$year++;
	}
echo '</select>';*/

/*$i = 11;
while($i <= 10){
	echo $i++ . '<br>';
}

$i = 10;
do{
	echo $i++ . '<br>';
}while($i <= 10);
*/

?>

</body>
</html>