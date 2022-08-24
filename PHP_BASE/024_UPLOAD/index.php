<?php
error_reporting(-1);
header('Content-Type: text/html; charset=utf-8');

// распечатать массив $_POST
if(isset($_POST['send'])){
    echo 'POST:'.'<pre>';
    print_r($_POST);
    echo '</pre>';
}

// распечатать массив $_SERVER
/*
echo 'SERVER:'.'<pre>';
print_r($_SERVER);
echo '</pre>';
*/

echo '<span class="tblue tbold">PHP_SELF: </span>' . $_SERVER['PHP_SELF'] . '<br>';
echo '<span  class="tblue tbold">SERVER_NAME:</span> ' . $_SERVER['SERVER_NAME'] . '<br>';
echo '<span  class="tblue tbold">QUERY_STRING:</span> ' . $_SERVER['QUERY_STRING'] . '<br>';
echo '<span  class="tblue tbold">HTTP_HOST:</span> ' . $_SERVER['HTTP_HOST'] . '<br>';

if(!empty($_SERVER['HTTP_HOST'])) {
    echo '<span  class="tblue tbold">HTTP_REFERER:</span> ' . $_SERVER['HTTP_REFERER'] . '<br>';
}

echo '<span  class="tblue tbold">REMOTE_ADDR:</span> ' . $_SERVER['REMOTE_ADDR'] . '<br>';


// распечатать массив $_FILES
if(!empty($_FILES)){
    echo 'FILES:'.'<pre>';
    print_r($_FILES);
    echo '</pre>';
    move_uploaded_file($_FILES['file']['tmp_name'], 'upload/' . $_FILES['file']['name']); // переместить загруженный файл
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>GET, POST</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css">
</head>

<body>
<h1 class="tred">UPLOAD</h1>

<form method="post" action="" enctype="multipart/form-data">

    <p><label>Name:</label></p>
    <p>
        <input type="text" name="name">
    </p>

    <p><label>Message:</label></p>
    <p>
        <textarea type="text" name="text"></textarea>
    </p>

    <p><label>File:</label></p>
    <p>
        <input type="file" name="file">
    </p>

    <p>
        <button type="submit" name="send" value="btn_send"><span class="tblue tbold">Send</span></button>
    </p>

</form>

<hr>

</body>
</html>