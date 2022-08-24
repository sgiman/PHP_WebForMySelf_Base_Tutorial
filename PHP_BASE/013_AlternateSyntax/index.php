<?php error_reporting(-1);

$var = 1;

/*if( $var == 1 ){
	echo 'Variable = 1';
}elseif( $var == 2 ){
	echo 'Variable = 2';
}elseif( $var == 3 ){
	echo 'Variable = 3';
}else{
	echo 'Something else...';
}*/

/*switch($var){
	case 1:
		echo 'Variable = 1';
		break;
	case 2:
		echo 'Variable = 2';
		break;
	case 3:
		echo 'Variable = 3';
		break;
	default:
		echo 'Something else...';
}*/

$bool = true;
$str1 = 1;
$str2 = 2;
$str3 = 3;

/*var_dump($bool);
var_dump(1);*/

/*if($bool){
	echo '<table class="table" border="1">
			<tr>
				<td>' . $str1 . '</td>
				<td>' . $str2 . '</td>
				<td>' . $str3 . '</td>
			</tr>
		</table>';
}*/

$names = [
	'Ivan' => 'Ivanov',
	'Petr' => 'Petrov',
	'Sidor' => 'Sidorov',
];
/*foreach($names as $name => $surname){
	echo "Name: $name, Surname: $surname <br>";
}*/

foreach($names as $name => $surname): ?>

	Name: <?php echo $name ?>, Surname: <?php echo $surname ?> <br>

<?php
endforeach;

?>
<!-- А л ь т е р н а т и в н ы й   с и н т а к с и с -->
<?php if($bool): ?>
	<table class="table" border="1">
		<tr>
			<td><?php echo $str1 ?></td>
			<td><?php echo $str2 ?></td>
			<td><?php echo $str3 ?></td>
		</tr>
	</table>
<?php endif; ?>

<?php foreach($names as $name => $surname): ?>
	Name: <?php echo $name ?>, Surname: <?php echo $surname ?> <br>
<?php endforeach; ?>