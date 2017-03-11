<?php

//echo '-----------------.<br>';
//include_once 'lib/db_connect.php';

//echo '<pre>';
//var_dump($posts);
//echo '</pre>';

ini_set ('display error', 1);
$connect = mysqli_connect('localhost', 'root', 'student');

if (!$connect) {
    die  ('ошибка подключения :'. mysqli_connect_error($connect));
}

mysqli_select_db($connect, 'feed');


$query = mysqli_query($connect, "SELECT * FROM posts");
$rows = mysqli_fetch_object($query);            // Построчный возврат рез-та как объект
echo $rows->id . '<br>';
echo '-----------------.<br>';
echo '<pre>';
var_dump($rows);
echo '-----------------.<br>';
var_dump($connect);   // с этим не понятка - ремарка
echo '</pre>';