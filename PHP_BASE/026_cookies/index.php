<?php
//session_start();
//$_SESSION['test'] = 123;
//var_dump($_SESSION);

//setcookie('test', 'My Value', time()+3600, '/');
//setcookie('test2', 'My Value2', time()+3600, '/');

//setcookie('test', '', time() - 3600, '/');                      // удалить куку
//setcookie('test2', '', time() - 3600, '/');                     // удалить куку

//echo $_COOKIE['test'];
//echo '<br>';
//echo $_COOKIE['test2'];
//var_dump($_COOKIE);

// СЧЕТЧИК ЗАГРУЗКИ СТРАНИЦЫ   - setcookie(), $_COOKIE
isset($_COOKIE['counter']) ? setcookie('counter', ++$_COOKIE['counter'], time()+3600, '/') :
    setcookie('counter', 1, time()+3600, '/'); // создать куку на 1 час для всего домена

echo (isset($_COOKIE['counter'])) ? $_COOKIE['counter'] : 1;
