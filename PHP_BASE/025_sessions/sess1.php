<?php
session_start();              // открыть сессию (без пустой строки в начале страницы)
define('ADMIN','admin');      // константа

echo session_id();            // идетификатор сессиии

if(!empty($_POST['login'])) {
    if($_POST['login'] === ADMIN) {
        $_SESSION['admin'] = ADMIN;            // присвоить сессионую пременную = константе ADMIN
        $_SESSION['res']='Вы успешно вошли';   // сессионное сообщение
    }else {
        $_SESSION['res'] = 'Неверный логин';
    }
    header("Location: sess1.php");       // редирект для перезагрузки страницы
    die;                                       // завершить выполнение скрипта
}

//$_SESSION['name'] = 'Сергей';
//$_SESSION['login'] = 'sgiman';
//echo $_SESSION['name'];
//unset($_SESSION['name']);       // удалить переменную из сессии
//var_dump($_SESSION);            // распечатать дамп
//session_unset();                // удалить все преременные сессии
//echo '<br>';
//var_dump($_SESSION);
// session_destroy();             // удалить всю сессию (вместе с файлом сессии)

?>

<ul>
    <li><a href="sess1.php">Sess1</a></li>
    <li><a href="sess2.php">Sess2</a></li>
    <li><a href="secret.php">Secret</a></li>
</ul>

<hr>

<?php
    if(isset($_SESSION['res'])) {
        echo $_SESSION['res'];      // вывести сообщение об успешном входе
        unset($_SESSION['res']);    // и сразу же удалить сообщение из сессии
    }
?>

<form action="" method="post">
    <input type="text" name="login">
    <button type="submit">Login</button>
</form>
