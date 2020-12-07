<?php

include_once 'src/db_connect.php';
include_once 'src/db_function.php';

//Получаем id пользователя если он установлен
if (isset($_GET['id']) && !empty($_GET['id'])) {
    $id = trim($_GET['id']);
} else {
    header('Location: /task_8.php');
}