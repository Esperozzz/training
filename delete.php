<?php
include_once 'src/db_connect.php';
include_once 'src/db_function.php';

$id = trim($_GET['id']);

delete_user($pdo, $id);

header('Location: /task_8.php');
exit;