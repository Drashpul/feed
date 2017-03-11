<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 22.02.17
 * Time: 21:49
 */
echo '-----------------.<br>';
$connect = mysqli_connect('localhost', 'root', 'student');
if (!$connect) {
    die('ошибка подключения :'. mysqli_connect_error($connect));
}

mysqli_select_db($connect, 'feed');

// $query = mysqli_query($connect, "SELECT * FROM posts WHERE id IN (1, 4)");
//$rows = mysqli_fetch_object($query);// Построчный возврат рез-та как объект

//    echo $rows->$id;  // обращение как к объекту

$query = mysqli_query($connect, "SELECT * FROM posts");
while ($posts = mysqli_fetch_object($query)) {

    echo '<pre>';
    var_dump($posts);
    echo '</pre>';
}
echo '==============================================';
require_once 'lib/db_connect.php';
?>
<html>
<head>
    <link> rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css"
</head>
<body>
<table class='table'>
    <thead>
    <th>ID</th>
    <th>Заголовок</th>
    <th>ОПИСАНИЕ</th>
    <th>Ссылка</th>
    </thead>
    <tbody>


    $query = mysqli_query($connect, "SELECT * FROM posts");
    while ($posts = mysqli_fetch_object($query)) {
    echo '<tr>';
        //        var_dump($posts);
        echo '<tr>';
        echo '<td>', $post->id, '</td>';
        echo '<td>', $post->title, '</td>';
        echo '<td>', $post->description, '</td>';
        echo '<td>', '<a href="/show.php?id=post->">Читать...</a>a>,'
            echo '</tr>';
    }
    ?>

    <tr>
        <td></td>
        <td></td>
        <td></td>
    </tr>
    </tbody>
</table>
</body>
</html>
// **************************2************************
?php

//echo '-----------------.<br>';
include_once 'lib/db_connect.php';

//echo '<pre>';
//var_dump($posts);
//echo '</pre>';


//$query = mysqli_query($connect, "SELECT * FROM posts WHERE id=2");
$query = mysqli_query($connect, "SELECT * FROM posts");
while ($post = mysqli_fetch_object($query)) {
echo $rows->id . '<br>';
echo '-----------------.<br>';
echo '<pre>';
    var_dump($post);
    echo '</pre>';
}


//    echo $rows->$id;  // обращение как к объекту


