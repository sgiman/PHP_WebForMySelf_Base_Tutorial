<?php error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET, POST</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<h1 class="tred">GET, POST</h1>
<!-- GET -->
<!--====================================================================================================================
<h2 class="tblue tbold">GET</h2>
<form method="get">
    <p>
        <input type="text" name="name">
    </p>
    <p>
        <input type="text" name="test">
    </p>
    <p>
        <button type="submit"><span class="tblue tbold">Send</span></button>
    </p>
</form>
=====================================================================================================================-->
<hr>

<?php
if(isset($_POST['send'])){
    echo 'POST:'.'<pre>';
    print_r($_POST);
    echo '</pre>';
}

if(isset($_GET['send'])){
    echo 'GET SEND:'.'<pre>';
    print_r($_GET);
    echo '</pre>';
}

if(!empty($_GET)){
    echo 'GET LINK:'.'<pre>';
    print_r($_GET);
    echo '</pre>';
}


?>

<!-- POST -->
<h2 class="tblue tbold">POST</h2>
<!-- Отправка дынных на страницу action.php -->
<!-- По умолчнию отправка данных на текущую страницу -->
<!--<form method="post" action="action.php">-->

<!--====================================================================================================================
Тернарный оператор:
<?php
// условие ? да : нет
?>
=====================================================================================================================-->
<!-- статическая ссылками с параметрами -->
<a href="index23.php?firstname=Петя;&amp;test=123&amp;subject=TEST">link</a>

<br>
<br>

<hr>
<p>Введённое имя: <?php if(isset($_POST['firstname'])) echo('<b>' . $_POST['firstname'] . '</b>'); else echo 'форма не отправлена (имя)'; ?></p>
<p>Введённое фамилия: <?php if(isset($_POST['secondname'])) echo('<b>' . $_POST['secondname'] . '</b>'); else echo 'форма не отправлена (фамилия)'; ?></p>

<p class="tred">Введённый тескт1: <?php if(!empty($_POST['text'])) echo('<br>' . nl2br('<span class="tblue tbold">'.$_POST['text'].'</span>')); else echo 'форма не отправлена (текст)'; ?></p>
<p class="tred">Введённый тескт2: <?php echo !empty($_POST['text']) ? '<br>' . nl2br('<span class="tblue tbold">'.$_POST['text'].'</span>') : 'форма не отправлена (текст)'; ?></p>
<p><?php if(isset($_POST['remember']) && $_POST['remember'] == 'on') echo 'Чекбокс отмечен'; ?> </p>


<hr>

</body>
</html>

