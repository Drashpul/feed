<?php
/**

 */
ini_set('display_errors', 1);
$connect = mysqli_connect('localhost', 'root', 'student');
if(!$connect){
    die('Ошибка подключения: '. mysqli_connect_error($connect));
}
mysqli_select_db($connect, 'feed');
