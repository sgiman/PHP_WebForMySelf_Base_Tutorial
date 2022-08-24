<?php error_reporting(-1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>HELLO WORLD</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>
<body>
<h1 class="tred">HELLO WORLD</h1>

<p>Привет Мир! - html</p>
<!-- Комметарий -->

<div class="tblue">
    <?php
// Однострочный кмментарий
# Также однострочный комметарий (стиль UNIX)
/* Это
Многострочный
комметарий
*/
        echo '<p>Привет Мир 1 ! - php</p>';
        echo '<p>Hello World 2 ! - php</p>';
        echo '<p>Hello World 3! - php</p>';
        print '<p>Hello World 4! - php</p>';
    ?>
</div>

</body>
</html>


