<?php
include_once 'includes.php';

delete_user($pdo, $id);
header('Location: /task_8.php');
exit;