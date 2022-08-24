<?php error_reporting(E_ALL & ~E_NOTICE & ~E_WARNING); ?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	
	<p>Lorem ipsum dolor sit amet.</p>

	<?php include_once 'inc/inc.php' ?>
	<?php include_once 'inc/inc.php' ?>
	<?php print_r($names) ?>

	<p>Lorem ipsum dolor sit amet.</p>

</body>
</html>