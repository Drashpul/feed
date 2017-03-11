<?php
/**
 * Created by PhpStorm.
 * User: user
 * Date: 11.03.17
 * Time: 14:51
 */
//var_dump($_POST);
require_once '../lib/flash_messages.php';


if(empty ($_POST['login']) || empty($_POST['password'])) {
    set_flash_message('message', 'Вы должны заполнить все поля!');
    return header('location:/login');
}
    $user_info = get_user_info();
    $login =$_POST['login'];
    $password =$_POST['password'];

if($user_info['password'] == $password &&
    $user_info['login'] == $login) {
    $_SESSION['auth_user'] = true;
    set_flash_message('message', 'Спасибо за вход!');
    return header('location:/login');
}else{
    set_flash_message('message', 'Ошибка логина или пароля!');
    return header('location:/login');

}