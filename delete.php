<?php
require_once 'lib/db_connect.php';
session_start();
/**

 */
$id = $_GET['id'];
if (!empty($id)) {
    $query = "DELETE FROM posts WHERE id=$id";
    $result = mysqli_query($connect, $query);
    if (!$result) {
        print_r(mysqli_error_list($connect));
    } else {
        $_SESSION['message'] = "Ваш пост УДАЛЕН!";
        return header('Location:/');
    }
}else{
    $_SESSION['message'] = "Введите корректный id";
    return header('Location:/');
}