<?php

setcookie('test2', 'My Value2', time()+60*60*24, '/'); // кука на одни сутки и для всего домена

echo $_COOKIE['test'];
echo '<br>';
echo $_COOKIE['test2'];
