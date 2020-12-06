<?php

include_once 'src/db_connect.php';

$id = $_GET['id'];

$sql = "SELECT `first_name`, `last_name`, `username` FROM task8 WHERE id = {$id}";

$stmt = $pdo->query($sql);
print_r($stmt->fetchAll(PDO::FETCH_ASSOC));